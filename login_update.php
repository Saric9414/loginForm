<?php include 'db.php';?>
<?php include 'functions.php';?>


<?php
if(isset($_POST['update'])){
   updateData();
}
?>

<?php include 'includes/header.php'?>

    <div class="container">
        <div class="col-sm-6">
  <form action="login_update.php" method="post">
          <div class="form-group">
            <label for="username1">Update username</label>
            <input type="text" name="username" class="form-control" id="username1" placeholder="update username. . ." >
          </div>
          <div class="form-group">
            <label for="password1">Update password</label>
            <input type="password" name="password" class="form-control" id="password1" placeholder="update password. . .">
          </div>
          <div class="form-group">
            <select name="id" id="">
                <?php
                    showAllData();
                ?>
            </select>
          </div>
          <button type="submit" name="update" class="btn btn-primary">Update</button>
          <button type="submit" name="back" class="btn btn-success"><a href="/demo/mysql/login.php">Back to Login</a></button>
          </form>
        </div>
    </div>
<?php include 'includes/footer.php'?>