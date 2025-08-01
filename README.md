# Metin2 Web Site

Simple PHP website and admin panel for a Metin2 private server.

## Features
- User registration and login using MD5 password hashing (MD5 is considered insecure; consider using stronger algorithms such as bcrypt).
- Admin login and a basic dashboard showing players.
- Pages styled with Bootstrap from CDN.

## Setup
1. Create a MySQL database and import `install.sql`.
2. Update the database credentials in `config.php`.
3. Deploy the `public` and `admin` directories on your PHP-enabled web server.

## Database Schema
The included `install.sql` file defines two tables:

```sql
CREATE TABLE players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password CHAR(32) NOT NULL,
    email VARCHAR(100)
);

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password CHAR(32) NOT NULL
);
```
