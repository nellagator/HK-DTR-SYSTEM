# HELP ISKO: HK DTR System 

A **Daily Time Record (DTR)** web-based prototype designed for students, teachers, and administrators.  
It records time-in and time-out logs efficiently while helping validate attendance during on-site duties.

## -> Description
The **HK-DTR System** aims to streamline attendance management for schools or training institutions.  
Students can log their attendance through the system, while teachers and admins can verify and manage records in real-time.  

This project was developed as a prototype to explore digital attendance validation methods and reduce manual record errors.

## -> Features
-  Student, Teacher, and Admin user roles  
-  Time In / Time Out recording  
-  Attendance history tracking   
-  Login authentication
-  Prevention measures for fake attendance (validation ideas like location-based login)


## -> Installation

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) (Apache + MySQL + PHP)
- Web browser (Chrome, Edge, Brave, etc.)
- Git (optional, for cloning)

### Steps
```
# 1. Clone the repository
git clone https://github.com/yourusername/HK-DTR-SYSTEM.git
or download the htdocs FILE called (HKTESTING) and the (hk_dtr_system.sql) file

# 2. Move project folder to htdocs
C:\xampp\htdocs\HK-DTR-SYSTEM

# 3. Start Apache and MySQL in XAMPP Control Panel

# 4. Import the database
# Open phpMyAdmin and import hk_dtr_system.sql

# 5. Open in browser
http://localhost/HK-DTR-SYSTEM
```

## -> USAGE

Login using the provided credentials.
Depending on your role:

**Students**: Time in/out at the duty site.

**Teachers/Admins**: Request Facilitators, Monitor attendance, and validate records.

**Admins** can add, edit, or remove users and accept requests.

## -> Technologies Used

**Frontend**: HTML, TailwindCSS, JavaScript
**Backend**: PHP
**Database**: MySQL
**Server**: Apache (via XAMPP)


## -> Team Members

- **Barte, Allen Dave G.** [*nellagator*] — Project Leader / UX/UI Design / System Analyst / Technical Advisor / Documentation Lead / Co Developer
- **[Agaton, Jemmer D.]** — Researcher / Design Contributor 
- **[De Guzman‚ Reynald J.]** — Researcher / Contributor
- **[Luacan, Giovanni Carlo C.]** —  Lead Developer / Database Designer / UX/UI Design
- **[Sibayan, Shean Joaquin G.]** —  Documentation Assistant
