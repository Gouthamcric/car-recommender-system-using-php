<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NayaGaadi's Car Generator</title>
  <link rel="stylesheet" href="css/landing.css" type="text/css">
  <script src="js/landing.js"></script>
     
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/jquery.js" type="text/javascript"></script>
        
</head>
<body>
      <script>  
             $(document).ready(function(){
   alert("hello");
    document.getElementById("submit").onclick = function() {
        var values=document.getElementById("name").value +",";
                       values += document.getElementById("email").value+",";
                       values += document.getElementById("phone").value; 
       // var values= "goutham,gou@gmail.com,9340554408";              
        alert(values);
        $.ajax({
          url:"user_info.php",
            method:"POST",
            data:{values:values},
            dataType:"text",
                success:function(data)
           {
              $("#main").html(data);
            
            }
            });
                 };
             });
         
               </script>
    <header id="header">
      <div id="logo-name">
      <img id="header-img" src="https://image.flaticon.com/icons/svg/831/831763.svg" alt="company-logo">
        <p id="company-name">NayaGaadi</p>
        </div>
      <nav id="nav-bar">
        <ul class="ul-container">
          <li><a class="nav-link" href="#services">Services</a></li>
          <li><a class="nav-link" href="#features">Features</a></li>
          <li><a class="nav-link" href="#pricing">Pricing</a></li>
        </ul>
      </nav>
    </header>
  <div id="form" >
    <h1 id="form-h1">Ultimate Solution for Your<br>vehile search</h1>
    <input type="text"  id="name" placeholder="Enter your Name" required >
     <input type="email"  id="email" placeholder="Enter your Email" required >
      <input type="text"  id="phone" placeholder="Enter your phone" required >
   
    <button  id="submit" name="submit" >Get Started</button>
  </div>
    <div id="main"></div>
  
  <div class="container">
    <section id="services">
      <div class="grid-header">
        <h1>Our <span>services</span></h1>
        <p><br>NayaGaadi.com's Car Recommender Performs a car(vehicle) search based on features/criteria <br>most vital to the customer/user, and he/she should able 
to discover cars according to his/her selections..</p>
      </div>
   
     
  </div>
</body>
</html>