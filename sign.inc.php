<?php
 include_once 'db.php'; 
 if(isset($_POST['submit'])) {
    
 
   $user =  $_POST['user'];
   $email =  $_POST['email'];
   $pass =  $_POST['pass'];
   $passch =  $_POST['passch'];
 
   
      $data = $crud2->reg($user, $email, $pass, $passch);  
} 