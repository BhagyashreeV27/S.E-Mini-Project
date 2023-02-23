<html>
<head>
    <title> Display Image</title>
</head>
<body> 
    <center>
        <form action=""method="post" enctype="multipart/form-data">
            <table>
                <thead>
                    <tr>
                        <th> Username </th>
                        <th> Email_id </th>
                        <th> Book_Name </th>
                        <th> Book_Author </th>
                        <th> Book_Edition </th>
                        <th> Book_Description </th>
                        <th> image </th>
                        <th> Stream </th>
                        <th> Amount </th>
                    </tr> 
                </thead>
                <?php
                $connection = mysqli_connect("localhost", "root","");
                $db = mysqli_select_db($connection,'selling');

                $query = " SELECT * FROM seller ";
                $query_run = mysqli_query($connection,$query);

                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                    <tr>
                        
                    <td> <?php echo $row['Username']; ?> </td>
                    <td> <?php echo $row['Email_id']; ?> </td>
                    <td> <?php echo $row['Book_Name']; ?> </td>
                    <td> <?php echo $row['Book_Author']; ?> </td>
                    <td> <?php echo $row['Book_Edition']; ?> </td>
                    <td> <?php echo $row['Book_Description']; ?> </td>
                    <td> <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 100px; height: 100px;" >'; ?> </td>
                    <td> <?php echo $row['Stream']; ?> </td>
                    <td> <?php echo $row['Amount']; ?> </td>
                </tr>

                    <?php
                }
                ?>

            </table>
        </form>           
    </center>
</body>    
</html>