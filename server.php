<?php
// Global variables
$username = "";
$email = "";
$errors = array();

// Connection to Database
$hostname = "localhost";
$db_username = "root";
$db_password = "";
$database = "user_registration";

$db = mysqli_connect($hostname, $db_username, $db_password, $database);

// if ($db->ping()) {
//     printf("Our connection is ok!\n");
// } else {
//     printf("Error: %s\n", $mysqli->error);
// }

// Action taken when register button is clicked
if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // Validate Form
    if (empty($username)) {
        // Push new error to errors array
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 !== $password_2) {
        array_push($errors, "Enter password twice for confirmation");
    }

    // Save user info into database if no error occured
    if (count($errors) === 0) {
        $password = md5($password_1);
        $sql = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
        mysqli_query($db, $sql);
    }
}
