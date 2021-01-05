
<?php include_once 'db.php'; 


?>
 <?php
    if(isset($_SESSION['user'])) { ?>
     >
<div class="form">
    <h1> Enter A New Job Here </h1>
<div class="form-input">

<form method="POST" action="ii.php">
    <div class="input">
        <label> company name </label>
    <input class="form-control" type="text" name="name_c" placeholder="name of company">
    </div>
    <div class=" input">
        <label>job title</label>
    <input class="form-control" type="text" name="title" placeholder="job title">
    </div>
    <div class="input">
        <label>description</label>
    <textarea class="form-control" type="text" name="descript" placeholder="description of job, requierments . . ."></textarea>
    </div>
    <div class="input">
        <label>salary</label>
    <input class="form-control" stype="text" name="salary" placeholder="estamated yearly salery or contract salery">
    </div>
    <div class="input">
        <label>location</label>
    <input class="form-control" type="text" name="loca" placeholder="location of company">
    </div>
    <div class="input">
        <label>abviser name</label>
    <input class="form-control" type="text" name="ab_name" placeholder="name of the hiring manager of company manger">
    </div>
    <div class="input">
        <label>company email</label>
    <input class="form-control" type="email" name="email" placeholder="email of maneger">
    </div>
   <input class="form-control btn-danger submit" type="submit" value="submit" name="submit">
</form>
</div>
</div>
<?php } else { ?>
    <div class="con-d">
    <div class="con">
      <h1> sign in or make an account to create your own job listing for other people to view! </h1>
      <p>click <a href="signup.php">here</a>, to create an acount, or click <a href="sign.php">here</a> to signin to an existing account</p>
    </div>
    </div>
<?php } ?>
<style>
   .con-d{
    justify-content: center;
       align-items: center;
       display: flex;
       margin-top: 2rem;
       width: 100%;
       height: 100%;
   }
   .con{
       justify-content: center;
       align-items: center;
       display: flex;
       background-color:  #f2f2f2;
       border: 1px solid rgb(104, 106, 109);
       width: 80%;
       height: 30%;
       border-radius: 2rem;
       padding: 4rem;
   }
   .con h1{
      
       color: rgb(104, 106, 109);
       font-size: 1.5rem;
       padding: 1rem;
   } 
   .con p {
    color: rgb(104, 106, 109);
    font-size: 1rem;
   }
</style>