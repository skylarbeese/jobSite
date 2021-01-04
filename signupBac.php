<?php
 include_once 'db.php'; 
if(isset($_POST['submit'])) {
   

  $user =  $_POST['user'];

  $pass =  $_POST['pass'];
 

  
     $data = $crud2->login($user, $pass);  
     
  
 }  

