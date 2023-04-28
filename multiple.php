<?php
    #$id = $_POST['id'];
    $Username = $_POST['Username'];
    $Email_id = $_POST['Email_id'];
    $Book_Name = $_POST['Book_Name'];
    $Book_Author = $_POST['Book_Author'];
    $Book_Edition = $_POST['Book_Edition'];
    $Book_Description = $_POST['Book_Description'];
    
    $location="upload/";

	$file1=$_FILES['img1']['name'];
	$file_tmp1=$_FILES['img1']['tmp_name'];

	$file2=$_FILES['img2']['name'];
	$file_tmp2=$_FILES['img2']['tmp_name'];

	$file3=$_FILES['img3']['name'];
	$file_tmp3=$_FILES['img3']['tmp_name'];

	$file4=$_FILES['img4']['name'];
	$file_tmp4=$_FILES['img4']['tmp_name'];

	$data=[];
	$data=[$file1,$file2,$file3,$file4];
	$images=implode(' ',$data);


   // $imageCount = count($_FILES['image']['name']);
   // for($i=0;$i<$imageCount;$i++)
   // {
    //    $imageName = $_FILES['image']['name'][$i];
    //    $imageTempName = ($_FILES["image"]["tmp_name"]);
     //   $targetPath = "./upload/" .$imageName;
     //   if(move_uploaded_file($imageTempName, $targetPath)){
      //      $sql = "INSERT INTO sell(image)VALUES('$imageName')";
      //      $result = mysqli_query($conn, $sql);
      //  }
   // }
    //$tmp_name = $_POST['tmp_name'];
   // $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
   // $image = $_FILES['image'];
    //foreach ($image['tmp_name'] as $key => $tmp_name) 
     //   {
      //      $image = addslashes(file_get_contents($tmp_name));

      //      $stmt = mysqli_prepare($conn, "INSERT INTO sell (image) VALUES (?)");
      //      mysqli_stmt_bind_param($stmt, "b", $image);
      //      mysqli_stmt_execute($stmt);
       // }
    $Stream = $_POST['Stream'];
    $Amount = $_POST['Amount'];
    $Submit = $_POST['Submit'];
    


    $conn = new mysqli('localhost', 'root', '', 'selling');
    if ($conn->connect_error) {
    die('Connection failed : ' . $conn->connect_error);
    } else {
    $stmt = $conn->prepare("insert into seller(Username, Email_id, Book_Name, Book_Author, Book_Edition, Book_Description, images , Stream, Amount) values ( '$Username', '$Email_id', '$Book_Name', '$Book_Author', '$Book_Edition', '$Book_Description','$images', '$Stream', '$Amount')");
    //$query="insert into sell(images) values('$images')";
	//$fire=mysqli_query($conn,$query);
	if($stmt)
	{
		move_uploaded_file($file_tmp1, $location.$file1);
		move_uploaded_file($file_tmp2, $location.$file2);
		move_uploaded_file($file_tmp3, $location.$file3);
		move_uploaded_file($file_tmp4, $location.$file4);
    }       
	else
	{
		echo "failed";
	}
   # $stmt->bind_param("ssssisssi", $Username, $Email_id, $Book_Name, $Book_Author, $Book_Edition, $Book_Description, $image, $Stream, $Amount);
   #if($data['Username'] === $Username){
   # echo "<h2>Login Successfully</h2>";
#}else{
   #echo "<h2>You have to register first!</h2>";
    # };
    
   $stmt->execute();
    $stmt_result = $stmt->get_result();
            header("Location: home1.php");
     
        $stmt->close();
        $conn->close();
    }

    exit();

?>