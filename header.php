<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
   
    <link rel="stylesheet" href="style.css">
    
   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    
    <title>Hello, world!</title>
  </head>
  <body>
<div class="head">
<nav class="navbar navbar-dark bg-dark">
    <ul>
        <a href="index.php"><li> Home </li></a>
        <a href="insertLi.php"><li> create a listing </li></a>
    </ul>
    <div class="btn-con">
    <?php
    if(isset($_SESSION['user'])) { ?>
        
        <form action="signout.php" method="POST">
      <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit" value="signout">
    </form>
     <?php  } else { ?>
      <a href="signup.php"><button class="btn btn-outline-success my-2 my-sm-0" > signin </button></a>
      <button class="btn btn-outline-success my-2 my-sm-0"> signup </button>
   <?php    } ?>
    
   
   
    

    
  
    </div>
</nav>
</div> 





