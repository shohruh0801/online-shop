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
    <title>Contact</title>
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




.find-us {
	margin-top: 100px;
}

.find-us p {
	border-bottom: 1px solid #eee;
	padding-bottom: 30px;
	margin-bottom: 30px;
}

.find-us h4 {
	font-size: 17px;
	color: #1a6692;
	margin-bottom: 20px;
}

.find-us .left-content {
	margin-left: 30px;
}


.send-message {
	margin-top: 100px;
}

.contact-form input {
	font-size: 14px;
	width: 100%;
	height: 44px;
	display: inline-block;
	line-height: 42px;
	border: 1px solid #eee;
	border-radius: 0px;
	margin-bottom: 30px;
}

.contact-form input:focus {
	box-shadow: none;
	border: 1px solid #eee;
}

.contact-form textarea {
	font-size: 14px;
	width: 100%;
	min-width: 100%;
	min-height: 120px;
	height: 120px;
	max-height: 180px;
	border: 1px solid #eee;
	border-radius: 0px;
	margin-bottom: 30px;
}

.contact-form textarea:focus {
	box-shadow: none;
	border: 1px solid #eee;
}

.contact-form button.filled-button {
	background-color: #f33f3f;
	color: #fff;
	font-size: 14px;
	text-transform: capitalize;
	font-weight: 300;
	padding: 10px 20px;
	border-radius: 5px;
	display: inline-block;
	transition: all 0.3s;
	border: none;
	outline: none;
	cursor: pointer;
}

.contact-form button.filled-button:hover {
	background-color: #121212;
	color: #fff;
}

.accordion {
	margin-left: 30px;
}

.accordion a {
	cursor: pointer;
	font-size: 17px;
	color: #1a6692!important;
	margin-bottom: 20px;
	transition: all .3s;
}

.accordion a:hover {
	color: #f33f3f!important;
}

.accordion a.active {
  color: #f33f3f!important;
}

.accordion li .content {
  display: none;
  margin-top: 10px;
}

.accordion li:first-child {
	border-top: 1px solid #eee;
}

.accordion li {
	border-bottom: 1px solid #eee;
	padding: 15px 0px;
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

.owl-clients{
    
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}

.left-content ul{
    list-style-type: none;
}

.left-content ul li a {
    
 
 font-size: 14px;
 color: #4a4a4a;
 font-weight: 300;
 transition: all .3s;
 position: relative;
 padding-left: 13px;
}
.left-content ul{
 display: flex;

}


.left-content ul  li a {
 
 padding-top:10px ;
 width: 40px;
 height: 40px;
 display: inline-block;
 background-color: #EBEBEB;

 transition: all .3s;
 top: 8px;
}

.left-content ul  li a:hover {
 color: #fff;
 background-color: #f33f3f;

}
.accordion{
    list-style-type: none;
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
                <a class="nav-link "  style="color: #fff"  href="./products.php">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  style="color: #fff"  href="./about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  style="color: #fff"  href="./contact.php">Contact Us</a>
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
                <img src="https://templatemo.com/templates/templatemo_546_sixteen_clothing/assets/images/contact-heading.jpg" class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h4>CONTACT US</h4>
                  <h2>LET’S GET IN TOUCH</h2>
                </div>
              </div>
              
            
            </div>
       
            </button>
          </div>
      </div>


      
    <div class="find-us">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Our Location on Maps</h2>
              </div>
              <br>
            </div>
            <div class="col-md-8">
  
              <div id="map">
                <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-4">
              <div class="left-content">
                <h4>About our office</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti.</p>
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


      
    <div class="send-message">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Send us a Message</h2>
              </div>
              <br>
            </div>
            <div class="col-md-8">
              <div class="contact-form">
                <form id="contact" action="" method="post">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-4">
              <ul class="accordion">
                <li>
                    <a>Accordion Title One</a>
                  
                </li>
                <li>
                    <a>Second Title Here</a>
                    
                </li>
                <li>
                    <a>Accordion Title Three</a>
                   
                </li>
                <li>
                    <a>Fourth Accordion Title</a>
                 
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  
      <div class="happy-clients">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Our Happy Customers</h2>
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

</html>