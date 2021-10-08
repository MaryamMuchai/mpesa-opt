<?php
    //connecting to the database
    $conn = mysqli_connect('localhost', 'root', 'password', 'mpesa_opt');
    //check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
    //query for the data table mpesa
    $sql = 'SELECT code, phonenumber, id, link * FROM mpesa';

    //query and get the data results
    $result = mysqli_query($conn, $sqli);

    //fetch the resulting rows as an array
    

?>
            <!-- HTML CODE  -->
<!DOCTYPE html>
<html>
    <?php include('templates/header.php'); ?>
    <?php include('templates/footer.php'); ?>
</html>