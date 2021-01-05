

<?php include_once 'db.php'; 

class Up {

   
    public $db;
      
    function __construct($conn)
     {
       $this->db = $conn;
   
     } 
public function edit() {
    $id = $_GET['Ed'];

    
      $sql = "SELECT * FROM job_listed WHERE cat_id = ? ";
      $stmt = $this->db->prepare($sql);
    
    $stmt->bindParam(1, $id);
   
     $stmt->execute();
   $row = $stmt->fetch(PDO::FETCH_ASSOC); ?>
            
            <div class="form">
   <h1> Edit your job listing </h1>
<div class="form-input">

<form method="POST" action="upSub.php?Ed=<?php echo $row['cat_id']?>">
   <div class="input">
       <label> company name </label>
   <input class="form-control" type="text" name="name_c" value="<?php echo $row['company_nm']; ?>">
   </div>
   <div class=" input">
       <label>job title</label>
   <input class="form-control" type="text" name="title" value="<?php echo $row['j_title']; ?>">
   </div>
   <div class="input">
       <label>description</label>
   <textarea class="form-control" type="text" name="descript"><?php echo $row['descript_job']; ?></textarea>
   </div>
   <div class="input">
       <label>salary</label>
   <input class="form-control" stype="text" name="salary" value="<?php echo $row['salery_mon']; ?>">
   </div>
   <div class="input">
       <label>location</label>
   <input class="form-control" type="text" name="loca" value="<?php echo $row['loca_where']; ?>">
   </div>
   <div class="input">
       <label>abviser name</label>
   <input class="form-control" type="text" name="ab_name" value="<?php echo $row['con_user']; ?>">
   </div>
   <div class="input">
       <label>company email</label>
   <input class="form-control" type="email" name="email" value="<?php echo $row['con_em']; ?>">
   </div>
  <input class="form-control btn-danger submit" type="submit" value="submit" name="submit">
</form>
</div>
</div>

<?php
   }

   public function update($cname, $jtitle, $djob, $smon, $loca, $conu, $conem) {
    try{
      $id = $_GET['Ed'];
      $sql = "UPDATE job_listed SET company_nm='$cname', j_title='$jtitle', descript_job='$djob', salery_mon='$smon',  loca_where='$loca',
      con_user='$conu', con_em='$conem' WHERE cat_id = ?";
       
        $stmt = $this->db->prepare($sql);
     /*   $stmt->bindParam(':cname', $cname);
        $stmt->bindParam(':jtitle',  $jtitle);
        $stmt->bindParam(':djob', $djob);
        $stmt->bindParam(':smon', $smon);
        $stmt->bindParam(':loca', $loca);
        $stmt->bindParam(':conu', $conu);
        $stmt->bindParam(':conem', $conem);  */
        $stmt->bindParam(1, $id);
        $stmt->execute();
       
    } catch(PDOException $e) {
      echo $e->getMessage();
     return false;
   
    }
}

    public function search($key) {
       if(isset($_POST['submit'])) {
           // $keyword = $_POST['keyword'];
      $sql = "SELECT * FROM job_listed WHERE j_title LIKE '%$key%' OR company_nm LIKE '%$key%'";
      $stmt = $this->db->prepare($sql);
    //  $stmt->bindParam('title:', $key);
      $stmt->execute();
      $result = $this->db->query($sql);
    
     $datas = $result->fetchAll(PDO::FETCH_ASSOC); 
       if($stmt->rowCount() == 0){ ?>
       <div class="error">
         <h3> There are no results for this Item, type somthing else and try again </h3>
       </div>
     <?php  } else {
     ?>
     <div class="new-job-con">
      <div class="new-job">
       <h1>looking for jobs in... </h1>
     </div>
    </div>
         <?php foreach ($datas as $data) : ?>
<div class="con">

  <div class="cont">
  <div class="card-header">
<a href="listing.php?id=<?php echo $data['cat_id']?>"><h3><?php echo $data['j_title']; ?></h3></a>
  </div>
  <div class="card-body">
<div class="dis">
<p class="des lead"><?php echo $data['descript_job']; ?></p>
</div>
  </div>
  <div class="card-footer">
      <h2>date posted</h2>
<h5 class="date"><?php echo $data['post_date']; ?></h5>
  </div>
 </div>
 </div>
<?php endforeach; 

         }
         
        

      
  
        }
   
     

    }
}


?>

<style>
  .error{
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
    
     background-color: #ABC;
     padding: 1rem;
}
.error h1 {
   
  
    font-size: 1.4rem;
}

</style>