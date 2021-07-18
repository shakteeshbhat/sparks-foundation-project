<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="style.css">
<style>


body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}

.contact-form{
    background: #fff;
    margin-top: 8%;
    margin-bottom: 3%;
    width: 50%;
}

.contact-form .form-control{
    border-radius:1rem;
}

.contact-image{
    text-align: center;
}

.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}

.contact-form form{
    padding: 14%;
}

.contact-form form .row{
    margin-bottom: -7%;
}

.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}

.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}

.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}

</style>

</head>

<!------ Include the above in your HEAD tag ---------->
<body>
     <nav>
        <div class ="nav-links">
           <ul>
              <li ><a href="home.php">HOME</a></li>		   
			  <li><a href="about.php">ABOUT US</a></li>		   
			  <li class="active"><a href="contact.php">CONTACT US</a></li>	
              <li><a href="index.php"><i class='fas fa-arrow-circle-left' style='font-size:36px;color:#fff'></i></a></li>			  
            </ul>
          </div>
       </nav>


<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>
</body>
</html>
