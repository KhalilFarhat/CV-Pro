<?php
// Start a new session
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cv_project";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//create db if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS cv_project";
//run the sql query $sql
$result = $conn->query($sql);
//check if the query was successful
if ($result === TRUE) {
    // echo "Database created successfully";
} else {
    // echo "Error creating database: " . $conn->error;
}

// Establish a connection to MySQL server
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE IF NOT EXISTS user_cv (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    image longblob NOT NULL,
    First_Name VARCHAR(50) NOT NULL,
    Last_Name VARCHAR(50) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    phone_number INT(8) NOT NULL,
    address VARCHAR(50) NOT NULL,
    P_Code INT(10) NOT NULL,
    City_input VARCHAR(50) NOT NULL,
    DateOB date NOT NULL,
    PlaceOB VARCHAR(50) NOT NULL,
    License VARCHAR(50) NOT NULL,
    gender VARCHAR(50) NOT NULL,
    nationality VARCHAR(50) NOT NULL,
    civil_status VARCHAR(50) NOT NULL,
    linkin VARCHAR(250) NOT NULL,
    website VARCHAR(250) NOT NULL,
    education VARCHAR(50) NOT NULL,
    school VARCHAR(50) NOT NULL,
    city VARCHAR(50) NOT NULL,
    Edu_start VARCHAR(50) NOT NULL,
    Edu_end VARCHAR(50) NOT NULL,
    Description VARCHAR(1500) NOT NULL,
    position VARCHAR(50) NOT NULL,
    employer VARCHAR(50) NOT NULL,
    emp_city VARCHAR(50) NOT NULL,
    emp_start VARCHAR(50) NOT NULL,
    emp_end VARCHAR(50) NOT NULL,
    emp_Description VARCHAR(50) NOT NULL,
    skill1 VARCHAR(50) NOT NULL,
    skill1_range INT(200) NOT NULL,
    skill2 VARCHAR(50) NOT NULL,
    skill2_range INT(200) NOT NULL,
    skill3 VARCHAR(50) NOT NULL,
    skill3_range INT(200) NOT NULL,
    lang1 VARCHAR(50) NOT NULL,
    lang1_range INT(200) NOT NULL,
    lang2 VARCHAR(50) NOT NULL,
    lang2_range INT(200) NOT NULL,
    lang3 VARCHAR(50) NOT NULL,
    lang3_range INT(200) NOT NULL,

    hobby1 VARCHAR(50) NOT NULL,
    hobby2 VARCHAR(50) NOT NULL,
    hobby3 VARCHAR(50) NOT NULL,

    Profile_Description VARCHAR(500) NOT NULL,
    Internships_position VARCHAR(50) NOT NULL,
    Internships_employer VARCHAR(50) NOT NULL,
    Internships_city VARCHAR(50) NOT NULL,
    Internships_Edu_start VARCHAR(50) NOT NULL,
    Internships_Edu_end VARCHAR(50) NOT NULL,
    Internships_Description VARCHAR(500) NOT NULL,
    extra_position VARCHAR(50) NOT NULL,
    extra_employer VARCHAR(50) NOT NULL,
    extra_city VARCHAR(50) NOT NULL,
    extra_Edu_start VARCHAR(50) NOT NULL,
    extra_Edu_end VARCHAR(50) NOT NULL,
    extra_Description VARCHAR(500) NOT NULL,
    AchvDescription VARCHAR(500) NOT NULL,
    Certificate_position VARCHAR(50) NOT NULL,
    Certificate_end VARCHAR(50) NOT NULL,
    Certificate_Description VARCHAR(500) NOT NULL


)"; 
if ($conn->query($sql) === false) {
    die("Error creating user cv table: " . $conn->error);
}

// Create table for admin credentials if it doesn't exist

$sql = "CREATE TABLE IF NOT EXISTS admin_credentials (
    id INT(6) UNSIGNED NOT NULL PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    UNIQUE KEY unique_email (email)
)";
if ($conn->query($sql) === false) {
    die("Error creating admin_credentials table: " . $conn->error);
}

// Insert admin credentials if they don't already exist or update them if they do
$sql = "INSERT INTO admin_credentials (id, email, password) 
    VALUES (1, 'admin@admin.com', 'admin') 
    ON DUPLICATE KEY UPDATE email = 'admin@admin.com', password = 'admin';";
if ($conn->query($sql) === false) {
    die("Error inserting/updating admin credentials: ".$conn->error);
}


// Create table for user credentials if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS user_credentials (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    psw VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === false) {
    die("Error creating user_credentials table: " . $conn->error);
}


?>
