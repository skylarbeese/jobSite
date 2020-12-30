
<?php include_once 'db.php'; 


?>
<div class="form">
    <h1> Enter A New Job Here </h1>
<div class="form-input">

<form method="POST" action="ii.php">
    <div class="input">
        <label> company name </label>
    <input class="form-control" type="text" name="name_c" >
    </div>
    <div class=" input">
        <label>job title</label>
    <input class="form-control" type="text" name="title" >
    </div>
    <div class="input">
        <label>description</label>
    <textarea class="form-control" type="text" name="descript" ></textarea>
    </div>
    <div class="input">
        <label>salary</label>
    <input class="form-control" stype="text" name="salary" >
    </div>
    <div class="input">
        <label>location</label>
    <input class="form-control" type="text" name="loca" >
    </div>
    <div class="input">
        <label>abviser name</label>
    <input class="form-control" type="text" name="ab_name" >
    </div>
    <div class="input">
        <label>company email</label>
    <input class="form-control" type="email" name="email" >
    </div>
   <input class="form-control btn-danger submit" type="submit" value="submit" name="submit">
</form>
</div>
</div>
