# GCE Learning Hub

A comprehensive web-based learning platform for General Certificate of Education (GCE) subjects, providing interactive study guides and practice tests for students.

## 📚 Overview

This platform offers digital study materials and practice assessments for GCE students, featuring dedicated sections for Mathematics, English, and Additional Mathematics. The GCE Learning Hub provides an intuitive interface for students to access study resources and test their knowledge.

## 🚀 Features

- **Multi-subject Support**: Study guides for Math, English, and Additional Math
- **Interactive Practice Tests**: Math-focused testing modules
- **User Authentication**: Secure login and registration system
- **Responsive Design**: Mobile-friendly interface using modern CSS
- **Subject Selection**: Easy navigation between different study areas

## 📁 Project Structure

```
gce-learning-hub/
├── auth/                    # Authentication related files
├── css/                     # Stylesheets
├── images/                  # Image assets
├── includes/                # PHP include files
├── js/                      # JavaScript files
├── index.html               # Main landing page
├── login.html               # User login page
├── register.html            # User registration page
├── choose-subject.html      # Subject selection interface
├── gce-math-study-guide.html        # Mathematics study guide
├── gce-english-study-guide.html     # English study guide
├── gce-additional-math-studyguide.html # Additional Math guide
├── math.html                # Math section main page
├── math-test.html           # Math practice tests
├── php.php                  # PHP backend logic
└── README.md                # Project documentation
```

## 🛠️ Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP
- **Authentication**: Custom PHP authentication system
- **Design**: Responsive web design principles

## 🔧 Installation & Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/Arsenet7/gce-learning-hub.git
   cd gce-learning-hub
   ```

2. **Switch to the development branch**
   ```bash
   git checkout jenkins
   ```
   > **Note**: All active development is done on the `jenkins` branch. The `main` branch serves as the stable production branch.

3. **Server Requirements**
   - Web server (Apache/Nginx)
   - PHP 7.4 or higher
   - Modern web browser

4. **Local Development**
   - Place files in your web server directory (e.g., `htdocs`, `www`)
   - Ensure PHP is properly configured
   - Access via `http://localhost/gce-learning-hub`

## 📖 Usage

1. **Access the Platform**: Navigate to `index.html` to start
2. **User Registration**: Create an account via `register.html`
3. **Login**: Access your account through `login.html`
4. **Subject Selection**: Choose your study subject from the main interface
5. **Study Guides**: Access comprehensive study materials for each subject
6. **Practice Tests**: Take interactive tests to assess your knowledge

## 🎯 Available Subjects

- **Mathematics**: Comprehensive math study guide with practice tests
- **English**: Language arts study materials and resources
- **Additional Mathematics**: Advanced mathematical concepts and problems

## 🤝 Contributing

We welcome contributions to improve the GCE Learning Hub!

### Branch Structure
- **`main`**: Stable production branch (protected)
- **`jenkins`**: Active development branch (all work happens here)

### Contribution Workflow

1. Fork the repository
2. Clone your fork locally
3. Switch to the development branch:
   ```bash
   git checkout jenkins
   ```
4. Create a feature branch from `jenkins`:
   ```bash
   git checkout -b feature/AmazingFeature
   ```
5. Make your changes and commit:
   ```bash
   git commit -m 'Add some AmazingFeature'
   ```
6. Push to your fork:
   ```bash
   git push origin feature/AmazingFeature
   ```
7. Create a Pull Request targeting the `jenkins` branch

> **Important**: All pull requests should target the `jenkins` branch, not `main`. The `main` branch is reserved for stable releases.

## 📋 Development Guidelines

- Follow semantic HTML structure
- Maintain responsive design principles
- Ensure cross-browser compatibility
- Write clean, commented code
- Test thoroughly before submitting PRs

## 📜 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👥 Authors

- **Arsenet7** - *Initial work* - [@Arsenet7](https://github.com/Arsenet7)
- **DevOps Easy Learning** - *Development Branch*

## 🐛 Bug Reports & Feature Requests

Please use the [Issues](https://github.com/Arsenet7/gce-learning-hub/issues) section to report bugs or request new features.

## 📞 Support

For support and questions:
- Open an issue in the repository
- Contact the development team

## 🔄 Version History & Branch Information

### Branch Strategy
- **`main`**: Production-ready stable releases
- **`jenkins`**: Active development branch (1 commit ahead of main)

### Current Status
- All development work is conducted on the `jenkins` branch
- The `jenkins` branch contains the latest features and improvements
- Periodic merges from `jenkins` to `main` for stable releases

### Version History
- **Development Branch (jenkins)** - Current active development
  - Multi-subject study guides
  - User authentication system
  - Practice testing modules
  - Latest features and bug fixes
- **Production Branch (main)** - Stable baseline

---

**Happy Studying! 📚✨**

*Made with ❤️ for GCE students worldwide*
