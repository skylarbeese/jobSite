<?php
 include_once 'db.php'; 
 if(isset($_POST['submit'])) {
    
 
   $user =  trim($_POST['user']);
   $email =  trim($_POST['email']);
   $pass =  trim($_POST['pass']);
   $passch =  trim($_POST['passch']);
 
   
      $data = $crud2->reg($user, $email, $pass, $passch);  
} 