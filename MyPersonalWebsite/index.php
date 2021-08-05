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
 //** */

 </style>
 </head>
 <body>
 <div style="opacity: 30%; background-color: blueviolet; height: 100%; width: 100%;left: 0; top: 0; overflow: hidden; position: fixed;"></div>

 <nav class="navbar navbar-expand-md   navbar-dark justify-content-center">
<a class="navbar-brand" href="#">  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
   <center>  <div class="collapse navbar-collapse" style="background: rgba(0, 0, 0, 0.78);" id="collapsibleNavbar">
 <ul class="nav nav-tabs justify-content-center" >
    <li class="nav-item">
        <a  class="nav-link active" href="index.php">Home</a>
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
        <a class="nav-link " href="contact.php"> keep in touch </a>
      </li>   
    </ul>    
  </div>   </center> 
    
</nav>
 <div class="container-fluid" style=" padding-top: 10% ;">
 <div class="row" >
 <div class="col-3" style="margin: 1%;" >
 
  </div>
  <div class="col-6" style="margin-left: 20%" > 
  <div style=" background: rgba(0, 0, 0, 0.88); color:white  ; padding:5%">
  
  
     <h1 style=" font-size: 48px;  margin: 0;  padding: 0;  line-height: 1;  font-weight: 700; font-family: Poppins, sans-serif;"><a href="aboutme.php">Emily Jones</a></h1>
     
       <a href="aboutme.php" class="mr-auto"><img style="width: 20%; height: 20%" src="clipart-telephone-telephone-operator-7.png" alt="" class="img-fluid"></a>
      <h2 style="font-size: 24px;   margin-top: 20px; color: rgba(255, 255, 255, 0.8);">I'm a passionate Web Devoloper  from Jordan</h2>

    </div>
  </div>
</div>
 </div>

 </body>
</html>