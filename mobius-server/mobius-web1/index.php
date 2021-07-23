<?php
$conn = mysqli_connect("localhost", "root", "69314718056", "mobiusdb");
if ($conn->connect_error) {
  die("Connection failed:". $conn-> connect_error);
}
// $sql = "SELECT ri, con FROM cin WHERE pi = '/Mobius/Take_Out_PF/mois' ORDER BY ri DESC LIMIT 1";
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Take Out - Pine Fine</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="mx-auto order-0">
      <a class="navbar-brand mx-auto" href="#">Take Out</a>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Pine Fine</h1>

      </div>
      <!-- /.row-lg-3 -->

      <div class="row-lg-9">

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-40">
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">#00001</a>
                </h4>
                <h3>
                  moisture_top: 
                  <?php 
                    $sql = "SELECT ri, con FROM cin WHERE pi = '/Mobius/Take_Out_PF/mois' ORDER BY ri DESC LIMIT 1";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    echo $row['con'] 
                  ?>
                  %
                </h3>
                <h3>
                  moisture_bot: 
                  <?php echo $row['con'] ?>
                  %
                </h3>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-40">
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">#00002</a>
                </h4>
                <h3>moisture_top: 20 %</h3>
                <h3>moisture_bot: 20 %</h3>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-40">
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">#00003</a>
                </h4>
                <h3>moisture_top: 20 %</h3>
                <h3>moisture_bot: 20 %</h3>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-40">
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">#00004</a>
                </h4>
                <h3>moisture_top: 20 %</h3>
                <h3>moisture_bot: 20 %</h3>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-40">
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">#00005</a>
                </h4>
                <h3>moisture_top: 20 %</h3>
                <h3>moisture_bot: 20 %</h3>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-40">
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">#00006</a>
                </h4>
                <h3>moisture_top: 20 %</h3>
                <h3>moisture_bot: 20 %</h3>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-40">
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">#00007</a>
                </h4>
                <h3>moisture_top: 20 %</h3>
                <h3>moisture_bot: 20 %</h3>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-40">
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">#00008</a>
                </h4>
                <h3>moisture_top: 20 %</h3>
                <h3>moisture_bot: 20 %</h3>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-40">
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">#00009</a>
                </h4>
                <h3>moisture_top: 20 %</h3>
                <h3>moisture_bot: 20 %</h3>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-40">
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">#00010</a>
                </h4>
                <h3>moisture_top: 20 %</h3>
                <h3>moisture_bot: 20 %</h3>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-40">
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">#00011</a>
                </h4>
                <h3>moisture_top: 20 %</h3>
                <h3>moisture_bot: 20 %</h3>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-40">
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">#00012</a>
                </h4>
                <h3>moisture_top: 20 %</h3>
                <h3>moisture_bot: 20 %</h3>
              </div>
            </div>
          </div>


        </div>
        <!-- /.row -->

      </div>
      <!-- /.row-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<script language='javascript'> 

  window.setTimeout('window.location.reload()',1000); //1초마다 리플리쉬 시킨다 1000이 1초가 된다. 

</script>
