<?php

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $passwrd = $_POST['passwrd'];
    $terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);



    if( ! $terms){
        die("Terms must be accepted");
    }

$host = "localhost";
$dbname = "test";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host,
                        username: $username,
                        password: $password,
                        database: $dbname);
if(mysqli_connect_errno()){
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO registration (firstname, lastName, email, passwrd)
        VALUES (?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if( ! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssss",
                        $firstName,
                        $lastName,
                        $email,
                        $passwrd);
                    
mysqli_stmt_execute($stmt);

echo "Record saved.";