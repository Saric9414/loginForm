<?php 

     $connect = mysqli_connect('localhost', 'root', '', 'loginapp');
        if(!$connect){
            die('Database connection failed' . mysqli_error());
        }

?>