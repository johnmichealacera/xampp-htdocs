# XAMPP htdocs Projects

This repository contains a collection of web development projects developed using PHP and XAMPP. These projects demonstrate various web development concepts and technologies.

## 🚀 Projects Overview

### 1. Countdown Timer
**Location**: `/Countdown_timer/`

A web application for creating and managing event countdowns. Users can input event details (name, date, time) and the application displays the upcoming events.

**Features**:
- Event creation form with validation
- Bootstrap 4.4.1 for responsive design
- PHP backend processing
- Real-time event display

**Technologies Used**:
- PHP
- HTML5
- Bootstrap 4.4.1
- CSS

### 2. JMAnnApp (Book Management System)
**Location**: `/JMAnnApp/`

A comprehensive book management application with user authentication and book catalog features.

**Features**:
- User registration and login system
- Book information management
- Author management
- Image upload functionality
- Super admin dashboard
- User profile management
- Responsive design with custom CSS

**Technologies Used**:
- PHP
- HTML5
- CSS3
- JavaScript
- MySQL (implied from database operations)

**Key Files**:
- `index.php` - Main landing page with login/signup
- `login.php` - User authentication
- `createAccount.php` - User registration
- `superDashboard.php` - Admin dashboard
- `addBook.php` / `addBookDB.php` - Book management
- `addAuthor.php` - Author management
- `viewBookInfo.php` - Book catalog display
- `uploadImage.php` - Image upload functionality

### 3. SocialMedia
**Location**: `/SocialMedia/`

Currently an empty directory, reserved for future social media application development.

## 🛠️ Setup Instructions

### Prerequisites
- XAMPP installed on your system
- Web browser (Chrome, Firefox, Safari, etc.)

### Installation Steps

1. **Clone or download this repository**
   ```bash
   git clone <repository-url>
   ```

2. **Move the project folder to XAMPP htdocs directory**
   ```bash
   # On Windows
   C:\xampp\htdocs\
   
   # On Linux/Mac
   /opt/lampp/htdocs/
   ```

3. **Start XAMPP services**
   - Start Apache and MySQL services from XAMPP Control Panel

4. **Access the projects**
   - Countdown Timer: `http://localhost/xampp-htdocs/Countdown_timer/`
   - JMAnnApp: `http://localhost/xampp-htdocs/JMAnnApp/`

## 📁 Project Structure

```
xampp-htdocs/
├── Countdown_timer/
│   ├── bootstrap-4.4.1-dist/
│   └── index.php
├── JMAnnApp/
│   ├── images/
│   ├── *.php files
│   ├── *.html files
│   ├── *.css files
│   └── *.js files
├── SocialMedia/
│   └── (empty - reserved for future development)
└── README.md
```

## 🎯 Development Notes

- All projects are designed to run on XAMPP's Apache server
- PHP projects require proper database setup (MySQL)
- Ensure proper file permissions for upload functionality
- Projects use responsive design principles

## 🔧 Troubleshooting

### Common Issues

1. **Apache won't start**
   - Check if port 80 is already in use
   - Run XAMPP as administrator (Windows)

2. **Database connection errors**
   - Ensure MySQL service is running in XAMPP
   - Check database credentials in PHP files

3. **File upload issues**
   - Verify directory permissions
   - Check PHP upload limits in php.ini

## 📝 Future Enhancements

- [ ] Complete SocialMedia application
- [ ] Add database schema documentation
- [ ] Implement proper error handling
- [ ] Add unit tests
- [ ] Enhance security features

## 🤝 Contributing

This is a personal exploration project repository. Feel free to fork and modify for your own learning purposes.

## 📄 License

This project is for educational and exploration purposes.

---

**Note**: These projects are part of a learning journey in web development. They may contain experimental features and should be used for educational purposes.
