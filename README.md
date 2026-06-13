# IIUM Cafeteria Operating Schedule System (IIUMCOSS)

## Project Status

This project is currently under development. The Cafeteria and Schedule module has been implemented. The authentication, administrator interface and Announcement module will be documented after the final modules have been completed and merged.

---

## Group Information

**Course:** BIIT 2305 - Web Application Development
**Section:** 04
**Semester:** Semester 2, 2025/2026
**Lecturer:** Asst. Prof. Dr. Nor Azura Binti Kamarulzaman

### Group Members

| No. | Name                               | Matric Number |
| --- | ---------------------------------- | ------------- |
| 1   | Amelia Lin Binti Ahmad Amir Lin    | 2417640       |
| 2   | Maisarah Basirah Binti Mohd Shukri | 2417854       |
| 3   | Wardatun Nuha Binti Mohd Zamri     | 2415804       |

---

## Project Overview

The IIUM Cafeteria Operating Schedule System, also known as IIUMCOSS, is a web-based application developed to help students at the International Islamic University Malaysia access cafeteria operating schedules and related announcements through a centralised platform.

IIUM has many cafeteria outlets with different operating schedules. During public holidays, semester breaks and special occasions, students who remain on campus may not know which cafeterias are open or closed.

Currently, cafeteria schedule information is commonly distributed through WhatsApp groups, posters or one-off announcements. These announcements may easily be overlooked because students receive many messages through these channels. IIUMCOSS aims to make cafeteria information easier to find and access.

---

## Project Objectives

The objectives of this project are:

1. To develop a web application that displays cafeteria operating schedules accurately and in real time.
2. To provide a centralised platform where students can access cafeteria schedule information.
3. To reduce the possibility of students missing important cafeteria schedule updates and announcements.

---

## Target Users

### Students

Students can use the system to:

* Search for cafeterias.
* View cafeteria information.
* Check cafeteria operating status.
* View opening and closing schedules.
* Access cafeteria notices and schedule updates.

### Administrator

The administrator is responsible for managing cafeteria announcements and updates through the system.

---

## Features and Functionalities

### Student Features

* View cafeteria information.
* Search cafeterias by name, location or operating status.
* View cafeteria opening and closing schedules.
* Access cafeteria schedule information through a centralised web application.
* View public holiday and special schedule updates.

### Administrator Features

The following administrator features are currently under development:

* Administrator login and logout.
* Add cafeteria announcements.
* Edit cafeteria announcements.
* Delete cafeteria announcements.
* Upload images or posters for cafeteria notices.

---

## Current Module Implementation

### Cafeteria Module

The Cafeteria module allows the system to store and retrieve cafeteria information.

Currently implemented functions include:

* Display cafeteria records.
* Search cafeterias by name.
* Search cafeterias by location.
* Search cafeterias by operating status.
* Display cafeteria name, location and status.

### Schedule Module

The Schedule module stores the opening and closing schedule for each cafeteria.

Currently implemented functions include:

* Display cafeteria operating schedules.
* Display operating day.
* Display opening time.
* Display closing time.
* Connect each schedule record to its cafeteria.

---

## System Workflow

### Student Workflow

1. The student opens the web application.
2. The student selects the Cafeterias or Schedules page.
3. The system retrieves information from the database.
4. The student enters a cafeteria name, location or status in the search field.
5. The system displays the matching cafeteria records.
6. The student can view the available operating schedules.

### Administrator Workflow

The administrator workflow will be updated after the authentication and Announcement modules have been completed.

---

## Technical Implementation

### Technology Stack

| Component                     | Technology                               |
| ----------------------------- | ---------------------------------------- |
| Backend framework             | Laravel 13                               |
| Programming language          | PHP                                      |
| Frontend                      | Laravel Blade, HTML and CSS              |
| Database                      | MySQL                                    |
| Database management           | phpMyAdmin                               |
| Local development environment | XAMPP                                    |
| Version control               | Git and GitHub                           |
| Interface design              | Figma                                    |
| Build tool                    | Vite                                     |
| Authentication                | To be updated after final implementation |

---

## Database Design

The current database contains tables for user accounts, cafeteria information and operating schedules.

### Current Main Tables

#### `users`

Stores user account and authentication information.

#### `cafeterias`

Stores cafeteria information such as:

* Cafeteria ID
* Cafeteria name
* Location
* Operating status
* Creation and update timestamps

#### `schedules`

Stores cafeteria operating schedule information such as:

* Schedule ID
* Cafeteria ID
* Operating day
* Opening time
* Closing time
* Creation and update timestamps

Additional announcement-related tables will be added to this documentation after the Announcement module has been completed.

---

## Entity Relationship Diagram

The final Entity Relationship Diagram will be inserted after all database migrations and models have been completed.

Current relationship:

```text
Cafeteria 1 ─────────< Many Schedules
```

This means:

* One cafeteria can have many schedules.
* Each schedule belongs to one cafeteria.

<!-- Add the final ERD image here later:
![Entity Relationship Diagram](docs/images/erd.png)
-->

---

## Laravel Components Implementation

### Routes

The following routes are currently implemented:

```php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/cafeterias', [CafeteriaController::class, 'index']);

Route::get('/schedules', [ScheduleController::class, 'index']);
```

The route list will be updated after the Authentication and Announcement modules have been merged.

### Controllers

#### `CafeteriaController`

The `CafeteriaController` retrieves cafeteria records from the database. It also handles the search function using cafeteria name, location or operating status.

#### `ScheduleController`

The `ScheduleController` retrieves schedule records together with their related cafeteria information and sends the records to the schedule view.

#### Other Controllers

Authentication and Announcement controllers will be documented after their implementation has been completed.

### Models and Relationships

#### Cafeteria Model

The Cafeteria model stores cafeteria information and defines its one-to-many relationship with schedules.

```php
public function schedules()
{
    return $this->hasMany(Schedule::class);
}
```

#### Schedule Model

The Schedule model stores operating schedule information. Each schedule belongs to one cafeteria.

```php
public function cafeteria()
{
    return $this->belongsTo(Cafeteria::class);
}
```

### Views and User Interface

The system uses Laravel Blade templates.

Current views include:

* `welcome.blade.php` — default landing page.
* `mainpage.blade.php` — initial main page template.
* `cafeterias.blade.php` — cafeteria list and search page.
* `schedules.blade.php` — cafeteria operating schedule page.

The current Cafeteria and Schedule pages use a turquoise, white and grey colour scheme. The final interface will be updated according to the Figma prototype.

---

## User Authentication System

The authentication section will be updated after the authentication module has been completed and tested.

The planned authentication functions include:

* Administrator login.
* Administrator logout.
* Protected administrator pages.
* Secure password hashing.
* Session-based authentication.
* CSRF protection for forms.

Only functions that work in the final system will be retained in this section.

---

## Installation and Setup Instructions

### Prerequisites

Ensure the following software is installed:

* PHP 8.4 or later
* Composer
* Node.js and NPM
* XAMPP
* MySQL
* Git
* A web browser such as Google Chrome or Microsoft Edge

### Step 1: Clone the Repository

```bash
git clone https://github.com/amelialin-amir/IIUMCOSS.git
cd IIUMCOSS
```

### Step 2: Install PHP Dependencies

```bash
composer install
```

### Step 3: Install Frontend Dependencies

```bash
npm install
```

### Step 4: Create the Environment File

For Windows:

```bash
copy .env.example .env
```

### Step 5: Generate the Application Key

```bash
php artisan key:generate
```

### Step 6: Create the MySQL Database

1. Open the XAMPP Control Panel.
2. Start Apache and MySQL.
3. Open phpMyAdmin.
4. Create a database named:

```text
iiumcoss
```

### Step 7: Configure the Database Connection

Open the `.env` file and update the database configuration:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=iiumcoss
DB_USERNAME=root
DB_PASSWORD=
```

### Step 8: Run Database Migrations

```bash
php artisan migrate
```

### Step 9: Start the Frontend Development Server

```bash
npm run dev
```

### Step 10: Start the Laravel Server

Open another terminal and run:

```bash
php artisan serve
```

Open the following address:

```text
http://127.0.0.1:8000
```

---

## Usage Guide

### Viewing Cafeterias

1. Start the Laravel application.
2. Open:

```text
http://127.0.0.1:8000/cafeterias
```

3. The system displays the cafeteria list.
4. Enter a cafeteria name, location or status in the search box.
5. Select the Search button.
6. The system displays the matching cafeteria records.

### Viewing Schedules

1. Open:

```text
http://127.0.0.1:8000/schedules
```

2. The system displays the available cafeteria schedules.
3. Each record shows the cafeteria name, operating day, opening time and closing time.

### Administrator Usage

The administrator usage guide will be added after the authentication and Announcement modules have been completed.

---

## Testing and Quality Assurance

### Current Functionality Testing

| Test                             | Expected Result                        | Current Status     |
| -------------------------------- | -------------------------------------- | ------------------ |
| Open Cafeterias page             | Cafeteria page is displayed            | Pass               |
| Open Schedules page              | Schedule page is displayed             | Pass               |
| Cafeteria route                  | CafeteriaController is called          | Pass               |
| Schedule route                   | ScheduleController is called           | Pass               |
| Display empty cafeteria table    | Empty-information message is displayed | Pass               |
| Display empty schedule table     | Empty-information message is displayed | Pass               |
| Search using real cafeteria data | Matching records are displayed         | Pending data entry |
| Administrator login              | Administrator dashboard is displayed   | Pending            |
| Add announcement                 | Announcement is saved                  | Pending            |
| Edit announcement                | Announcement is updated                | Pending            |
| Delete announcement              | Announcement is removed                | Pending            |

### Browser Compatibility

The current module has been tested using:

* Google Chrome
* Opera

Final browser compatibility testing will be completed after all modules have been integrated.

---

## Challenges Faced and Solutions

### Challenge 1: PHP Version Compatibility

**Problem:** The Laravel project dependencies required a newer PHP version, while the existing development environment used PHP 8.2.

**Solution:** PHP was updated to a compatible version. Required extensions such as OpenSSL, PDO MySQL and Fileinfo were also enabled in the PHP configuration.

### Challenge 2: Database Configuration

**Problem:** Laravel was initially configured to use SQLite instead of the MySQL database.

**Solution:** The `.env` file was updated with the correct MySQL connection details, and the `iiumcoss` database was created through phpMyAdmin.

### Challenge 3: Git and GitHub Collaboration

**Problem:** Some group members had limited experience with cloning, pulling, committing and pushing changes through GitHub.

**Solution:** The group used descriptive commit messages and pulled the latest code before starting new work.

### Challenge 4: Connecting Models and Views

**Problem:** The original controllers returned test text instead of retrieving and displaying database information.

**Solution:** The controllers were updated to retrieve records through the Cafeteria and Schedule models and pass the data to Laravel Blade views.

---

## Future Improvements

Possible future improvements include:

* Real-time notifications for cafeteria schedule changes.
* Cafeteria filtering by category or mahallah.
* A mobile-friendly schedule calendar.
* Email notifications for important announcements.
* More detailed cafeteria information.
* Automatic schedule updates during public holidays.
* Improved responsive design for mobile devices.

---

## Learning Outcomes

### Technical Skills

The project has helped the group develop skills in:

* Laravel Model-View-Controller architecture.
* Laravel routes and controllers.
* Eloquent models and relationships.
* Database migrations.
* MySQL database configuration.
* Laravel Blade views.
* Git and GitHub collaboration.
* Troubleshooting PHP extensions and Laravel dependencies.

### Soft Skills

The project has also improved:

* Teamwork.
* Communication.
* Task delegation.
* Problem-solving.
* Time management.
* Technical documentation.

---

## Contributors

### Amelia Lin Binti Ahmad Amir Lin

Responsibilities:

* Laravel project setup.
* Database connection.
* User authentication.
* Homepage and user interface integration.
* Navigation and application layout.

### Maisarah Basirah Binti Mohd Shukri

Responsibilities:

* Cafeteria model and migration.
* Schedule model and migration.
* CafeteriaController.
* ScheduleController.
* Cafeteria and Schedule routes.
* Cafeteria search function.
* Cafeteria list view.
* Schedule view.

### Wardatun Nuha Binti Mohd Zamri

Responsibilities:

* Announcement model and migration.
* Announcement CRUD operations.
* AnnouncementController.
* Administrator announcement views.
* Image upload for cafeteria notices.

---

## Conclusion

The IIUM Cafeteria Operating Schedule System aims to provide a centralised platform for students to access cafeteria schedules and announcements. The current Cafeteria and Schedule module demonstrates the implementation of Laravel models, migrations, controllers, routes, relationships and Blade views.

The project also provides practical experience in developing a web application collaboratively using Git and GitHub. The conclusion will be updated after the Authentication and Announcement modules have been completed and integrated.

---

## References

1. Laravel Documentation.
2. PHP Documentation.
3. MySQL Documentation.
4. MDN Web Docs.
5. Visual Paradigm. Sequence Diagram Guide.
6. IIUM Cafeteria Operating Schedule System Group Project Part 1 Proposal.
