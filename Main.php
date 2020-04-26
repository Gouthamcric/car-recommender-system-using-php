<!-- should visit http://ionden.com/a/plugins/ion.rangeSlider/demo_interactions.html 2/07/19 -->
<html>
    <head>
       <meta charset="utf-8">

  <title>NayaGaadi's Car Generator</title>
  <link rel="stylesheet" href="css/landing.css" type="text/css">
  <script src="js/landing.js"></script>
     
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        
<link rel="stylesheet" href="css/rSlider.min.css">

<script src="js/rSlider.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <style>
    
     :root{ --main-color: #e74c3c; }
.product-grid{
    font-family: 'Roboto', sans-serif;
    position: relative;
}
.product-grid .product-image{
    overflow: hidden;
    position: relative;
}
.product-grid .product-image:before{
    content: "";
    background: rgba(0,0,0,0.3);
    width: 100%;
    height: 100%;
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    transition: all 0.4s ease-out 0s;
}
.product-grid:hover .product-image:before{ opacity: 1; }
.product-grid .product-image a{ display: block; }
.product-grid .product-image img{
    width: 100%;
    height: auto;
}
.product-image .pic-1{
    opacity: 1;
    backface-visibility: hidden;
    transition: all 0.4s ease-out 0s;
}
.product-grid:hover .product-image .pic-1{ opacity: 0; }
.product-image .pic-2{
    width: 100%;
    height: 100%;
    opacity: 0;
    backface-visibility: hidden;
    transform: scale(3);
    position: absolute;
    top: 0;
    left: 0;
    transition: all 0.4s ease-out 0s;
}
.product-grid:hover .product-image .pic-2 {
    opacity: 1;
    transform: scale(1);
}
.product-image .product-trend-label,
.product-image .product-discount-label{
    content: "";
    color: #fff;
    background-color: #2ecc71;
    font-size: 12px;
    line-height: 28px;
    font-weight: 700;
    text-align: center;
    text-transform: uppercase;
    padding: 0 7px;
    position: absolute;
    top: 12px;
    left: 12px;
    z-index: 3;
}
.product-image .product-discount-label{
    background-color: var(--main-color);
    left: auto;
    right: 12px;
}
.product-grid .social {
    padding: 0;
    margin: 0;
    list-style: none;
    transform: translateY(-50%);
    position: absolute;
    top: 50%;
    left: 10px;
    z-index: 4;
}
.product-grid .social li {
    margin: 0 0 12px;
    opacity: 0;
    transform: translateX(-60px);
    transition: transform .3s ease-out 0s;
}
.product-grid:hover .social li {
    opacity: 1;
    transform: translateX(0);
}
.product-grid:hover .social li:nth-child(2){ transition-delay: 0.1s; }
.product-grid:hover .social li:nth-child(3){ transition-delay: 0.2s; }
.product-grid:hover .social li:nth-child(4){ transition-delay: 0.3s; }
.product-grid .social li a {
    color: #fff;
    font-size: 22px;
    transition: all 0.3s;
}
.product-grid .social li a:hover { color : var(--main-color); }
.product-grid .social li a:before,
 .product-grid .social li a:after{
    content: attr(data-tip);
    color: #000;
    background: #fff;
    font-size: 14px;
    padding: 5px 10px;
    white-space: nowrap;
    display: none;
    transform: translateY(-50%);
    position: absolute;
    left: 33px;
    top: 50%;
    transition: all 0.3s;
}
.product-grid .social li a:after{
    content: '';
    background: linear-gradient(-45deg, #fff 49%, transparent 50%);
    width: 10px;
    height: 10px;
    top: 40%;
    left: 20px;
}
.product-grid .social li a:hover:before,
.product-grid .social li a:hover:after{
      display: block;
}
.product-grid .product-content{ padding: 12px 0; }
.product-grid .title{
    font-size: 15px;
    font-weight: 400;
    text-transform: capitalize;
    margin: 0 0 5px;
}
.product-grid .title a{ color: #959595; }
.product-grid .title a:hover{ color: var(--main-color); }
.product-grid .price{
    color: #333;
    font-size: 14px;
    font-weight: 400;
}
.product-grid .price span{
    color: #333;
    text-decoration: line-through;
    margin-right: 3px;
}
.product-grid .price.discount{ color: var(--main-color); }
@media only screen and (max-width:990px){
    .product-grid{ margin-bottom: 30px; }
}
    
    </style>
 <link rel="stylesheet" type="text/css" href="css/style2.css"> 

 <link rel="stylesheet" type="text/css" href="css/footer.css">

  <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> -->
   <link rel="stylesheet" href="css/swiper.min.css">
   <style>
    body {
     
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
    }
    
.containe {

}

.rating {
  display: flex;
  width: 100%;
  justify-content: center;
  overflow: hidden;
  flex-direction: row-reverse;
  height: 150px;
  position: relative;
}

.rating-0 {
  filter: grayscale(100%);
}

.rating > input {
  display: none;
}

.rating > label {
  cursor: pointer;
  width: 40px;
  height: 40px;
  margin-top: auto;
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23e3e3e3' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: center;
  background-size: 76%;
  transition: .3s;
}

.rating > input:checked ~ label,
.rating > input:checked ~ label ~ label {
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23fcd93a' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
}


.rating > input:not(:checked) ~ label:hover,
.rating > input:not(:checked) ~ label:hover ~ label {
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23d8b11e' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
}

.emoji-wrapper {
  width: 100%;
  text-align: center;
  height: 100px;
  overflow: hidden;
  position: absolute;
  top: 0;
  left: 0;
}

.emoji-wrapper:before,
.emoji-wrapper:after{
  content: "";
  height: 15px;
  width: 100%;
  position: absolute;
  left: 0;
  z-index: 1;
}

.emoji-wrapper:before {
  top: 0;
  background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 35%,rgba(255,255,255,0) 100%);
}

.emoji-wrapper:after{
  bottom: 0;
  background: linear-gradient(to top, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 35%,rgba(255,255,255,0) 100%);
}

.emoji {
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: .3s;
}

.emoji > svg {
  margin: 15px 0; 
  width: 70px;
  height: 70px;
  flex-shrink: 0;
}

#rating-1:checked ~ .emoji-wrapper > .emoji { transform: translateY(-100px); }
#rating-2:checked ~ .emoji-wrapper > .emoji { transform: translateY(-200px); }
#rating-3:checked ~ .emoji-wrapper > .emoji { transform: translateY(-300px); }
#rating-4:checked ~ .emoji-wrapper > .emoji { transform: translateY(-400px); }
#rating-5:checked ~ .emoji-wrapper > .emoji { transform: translateY(-500px); }

.feedback {
  max-width: 360px;
  background-color: #fff;
  width: 100%;
  padding: 30px;
  border-radius: 8px;
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  align-items: center;
  box-shadow: 0 4px 30px rgba(0,0,0,.05);
}
  * {
  box-sizing: border-box;
}

body {

}

.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top: 10px;
}

.middle {
  float: left;
  width: 70%;
  margin-top: 10px;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  /* Hide the right column on small screens */
  .right {
    display: none;
  }
}

  </style>
    
    <!--jQuery-->
 
    <!--Plugin JavaScript file-->>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    </head>
<body>
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
    <script>
        var from;
        var to;
    function a(){ 
;   
 
  };
        
        
             </script>
                <script>  
             $(document).ready(function(){

    document.getElementById("submit").onclick = function() {
        var values=document.getElementById("name").value +",";
                       values += document.getElementById("email").value+",";
                       values += document.getElementById("phone").value; 
       // var values= "goutham,gou@gmail.com,9340554408";              
      
        $.ajax({
          url:"user_info.php",
            method:"POST",
            data:{values:values},
            dataType:"text",
                success:function(data)
           {
           document.getElementById("main").style.display= "block";
            
            }
            });
                 };
             });
         
               </script>
               <div id="form" >
    <h1 id="form-h1">Ultimate Solution for Your<br>vehile search</h1>
    <input type="text"  id="name" placeholder="Enter your Name" required >
     <input type="email"  id="email" placeholder="Enter your Email" required >
      <input type="text"  id="phone" placeholder="Enter your phone" required >
   
    <button  id="submit" name="submit" >Get Started</button>
  </div>
   
  
  <div class="container">
    <section id="services">
      <div class="grid-header">
        <h1>Our <span>services</span></h1>
        <p><br>NayaGaadi.com's Car Recommender Performs a car(vehicle) search based on features/criteria <br>most vital to the customer/user, and he/she should able 
to discover cars according to his/her selections..</p>
      </div>
    </section>
      <hr style="color:white">
     
  </div>
 
    <div class="row"  style="margin-top:-150px;">
        <div class="container">
            
    <div class="row" >
                      <h1 class=" col-md-2 " id="form-h1"> 1.Budget</h1>
                     </div>
    <div class="row" style="margin-top:20px;margin-left:-45px;margin-right:-45px"> <div class="col-md-12">
                    
                            <input type="text" id="slider" class="slider"  >      
 

<script type="text/javascript">


var mySlider = new rSlider({


    target: '#slider',

    values: [200000,400000,600000,800000,1000000,1200000,1400000,1600000,1800000,2000000,2200000,2400000,2600000,2800000,3000000,3200000,3400000,3600000,3800000,4000000,4200000,4400000,4600000,4800000,5000000],

    range: true // range slider

});
    $(document).ready(function(){
       

    
  
   
         
        var arr; 
        
        document.getElementById("id1").onclick = function() {
                           var values=mySlider.getValue()+",";
                     
       // values += $(this).val()+",";
        $.ajax({
          url:"price.php",
            method:"POST",
            data:{values:values},
            dataType:"text",
                success:function(data)
           {
               arr=data.split("*");
            
               if((arr[0])!==""){
                   alert(arr[1]);
              $('#ele1').html(arr[1]);
              $("#ele3").html(arr[0]);
               }
              
               else{
                  
             $("#ele3").html("No Result!!!!!");
                   
               }
        
          
            }
            });
      
        
                 };
                
             });
var rdType="";
var usg="";
var fuelPrefer="";
var bodyStyle="";
var keyConsider="";
var userInfo="";
var features="";

</script>    </div>
                          </div>  
        </div>
        <div class="col-md-offset-5">
     <button class="btn btn-dark" style="margin-top:-60px;padding-left:40px;padding-right:40px;" id="id1">Next</button>        
   
        </div>
        <div id="ele1"></div>
        <div id="ele2" ></div>
        <div id="ele4"></div>
        <div id="ele5"></div>
        <div id="ele6"></div>
        <div id="ele7"></div>
        <div id="ele8"></div>
        <div id="ele9"></div>
        <div id="ele10"></div>
        <div id="ele11"></div>
         
        </div>
             <br>
             <h1 class='col-md-2' id='form-h1' style="margin-left:80px;margin-top:-40px"> Result_Window</h1>
              <div class="swiper-container">
    <div class="swiper-wrapper" id="ele3">
   

</div>
</div>
             
  <div class="swiper-pagination" style="margin-left:630px;margin-top:-200px"></div>
      <script type="text/javascript" src="slick/slick.min.js"></script>


<script src="js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
   <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      centeredSlides: true,
      spaceBetween: 30,
      grabCursor: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      }
    });
  </script>
  <!-- rate us -->
  <div class="row">
<div class="col-md-4" style="margin-left:65px;">
    <h1 style="color:white;margin-top:-160px" >Rate Us</h1>
  <div class="feedback">
    <div class="rating">
      <input type="radio" name="rating" id="rating-5">
      <label for="rating-5"></label>
      <input type="radio" name="rating" id="rating-4">
      <label for="rating-4"></label>
      <input type="radio" name="rating" id="rating-3">
      <label for="rating-3"></label>
      <input type="radio" name="rating" id="rating-2">
      <label for="rating-2"></label>
      <input type="radio" name="rating" id="rating-1">
      <label for="rating-1"></label>
      
      <div class="emoji-wrapper">
        <div class="emoji">
          <svg class="rating-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
          <path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534"/>
          <ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff"/>
          <ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347"/>
          <ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63"/>
          <ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff"/>
          <ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347"/>
          <ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63"/>
          <path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347"/>
        </svg>
          <svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
          <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
          <path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347"/>
          <path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z" fill="#f4c534"/>
          <path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff"/>
          <path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347"/>
          <path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff"/>
          <path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z" fill="#f4c534"/>
          <path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff"/>
          <path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347"/>
          <path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff"/>
        </svg>
          <svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
          <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
          <path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347"/>
          <path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff"/>
          <circle cx="340" cy="260.4" r="36.2" fill="#3e4347"/>
          <g fill="#fff">
            <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10"/>
            <path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z"/>
          </g>
          <circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347"/>
          <ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff"/>
        </svg>
          <svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
    <path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347"/>
    <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
    <g fill="#fff">
      <path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z"/>
      <ellipse cx="356.4" cy="205.3" rx="81.1" ry="81"/>
    </g>
    <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
    <g fill="#fff">
      <ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1"/>
      <ellipse cx="155.6" cy="205.3" rx="81.1" ry="81"/>
    </g>
    <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
    <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff"/>
  </svg>
          <svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
          <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
          <path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
          <path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f"/>
          <path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
          <path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
          <path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f"/>
          <path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
          <path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347"/>
          <path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b"/>
        </svg>
          <svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <g fill="#ffd93b">
            <circle cx="256" cy="256" r="256"/>
            <path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z"/>
          </g>
          <path d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z" fill="#e9eff4"/>
          <path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea"/>
          <path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88"/>
          <g fill="#38c0dc">
            <path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z"/>
          </g>
          <g fill="#d23f77">
            <path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z"/>
          </g>
          <path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347"/>
          <path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b"/>
          <path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2"/>
        </svg>
        </div>
      </div>
    </div>
      <button  id="rate"  >Rate</button>
  </div>
</div>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <div class="col-md-offset-1 col-md-6" style="margin-top:-160px">
<span class="heading" style="color:white">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p style="color:white">4.1 average based on 254 reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side" style="padding-left:50px">
    <div style="color:white">5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container" >
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right" style="margin-left:-70px">
    <div style="color:white">150</div>
  </div>
  <div class="side" style="padding-left:50px">
    <div style="color:white">4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right" style="margin-left:-70px">
    <div style="color:white">63</div>
  </div>
  <div class="side" style="padding-left:50px">
    <div style="color:white">3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right" style="margin-left:-70px">
    <div style="color:white">15</div>
  </div>
  <div class="side" style="padding-left:50px">
    <div style="color:white">2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right" style="margin-left:-70px">
    <div style="color:white">6</div>
  </div>
  <div class="side" style="padding-left:50px">
    <div style="color:white">1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right" style="margin-left:-70px">
    <div style="color:white">20</div>
  </div>
</div>
</div>
  </div>
   
<a href="test1.php">Cilck here to download your result</a>

    <?php include 'footer.php';  ?>  
</body>

</html>