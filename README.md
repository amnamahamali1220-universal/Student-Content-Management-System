# Universal Student Content Management System

## Project Overview
The **Universal Student Content Management System (CMS)** is a robust, enterprise-grade educational platform designed to streamline academic workflows. It features a sophisticated Role-Based Access Control (RBAC) system, dynamic navigation, and specialized dashboards for Students, Teachers, Admins, and Super Admins.

## Key Features & Modules

### 🔐 Security & Access Control
- **Advanced RBAC**: Granular permission management for all system roles.
- **Dynamic Sidebar**: Navigation menus are automatically generated based on user permissions.
- **Secure Authentication**: Encrypted password storage and session-based access control.

### 👨‍💼 Administrative Tools
- **User Management**: Comprehensive CRUD operations for all user types.
- **Role & Page Management**: Dynamic registration of system pages and role assignments.
- **Activity Logging**: Real-time tracking of system-wide user actions.
- **Global Settings**: Site-wide configuration for branding (name, logo) and system variables.
- **System Backups**: Direct interface for database backup generation.

### 👨‍🏫 Teacher Capabilities
- **Course Management**: Create and manage curriculum-specific courses.
- **Assignment Module**: Publish assignments, set due dates, and manage student submissions.
- **Quiz System**: Build interactive multiple-choice quizzes with automated scoring.
- **Attendance Tracking**: Digital attendance marking with visual analytics.
- **Grading & Rubrics**: Advanced rubric builder for standardized evaluation and grading.
- **Analytics**: Visual performance tracking for courses and individual students.

### 👨‍🎓 Student Experience
- **My Learning**: Personalized dashboard for enrolled courses and upcoming tasks.
- **Assignment Submission**: Dedicated interface for uploading assignment files.
- **Quiz Center**: Interactive platform for attempting course quizzes.
- **Report Card**: Comprehensive overview of grades, attendance, and academic progress.
- **Visual Stats**: Graphic representations of learning milestones and performance.

### 📅 Common Features
- **Academic Calendar**: Integrated system-wide calendar for exams, holidays, and events.
- **Communication Center**: In-system messaging platform for teacher-student interaction.

## Technical Stack
- **Backend**: PHP 8.x
- **Database**: MySQL/MariaDB
- **Frontend**: HTML5, CSS3, JavaScript (Vanilla), Bootstrap 5, AdminLTE 4
- **Charts**: Chart.js for data visualization
- **Icons**: Bootstrap Icons, Font Awesome 6

## Installation & Setup
1. Clone the repository to your local server (e.g., XAMPP/htdocs).
2. Import the `student_cms_database.sql` file into your MySQL database.
3. Update `core/config.php` with your database credentials and `BASE_URL`.
4. Login with default credentials:
   - **Super Admin**: `admin@universal.com` / `admin123`

## Project Structure
- `core/`: System configuration, database connection, and core logic.
- `includes/`: Reusable UI components (header, footer, sidebar).
- `dashboards/`: Role-specific application pages.
- `assets/`: CSS, JS, and optimized image resources.
- `uploads/`: Storage for materials, assignments, and system backups.

---
*Developed for academic excellence and streamlined educational management.*
