<?php

    $email = $_POST['email_login'];
    $passwrd = $_POST['passwrd_login'];

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

//this is the query that selects your profile based on your email and password
$query_login = "SELECT * FROM registration WHERE email='$email' AND passwrd='$passwrd' ";

//this is the query that grabs your name 
$query_name = "SELECT firstName FROM registration WHERE email='$email' AND passwrd='$passwrd' ";
$result2 = mysqli_query($conn, $query_name);
//this fetches the column or the name
$row1 = mysqli_fetch_column($result2);

//this setcookie function is used to transfer the variable for firstName to the other page. I display this on the screen
setcookie("fname","$row1",time() + 3600*24);
$_COOKIE['fname'];

$result = mysqli_query($conn, $query_login);
if($result->num_rows > 0){
    //login successful
    header("Location: login.php");
    exit();
}else{
    //login failed
    header("Location: website.html");
    exit();
}

    $conn->close();

?>