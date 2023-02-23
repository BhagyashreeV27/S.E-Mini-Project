<?php

    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $conn = new mysqli('localhost', 'root', '', 'registration');
    if ($conn->connect_error) {
    die('Connection failed : ' . $conn->connect_error);
    }   
    else {
    #if(!filter_var($Email, FILTER_VALIDATE_EMAIL));
    #{
     #   echo "Invalid email";
    #}   
    #elseif{
        $stmt = $conn->prepare("insert into register(Username, Email, Password) values (?, ?, ?)");
        $stmt->bind_param("sss", $Username, $Email, $Password);
        $stmt->execute();
        header("Location: login.html");
        exit();
        #echo "Registration done successfully...";
        $stmt->close();
        $conn->close();
    }
        
?>