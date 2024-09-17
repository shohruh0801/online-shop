<?php
require "db.php";
$admininform = mysqli_query($conn, "SELECT * FROM aboutcard2");

if (isset($_FILES['img']) && isset($_POST['title']) && isset($_POST['price']) && isset($_POST['header'])  ){
 $title = $_POST['title'];
 $header = $_POST['header'];



$insweb = mysqli_query($conn,"INSERT INTO aboutcard2 ( header,  title) VALUES ('$header','$title')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <style>
       
        body {
            display: flex;
        }
        #sidebar {
            min-width: 250px;
            max-width: 250px;
            height:100vh;
            background: #343a40;
            color: white;
            transition: all 0.3s;
        }
        #sidebar.active {
            margin-left: -250px;
        }
        #content {
            width: 100%;
            padding: 20px;
        }
        .sidebar-header {
            padding: 20px;
            background: #343a40;
        }
        .components {
            padding: 20px 0;
          
        }
        .components a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }
        .components a:hover {
            color: #7386D5;
            background: #fff;
        }
        .mn{
            padding-left:20px;
        }
        a{
            text-decoration:none;
        }
    </style>
</head>
<body>

<div id="sidebar">
    <div class="sidebar-header">
        <h3>Admin Panel</h3>
    </div>
    <ul class="list-unstyled components mn">
        <p>Menu</p>
      
        <li>
            <a href="index.php">Home</a>
        </li>
       <li>
            <a href="admin.php"> Home Corusel</a>
         
        <li>
            <a href="card.php">Home Card</a>
        </li>
        <li>
            <a href="productscorusel.php">Product Corusel</a>
        </li>
        <li>
            <a href="productscard.php">Product Card</a>
        </li>
        <li>
            <a href="aboutcorusel.php">About Corusel</a>
        </li>               
        <li>
            <a href="aboutcard.php">About Card</a>
        </li> 
        <li>
            <a href="aboutcard2.php">About Card2</a>
        </li> 
        
        <li>
            <a href="contactcorusel.php">Contact corusel</a>
        </li> 
        <li>
            <a href="ad.php">Ad</a>
        </li>
    </ul>
</div>

<div id="content">
  

    <button  type="button" class="btn btn-primary m-5" data-bs-toggle="modal" data-bs-target="#addModal1">
    
    +Change Events
</button>

<div class="row">

<?php 
if (isset($_GET['id'])) {
$id = $_GET['id'];
$del = mysqli_query($conn, "DELETE FROM aboutcard2 WHERE id='$id'");
}
$serinform = "SELECT * FROM aboutcard2";
$serresult = mysqli_query($conn,$serinform);
if (mysqli_num_rows($serresult )> 0 ) {
while ($serrow = mysqli_fetch_assoc($serresult)){
?>
<div class="col-md-3 ">

<div class="card" style="width: 18rem;margin-left:100px;">

<div class="card-body">
<h5 class="card-title"><?php echo $serrow['title'] ?></h5>
<span class="card-text"><?php echo $serrow['header'] ?></span><br>
<button class="btn btn-danger"><a href="?id=<?=$serrow['id']?>" style="color:white;   text-decoration: none; ">Delete</a></button>
</div>
</div>
</div>
<?php

    }
  }


  
  ?>

</div>



</div>
<div class="modal fade" id="addModal1" tabindex="-1" aria-labelledby="addModalLabel1" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel1">Add New Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form  method="POST"  enctype="multipart/form-data">
            <div class="form-group">
                <label for="title" class="form-label">Clent</label>
                <input type="file" class="form-control" name="img" placeholder="Enter clent">
            </div>
            <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter project">
            </div>
            <div class="form-group">
                <label for="title" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" placeholder="Enter project">
            </div>
            <div class="form-group">
                <label for="title" class="form-label">header</label>
                <input type="text" class="form-control" name="header" placeholder="Enter hours of support">
            </div>
         
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info">Save changes</button>
            </div>
        </form>
        
    </div>
</div>
</div>
</div>
</div>
</div>






</body>
</html>
