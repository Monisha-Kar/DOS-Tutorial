# DOS Tutorial

A web-based tutorial platform designed to help students learn **Disk Operating System (DOS)** concepts and commands through a structured, chapter-wise interface.

## About the Project

DOS Tutorial is an educational website developed using PHP, MySQL, HTML, CSS, Bootstrap, JavaScript, jQuery, and AJAX.

The platform organizes DOS learning materials into different chapters, making it easier for students to navigate through topics and follow their learning progress.

## Features

- **Chapter-wise Navigation:** Browse different DOS topics through a structured sidebar.
- **Dynamic Chapter Loading:** Chapter information is fetched from a MySQL database using PHP.
- **Learning Progress Indicator:** Displays the current chapter position and overall progress.
- **Previous and Next Navigation:** Move between chapters easily.
- **Responsive Interface:** Uses Bootstrap for a clean and user-friendly layout.
- **AJAX Integration:** Loads chapter navigation and progress information without refreshing the entire page.

## Technologies Used

| Category | Technologies |
|---|---|
| Frontend | HTML, CSS, Bootstrap |
| Programming | PHP, JavaScript |
| Database | MySQL |
| Libraries | jQuery |
| Asynchronous Requests | AJAX |

## Project Structure

```text
DOS-Tutorial/
│
├── css/
│   ├── bootstrap.css
│   ├── base.css
│   └── tutorial.css
│
├── databases/
│   └── dos_tutorial.sql
│
├── fonts/
├── imgs/
├── js/
│
├── connection.example.php
├── fetch_chapters.php
├── fetch_progress.php
│
├── Introduction.php
├── DOSCommands.php
├── InternalCommands.php
│
└── README.md
```

*Note: Additional chapter files may be added as the project develops.*

## Getting Started

Follow these steps to run the project locally.

### 1. Requirements

- XAMPP or another PHP development environment
- PHP
- MySQL
- A web browser

### 2. Clone the Repository

```bash
git clone https://github.com/Monisha-Kar/DOS-Tutorial.git
```

Alternatively, download the repository as a ZIP file.

### 3. Set Up the Project

- Place the project folder inside the `htdocs` directory of XAMPP.
- Start Apache and MySQL from the XAMPP Control Panel.

### 4. Set Up the Database

- Open phpMyAdmin.
- Create a database named `dos_tutorial`.
- Import the `dos_tutorial.sql` file from the `databases` folder.

### 5. Configure the Database Connection

- Make a copy of `connection.example.php`.
- Rename the copied file to `connection.php`.
- Update the database credentials according to your local MySQL configuration.

### 6. Run the Project

Open the following URL in your browser:

```text
http://localhost/DOS-Tutorial/Introduction.php
```

## Future Improvements

- Add detailed explanations and examples for each DOS command.
- Expand the chapter-wise learning materials.
- Improve the learning experience with additional interactive features.

## Author

**Monisha Kar**

GitHub: [Monisha-Kar](https://github.com/Monisha-Kar)

---

*This project is developed as an educational resource for learning DOS concepts and commands.*
