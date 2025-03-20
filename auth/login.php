<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start the session
session_start();

// Include the database connection file
include '../includes/db.php';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Check if required fields are set
        if (!isset($_POST['email']) || !isset($_POST['password'])) {
            throw new Exception('All fields are required');
        }

        // Sanitize and validate input
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];

        if (empty($email) || empty($password)) {
            throw new Exception('All fields are required');
        }

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Invalid email format');
        }

        // Prepare statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
        if (!$stmt) {
            throw new Exception('Database preparation failed');
        }

        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if a user was found
        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Validate that the user's name matches the email
                if ($user['name'] !== trim($_POST['name'])) {
                    throw new Exception('Invalid credentials');
                }

                // Successful login
                session_regenerate_id(true);  // Regenerate session ID

                // Store user data in the session
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'name' => $user['name'],
                    'email' => $email
                ];

                // Redirect to the dashboard or any other page
                header("Location: ../includes/account_dashboard.php");
                exit();
            } else {
                throw new Exception('Invalid credentials');
            }
        } else {
            throw new Exception('Invalid credentials');
        }
    } catch (Exception $e) {
        // Log error (optional)
        error_log('Login error: ' . $e->getMessage());

        // Redirect back to login.html with an error message
        $error = urlencode('Invalid credentials. Please try again.');
        header("Location: ../login.html?error=$error");
        exit();
    } finally {
        // Clean up resources
        if (isset($stmt)) {
            $stmt->close();
        }
        if (isset($conn)) {
            $conn->close();
        }
    }
} else {
    // Redirect to login.html if accessed via GET or other methods
    header("Location: ../login.html");
    exit();
}
