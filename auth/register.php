<?php
// Start the session
session_start();

// Include database connection file
include '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Check if required fields are set
        if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['password'])) {
            throw new Exception('All fields are required');
        }

        // Sanitize and validate input
        $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];

        // Validate empty fields
        if (empty($name) || empty($email) || empty($password)) {
            throw new Exception('All fields are required');
        }

        // Validate name length and format
        if (strlen($name) < 2 || strlen($name) > 50) {
            throw new Exception('Name must be between 2 and 50 characters');
        }
        if (!preg_match("/^[a-zA-Z0-9\s_-]+$/", $name)) {
            throw new Exception('Name contains invalid characters');
        }

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Invalid email format');
        }

        // Validate password strength
        if (strlen($password) < 8) {
            throw new Exception('Password must be at least 8 characters long');
        }
        if (!preg_match("/[A-Z]/", $password) || 
            !preg_match("/[a-z]/", $password) || 
            !preg_match("/[0-9]/", $password)) {
            throw new Exception('Password must contain at least one uppercase letter, one lowercase letter, and one number');
        }

        // Check if email already exists
        $check_stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        if (!$check_stmt) {
            throw new Exception('Database preparation failed');
        }
        
        $check_stmt->bind_param("s", $email);
        $check_stmt->execute();
        $check_stmt->store_result();
        
        if ($check_stmt->num_rows > 0) {
            $check_stmt->close();
            throw new Exception('Email already registered');
        }
        $check_stmt->close();

        // Hash the password with strong options
        $hashed_password = password_hash($password, PASSWORD_DEFAULT, [
            'cost' => 12 // Adjust based on your server's capabilities
        ]);

        // Prepare statement for insertion
        $stmt = $conn->prepare("INSERT INTO users (name, email, password, created_at) VALUES (?, ?, ?, NOW())");
        if (!$stmt) {
            throw new Exception('Database preparation failed');
        }

        $stmt->bind_param("sss", $name, $email, $hashed_password);

        // Execute and check for success
        if (!$stmt->execute()) {
            throw new Exception('Registration failed: ' . $stmt->error);
        }

        // Registration successful
        $_SESSION['registration_success'] = true;
        header("Location: ../login.html?success=" . urlencode('Registration successful. Please log in.'));
        exit();

    } catch (Exception $e) {
        // Log error (implement proper error logging)
        error_log('Registration error: ' . $e->getMessage());
        
        // Redirect with error message
        $error = urlencode($e->getMessage());
        header("Location: ../register.html?error=$error");
        exit();

    } finally {
        // Clean up
        if (isset($stmt)) {
            $stmt->close();
        }
        if (isset($conn)) {
            $conn->close();
        }
    }
}

// If accessed directly without POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../register.html");
    exit();
}
?>