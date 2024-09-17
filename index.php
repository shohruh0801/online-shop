<?php
require "db.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
    <title>Home</title>  
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .navbar{
            background-color: #232323;
    }
    .navbar a{
        color: white;
    }
    /* .navbar-brand{
       display: ;
    } */
    .navbar-brand h2{
        font-family: sans-serif;
        font-weight: 800;
    }

    span{
        font-weight: 700;
        
        color: red;
    }
    .nav-fl u li a:hover{
        color: white;
    }
 .navbar-toggler-icon{
    color: black;
 }
 /* .nav-fl ul li:before{
    position: absolute;
    content: "";
    width: 0%;
    height: 40px;
    color: red;
    border-bottom: 4px solid red;
    top: 30px;
  
 } */


 /* .nav-fl li {
   cursor: pointer;
  
 } */


 /* .nav-fl li:hover:before {
    transition: scale(1);
    animation: underline 0.5s ease-in-out;
    width: 5%;
   
  
 } */
 @keyframes underline{
    0%{
        width: 0%;
    }
    100%{
        width: 5%;
    }
 }



 @media (width <=990px){
  


    .nav-fl ul li:before{
    position: absolute;
    content: "";
    width: 0%;
    height: 0px;
    border-bottom: none;
    top: 0px;
  
 }

 }
 .corusel img{
    height: 88vh;
 }
 


 .corusel  h4 {
	color: #f33f3f;
	font-size: 22px;
	text-transform: uppercase;
	font-weight: 700;
	margin-bottom: 10px;
}

.corusel h2 {
    margin-bottom: 210px;
	color: #fff;
	font-size: 62px;
	text-transform: uppercase;
	letter-spacing: 5px;
}


.section-heading {
    display: flex;
    /* justify-content: center; */
align-items: center;
	text-align: left;
	margin-bottom: 60px;
	border-bottom: 1px solid #eee;
}

.section-heading h2 {
	font-size: 28px;
	font-weight: 400;
	color: #1e1e1e;
	margin-bottom: 15px;
}


    .section-heading a{
      padding-left: 900px;
        
        font-weight: 700;
        color: red;
        text-decoration: none;
    }
    .latest{
        /* display: flex; */
        
        margin-top: 50px;
    }

    

    @media (width <=1300px){
  


        .section-heading a{
      padding-left: 600px;
        
       
    }

 


    }
    @media (width <=1020px){
  


        .section-heading a{
      padding-left: 400px;
        
       
    }

 


    }
    @media (width <=776px){
  


        .section-heading a{
      padding-left: 100px;
        
       
    }
   


    }
    @media (width <= 460px){
        .section-heading {
 
 display: block;
	border-bottom: 1px solid #eee;
}



  .section-heading a{
padding-left: 10px;

  
 
}
    }

    .card {
background-color: #FFFFFF;
  border: 1px solid #E7E7E7;
  color: black;
  margin-bottom: 2rem;
}
.fa-star{
    font-size: 14px;
    color: #F33F3F;
}
.all-card a{
    color: black;
    font-size: 18px;
    font-weight: 600;
    text-decoration: none;
}
.card-text{
    color: #4A4A4A;
}

.all-card  .rev{
    font-size: 14px;
    color: #F33F3F;
}


.best-features {
	margin-top: 50px;
}

.best-features .container .row {
	border-bottom: 1px solid #eee;
	padding-bottom: 60px;
}

.best-features img {
	width: 100%;
	overflow: hidden;
}

.best-features h4 {
	font-size: 17px;
	color: #1a6692;
	margin-bottom: 20px;
}

.best-features ul.featured-list li {
	display: block;
	margin-bottom: 10px;
}

.best-features p {
	margin-bottom: 25px;
}

.best-features ul.featured-list li a {
	font-size: 14px;
	color: #4a4a4a;
	font-weight: 300;
	transition: all .3s;
	position: relative;
	padding-left: 13px;
}

.best-features ul.featured-list li a:before {
	content: '';
	width: 5px;
	height: 5px;
	display: inline-block;
	background-color: #4a4a4a;
	position: absolute;
	left: 0;
	transition: all .3s;
	top: 8px;
}

.best-features ul.featured-list li a:hover {
	color: #f33f3f;
}

.best-features ul.featured-list li a:hover::before {
	background-color: #f33f3f;
}

.best-features .filled-button {
	margin-top: 20px;
}
.best-features a{
    text-decoration: none;
}
a.filled-button {
	background-color: #f33f3f;
	color: #fff;
	font-size: 14px;
	text-transform: capitalize;
	font-weight: 300;
	padding: 10px 20px;
	border-radius: 5px;
	display: inline-block;
	transition: all 0.3s;
}

a.filled-button:hover {
	background-color: #121212;
	color: #fff;
}





.call-to-action .inner-content {
	margin-top: 60px;
	padding: 30px;
	background-color: #f7f7f7;
	border-radius: 5px;
}

.call-to-action .inner-content h4 {
	font-size: 17px;
	color: #1a6692;
	margin-bottom: 15px;
}

.call-to-action .inner-content em {
	font-style: normal;
	font-weight: 700;
}

.call-to-action .inner-content .col-md-4 {
	text-align: right;
}

.call-to-action .inner-content .filled-button {
	margin-top: 12px;
}
.call-to-action a{
    text-decoration: none;
}
footer a{
    text-decoration: none;
}






footer {
	text-align: center;
}

footer .inner-content {
	border-top: 1px solid #eee;
	margin-top: 60px;
	padding: 60px 0px;
}

footer .inner-content p {
	text-transform: uppercase;
}

footer .inner-content p a {
	color: #f33f3f;
	margin-left: 3px;
}



    
</style>
<body>
    <nav class="navbar navbar-expand-lg  ">
        <div class="container-fluid container nav-fl">
          <a class="navbar-brand" href="#">
          <h3>SIXTEEN <span>CLOTHING</span></h2>
          </a>
          <button class="navbar-toggler bg-light"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars" style="color: #F33F3F"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active " style="color: #Fff"  href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  style="color: #fff"  href="products.php">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  style="color: #fff"  href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #fff"  href="contact.php" >Contact Us</a>
              </li>
              <li class="nav-item">   
                <a class="nav-link"  style="color: #fff" href="ad.php"> Admin</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="corusel">
       
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="./img/slide_01.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h4>BEST OFFER</h4>
                  <h2>New Arrivals On Sale</h2>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="./img/slide_02.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Flash Deals</h4>
                    <h2>Get your best products</h2>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./img/slide_03.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Last Minute</h4>
                    <h2>Grab last minute deals</h2>
                </div>
              </div>
              <?php 
              $admininform = mysqli_query($conn, "SELECT * FROM corusel");


$serinform = "SELECT * FROM corusel";
$serresult = mysqli_query($conn,$serinform);
if (mysqli_num_rows($serresult )> 0 ) {
while ($serrow = mysqli_fetch_assoc($serresult)){
?>

              <div class="carousel-item">
                <img src="./upload/<?php echo $serrow['img'] ?>"class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4><?php echo $serrow['title'] ?></h4>
                    <h2><?php echo $serrow['header'] ?></h2>
                </div>
              </div>

              <?php
    }
  }
  ?>

            </div>
      
          </div>
      </div>


      <div class="col-md-12 container latest">
        <div class="section-heading">
          <h2>Latest Products</h2>
          <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
        </div>
      </div>

      <div class="container mx-auto mt-4 all-card">
        <div class="row">
          <div class="col-md-4">
            <div class="card" style="width: 22rem;">
        <img src="./img/product_01.jpg" class="card-img-top" alt="...">
        <div class="card-body">
         <a href="">Tittle goes here</a>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

         <a href="">$20.35</a>
          <p class="card-text">Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
             <a href="#" class=" mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></a> 
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <a href="#" class="rev">  Reviews(21)</a>
        </div>
        </div>
          </div>    
             <div class="col-md-4">
      <div class="card" style="width: 22rem;">
        <img src="./img/product_02.jpg" class="card-img-top" alt="...">
        <div class="card-body">
         <a href="">Tittle goes here</a>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

         <a href="">$20.35</a>
          <p class="card-text">Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
          <a href="#" class=" mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></a> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <a href="#" class="rev">  Reviews(21)</a>
        </div>
        </div>
          </div>    
                <div class="col-md-4">
      <div class="card" style="width: 22rem;">
        <img src="./img/product_03.jpg" class="card-img-top" alt="...">
        <div class="card-body">
         <a href="">Tittle goes here</a>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

         <a href="">$20.35</a>
          <p class="card-text">Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
          <a href="#" class=" mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></a> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <a href="#" class="rev">  Reviews(21)</a>
        </div>
        </div>
        </div>
          
          <div class="col-md-4">
            <div class="card" style="width: 22rem;">
                <img src="./img/product_04.jpg" class="card-img-top" alt="...">
                <div class="card-body">
         <a href="">Tittle goes here</a>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

         <a href="">$20.35</a>
          <p class="card-text">Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
             <a href="#" class=" mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></a> 
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

             <a href="#" class="rev">  Reviews(21)</a>
            </div>
        </div>
          </div>    
             <div class="col-md-4">
      <div class="card" style="width: 22rem;">
        <img src="./img/product_05.jpg" class="card-img-top" alt="...">
        <div class="card-body">
         <a href="">Tittle goes here</a>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

         <a href="">$20.35</a>

          <p class="card-text">Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
          <a href="#" class=" mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></a> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <a href="#" class="rev">  Reviews(21)</a>
        </div>
        </div>
          </div>    
                <div class="col-md-4">
      <div class="card" style="width: 22rem;">
        <img src="./img/product_06.jpg" class="card-img-top" alt="...">
        <div class="card-body">
         <a href="">Tittle goes here</a>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

         <a href="">$20.35</a>
          <p class="card-text ">Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
          <a href="#" class=" mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></a> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="#" class="rev">  Reviews(21)</a>
        </div>
        </div>
        </div>

        <?php 
        $serinform = "SELECT * FROM cards";


$serinform = "SELECT * FROM cards";
$serresult = mysqli_query($conn,$serinform);
if (mysqli_num_rows($serresult )> 0 ) {
while ($serrow = mysqli_fetch_assoc($serresult)){
?>
                <div class="col-md-4">
      <div class="card" style="width: 22rem;">
        <img src="./upload/<?php echo $serrow['img'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
         <a href=""><?php echo $serrow['title'] ?></a>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

         <a href=""><?php echo $serrow['price'] ?></a>
          <p class="card-text "><?php echo $serrow['header'] ?></p>
          <a href="#" class=" mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></a> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="#" class="rev">  Reviews(21)</a>
        </div>
        </div>
        </div>
        <?php

    }
  }


  
  ?>
          
        
      </div>
        </div>



        <div class="best-features">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="section-heading">
                    <h2>About Sixteen Clothing</h2>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="left-content">
                    <h4>Looking for the best products?</h4>
                    <p><a rel="nofollow" href="#link">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
                    <ul class="featured-list">
                      <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                      <li><a href="#">Consectetur an adipisicing elit</a></li>
                      <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                      <li><a href="#">Corporis, omnis doloremque</a></li>
                      <li><a href="#">Non cum id reprehenderit</a></li>
                    </ul>
                    <a href="about.html" class="filled-button">Read More</a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="right-image">
                    <img src="./img/feature-image.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          
    <div class="call-to-action">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="inner-content">
                <div class="row">
                  <div class="col-md-8">
                    <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                  </div>
                  <div class="col-md-4">
                    <a href="#" class="filled-button">Purchase Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="inner-content">
                <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.
              
              - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <script>
    
  </script>
  
      
</body>

</html>
