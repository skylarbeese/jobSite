<?php 
include_once 'db.php';

//if(isset($_POST['submit'])) {
    $data = $crud->del();

   if($data) {
    header("location: index.php?de=successDel");
   } else {
    header("location: index.php?de=FailDel");
   }
//}