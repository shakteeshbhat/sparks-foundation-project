<!DOCTYPE html>
<html lang="en">
<head>
  <title>CO-OPERATIVE BANK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   <link rel="stylesheet" href="style.css">
</head>
<style>
#footer {
  text-align: center;
  padding: 3px;
  
  background-color: black;
  color: white;
  position: fixed;
  padding: 10px 10px 0px 10px;
            bottom: 3px;
            width: 100%;
            /* Height of the footer*/ 
            height: 40px;
}
</style>
<section class="head">
     <nav>
        <div class ="nav-links">
           <ul>
              <li class="active"><a href="home.php">HOME</a></li>		   
			  <li><a href="about.php">ABOUT US</a></li>		   
			  <li><a href="contact.php">CONTACT US</a></li>	
              <li><a href="index.php"><i class='fas fa-arrow-circle-left' style='font-size:36px;color:#fff'></i></a></li>			  
            </ul>
          </div>
       </nav>
</section>
<body style="background-color:black" >
<div class="container"  >
  <h1 style="color:#fff">WELCOME!</h1>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="Images/logo3.png" target="_blank">
          <img class="img-responsive" src="photo/cust.jpg" style="width:300%;padding:10px;height:268px;">
          <div class="caption">
            <p>view customer details</p>
		      <a href="view.php" class="btn btn-info" role="button">VIEW</a>
			  </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="Images/logo4.png" target="_blank">
           <img class="img-responsive" src="photo/transc.jpg" style= "width:150%;padding:10px;">
          <div class="caption">
            <p>view transcation history</p>
			  <a href="view1.php" class="btn btn-info" role="button">VIEW</a>
		      </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="Images/logo.png" target="_blank">
		<img class="img-responsive" src="photo/mtrans.jpg" style="width:120%:padding:8px;">
         <div class="caption">
            <p>Transfer Money</p>
			<a href="view2.php" class="btn btn-info" role="button">VIEW</a>
          </div>
      </a>
      </div>
    </div>
  </div>
</div>
</section>
 <div id="footer">DESIGNED BY-  SHAKTEESH BHAT</div>
                  </div>
</body>
</html>