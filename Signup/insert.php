<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['password']) &&
        isset($_POST['gender']) && isset($_POST['email']) &&
        isset($_POST['phoneCode']) && isset($_POST['phone'])) {


        $fullName = $_POST['FnameFromUser'];
        $Password = $_POST['passwordFromUser'];
        $PhoneNumber = $_POST["phoneFromUser"];
        $Email = $_POST["emailFromUser"];
        $Age = $_POST["ageFromUser"];
        $Gender = $_POST["genderFromUser"];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "CreateAccount";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        } else {
            $Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO register(fullName, Password, PhoneNumber, Email, Age, Gender) values(?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssii", $fullName, $Password, $PhoneNumber, $Email, $Age, $Gender);
                if ($stmt->execute()) {
                    echo "New record inserted successfully.";
                } else {
                    echo $stmt->error;
                }
            } else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    } else {
        echo "All field are required.";
        die();
    }
} else {
    echo "Submit button is not set";
}

