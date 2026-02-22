# Sri Ranvir Inter College (SRIC) Website

🏫 **Official website for Sri Ranvir Inter College, Amethi, Uttar Pradesh, India**

[![PHP](https://img.shields.io/badge/PHP-7.x-blue.svg)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-5.x-orange.svg)](https://mysql.com)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

## 📖 About

Sri Ranvir Inter College (RIC) is an educational institution located in Amethi, UP. This website provides information about:

- College overview and history
- Admission process and requirements
- Academic departments
- Student achievements and toppers
- Photo gallery
- Events calendar
- NCC activities
- Contact information

## 🚀 Features

- **Dynamic Image Slider** - Showcasing college events and infrastructure
- **Toppers Section** - High School (10th) and Intermediate (12th) achievers
- **Photo Gallery** - Event photos organized by category
- **Notice Board** - Important announcements with marquee
- **Responsive Navigation** - Dropdown menus for easy access

## 📁 Project Structure

```
SRIC/
├── index.php              # Main entry point
├── site/                  # Main pages
│   ├── home.php          # Homepage with slider
│   ├── about_us.php      # About the college
│   ├── admission.php     # Admission information
│   ├── department.php    # Academic departments
│   ├── gallery.php       # Photo gallery
│   ├── achivement.php    # College achievements
│   ├── inter.php         # Intermediate toppers
│   ├── high.php          # High school toppers
│   ├── ncc.php           # NCC activities
│   ├── event_cal.php     # Events calendar
│   ├── rules.php         # Rules and regulations
│   ├── message.php       # Messages/notices
│   ├── convenience.php   # Facilities
│   └── form.php          # Contact form
├── inc/                   # Includes
│   ├── header.php        # Common header with navigation
│   └── footer.php        # Common footer
├── db_php/                # Database files
│   ├── db.php            # Database connection (⚠️ create from template)
│   ├── blog_data.php     # Blog/news data
│   ├── notice_db.php     # Notices database
│   ├── inter_data.php    # Intermediate data
│   └── high_data.php     # High school data
├── style/                 # CSS stylesheets
│   ├── main.css          # Main styles
│   ├── home_style.css    # Homepage styles
│   ├── inc_style.css     # Header/nav styles
│   └── animate_style.css # Animations
├── javascript/            # JavaScript files
│   └── slider.js         # Image slider functionality
├── images/                # Image assets
│   ├── image/            # Slider images
│   └── ric/              # College photos
├── college_gif/           # GIF icons and images
├── slider/                # Slider assets
├── toppers/               # Topper photos
└── menu/                  # Menu assets
```

## ⚙️ Installation

### Prerequisites

- PHP 7.0+
- MySQL 5.6+
- Apache/Nginx web server

### Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/RajmaniShukla/SRIC.git
   cd SRIC
   ```

2. **Create database configuration**
   ```bash
   cp db_php/db.example.php db_php/db.php
   ```

3. **Edit `db_php/db.php`** with your credentials:
   ```php
   $host = "localhost";
   $user = "your_username";
   $pass = "your_password";
   $db = "ric";
   ```

4. **Create the database**
   ```sql
   CREATE DATABASE ric;
   ```

5. **Import tables** (if SQL file provided) or create necessary tables

6. **Configure web server** to point to project root

7. **Access the site** at `http://localhost/SRIC`

## 🗄️ Database Tables

The website expects the following tables (create as needed):

| Table | Purpose |
|-------|---------|
| `notices` | Announcements and notices |
| `events` | Event calendar entries |
| `toppers_inter` | Intermediate (12th) toppers |
| `toppers_high` | High school (10th) toppers |
| `gallery` | Photo gallery entries |
| `blog` | News and blog posts |

## 🔒 Security Notes

⚠️ **Important Security Considerations:**

1. **Never commit `db.php`** - Contains database credentials
2. **Use environment variables** for production credentials
3. **Update deprecated functions** - Replace `mysql_*` with `mysqli_*`
4. **Sanitize inputs** - Use prepared statements for queries
5. **Update `<frameset>`** - Replace with modern `<iframe>` or remove

## 🛠️ Technical Improvements Needed

- [ ] Replace deprecated `<frameset>` with modern HTML5
- [ ] Add responsive design for mobile devices
- [ ] Implement prepared statements for SQL queries
- [ ] Add HTTPS support
- [ ] Create database migration scripts
- [ ] Add form validation and CSRF protection

## 👤 Author

**Rajmani Shukla**

- GitHub: [@RajmaniShukla](https://github.com/RajmaniShukla)

## 📄 License

This project is licensed under the MIT License.

---

🏫 *Sri Ranvir Inter College - Nurturing Excellence in Education*
