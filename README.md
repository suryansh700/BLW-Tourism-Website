BLW: IRCTC Tourism Portal (Internship Project)

This is a tourism management website developed as part of my B.Tech internship training.  
The project is inspired by the IRCTC Tourism portal and provides users with an interactive way to browse travel packages, view detailed itineraries, and book tours online.  

## ✨ Features
- 📦 **Tour Packages** – Browse available destinations like Goa, Kerala, Himachal, Rajasthan, Northeast, and Kashmir.  
- 🗺 **Itineraries** – Detailed day-wise itineraries with images, icons, and tabs for each package.  
- 📝 **Booking Form** – User-friendly booking form with JavaScript validation and database integration.  
- 📊 **Admin Dashboard** – Secure login for admins to view/manage bookings and export data to Excel/PDF.  
- 🎨 **Modern UI** – Attractive design with styled tiles, background images, and responsive layouts.  

## 🛠️ Tech Stack
- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP  
- **Database:** MySQL  
- **Tools:** XAMPP (Localhost server), phpMyAdmin  

## 🚀 Setup Instructions
1. Clone the repository into your web server directory (e.g., `htdocs` for XAMPP).  
2. Import the provided `tourism_schema.sql` into MySQL using phpMyAdmin.  
3. Copy `db_conn.example.php` to `db_conn.php` and update your database credentials.  
4. Start Apache & MySQL in XAMPP.  
5. Visit `http://localhost/tourism_project` in your browser.  

## 🔑 Default Admin Credentials
- **Username:** admin  
- **Password:** admin123 (change in database for security)  

## 📂 Project Structure

tourism_project/ ├─ index.html ├─ packages.html ├─ itineraries.html ├─ booking.html ├─ admin_login.php ├─ admin_dashboard.php ├─ view_bookings.php ├─ process_booking.php ├─ db_conn.php (not committed, use db_conn.example.php) ├─ css/ ├─ js/ ├─ images/ └─ db/ └─ tourism_schema.sql

---

💡 *This project was created for learning purposes as part of my internship. It demonstrates basic full-stack development with PHP & MySQL.*