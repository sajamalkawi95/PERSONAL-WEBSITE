<!DOCTYPE html>
<!-- Fig. 4.3: embedded.html -->
<!-- Embedded style sheets. -->
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
 <!-- this begins the style sheet section -->
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
     <?php 
include("heder.php");
?>
    
<nav class="navbar navbar-expand-md   navbar-dark justify-content-center">
<a class="navbar-brand" href="#">  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <center>  <div class="collapse navbar-collapse"  style="background: rgba(0, 0, 0, 0.78);" id="collapsibleNavbar">
    <ul class="nav nav-tabs">
    <li class="nav-item">
        <a  class="nav-link " href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="courses.php">courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutme.php">Abute Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="galary.php">Galary</a>
      </li>   
      <li class="nav-item">
        <a class="nav-link " href="contact.php"> keep in touch </a>
      </li>   
    </ul>    
  </div>  
   </center> 
    
</nav>



<center>
<div class="container" style=" height: 80%; background: rgba(0, 0, 0, 0.78);" >
        <div class="row d-flex "  >
          <div class="col-lg-4 d-flex col-sm-4" style="margin-top:5% "  >
               <img class="mySlides" src="1.jpg" style="width:100% ;  right: 0px; opacity: 50%; height:90%"> 
          </div>
          <div class="col-lg-4 d-flex col-sm-4" style="margin-top:5% " >
              <img class="mySlides" src="2.jpg" style="width:100% ;  right: 0px; opacity: 50%; height:90%">
          </div>
          <div class="col-lg-4 d-flex col-sm-4" style="margin-top:5%"  >
	            	<img class="mySlides" src="5.jpg" style="width:100% ;  right: 0px; opacity: 50%; height:90%">
           </div>
        </div>  
        <div class="row d-flex " >
          <div class="col-lg-4 d-flex col-sm-4"  >
               <img class="mySlides" src="3.jpg" style="width:100% ;  right: 0px; opacity: 50%; height:90%">
          </div>
          <div class="col-lg-4 d-flex col-sm-4"  >
              <img class="mySlides" src="4.jpg" style="width:100% ;  right: 0px; opacity: 50%; height:90%">
          </div> 
          <div class="col-lg-4 d-flex col-sm-4"  >
               <img class="mySlides" src="7.jpg"style="width:100% ;  right: 0px; opacity: 50%;  height:90%">
           </div>
       </div>

      
      
</div>


	 
</center>
 </body>