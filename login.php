<?php

    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    
    
    $con = new mysqli('localhost', 'root', '', 'registration');
    if($con->connect_error){
        die('Connection failed : '.$con->connect_error);
    }
    else{
        $stmt = $con->prepare("select * from register where Username = ?");
        $stmt->bind_param("s", $Username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['Password'] === $Password){
                #echo "<h2>Login Successfully</h2>";
                header("Location: tempindex.html");
        exit();
            }else{
                echo "<h2>Invalid username or password</h2>";
            }
        } else{
            echo "<h2>Invalid username or password</h2>";
        }
        
    }
?>