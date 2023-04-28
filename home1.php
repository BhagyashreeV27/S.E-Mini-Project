<?php
$conn = mysqli_connect("localhost", "root", "", "selling");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="home.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <link rel ="stylesheet" href="carouselstyle.css">
    <link rel="icon" href="logo.png">
  
   
    <title>Bookart</title>
    <script src="https://kit.fontawesome.com/d666613e2a.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script>
      

        function Menudisplay(){
          const button= document.getElementById('dropbtn');
          const list= document.getElementById("dropdown-content");
        if(list.style.display == "block"){
          list.style.display = "none";
        }
        else{
          list.style.display = "block";
        }
        }

        function MyAccount(){
          const button= document.getElementById('dropbtn_2');
          const list= document.getElementById("dropdown_2-content");
        if(list.style.display == "block"){
          list.style.display = "none";
        }
        else{
          list.style.display = "block";
        }
        }

        function gotoBuybtn(){
          let  btn= document.getElementById('dropbtn');
            btn.click();
            }
        function gotoSell(){
          let sell= document.getElementById('two');
          sell.click();
        }


  
  
      </script>
      <script type="text/javascript"> 
      var counter =1;
      setInterval(function(){
        document.getElementById('radio'+ counter).checked = true;
        counter++;
        if(counter>4){
          counter=1;
        }
      },5000);
      
      
      </script>

</head>
<body>
  <nav class="navbar ">
    
    <ul class="nav-list">
      <div class="logo"><img src="logo.png"height="100px" alt="logo">
      
      <span class="logo_txt">Knowledge Sharing Join Second hand Wherever you can </span></div>     
      <li class="active"><a href="home1.php"><i class="fa-solid fa-house"></i>Home</a></li>
    
      <li class="item"><a href="displayimage.php"><i class="fa-solid fa-cart-shopping"></i>Buy </a></li>
      <li class="item"><a href="Sell.html"><i class="fa-solid fa-check"></i>Sell</a></li>
      <li class="item"><a href="aboutus.html"><i class="fa-solid fa-address-card"></i></i>About us </a>

      
  
      
    </ul>
    <div id ="rightNav">
    <?php
    
     $sql = "UPDATE loggedin SET Rewards= (SELECT Rewards FROM register WHERE register.Username=loggedin.Username) WHERE Username=(SELECT Username FROM loggedin WHERE id='1')";
    $query1 = mysqli_query($conn,$sql);
    //$result1 = mysqli_fetch_assoc($query1);

    
    $sel = "SELECT * FROM loggedin";
    $query = mysqli_query($conn,$sel);
    $result = mysqli_fetch_assoc($query);
    
   
    ?>
      <ul class="nav-list2">
     <li class="item"> <a href="logout.php"><i class="fa-solid fa-right-to-bracket"></i></i>Log Out</a></li>     
      <div class="dropdown_2">
      <button id="dropbtn_2" onclick="MyAccount()">MyAccount<i class="fa-solid fa-user"></i>
      </button>
      <ul id ="dropdown_2-content"> 
        <li><a href="loggedin.php"> Me :<?php echo $result['Username']; ?></a></li>  
     
   

       <li><a href="rewards.php"> My Rewards:<?php echo $result['Rewards']; ?> </a></li> 
        </ul>         
      </div>
  
    </ul>
    </div>
    
  </nav>
  <div class="slider">
    <div class="slides">
      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">
 
      <div class="slide first">          
        <img src="bg.png" alt="" height="500px" width="800px">
        <p class="t1">Welcome to Bookart </p>
        
      </div>
      <div class="slide">
        <img src="bgg.jpg" alt="" height="500px" width="800px">
        <p class="t2">If you want a new idea , read an old book</p>
        <p class="t2_2"><br>~Bookart</p>
        
       
      </div>
      <div class="slide">
        <img src="heart.jpeg" alt="" height="500px" width="800px">
        <p class="t3">Are you a +2, JEE/NEET or an engineering student who want to buy second-hand books to save money 
          but also want to save time from going to the store and buying them?
          If yes, then Bookart is just made for you!</p>
       
      </div>
      <div class="slide">
        <img src="book.png" alt="" height="500px" width="800px">
        <p class="t4">
          Selling and buying books on Bookart is a win-win situation for both buyer and seller How? Let's see - 
          As a seller, 
          you can get rid of the books that you don't need in exchange of 
          <span id="reward">reward points</span> and sell it to another person. 
          And being a buyer, you can buy your desired book . 
          AND you get bonus points just for logging in.
          All of this... AT YOUR DOORSTEP!</p>
      </div>
 
      <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn1"></div>
        <div class="auto-btn1"></div>
        <div class="auto-btn1"></div>
      </div>
    </div>
    <div class="navigation-manual">
      <label for="radio1"class="manual-btn"></label>
      <label for="radio2"class="manual-btn"></label>
      <label for="radio3"class="manual-btn"></label>
      <label for="radio4"class="manual-btn"></label>
    </div>
  </div>
  </div>
 
   
   
  </head>
  
    

   <footer class="text-center">
    <p>Copyright &copy; 2021 All rights reserved by Bookart Inc.</p>
</footer>
  </body>
  </html>































