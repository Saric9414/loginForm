<?php include 'db.php';

//Show data
function showAllData(){
    global $connect;
    $que = "SELECT * FROM users";
    $result = mysqli_query($connect, $que);
    if(!$result){
        die('Query FAILED' . mysqli_error());
        }

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
        }
    }
    
    //CREATE data
    function createNewData(){
    global $connect;
     if(isset($_POST['submit'])){
        $username = $_POST['username'];        
        $password = $_POST['password'];  
        
        $username = mysqli_real_escape_string($connect, $username);
        $password = mysqli_real_escape_string($connect, $password);
        
        $hash= "$2y$10$";
        $salt = "yusesomecrazystrings22";
        $hashSalt = $hash . $salt;
        $password = crypt($password, $hashSalt);

        
        $que = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        
        $result = mysqli_query($connect, $que);
        if(!$result){
            die('Query FAILED' . mysqli_error());
            }
        }
    }
    //READ data
    function readAllData(){
        global $connect;
        $que = "SELECT * FROM users";
        $result = mysqli_query($connect, $que);
        if(!$result){
            die('Query FAILED' . mysqli_error($connect));
            }
        
        while($row = mysqli_fetch_assoc($result)){
            echo '<pre>';
            print_r($row);
            echo '</pre>';
            }
        
        
    }
    //Update data
    function updateData(){
        global $connect;
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        $username = mysqli_real_escape_string($connect, $username);
        $password = mysqli_real_escape_string($connect, $password);
        
        $hash = '$2y$10$';
        $salt = 'meningyurtimuzbekistan';
        $hashSalt = $hash . $salt;
        $password = crypt($password, $hashSalt);
        
        
        $que = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";
        
        $result = mysqli_query($connect, $que);
        
        if(!$result){
            die('Query FAILED' . mysqli_error($connect));
        }
        
    }
    //DELETE data
    function deleteData(){
        global $connect;
        
        $id = $_POST['id'];
        
        
        $que = "DELETE FROM users WHERE id = $id";
        
        $result = mysqli_query($connect, $que);
        
        if(!$result){
            die('Query FAILED' . mysqli_error($connect));
        }
        
    }
    