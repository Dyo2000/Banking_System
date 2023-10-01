<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Database connection
    $conn = new mysqli('localhost', 'root','dfdsfdsfdsf','test');
    if(!$conn){
        die('Connection Failed : '.mysqli_connect_error());
    }else{
        $stmt = $conn->prepare("insert into registration(firstName, lastName, email, password)
        values(?,?,?,?)");
        $stmt->bind_param("ssss", $firstName, $lastName, $email, $password);
        $stmt->execute();
        echo "registration Successfully...";
        $stmt->close();
        $conn->close();
    }
?>