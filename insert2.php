<?php
require("connection.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Check if the login form has been submitted
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        // Query the database to check if the email and password match an existing record in the admin_credentials table
        $query = "SELECT * FROM admin_credentials WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $query);

        // Query the database to check if the email and password match an existing record in the user_credentials table
        $squery = "SELECT * FROM user_credentials WHERE email = '$email' AND psw = '$password'";
        $sresult = mysqli_query($conn, $squery);
        
        if (mysqli_num_rows($result) > 0 ) {
            // If the login is successful, set the session variable 'loggedin' to true
            $_SESSION['loggedin'] = true;
        
            // Add the admin's email and 'is_admin' field to the credentials array
            $credentials = [
                'email' => $email,
                'password' => $password,
                'is_admin' => true,
            ];
        
            // Store the credentials array in a session variable
            $_SESSION['credentials'] = $credentials;
        
            // Redirect to the admin page if there is a match
            header("Location:index3.php");
        } else if (mysqli_num_rows($sresult) > 0) {
            // If the login is successful, set the session variable 'loggedin' to true
            $_SESSION['loggedin'] = true;
        
            // Get the user's first and last name from the database
            $query = "SELECT firstname, lastname FROM user_credentials WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $first_name = $row['firstname'];
            $last_name = $row['lastname'];
        
            // Add the user's first name, last name, and email to the credentials array
            $credentials = [
                'email' => $email,
                'psw' => $password,
                'first_name' => $first_name,
                'last_name' => $last_name,
            ];
        
            // Store the credentials array in a session variable
            $_SESSION['credentials'] = $credentials;
        
            // Redirect to the user page if there is a match
            header("Location:index2.php");
        } else {
            // If login fails, redirect back to the login page
            echo "<p style='color:red'>Email or password error. Please try again.</p>";
            header("refresh:3;url=login_signup_portal.html"); // Redirect after 3 seconds
        }
        
        
    }
}

// If the user clicks on the Logout link, destroy the session and redirect back to the login page
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location:login_signup_portal.html");
}
?>
