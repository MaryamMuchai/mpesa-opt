<?php

include('config/db_connect.php');

//check GET Request
if(isset($_GET['code'])){
$code = mysqli_real_escape_string($conn,  $_GET['code']);

//make sql
$sql = "SELECT * FROM mpesa WHERE code = $code";

//get the query result
$result = mysqli_query($conn, $sql);

//fetch result in an array format
$mpesa = mysqli_fetch_assoc($result);

mysqli_free_result($result);
mysqli_close($conn);

print_r($mpesa);

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Search || Page</title>
</head>

<body>
    <?php include('templates/header.php');?>
<h4 style="text-align:center">Search for Client</h4>
<?php include('templates/footer.php');?>

    <form method="post">
        <label>Search</label>
        <input type="number" name="tentacles">
        <input type="submit" name="submit">
</form>
</body>
</html>


