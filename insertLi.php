
<?php include_once 'db.php'; 


?>
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
