<?php
$conn = mysqli_connect("localhost", "root", "69314718056", "mobiusdb");
if ($conn->connect_error) {
  die("Connection failed:". $conn-> connect_error);
}
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
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

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
                  <?php
                    $device_id = '#00001';
                    session_start(); // 이 구문은 페이지에서 딱 한번만 세션을 쓰기 전에 사용하시면 됩니다.  
                    $_SESSION['deviceid'] = $device_id;
                  ?>
                  <input type="button" value=<?php echo $device_id ?> onclick="window.open('graph.php', '#00001 | Detail view', 'width=1400, height=600')">
                </h4>
                <h3>
                  moisture_top: 
                  <?php 
                    $sql = "SELECT ri, con FROM cin WHERE pi = '/Mobius/Take_Out_PF/mois1L' ORDER BY ri DESC LIMIT 1";
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
                  <input type="button" value="#00002" onclick="window.open('graph.php', '#00001 | Detail view', 'width=1400, height=600')">
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
                  <input type="button" value="#00003" onclick="window.open('graph.php', '#00001 | Detail view', 'width=1400, height=600')">
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
                  <input type="button" value="#00004" onclick="window.open('graph.php', '#00001 | Detail view', 'width=1400, height=600')">
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
                  <input type="button" value="#00005" onclick="window.open('graph.php', '#00001 | Detail view', 'width=1400, height=600')">
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
                  <input type="button" value="#00006" onclick="window.open('graph.php', '#00001 | Detail view', 'width=1400, height=600')">
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
                  <input type="button" value="#00007" onclick="window.open('graph.php', '#00001 | Detail view', 'width=1400, height=600')">
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
                  <input type="button" value="#00008" onclick="window.open('graph.php', '#00001 | Detail view', 'width=1400, height=600')">
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
                  <input type="button" value="#00009" onclick="window.open('graph.php', '#00001 | Detail view', 'width=1400, height=600')">
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
                  <input type="button" value="#00010" onclick="window.open('graph.php', '#00001 | Detail view', 'width=1400, height=600')">
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
                  <input type="button" value="#00011" onclick="window.open('graph.php', '#00001 | Detail view', 'width=1400, height=600')">
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
                  <input type="button" value="#00012" onclick="window.open('graph.php', '#00001 | Detail view', 'width=1400, height=600')">
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

  window.setTimeout('window.location.reload()',5000); //1초마다 리플리쉬 시킨다 1000이 1초가 된다. 

</script> 