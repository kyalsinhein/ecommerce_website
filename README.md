# ecommerce_website
An e-commerce website is an online platform that allows businesses to sell products or services directly to customers. It includes features like product listings, shopping carts, secure payments, and order management, streamlining the buying process and providing convenient, 24/7 shopping.

---

# phpMyAdmin v3.3.0 Setup Guide for Windows

This guide explains how to set up **phpMyAdmin v3.3.0** on Windows using **XAMPP** and **PHP 8.0.30**.

---

## Requirements
- **XAMPP v3.3.0** installed: [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html)  
- **PHP 8.0.30** installed (verify version in Command Prompt)

---

## Steps

### 1. Check PHP Version
Open **Command Prompt** and run:

```cmd
C:\Users\ASUS>php -v
```

You should see output similar to:

```cmd

PHP 8.0.30 (cli) (built: Sep 1 2023 14:15:38) ( ZTS Visual C++ 2019 x64 )
Copyright (c) The PHP Group
Zend Engine v4.0.30, Copyright (c) Zend Technologies
```

This ensures PHP is installed and working correctly. 

### 2. Configure config.inc.php

Open 
```text
C:\xampp\phpMyAdmin\config.inc.php
```
 in a text editor.

Replace content with:

```cmd
<?php
$cfg['blowfish_secret'] = 'xampp'; // random string

$i = 1; // first server
$cfg['Servers'][$i]['host'] = '127.0.0.1';
$cfg['Servers'][$i]['port'] = '3307'; // your MySQL port
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['password'] = ''; // leave empty if no password
$cfg['Servers'][$i]['AllowNoPassword'] = true;
$cfg['Servers'][$i]['auth_type'] = 'config';
$cfg['Servers'][$i]['extension'] = 'mysqli';
$cfg['Servers'][$i]['connect_type'] = 'tcp';

$cfg['Servers'][$i]['controluser'] = '';
$cfg['Servers'][$i]['controlpass'] = '';
$cfg['Servers'][$i]['pmadb'] = '';
$cfg['Servers'][$i]['bookmarktable'] = '';
$cfg['Servers'][$i]['relation'] = '';
?>
```

### 3. Start XAMPP

Start Apache and MySQL via XAMPP Control Panel.

### ⚠️ Ensure MySQL is running on port 3307 (or your custom port). 

### If MySQL is running on a different port:

1. Open XAMPP Control Panel → Config → my.ini.

2. Change the port under [mysqld] section:

```cmd
port=3307
```
3. Update the same port in config.inc.php:
   
```cmd
$cfg['Servers'][$i]['port'] = '3307';
```

4. Restart MySQL in XAMPP.

---

### Disclaimer:
### This project is purely for educational purposes. All brand names, logos, and trademarks referenced in this project belong to their respective owners. Their inclusion does not imply any affiliation, sponsorship, or endorsement.

