
<?php 

include_once 'header.php';

class In {

   
    public $db;
      
    function __construct($conn)
     {
       $this->db = $conn;
   
     } 
    public function insert($cname, $jtitle, $djob, $smon, $loca, $conu, $conem) {
   try{
       $sql = "INSERT INTO job_listed (`company_nm`, `j_title`, `descript_job`, `salery_mon`, `loca_where`,
        `con_user`, `con_em`) VALUES 
       (:cname, :jtitle, :djob, :smon, :loca, :conu, :conem)";
       $stmt = $this->db->prepare($sql);
       $stmt->bindparam(':cname', $cname);
       $stmt->bindparam(':jtitle',  $jtitle);
       $stmt->bindparam(':djob', $djob);
       $stmt->bindparam(':smon', $smon);
       $stmt->bindparam(':loca', $loca);
       $stmt->bindparam(':conu', $conu);
       $stmt->bindparam(':conem', $conem);
       
       $stmt->execute();
      
   } catch(PDOException $e) {
     echo $e->getMessage();
    return false;
  
   }
   
    }

    public function get() {
      $slq = "SELECT * FROM job_listed";
      $result = $this->db->query($slq);
  
          while($row = $result->fetchAll(PDO::FETCH_ASSOC)) {
          //  print_r($row);
              $data = $row;
          }
  
          return $data;
      }
      
      public function list() {
       $id = $_GET['id'];
        $sql = "SELECT * FROM job_listed WHERE cat_id = ? ";
        $stmt = $this->db->prepare($sql);
      
      $stmt->bindparam(1, $id);
     
       $stmt->execute();
     $row = $stmt->fetch(PDO::FETCH_ASSOC); 
        //  print_r($row); ?>
     <div class="job-con">
      
     <div class="job-single">
     
     <h2 class="name"><?php echo $row['company_nm']; ?></h2>
     <h2 class="title"><?php echo $row['j_title']; ?></h2>
     <div class="descript">
     <p class="descript"><?php echo $row['descript_job']; ?></p>
     <div class="em-email">
     <h2>contact Employer: </h2>
     <p class="email"><?php echo $row['con_em']; ?></p>
     </div>
     </div>
     <div class="sal-date">
       <div class="sal">
         <p>salery</p>
     <h5 class="mon"><?php echo $row['salery_mon']; ?></h5>
       </div>
       <div class="date">
         <p>date posted</p>
     <p class="date lead"><?php echo $row['post_date']; ?></p>
     </div>
     </div>
      <?php
    if(isset($_SESSION['user'])) { ?>
     <div class="buttons">
     <from action="del.php" method="POST">
     <a href="del.php?del=<?php echo $row['cat_id']; ?>"><button class='btn btn-danger dele' name="submit" type="submit"> Delete </button></a>
     <a href="edit.php?Ed=<?php echo $row['cat_id']; ?>"><button class='btn btn-success dele' name="submit" type="submit"> Edit </button></a>
     </from>
     </div>
     <?php } ?>
     </div>
     </div>

     



 <?php   
 
      }

     public function del() {
      $id = $_GET['del'];
      $sql = "DELETE FROM job_listed WHERE cat_id = ?";
      $stmt = $this->db->prepare($sql);
      $stmt->bindparam(1, $id);
     
       $stmt->execute();
    }

}
    



