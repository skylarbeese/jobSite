


<?php 
include_once 'db.php';

$datas = $crud->get(); ?>
<div class="new-job-con">
<div class="new-job">

<h1>New Job Listings</h1>
</div>
</div>
<?php foreach ($datas as $data) : ?>
<div class="con">

  <div class="cont">
  <div class="card-header">
<a href="listing.php?id=<?php echo $data['cat_id']; ?>"><h3><?php echo $data['j_title']; ?></h3></a>
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
<?php endforeach; ?>
<style>
 .card-body{
   width: 100%;
   height: 100%;
 }

</style>

 