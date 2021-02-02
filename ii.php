<?php
include_once 'db.php';

if(isset($_POST['submit'])) {

 $cname = $_POST['name_c'];
  $jtitle = $_POST['title'];
  $djob = $_POST['descript'];
  $smon = $_POST['salary'];
  $loca = $_POST['loca'];
  $conu = $_POST['ab_name'];
  $conem = $_POST['email'];
  $dat = $_POST['date'];
     $succes = $crud->insert($cname, $jtitle, $djob, $smon, $loca, $conu, $conem, $dat);

     if($succes) {
      echo "succes";
      header('location: index.php?success');
     } else {
     echo "error";
     header('location: index.php?error');
     }

     
  }
   