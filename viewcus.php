<?php

$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password,"banking");
if(!$con){
    die("Connection failed");

}
$SESSION['user']=$_POST['user'];
$SESSION['sender']=$SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CO-OPERATIVE | Customers</title>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
	
	
</head>



<body style="background-color:AliceBlue">

            <div class="navbar-brand font-weight-bold " id="title" data-anijs="if: mouseover, do: slideInUp animated" style="color:#800000;font-family: 'Courgette', cursive;font-size:2em;">
                CO-OPERATIVE Bank
            </div>

        <div class ="nav-links" style="padding: 20px 20px;">
           <ul>
              <li><a href="home.php">HOME</a>
			  <li><a href="view.php">BACK</a></li>	
              		  
            </ul>
          </div>
<div class="customer" style="margin:2%; >
<div class="row">
    <div class="col-sm" style="padding:1% 35%;">
    <div style="padding-top:0.5%;display:inline;"><h1 class="font-weight-bold" style="color:#800000;font-size:150%;display:inline;margin:10px 5px 0px 5px;padding-top:10%">CUSTOMER DETAILS</h1>
    </div>
        <br><br>
        <div   style="font-size:1.2em; float: center;">
        <?php
        if (isset($SESSION['user']))
        {
          $user=$SESSION['user'];
          $result=mysqli_query($con,"SELECT * FROM table_1 WHERE NAME='$user'");
          while($row=mysqli_fetch_array($result))
          {
            echo "<p><b class='font-weight-bold'>USER_ID</b> &nbsp;: ".$row['SL_NO']."</p><br>";
            echo "<p name='SENDER'><b class='font-weight-bold'>Name&nbsp;&nbsp;</b>&nbsp;&nbsp;: ".$row['NAME']."</p><br>";
            echo "<p><b class='font-weight-bold'>EMAIL_ID</b> : ".$row['EMAIL_ID']."</p><br>";
            echo "<p><b class='font-weight-bold'>CURRENT_BALANCE</b>&nbsp; :&nbsp;<b>&#8377;</b> ".$row['CURRENT_BALANCE']."</p>";
          }         
        }
      ?>
	 
      </div>
 </div>
 </div>
</div>
</body>

</html>