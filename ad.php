<?php
require "db.php";


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








</body>
</html>
