<?php
    #$id = $_POST['id'];
    $Username = $_POST['Username'];
    $Email_id = $_POST['Email_id'];
    $Book_Name = $_POST['Book_Name'];
    $Book_Author = $_POST['Book_Author'];
    $Book_Edition = $_POST['Book_Edition'];
    $Book_Description = $_POST['Book_Description'];
    $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $Stream = $_POST['Stream'];
    $Amount = $_POST['Amount'];
    

    $conn = new mysqli('localhost', 'root', '', 'selling');
    if ($conn->connect_error) {
    die('Connection failed : ' . $conn->connect_error);
    } else {
    $stmt = $conn->prepare("insert into seller(Username, Email_id, Book_Name, Book_Author, Book_Edition, Book_Description, image, Stream, Amount) values (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssisssi", $Username, $Email_id, $Book_Name, $Book_Author, $Book_Edition, $Book_Description, $image, $Stream, $Amount);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($data['Password'] === $Password){
        echo "<h2>Login Successfully</h2>";
    }else{
        echo "<h2>Invalid username or password</h2>";
         }
 #else{
    #echo "<h2>Invalid username or password</h2>";

            #echo "Registration done successfully...";
            header("Location: tempindex.html");
        exit();
        $stmt->close();
        $conn->close();
    }

        
?>