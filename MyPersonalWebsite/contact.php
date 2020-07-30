<?php
require("conn.php");
if(isset($_POST['send'])){

  $name=$_POST["name"];
 $subject=$_POST["subject"];
 $message=$_POST["message"];
 $email=$_POST["email"];
$up=mysqli_query($con,"INSERT INTO `messages`(`Name`, `email`, `subject`, `message`, `Time`) VALUES ('$name','$email','$subject','$message',CURRENT_TIMESTAMP)");
 
}?>
<!DOCTYPE html>

<html>
 <head>
 <meta charset = "utf-8">
 <title>Embedded Style Sheet</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <script src='https://kit.fontawesome.com/a076d05399.js'></script>
 <style type = "text/css">
body{ 
     background-image: url("https://solidlabs.wpengine.com/wp-content/uploads/2017/03/binary-1327493-1024x684.jpg");
     background-attachment: fixed;
     background-repeat: no-repeat;
     background-size: cover;
     color: white;
     
 }
 </style>
 </head>
 <body>

 <nav class="navbar navbar-expand-md   navbar-dark justify-content-center">
<a class="navbar-brand" href="#">  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <center> 
  <div class="collapse navbar-collapse" style="background: rgba(0, 0, 0, 0.78);" id="collapsibleNavbar">
    <ul class="nav nav-tabs">
    <li class="nav-item">
        <a  class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="courses.php">courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutme.php">Abute Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="galary.php">Galary</a>
      </li>   
      <li class="nav-item">
        <a class="nav-link active" href="contact.php"> keep in touch </a>
      </li>   
    </ul>
 
  </div>  
</center>

  
</nav>
<div class="container" style="background: rgba(119,136,153, 0.78);" >
        <div class="row"  style="padding: 5% ;   display: flex; ">
          <div class="col-lg-6 d-flex col-sm-6" style=" padding-top: 2%; ; margin:0% ;  " >
              <div class="row"   style="padding-top: 2%; background: rgba(0, 0, 0, 0.85);">
                   <div class="col-1" style="padding-right:11%" >
                     <i class="material-icons" style="font-size:50px;color:gray">person_pin_circle</i> 
                     </div>
                   <div class="col" >
                        <h3> My Address</h3>
                        <p>A108 Adam Street, New York, NY 535022</p>
                   </div>
              </div>
          </div>
      

          <div class="col-lg-6 col-sm-6" style=" padding-top: 2%; ;  " >
              <div class="row"   style="padding-top: 2%;background: rgba(0, 0, 0, 0.85);">
                      <div class="col-1" style="padding-right:11% ; padding-left: 15%" >
                           <i  class="fas fa-share-alt" style="font-size:40px;color:gray"></i> 
                        </div>
                       <div class="col" >
                               <h3 style="padding-left: 15%">Social Profiles</h3>
                               <div>
                                <!--Facebook-->
                                   <a  href="#" class="btn-floating btn-lg btn-fb" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
                                 <!--Google +-->
                                  <a  href="#" class="btn-floating btn-lg btn-gplus" type="button" role="button"><i class="fab fa-google-plus-g"></i></a>
                               <!--Linkedin-->
                                  <a  href="#" class="btn-floating btn-lg btn-li" type="button" role="button"><i class="fab fa-linkedin-in"></i></a>
                               <!--Instagram-->
                                   <a href="#" class="btn-floating btn-lg btn-ins" type="button" role="button"><i class="fab fa-instagram"></i></a>
                              </div> 
                       </div>
                     </div>
          </div>


        </div>
        <div class="row"  style=" padding-top:2%;">
           <div class="col-lg-6 col-sm-6" style="padding:5% ;padding-right:10%">
                   <div class="row" style=" background: rgba(0, 0, 0, 0.85); padding: 3%;">
                      <div class="col-1"  style="padding:1%"  >
                            <i class="fas fa-envelope" style="font-size:40px;color:gray"> </i>
                        </div>
                       <div class="col" >
             
                              <h3 style="padding-left:3%">  <h3>Email Me</h3>
                            contact@example.com    
                      </div>
                           
                               
                                 
                    </div>
             </div>
        

            <div class="col-lg-6 col-sm-6" style="padding:5%">
                   <div class="row" style=" background: rgba(0, 0, 0, 0.85); padding: 3%;">
                      <div class="col-1" style="padding-right:11%"  >
                      <i class="fa fa-phone" style="font-size:40px;color:gray ;" aria-hidden="true"></i>
                      </div>
                       <div class="col" >
             
                              <h3 >  <h3>Call Me</h3>
                           07545468454 
                      </div>
                           
                               
                                 
                    </div>
            </div>
            </div>
            
       <center> 
       <div class="col-lg-6 col-sm-6" style="background: rgba(0, 0, 0, 0.35);">
         <h1 > send message to me </h1>
        <form action="#" method="post"  >
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
           
          </div>
          <div class="col-md-6 form-group">
            <input type="text" class="form-control" name="email"  placeholder="Your Email"  data-msg="Please enter a valid email" />
           
          </div>
        </div>
   
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
           
            <br>
       
          <textarea class="form-control" rows="3" data-rule="required" name="message" placeholder="Message"></textarea>
      
              <br>
         <button name="send" type="submit" class="btn-secondary">Send Message</button>
      </form>
    </center>
</div> 

      

 


    </body>