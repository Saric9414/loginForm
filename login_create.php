<?php include 'db.php'?>
<?php include 'functions.php'?>
<?php 
    createNewData();
    ?>

<?php include 'includes/header.php'?>
   
    <div class="container">
        <form action="login_create.php" method="post">
          <div class="form-group">
            <label for="username1">Enter username</label>
            <input type="text" name="username" class="form-control" id="username1" placeholder="Enter username. . ." >
          </div>
          <div class="form-group">
            <label for="password1">Password</label>
            <input type="password" name="password" class="form-control" id="password1" placeholder="Enter username. . .">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">CREATE</button>
          <button type="submit" name="back" class="btn btn-success"><a href="/demo/mysql/login.php">Back to Login</a></button>  
        </form>
    </div>
    
    <?php include 'includes/footer.php'?>