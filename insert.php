<?php
require("connection.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Check if the login form has been submitted
    // if (empty($_POST['email'])) { 
    //     array_push($errors, "Email is required"); }
    //     if (empty($_POST['password'])) {
    //         array_push($errors, "Password is required"); }

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
            
            // Get the user's first and last name from the login form
            $first_name = $_POST['fname'];
            $last_name = $_POST['lname'];
            
            // Add the user's first name, last name, and email to the credentials array
            $credentials = [
                'email' => $email,
                'password' => $password,
                'first_name' => $first_name,
                'last_name' => $last_name,
            ];
            
            // Store the credentials array in a session variable
            $_SESSION['credentials'] = $credentials;
            // Redirect to the admin page if there is a match
            $message = "Success";
            // header("Location:index2.php");
            header("Location:discover.html");
        }

        if (mysqli_num_rows($sresult) > 0) {
            // If the login is successful, set the session variable 'loggedin' to true
            $_SESSION['loggedin'] = true;
            
            // Get the user's first and last name from the login form
            $firstname = $_GET['firstname'];
            $lastname = $_GET['lastname'];
            
            // Add the user's first name, last name, and email to the credentials array
            $credentials = [
                'email' => $email,
                'psw' => $password,
                'firstname' => $firstname,
                'lastname' => $lastname,
            ];
            
            // Store the credentials array in a session variable
            $_SESSION['credentials'] = $credentials;

            header("Location:discover.html");

        }
        else {
            $message = "initial";
            // echo "hello".$message;
header("Location:template_login_portal.html");

}
    
    }

}
// header("Location:template_login_portal.html");


?>
