automate
========

Automate is an application that will automate manual tasks normally performed by an IT technician. It will be accessible through a  web application and will consist of three main parts:  

1. Asset management and lease returns (laptops and desktop computers)

2. Laptop configuration and application installation for end-users

3. Bulk data upload, validations and import

Automate aims to reduce administrative burden in a number of areas. It will be accessed via a client web application which will have sections for managing the laptop lease returns process, configuring a laptop and uploading information directly into a database.

Notes
-----------

Automate uses absolute references in the following files:

1. /automate/assets/create_task.php
2. /automate/import/mdt_execute.php
3. /automate/inc/functions.php
4. /automate/resources/ps/mdt_import.ps1

Automate will work "as is" if you:

1. Install XAMPP to the root of C: (Automate was created with version 1.8.3)
2. Place /automate inside the "/htdocs" folder
3. Create a folder "C:\xampp\ps" with PowerShell.exe inside
4. Ensure that php.exe resides in C:\xampp\php\php.exe
5. Import /automate/resources/schema.sql in phpMyAdmin to recreate database schema
