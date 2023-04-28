<?php
    //include "login.html";
    $Username = $_POST['Username'];
   // echo "$Username";
    $Password = $_POST['Password'];
    
    
    $con = new mysqli('localhost', 'root', '', 'selling');
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
                $stmt2 = $con->prepare("INSERT INTO loggedin (Username) VALUES (?)");
$stmt2->bind_param("s", $Username);
$stmt2->execute();
                //echo "<h2>Login Successfully</h2>";
              
                header("Location: home1.php");
    
            }else{
                echo "<h2>Invalid username or password</h2>";
            }
        } else{
            echo "<h2>Invalid username or password</h2>";
        }
        exit(); 
    }
   
?>