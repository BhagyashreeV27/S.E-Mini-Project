<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta charset="UTF-8"> 
    <title> Buy</title>
    <link rel="icon" href="logo.png">
    <style>
        body{
            background-color: lightcyan;
        }
        </style>
</head>
<body> 
    <center>
        <form method="post" enctype="multipart/form-data">
            <table id="table" width="80%" border="1" cellpadding="10" cellspacing="10">
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
                        <th> Action </th>
                    </tr> 
                </thead>
                <?php
          
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, 'selling');

    $query = "SELECT * FROM seller";
    $query_run = mysqli_query($connection, $query);

    $i = 1; // initialize i outside the JavaScript block
    while ($row = mysqli_fetch_array($query_run)) {
?>
    <script type="text/javascript">
        //console.log("this is working");
        var tr = document.createElement("tr");
        tr.id = "tr_<?php echo $i ?>";

        var td_user = document.createElement("td");
        td_user.innerText = "<?php echo $row['Username']; ?>";
        td_user.id = "tduser_<?php echo $i ?>";
        tr.appendChild(td_user);
        
        var td_email = document.createElement("td");
        td_email.innerText = "<?php echo $row['Email_id']; ?>";
        td_email.id = "tdemail_<?php echo $i ?>";
        tr.appendChild(td_email);

        var td_bname = document.createElement("td");
        td_bname.innerText = "<?php echo $row['Book_Name']; ?>";
        td_bname.id = "tdbname_<?php echo $i ?>";
        tr.appendChild(td_bname);

        var td_bauthor = document.createElement("td");
        td_bauthor.innerText = "<?php echo $row['Book_Author']; ?>";
        td_bauthor.id = "tdbauthor_<?php echo $i ?>";
        tr.appendChild(td_bauthor);

        var td_bedition = document.createElement("td");
        td_bedition.innerText = "<?php echo $row['Book_Edition']; ?>";
        td_bedition.id = "tdbedition_<?php echo $i ?>";
        tr.appendChild(td_bedition);

        var td_bdesc = document.createElement("td");
        td_bdesc.innerText = "<?php echo $row['Book_Description']; ?>";
        td_bdesc.id = "tdbdesc_<?php echo $i ?>";
        tr.appendChild(td_bdesc);

       
        var td_image = document.createElement("td");
        td_image.innerHTML = '<img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" alt="Image" style="width: 100px; height: 100px;" >';
        td_image.id = "tdimage_<?php echo $i ?>";
        tr.appendChild(td_image);

        var td_stream = document.createElement("td");
        td_stream.innerText = "<?php echo $row['Stream']; ?>";
        td_stream.id = "tdstream_<?php echo $i ?>";
        tr.appendChild(td_stream);

        var td_amount = document.createElement("td");
        td_amount.innerText = "<?php echo $row['Amount']; ?>";
        td_amount.id = "tdamount_<?php echo $i ?>";
        tr.appendChild(td_amount);
        
        // other cells omitted for brevity

        var button = document.createElement("button");
        
button.innerHTML = "Buy";
button.id = "button_<?php echo $i ?>";
button.type="button";
button.addEventListener("click", function() {
    let j="<?php echo $i ?>";
 
    var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    // handle the response here
    console.log("this is working");
  }
};
xhr.open("POST", "myacc.php");
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
var data = "btnId=" + j ;
xhr.send(data);
});


var td_action = document.createElement("td");
        td_action.id = "tdaction_<?php echo $i ?>";
        td_action.appendChild(button);
        tr.appendChild(td_action);
         
        var table = document.getElementById("table");
        table.appendChild(tr);

        <?php $i++; // increment i at the end of the loop ?>
    </script>
<?php
    }
?>

            </table>
        </form>           
    </center>
</body>    
</html>