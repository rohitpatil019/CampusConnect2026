CampusConnect 2026 – Student Event Registration Portal

📌 Project Overview

CampusConnect 2026 is a web-based Student Event Registration Portal developed to allow students to register for college events and securely log in to the system.

The project is developed using HTML, PHP and MariaDB/MySQL and deployed on an AWS EC2 Amazon Linux server using Apache (httpd).

The application provides a simple flow:

Student Registration → Database → Login → Authentication → Welcome Page → Logout

---

🎯 Project Objectives

- To develop a simple student event registration portal.
- To store student registration details in a database.
- To provide secure login functionality.
- To validate user credentials during login.
- To deploy the web application on AWS EC2.
- To understand the integration of Apache, PHP and MariaDB.
- To use Git and GitHub for project version control.

---

🚀 Features

1. Student Registration

Students can register by providing:

- Full Name
- Student ID
- Email
- College Name
- Location
- Event
- Password

The registration information is stored in the MariaDB/MySQL database.

2. Student Login

Students can log in using:

- Email / Student ID
- Password

The system verifies the credentials against the database.

3. Authentication

If valid credentials are entered, the student is successfully authenticated and redirected to the welcome page.

4. Invalid Login Handling

If incorrect credentials are entered, the system displays:

"Invalid username or password."

5. Welcome Page

After successful login, the user is redirected to:

"Welcome to CampusConnect!"

6. Logout

The logout functionality terminates the user session and allows the user to leave the application securely.

---

🏗️ System Architecture

                    ┌──────────────────────┐
                    │       Student        │
                    └──────────┬───────────┘
                               │
                               ▼
                    ┌──────────────────────┐
                    │   Web Browser        │
                    └──────────┬───────────┘
                               │ HTTP
                               ▼
                    ┌──────────────────────┐
                    │     AWS EC2          │
                    │    Amazon Linux       │
                    └──────────┬───────────┘
                               │
                               ▼
                    ┌──────────────────────┐
                    │   Apache / httpd     │
                    │     Web Server       │
                    └──────────┬───────────┘
                               │
                               ▼
                    ┌──────────────────────┐
                    │        PHP           │
                    │   Application Layer  │
                    └──────────┬───────────┘
                               │
                               ▼
                    ┌──────────────────────┐
                    │    MariaDB / MySQL   │
                    │      Database        │
                    └──────────────────────┘

---

🔄 Application Flow

                  CampusConnect 2026
                         │
                         ▼
                  Registration Page
                         │
                         ▼
                  Student Details
                         │
                         ▼
                  MariaDB Database
                         │
                         ▼
                     Login Page
                         │
                  ┌──────┴──────┐
                  │             │
             Valid Login    Invalid Login
                  │             │
                  ▼             ▼
          Welcome Page    "Invalid username
                  │          or password."
                  ▼
                Logout

---

🛠️ Technologies Used

Technology| Purpose
HTML| Frontend structure
PHP| Backend/application logic
MariaDB/MySQL| Database management
Apache/httpd| Web server
AWS EC2| Cloud server
Amazon Linux| Server operating system
Git| Version control
GitHub| Source code repository

---

📁 Project Structure

campusconnect/
│
├── index.html
├── register.php
├── login.php
├── logout.php
├── welcome.php
├── test.php
├── db.php
├── .gitignore
└── README.md

File Description

File| Description
"index.html"| Main/home page
"register.php"| Student registration form and processing
"login.php"| Student login and authentication
"logout.php"| Logout/session termination
"welcome.php"| Welcome page after successful login
"test.php"| PHP/web server testing
"db.php"| Database connection
".gitignore"| Prevents sensitive files such as "db.php" from being uploaded
"README.md"| Project documentation

---

🗄️ Database

The application uses MariaDB/MySQL for storing student registration information.

Database Name

campusconnect

Main Data

The database stores student information such as:

Full Name
Student ID
Email
College Name
Location
Event
Password

Database Flow

Registration Form
       │
       ▼
    PHP Code
       │
       ▼
MariaDB/MySQL
       │
       ▼
Student Record
       │
       ▼
Login Verification

---

☁️ AWS Deployment

The CampusConnect application was deployed on an AWS EC2 instance running Amazon Linux.

Deployment Components

AWS
│
└── EC2 Instance
    │
    ├── Amazon Linux
    │
    ├── Apache / httpd
    │
    ├── PHP / PHP-FPM
    │
    └── MariaDB

Project Location

/var/www/html/campusconnect

Application URL

http://YOUR-EC2-PUBLIC-IP/campusconnect/

---

⚙️ Deployment Steps

Step 1 – Create AWS EC2 Instance

An EC2 instance was created using Amazon Linux.

The instance provides the cloud server required to host the application.

---

Step 2 – Connect to EC2

The server was accessed using SSH with the EC2 user.

ssh -i key.pem ec2-user@YOUR-EC2-PUBLIC-IP

---

Step 3 – Install Required Software

The required web server, PHP and database components were installed on the EC2 instance.

Main components:

Apache/httpd
PHP
PHP-FPM
MariaDB

---

Step 4 – Start Services

Apache:

sudo systemctl start httpd
sudo systemctl enable httpd

MariaDB:

sudo systemctl start mariadb
sudo systemctl enable mariadb

PHP-FPM:

sudo systemctl start php-fpm
sudo systemctl enable php-fpm

---

Step 5 – Create Project Directory

The application was placed inside the Apache document root:

/var/www/html/campusconnect

---

Step 6 – Database Configuration

The MariaDB database was configured for the CampusConnect application.

Database:

campusconnect

The PHP application connects to the database through:

db.php

---

Step 7 – Test PHP

A simple PHP test page was used to verify that PHP was working correctly.

/campusconnect/test.php

---

Step 8 – Test Registration

The registration page was tested using:

http://YOUR-EC2-PUBLIC-IP/campusconnect/register.php

Student information was submitted and stored in the database.

---

Step 9 – Test Login

The login page was tested using:

http://YOUR-EC2-PUBLIC-IP/campusconnect/login.php

Valid credentials successfully redirected the student to the welcome page.

---

🔐 Security

The project uses a ".gitignore" file to prevent sensitive database configuration from being uploaded to GitHub.

db.php

is excluded from the Git repository because it contains database connection credentials.

«Note: Using the database "root" account for a PHP web application is acceptable for a learning/assignment environment, but a dedicated database user with limited permissions is recommended for production.»

---

🧪 Testing

The following test cases were performed:

Test Case| Expected Result
Open homepage| CampusConnect page loads
Open registration| Registration form loads
Submit valid registration| Student data stored in database
Open login| Login form loads
Enter valid credentials| Welcome page displayed
Enter invalid credentials| Invalid username/password message
Logout| User session terminated
Open PHP test page| PHP executes successfully

---

📸 Screenshots

Add your project screenshots below.

1. AWS EC2 Instance

"EC2 Instance" (screenshots/ec2-instance.png)

2. CampusConnect Homepage

"Homepage" (screenshots/homepage.png)

3. Student Registration

"Registration" (screenshots/registration.png)

4. Successful Registration

"Registration Success" (screenshots/registration-success.png)

5. Database Record

"Database" (screenshots/database.png)

6. Login Page

"Login" (screenshots/login.png)

7. Successful Login

"Welcome" (screenshots/welcome.png)

8. Invalid Login

"Invalid Login" (screenshots/invalid-login.png)

9. Logout

"Logout" (screenshots/logout.png)

10. GitHub Repository

"GitHub" (screenshots/github.png)

«Replace the screenshot filenames with your actual screenshot filenames.»

---

📂 Git & GitHub

Git was used for version control and GitHub was used to store the project source code.

Initialize Git

git init

Set Git Username

git config --global user.name "Rohit Pradip Patil"

Set Git Email

git config --global user.email "rohitppatil5151@gmail.com"

Create Main Branch

git branch -M main

Add Files

git add .

Commit

git commit -m "Add CampusConnect 2026 student registration and login portal"

Add GitHub Repository

git remote add origin https://github.com/rohitpatil019/CampusConnect2026.git

Push Code

git push -u origin main

---

🌐 GitHub Repository

Repository:
https://github.com/rohitpatil019/CampusConnect2026

---

🔮 Future Enhancements

The project can be enhanced with:

- Student dashboard
- Event listing and event selection
- Admin dashboard
- Event management
- Student profile management
- Password hashing and stronger authentication
- Email confirmation
- Password reset functionality
- Registration confirmation
- Event capacity management
- Search and filtering
- Better UI/UX
- HTTPS/SSL configuration
- Dedicated database user with limited privileges

---

📚 Learning Outcomes

Through this project, I learned:

- Basic web application development using PHP
- HTML form handling
- PHP and MariaDB integration
- User registration and authentication
- Apache/httpd configuration and deployment
- AWS EC2 server deployment
- Linux server administration
- Service management using "systemctl"
- Database management using MariaDB
- Git version control
- GitHub repository management
- Basic troubleshooting of HTTP, PHP and database errors

---

👨‍💻 Author

Rohit Pradip Patil

GitHub:
https://github.com/rohitpatil019

---

✅ Conclusion

CampusConnect 2026 is a basic student event registration and login portal that demonstrates the complete deployment of a PHP-based web application on AWS.

The project integrates:

HTML + PHP + MariaDB + Apache + Amazon Linux + AWS EC2 + Git + GitHub

The application successfully provides student registration, database storage, login authentication, welcome page access and logout functionality.
