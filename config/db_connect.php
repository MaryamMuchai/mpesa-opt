
<?php
//connecting to the database
    $conn = mysqli_connect('localhost', 'root', 'password', 'mpesa_opt');

    //check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
    ?>