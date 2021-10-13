<?php

include('config/db_connect.php');

if (isset($_POST['submit'])){

//check code
if(empty($_POST['code'])){
    echo 'code is required <br />';
} else {
    echo htmlspecialchars($_POST['code']);
    // $code = $_POST['code'];
    // if(!preg_match('/^[0-9]*$/', $code)){
    // echo ' code must be number only';
    // }
}

//check phone number
if(empty($_POST['code'])){
    echo 'Phone Number is required <br />';
} else {
    echo htmlspecialchars($_POST['phone_number']);
}

if(array_filter($errors)){
    //  echo ' errors in the form';
} else {
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    $code= mysqli_real_escape_string($conn, $_POST['code']);

    //create sql
    $sql = "INSERT INTO mpesa(phone_number, code, link) VALUES('$phone_number', '$code', '$link')";
    //SAVE TO DB
    if(mysqli_query($conn, $sql)){
        //success
        header('Location: index.php');
    } else {
        //error
        echo 'query error:' .mysqli_error($conn);
    }
    //form is valid
}

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add||code&phone_number</title>
</head>
<body>
    <?php include('templates/header.php'); ?>
    <section class="container grey-text">
        <h4 class="center">Adding Customers code and phone number</h4>
        <form class="white" action="add.php" method="POST">
            <label>Code Number:</label>
            <input type="number" name="code">

        <label>Phone Number:</label>
        <input type="number" name="phone_number">

        <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
</div>
</form>
</section>



<!-- <try> -->


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');

body {
  margin: 0;
  width: 100vw;
  height: 100vh;
  background: #ecf0f3;
  display: flex;
  align-items: center;
  text-align: center;
  justify-content: center;
  place-items: center;
  overflow: hidden;
  font-family: poppins;
}

.container {
  position: relative;
  width: 350px;
  height: 500px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf0f3;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
}

.brand-logo {
  height: 100px;
  width: 100px;
  background: url("https://img.icons8.com/color/100/000000/twitter--v2.png");
  margin: auto;
  border-radius: 50%;
  box-sizing: border-box;
  box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
}

.brand-title {
  margin-top: 10px;
  font-weight: 900;
  font-size: 1.8rem;
  color: #1DA1F2;
  letter-spacing: 1px;
}

.inputs {
  text-align: left;
  margin-top: 30px;
}

label, input, button {
  display: block;
  width: 100%;
  padding: 0;
  border: none;
  outline: none;
  box-sizing: border-box;
}

label {
  margin-bottom: 4px;
}

label:nth-of-type(2) {
  margin-top: 12px;
}

input::placeholder {
  color: gray;
}

input {
  background: #ecf0f3;
  padding: 10px;
  padding-left: 20px;
  height: 50px;
  font-size: 14px;
  border-radius: 50px;
  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
}

button {
  margin-top: 20px;
  background: #1DA1F2;
  height: 40px;
  border-radius: 20px;
  cursor: pointer;
  font-weight: 900;
  box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
  transition: 0.5s;
}

button:hover {
  box-shadow: none;
}

a {
  position: absolute;
  font-size: 8px;
  bottom: 4px;
  right: 4px;
  text-decoration: none;
  color: black;
  background: yellow;
  border-radius: 10px;
  padding: 2px;
}

h1 {
  position: absolute;
  top: 0;
  left: 0;
}
    </style>
<!-- end -->

</body>
</html>