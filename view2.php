<?php

$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password,"banking");
if(!$con){
    die("Connection failed");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks | Customers</title>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
   
</head>

	  


<body style="background-color: #FF7F50">
<div class="container-fluid myclass" style="padding:0px; margin:0px;">
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm  navbar-toggler navbar-light" style="background-color:transparent; opacity:1;"> 
            
           
            <div class="navbar-brand font-weight-bold " id="title" data-anijs="if: mouseover, do: slideInUp animated" style="color:#800000;font-family: 'Courgette', cursive;font-size:2em;">
                CO-OPERATIVE Bank
            </div>
 
            
        </nav> 
		<div class ="nav-links">
              
           <ul>
		       
              <li><a href="home.php">HOME</a></li>	
              <li class="active"><a href="view2.php">MONEY TRANSFER</a></li>			  
			  <li><a href="about.php">ABOUT US</a></li>		   
			  <li><a href="contact.php">CONTACT US</a></li>	
			  
              		  
            </ul>
          </div>
	
    
    </div>
<div class="customer" style="margin:2%;">
<div class="row">
    
    <div class="col-sm" style="padding:1% 3%;">
        <div >
                    <form action="Transfer.php" method="POST">
                        
                    <img  height="50" src="./images/arrow.png" alt="" style="display:inline;">&nbsp;
                    <div style="padding-top:2%;display:inline;">
                    <span class="font-weight-bold" style="color:#800000;font-size:1.8em;line-height:0.5em;display:inline;margin:5px 5px 0px 5px;padding-top:0.5%">Money Transfer</span>
                    </div>
					<br><br>
					  <b style="font-size:1.2em;">Select sender:</b>
                <select name="sender" id="dropdown" required>
                    <option>Select sender</option>
			<?php
                $db = mysqli_connect("localhost", "root", "", "banking");
                $res = mysqli_query($db, "SELECT * FROM table_1 WHERE NAME!='$Sender'");
                while($row = mysqli_fetch_array($res)) {
                    echo("<option> "."  ".$row['NAME']."</option>");
                }
                ?>
				</select>
                <br><br><br>
                <b style="font-size:1.2em;">Select Receiver:</b>
                <select name="receiver" id="dropdown" required>
                    <option>Select receiver</option>
                <?php
                $db = mysqli_connect("localhost", "root", "", "banking");
                $res = mysqli_query($db, "SELECT * FROM table_1 WHERE NAME!='$Receiver'");
                while($row = mysqli_fetch_array($res)) {
                    echo("<option> "."  ".$row['NAME']."</option>");
                }
                ?>
                </select>
                <br><br><br>
                        <b style="font-size:1.2em;">Amount to be transferred &#8377;:</b>
                        <input name="amount" type="number" style="width:35%;" min="100" required>
                        <br><br><br>
						 <button id="transfer"  name="transfer" class="btn btn-default" ><b>Transfer</b></button>
						</form>
        </div>
    </div>
</div>
</div>
</body>

</html>