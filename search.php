<?php   include_once 'db.php'; ?>

<div class="con-div">
<div class="search-job">
  <h1> Search here </h1>
  <h2> search for a job title or compony here </h2>
  <form action="ser.php" method="POST">
    <input class="form-control search-bar" type="text" name='keyword'>
    <button class="btn btn-danger submit" type="submit" name="submit" value="submit"> search </button>
  </form>
</div>
</div>
<style>
*{
    margin: 0;
    padding: 0;
}
 .con-div{
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
   
    width: 100vw;
    height: 100vh;
    padding: 4rem;
}
.search-job {
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
    width: 100%;
    height: 100%;
    background-color:  #f2f2f2;
    border: 1px solid #ABC;
    border-radius: 1rem;
}   
.search-job h1{
  color: #595959;
  font-size: 4rem;
  padding: 3rem;
  border-bottom: 1px solid #ABC;

}
.search-job h2{
  color: #595959;
  font-size: 1rem;
  padding: 1rem;
 
}
.search-job form{
  width: 90%;
  height: 30%;

  justify-content: center;
  align-items: center;
  display: flex;
}

input.search-bar{
  width: 70%;
    height: 20%;
    font-size: 1.2rem;
    padding: 1.2rem;
    border-bottom: 2px solid black;
}

</style>