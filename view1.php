<?php
    $con = mysqli_connect("localhost", "root", "", "banking");
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
            
            &nbsp;
            <div class="navbar-brand font-weight-bold " id="title" data-anijs="if: mouseover, do: slideInUp animated" style="color:#800000;font-family: 'Courgette', cursive;font-size:2em;">
                CO-OPERATIVE Bank
            </div>
        </nav> 
    </div>
	<div class ="nav-links">
              
           <ul>
		       
              <li><a href="home.php">HOME</a></li>	
              <li class="active"><a href="view1.php">TRANSCATION HISTORY</a></li>			  
			  <li><a href="about.php">ABOUT US</a></li>		   
			  <li><a href="contact.php">CONTACT US</a></li>	
			  
              		  
            </ul>
          </div>
	
  <style>
      table {
        border-collapse: separate;
        border-spacing: 0 15px;
      }
      th {
        background-color: #4287f5;
        color: white;
      }
      th,
      td {
        width: 150px;
        text-align: center;
        border: 1px solid black;
        padding: 5px;
	
      }
      h2 {
        color: #4287f5;
      }
	  table.center{
		  margin-left: auto;
		  margin-right: auto;
	  }
    </style>

<div class="usertable">

    <h3 class="font-weight-bold"style="text-align:center;color:#800000;font-family: 'Courgette', cursive;font-size:2.2em;padding:3%;">Transfer Record</h3>
    <table class="center">
          <tr>
            
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
			<th>DATE AND TIME</th>
            
          </tr>
		  <tbody>
		 <tr align=center>
          <?php
        $sql = "SELECT * FROM table_2";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<form method ='post' action = 'view2.php'>";
            echo " <td>". $row['SENDER'] . "</td>
            <td>". $row['RECEIVER'] . "</td>
			<td>". $row['AMOUNT_TRANSFERRED'] . "</td>
            <td>". $row['DATE AND TIME'] . "</td>";
            echo "</form>";
         echo  "</tr>";
        }
        ?>
		 </tr>
		</tbody>
    </table>
</div>


</body>
</html>