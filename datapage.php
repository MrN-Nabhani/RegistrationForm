<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>

<style>
    body{
        font-size: 24pt;
        color: white;
        background-color: hsla(0, 0%, 15%, 0.99);
    }
</style>
<body>
    
</body>
</html>

<?php

if ( !$conn = mysqli_connect("localhost", "root", "", "php university") ){
    die("Failed to connect to MySQL!<br/>");
}

    $userName = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["pwd"];
    $storeInCookie = isset($_POST["remember"]);
    
    
    $insertStatement = 
    "INSERT INTO user (username, email, password)  
    VALUES ('$userName', '$email', '$password')";

    $result = mysqli_query($conn, $insertStatement);
    

    $selectStatement = "SELECT username FROM user";

    $result = mysqli_query($conn, $selectStatement);

    echo "Welcome online {$userName}! checkout other users: <br>";

    $count = mysqli_num_rows($result);
    while($count > 1 && $row = mysqli_fetch_assoc($result)){
        echo "&nbsp; " . $row["username"] . " <br> ";
        $count -= 1;
    }

?>