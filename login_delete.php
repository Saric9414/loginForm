<?php include 'db.php';?>
<?php include 'functions.php';?>


<?php
readAllData();
if(isset($_POST['update'])){
   deleteData();
   
}
?>

<?php include 'includes/header.php'?>

    <div class="container">
        <div class="col-sm-6">
  <form action="login_delete.php" method="post">
          <br>
          <div class="form-group">
            <select name="id" id="">
                <?php
                    showAllData();
                ?>
            </select>
          </div>
          <button type="submit" name="update" class="btn btn-primary">DELETE</button>
          <button type="submit" name="back" class="btn btn-success"><a href="/demo/mysql/login.php">Back to Login</a></button>
          </form>
        </div>
    </div>
    
<?php include 'includes/footer.php'?>