<?php
require "./db.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Product</title>
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
/* 

 .nav-fl li {
   cursor: pointer;
  
 }


 .nav-fl li:hover:before {
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
    height: 50vh;
 }
 


 .corusel  h4 {
	color: #f33f3f;
	font-size: 22px;
	text-transform: uppercase;
	font-weight: 700;
	margin-bottom: 10px;
}

.corusel h2 {
    margin-bottom: 100px;
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




    
.page-heading {
	padding: 210px 0px 130px 0px;
	text-align: center;
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
}

.page-heading .text-content h4 {
	color: #f33f3f;
	font-size: 22px;
	text-transform: uppercase;
	font-weight: 700;
	margin-bottom: 15px;
}

.page-heading .text-content h2 {
	color: #fff;
	font-size: 62px;
	text-transform: uppercase;
	letter-spacing: 5px;
}




.products {
	margin-top: 100px;
}

.products .filters {
	text-align: center;
	border-bottom: 1px solid #eee;
	padding-bottom: 10px;
	margin-bottom: 60px;
}

.products .filters li {
	text-transform: uppercase;
	font-size: 13px;
	font-weight: 700;
	color: #121212;
	display: inline-block;
	margin: 0px 10px;
	transition: all .3s;
	cursor: pointer;
}

.products .filters ul li.active,
.products .filters ul li:hover {
  color: #f33f3f;
}

.products ul.pages {
	margin-top: 30px;
	text-align: center;
}

.products ul.pages li {
	display: inline-block;
	margin: 0px 2px;
}

.products ul.pages li a {
	width: 44px;
	height: 44px;
	display: inline-block;
	line-height: 42px;
	border: 1px solid #eee;
	font-size: 15px;
	font-weight: 700;
	color: #121212;
	transition: all .3s;
}

.products ul.pages li a:hover,
.products ul.pages li.active a {
	background-color: #f33f3f;
	border-color: #f33f3f;
	color: #fff;
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
.pages a{
    text-decoration:none;
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
                <a class="nav-link" style="color: #Fff"  href="./index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  style="color: #fff"  href="./products.php">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  style="color: #fff"  href="./about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  style="color: #fff"  href="./contact.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ad.php" style="color: #fff" > Admin</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="corusel">
       
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
      
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="./img/products-heading.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h4>NEW ARRIVALS</h4>
                  <h2>SIXTEEN PRODUCTS</h2>
                </div>
              </div>
              
            
            </div>
       
            </button>
          </div>
      </div>



      <div class="products">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="filters">
                <ul>
                    <li class="active" data-filter="*">All Products</li>
                    <li data-filter=".des">Featured</li>
                    <li data-filter=".dev">Flash Deals</li>
                    <li data-filter=".gra">Last Minute</li>
                </ul>
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
        $serinform = "SELECT * FROM productscard";

$serinform = "SELECT * FROM productscard";
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

            <div class="col-md-12">
              <ul class="pages">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
              </ul>
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


     
</body>

</html>