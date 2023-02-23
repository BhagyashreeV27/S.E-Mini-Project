<?php
    if (isset($_POST['Username']) && isset($_POST['Email_id']) &&
    isset($_POST['Book_Name']) && isset($_POST['Book_Author']) &&
    isset($_POST['Book_Edition']) && isset($_POST['Book_Description'])) 
{
    
    $Username = $_POST['Username'];
    $Email_id = $_POST['Email_id'];
    #$Stream = $_POST['Stream'];
    $Book_Name = $_POST['Book_Name'];
    $Book_Author = $_POST['Book_Author'];
    $Book_Edition = $_POST['Book_Edition'];
    #$Upload_Image = $_POST['Upload_Image'];
    $Book_Description = $_POST['Book_Description'];
    #$Range = $_POST['Range'];
}



    $conn = new mysqli('localhost', 'root', '', 'selling');
    if ($conn->connect_error) {
    die('Connection failed : ' . $conn->connect_error);
    }   
    else {
        $stmt = $conn->prepare("insert into seller(Username, Email_id, Book_Name, Book_Author, Book_Edition, Book_Description) values (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssis", $Username, $Email_id, $Book_Name, $Book_Author, $Book_Edition, $Book_Description);
        $stmt->execute();
        echo "Details got filled successfully";
        $stmt->close();
        $conn->close();
    }
    
        # INSERT INTO `seller` (`id`, `Username`, `Email_id`, `Book_Name`, `Book_Author`, `Book_Edition`, `Book_Description`, `Range`) VALUES (NULL, 'renu', 'renukadhekale@gmail.com', 'blah', 'blah', '4', 'blah blah', '250');
?>