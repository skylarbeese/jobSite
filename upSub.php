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
    
         $succes = $crud1->update($cname, $jtitle, $djob, $smon, $loca, $conu, $conem);
    
       if($succes) {
           header('location: index.php?succeessUpdate');
        } else {
            header('location: index.php?failUpdate');
        }
     
         
      }