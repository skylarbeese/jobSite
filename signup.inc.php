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
 
        $_SESSION['id'] = $datas['id'];

          $_SESSION['user'] = $datas['a_username'];
        
          $_SESSION['pass'] = $datas['a_pass'];
          header('location: index.php?signedin');
     
        exit();
        
      }
    } else {
        
         header('location: signup.php?signup=pass_or_userIncorrect');
     }
  } else {
      
      header('location: signup.php?signup=feilds_empty');
  }
 
   
}
  public function reg($name, $email, $pass, $passch) {
    if(!empty($name) || !empty($email) || !empty($pass) || !empty($passch)) {
         
      if($pass !== $passch) {
        header('location: sign.php?pass_no_match?signup=username=' . $name . 'email=' . $email);
      } else {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          header('location: sign.php?email_address_error?signup=username=' . $name);
        } else {
      $sql = "SELECT * FROM a_login WHERE a_username='$name' OR a_email='$email' OR a_pass='$pass'";
      $stmt = $this->db->prepare($sql);

        }
      }
     $rownum = $this->db->query($sql);
      if($rownum->rowCount() > 0) {
           
            header('location: sign.php?signup=this_user_already_exists');
      } else {
    
        $this->in($name, $email, $pass);
        header('location: sign.php?signup-success');
      }
    
  } else {
    header('location: sign.php?signup=emptyfeilds');
    
  }
}

  public function in($name, $email, $pass_hash) {
   // $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
    $query = "INSERT INTO a_login (`a_username`, `a_email`, `a_pass`) VALUES
    ('$name', '$email', '$pass_hash')";
      /*   $stmt->bindParam('sname:', $name);
        $stmt->bindParam('email:', $email);
        $stmt->bindParam('pass:', $pass_hash);  */
    $stmt = $this->db->prepare($query);
    $stmt->execute();
  }
  } 
    

  
