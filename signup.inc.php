<?php
 include_once 'db.php'; 

class Sign {

   
public $db;
  
function __construct($conn)
 {
   $this->db = $conn;

 } 
 public function login($name, $pass) {
  if(!empty($name) && !empty($pass)) {
      $sql = "SELECT * FROM a_login WHERE a_username='$name' AND a_pass='$pass'";
      $stmt = $this->db->prepare($sql);
  //    $stmt->bindParam(1, $name);
 //    $stmt->bindParam(2, $pass);
       $stmt->execute();
       $result = $this->db->query($sql);
   
     
  
     if($stmt->rowCount() == 1) {
         $datas = $result->fetch(PDO::FETCH_ASSOC); 
      if($datas['a_username'] === $name && $datas['a_pass'] === $pass) {
     //   session_start();
        $_SESSION['id'] = $datas['id'];

          $_SESSION['user'] = $datas['a_username'];
        
          $_SESSION['pass'] = $datas['a_pass'];
          header('location: index.php?signedin');
         //  echo 'success';
        exit();
        
      }
    } else {
         echo "taken";
     }
  } else {
      echo 'enter in every feild';
  }
 
   
}

  } 
    

  
