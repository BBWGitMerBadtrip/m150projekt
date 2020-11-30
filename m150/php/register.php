<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "m150";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Check username
if (empty(trim($_POST["username"]))) {
    $username_err = "Please enter a username.";
} else {
    $username = trim($_POST["username"]);
}

// Check password
if (empty(trim($_POST["password"]))) {
    $password_err = "Please enter a password.";
} elseif (strlen(trim($_POST["password"])) < 6) {
    $password_err = "Password must have atleast 6 characters.";
} else {
    $password = trim($_POST["password"]);
}

// Check confirm password
if (empty(trim($_POST["confirm_password"]))) {
    $confirm_password_err = "Please confirm password.";
} else {
    $confirm_password = trim($_POST["confirm_password"]);
    if (empty($password_err) && ($password != $confirm_password)) {
        $confirm_password_err = "Password did not match.";
    }
}

// Check input errors before inserting in database
if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

    // Create password hash
    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert form data into database
    $query = "INSERT INTO user(username, firstname, lastname, adress, password, email) 
    VALUES ('$username', '$_POST[firstname]', '$_POST[lastname]', '$_POST[adress]', '$hash_password', '$_POST[email]')";

    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo $username_err;
    echo $password_err;
    echo $confirm_password_err;
}






// Close connection
$conn->close();
