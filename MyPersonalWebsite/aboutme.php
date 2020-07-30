<?php
require("conn.php");
if(isset($_POST['update'])){
  $phone=$_POST["phone"];
 $birth_date=$_POST["birth_date"];
 $website=$_POST["website"];
 $city=$_POST["city"];
 $age=$_POST["age"];
$User_email=$_POST["email"];
$up=mysqli_query($con,"UPDATE `user_data` SET 
`User_email`='$User_email' , `phone`='$phone' ,`birth_date`='$birth_date' ,`website`='$website' ,`city`='$city' ,`age`='$age'
 WHERE `User_id`='1'");
}

?>
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

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <!-- this begins the style sheet section -->
 <style type = "text/css">
 body{ 
     background-image: url("https://solidlabs.wpengine.com/wp-content/uploads/2017/03/binary-1327493-1024x684.jpg");
     background-attachment: fixed;
     background-repeat: no-repeat;
     background-size: cover;
     color: white;
     
 }

  h3 {
  font-weight: 700;
  font-size: 26px;
  color: #18d26e;
}

ul {
  list-style: none;
  padding: 0;
}
 ul li {
  padding-bottom: 10px;
}
ul i {
  font-size: 20px;
  padding-right: 2px;
  color: #18d26e;
  background-color: black;
}
 
 </style>
 </head>
 <body>
 <div style="opacity: 30%; background-color: blueviolet; height: 100%; width: 100%;left: 0; top: 0; overflow: hidden; position: fixed;"></div> 

 <nav class="navbar navbar-expand-md   navbar-dark justify-content-center">
<a class="navbar-brand" href="#">  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <center>  <div class="collapse navbar-collapse " style="background: rgba(0, 0, 0, 0.78);" id="collapsibleNavbar">
    <ul class="nav nav-tabs justify-content-center">
    <li class="nav-item">
        <a  class="nav-link " href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="courses.php">courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="aboutme.php">Abute Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="galary.php">Galary</a>
      </li>   
      <li class="nav-item">
        <a class="nav-link " href="contact.php"> keep in touch </a>
      </li>   
    </ul>
  </div>       </center> 
    
</nav>

<div class="container" style="background: rgba(119,136,153, 0.58);" >
     
<?php
 $Q=mysqli_query($con,"SELECT `User_email`, `phone`, `birth_date`, `website`, `city`, `age` FROM `user_data` WHERE `User_id`='1'");
while($row = mysqli_fetch_assoc($Q)){
 $phone=$row['phone'];
 $birth_date=$row['birth_date'];
 $website=$row['website'];
 $city=$row['city'];
 $age=$row['age'];
$User_email=$row['User_email'];
}?> 

           <div class="col" style="  font-size: 14px; padding-left: 30%; letter-spacing: 2px; text-transform: uppercase; color: #aaaaaa; font-family: Poppins, sans-serif;">

<h2>About</h2>
         <p>Learn more about me</p>
      </div>
          <div class="row" style="margin-right: 10% ; margin-left: 10%"> 
       
     <div class="col-lg-6 "  >
       
      
              <ul >
                <li><i class="fa fa-chevron-right" ></i> <strong >Birthday:</strong> <?=  $birth_date  ?> </li>
                <li><i class="fa fa-chevron-right"></i> <strong>Website:</strong>   <?=  $website ?> </li>
                <li><i class="fa fa-chevron-right"></i> <strong>Phone:</strong> <?= $phone ?>   </li>
                
                </ul>
        </div>
      <div class="col-lg-6 "  >
        
       
        <ul >
                <li><i class="fa fa-chevron-right"></i> <strong style="text-align: end">City:</strong>  <?= $city ?>  </li>
                <li><i class="fa fa-chevron-right"></i> <strong> Email :</strong>  <?= $User_email ?>  </li>
                <li><i class="fa fa-chevron-right"></i> <strong> AGE :</strong>  <?= $age ?>  </li>
        </ul>
</div>
           </div>
           
<div class="row"style="margin-right: 15% ; margin-left: 15%">



        <div class="col-lg-6 "  >
        
        <center> 
        <form action="aboutme.php" method="post">
        <h2>Edit</h2>
          
            <input type="text" name="birth_date" class="form-control" placeholder="Edit Birthday" />
            <br>
            <input type="text" name="website" class="form-control"  placeholder="Edit Website" />
            <br>
            <input type="text" name="phone" class="form-control" id="name" placeholder="Edit Phone" />
            <br>
          
            <input type="text" name="city" class="form-control" id="name" placeholder="Edit City" />           
            <br>
         
        
   
            <input type="text" name="email" class="form-control" id="name" placeholder="Edit Email" />           
            <br>
       
            <input type="text" name="age" class="form-control" id="name" placeholder="Edit AGE" />      
              <br>
         <button name="update" type="submit" class="btn-secondary">Send Message</button>
      </form>
    </center>

        </div>
        <div class="col-lg-6 " >
<img style="width: 50%; height: 70% ;margin-top: 5%" src="1.png" alt="" class="img-fluid">

</div>
</div>
</div>
 </body>