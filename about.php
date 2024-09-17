<?php
 require "db.php";
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
        <link rel="stylesheet" href="assets/css/fontawesome.css">

    <title>About</title>
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
    height: 55vh;
 }
 


 .corusel  h4 {
	color: #f33f3f;
	font-size: 22px;
	text-transform: uppercase;
	font-weight: 700;
	margin-bottom: 10px;
}

.corusel h2 {
    margin-bottom: 80px;
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

  
    
/* 
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
    } */
     @media (width <= 1240px){
        .card-icon {
            display: none;
    margin-left: 0px;
   
        }
     }




    
.about-features {
	margin-top: 100px!important;
}

.about-features p {
	border-bottom: 1px solid #eee;
	padding-bottom: 20px;
}

.about-features .container .row {
	padding-bottom: 0px!important;
	border-bottom: none!important;
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

.best-features ul li a {
 
	font-size: 14px;
	color: #4a4a4a;
	font-weight: 300;
	transition: all .3s;
	position: relative;
	padding-left: 13px;
}
.best-features ul{
    display: flex;
   
}


.best-features ul  li a {
    
	padding-top:10px ;
	width: 40px;
	height: 40px;
	display: inline-block;
	background-color: #EBEBEB;

	transition: all .3s;
	top: 8px;
}

.best-features ul  li a:hover {
	color: #fff;
    background-color: #f33f3f;

}

/* .best-features ul  li a:hover::before {
	background-color: #f33f3f;
} */

.best-features .filled-button {
	margin-top: 20px;
}
.left-content ul{
    list-style-type: none;
}



.team-members {
	margin-top: 100px;
}

.team-member {
	border: 1px solid #eee;
	margin-bottom: 30px;
}

.team-member img {
	width: 100%;
	overflow: hidden;
}

.team-member .down-content {
	padding: 30px;
	text-align: center;
}

.team-member .thumb-container {
	position: relative;
}




.team-member:hover .hover-effect {
	visibility: visible;
	opacity: 1;
}

.team-member .down-content h4 {
	font-size: 17px;
	color: #1a6692;
	margin-bottom: 8px;
}

.team-member .down-content span {
	display: block;
	font-size: 13px;
	color: #f33f3f;
	font-weight: 500;
	margin-bottom: 20px;
}




.card-icon {
    margin-left: 120px;
    padding-top: 10px;
    color: white;
    background-color: #F33F3F;
    width: 100px;
    height: 100px;
            font-size: 3rem;
            margin-top: 10px;
        }
       
        .btn-red {
            background-color: red;
            color: white;
        }
        .card{
            padding: 10px;
        }
        .card-title{
            padding-top: 40px;
            color: #19648F;
        }
        .card .btn:hover{
            background-color: #121212;
            color: white;
        }
        .card .btn{
            margin-top: 20px;
        }







        
.happy-clients {
	margin-top: 100px;
	margin-bottom: 40px;
}

.happy-clients .client-item img {
	max-width: 100%;
	overflow: hidden;
	transition: all .3s;
	cursor: pointer;
}

.happy-clients .client-item img:hover {
	opacity: 0.8;
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
.owl-clients{
    
    display: flex;
    justify-content: space-evenly;
    align-items: center;
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
                <a class="nav-link"  style="color: #fff"  href="./about.php ">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  style="color: #fff"  href="./contact.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./ad.php" style="color: #fff" > Admin</a>
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
                <img src="https://templatemo.com/templates/templatemo_546_sixteen_clothing/assets/images/about-heading.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h4>ABOUT US</h4>
                  <h2>OUR COMPANY</h2>
                </div>
              </div>
              
            
            </div>
       
            </button>
          </div>
      </div>

      <div class="best-features about-features">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Our Background</h2>
              </div>
            </div>
            <div class="col-md-6">
              <div class="right-image">
                <img src="https://templatemo.com/templates/templatemo_546_sixteen_clothing/assets/images/feature-image.jpg" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="left-content">
                <h4>Who we are &amp; What we do?</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis.</p>
                <ul class="social-icons">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li> &nbsp; &nbsp;
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li> &nbsp; &nbsp;
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li> &nbsp; &nbsp;
                  <li><a href="#"><i class="fa fa-behance"></i></a></li> &nbsp; &nbsp;
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="team-members">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Our Team Members</h2>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="https://templatemo.com/templates/templatemo_546_sixteen_clothing/assets/images/team_01.jpg" alt="">
                  
                </div>
                <div class="down-content">
                  <h4>Johnny William</h4>
                  <span>CO-Founder</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="https://templatemo.com/templates/templatemo_546_sixteen_clothing/assets/images/team_02.jpg" alt="">
                  
                </div>
                <div class="down-content">
                  <h4>Karry Pitcher</h4>
                  <span>Product Expert</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="https://templatemo.com/templates/templatemo_546_sixteen_clothing/assets/images/team_03.jpg" alt="">
                  
                </div>
                <div class="down-content">
                  <h4>Michael Soft</h4>
                  <span>Chief Marketing</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="https://templatemo.com/templates/templatemo_546_sixteen_clothing/assets/images/team_04.jpg" alt="">
                  
                </div>
                <div class="down-content">
                  <h4>Mary Cool</h4>
                  <span>Product Specialist</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="https://templatemo.com/templates/templatemo_546_sixteen_clothing/assets/images/team_05.jpg" alt="">
                  
                </div>
                <div class="down-content">
                  <h4>George Walker</h4>
                  <span>Product Photographer</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="https://templatemo.com/templates/templatemo_546_sixteen_clothing/assets/images/team_06.jpg" alt="">
                  
                </div>
                <div class="down-content">
                  <h4>Kate Town</h4>
                  <span>General Manager</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                </div>
              </div>
            </div>



            <?php 
if (isset($_GET['id'])) {
$id = $_GET['id'];
$del = mysqli_query($conn, "DELETE FROM aboutcard WHERE id='$id'");
}
$serinform = "SELECT * FROM aboutcard";
$serresult = mysqli_query($conn,$serinform);
if (mysqli_num_rows($serresult )> 0 ) {
while ($serrow = mysqli_fetch_assoc($serresult)){
?>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="./upload/<?= $serrow['img'] ?>" alt="">
                  
                </div>
                <div class="down-content">
                  <h4><?php echo $serrow['title'] ?></h4>
                  <span><?php echo $serrow['header'] ?></span>
                  <p><?php echo $serrow['price'] ?></p>
                </div>
              </div>
            </div>


            <?php

}
}



?>

          </div>
        </div>
      </div>

      <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="card-icon">
                            <i class="fa-solid fa-gear"></i>
                        </div>
                        <h5 class="card-title mt-3">Product Management</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
                        <a href="#" class="btn btn-red">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="card-icon">
                            <i class="fa-solid fa-gear"></i>
                        </div>
                        <h5 class="card-title mt-3">Customer Relations</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
                        <a href="#" class="btn btn-red">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="card-icon text-center">
                            <i class="fa-solid fa-gear"></i>
                        </div>
                        <h5 class="card-title mt-3">Global Collection</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
                        <a href="#" class="btn btn-red">Read More</a>
                    </div>
                </div>
            </div>


            <?php 
            $admininform = mysqli_query($conn, "SELECT * FROM aboutcard2");

if (isset($_GET['id'])) {
$id = $_GET['id'];
$del = mysqli_query($conn, "DELETE FROM aboutcard2 WHERE id='$id'");
}
$serinform = "SELECT * FROM aboutcard2";
$serresult = mysqli_query($conn,$serinform);
if (mysqli_num_rows($serresult )> 0 ) {
while ($serro = mysqli_fetch_assoc($serresult)){
?>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="card-icon text-center">
                            <i class="fa-solid fa-gear"></i>
                        </div>
                        <h5 class="card-title mt-3"><?php echo $serro['title'] ?></h5>
                        <p class="card-text"><?php echo $serro['header'] ?></p>
                        <a href="#" class="btn btn-red">Read More</a>
                    </div>
                </div>
            </div>
            <?php

}
}



?>


        </div>
    </div>




    <div class="happy-clients">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Happy Partners</h2>
              </div>
            </div>
            <div class="col-md-12">
              <div class="owl-clients owl-carousel">
                <div class="client-item">
                  <img src="https://templatemo.com/templates/templatemo_546_sixteen_clothing/assets/images/client-01.png" alt="1">
                </div>
                
                <div class="client-item">
                  <img src="https://templatemo.com/templates/templatemo_546_sixteen_clothing/assets/images/client-01.png" alt="2">
                </div>
                
                <div class="client-item">
                  <img src="https://templatemo.com/templates/templatemo_546_sixteen_clothing/assets/images/client-01.png" alt="3">
                </div>
                
                <div class="client-item">
                  <img src="https://templatemo.com/templates/templatemo_546_sixteen_clothing/assets/images/client-01.png" alt="4">
                </div>
                
                <div class="client-item">
                  <img src="https://templatemo.com/templates/templatemo_546_sixteen_clothing/assets/images/client-01.png" alt="5">
                </div>
                
                <div class="client-item">
                  <img src="https://templatemo.com/templates/templatemo_546_sixteen_clothing/assets/images/client-01.png" alt="6">
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


     
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>