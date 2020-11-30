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

    // Insert form data into database
    $query = "INSERT INTO product(name, description, image) VALUES ('$_POST[name]', '$_POST[description]', '$_POST[image]')";

    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $conn->error;
    }
    
    // Close connection
    $conn->close();
?>