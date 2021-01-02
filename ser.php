<?php
 include_once 'db.php'; 





 if(isset($_POST['submit'])) {
    $keyword = $_POST['keyword'];
    $data = $crud1->search($keyword);
    
  
} 