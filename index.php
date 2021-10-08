<?php
    //connecting to the database
    $conn = mysqli_connect('localhost', 'root', 'password', 'mpesa_opt');

    //check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

    //query for the data table mpesa
    $sql = 'SELECT code,phone_number, id FROM mpesa ORDER BY link';

    //query and get the data results
    $result = mysqli_query($conn, $sql);

    //fetch the resulting rows as an array
    $mpesa = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free result from memory
    mysqli_free_result($result);

    //close connection
    mysqli_close($conn);

    // print_r($mpesa);
?>

            <!-- HTML CODE  -->
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>  
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <?php include('templates/header.php'); ?>

    <h4 class="center">Mpesa_opt_confirmation</h4>
    <div class="container">
        <div class="row">

        <?php foreach($mpesa as $mpesas){ ?> 
        <div class="col s6 md3">
            <div class="card z-depth-0">
                <div class="card-content center">
                    <h6><?php echo htmlspecialchars($mpesas['phone_number']); ?></h6>
                    <div><?php echo htmlspecialchars($mpesas['code']); ?></div>  
       
        </div>

        <!-- <div class="card-action right-align">
        </div> -->
        </div>
           </div>
    <?php } ?>
        </div>
    </div>

    <?php include('templates/footer.php'); ?>
    </body>

</html>