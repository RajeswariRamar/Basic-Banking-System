<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color :#F06292
;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>DREAM BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.jpg" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user1.jpg" class="img-fluid">
                    <br>
                    <a href="customerlist.php"><button style="background-color : #000000;">Customer List</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="data:image/png;base64,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" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color :#000000;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
            <p>&copy 2021. Made by <b>RAJESWARI R</b> </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>