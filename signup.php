<link rel="stylesheet" href="style.css">
<?php
 include_once 'header.php'; 
?>
<div class="signup-form-con">
<form class="form-input signin" action="signupBac.php" method="POST">
    <input class="form-control" type="text" name="user" placeholder="username">
    
    <input class="form-control" type="password" name="pass" placeholder="password">

    <input class="btn btn-danger submit" type="submit" name="submit" value="signin">
</form>
</div>