<?php
include 'header.php';
include 'connection.php';
$sql = 'SELECT * FROM car_detail';
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
  //Use a loop to iterate through categories 
  $id = $_GET['productid'];
  $type = $row['type'];
  $make = $row['make'];
  $model = $row['model'];
  $register = $row['first_registration'];
  $range_epa = $row['range_epa'];
  $desc = $row['description'];
  $weigth = $row['weight'];
  $powertrian = $row['powertrain'];
  $charging = $row['charging'];
  $seats = $row['no_of_seats'];
  $doors = $row['doors'];
  $color = $row['color'];

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>ESparxx</title>
  </head>

  <body>
    <br><br><br><br><br>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4><strong class="text-primary"><?php echo $p_price ?></strong></h4>
              <h2><?php echo $make; ?></h2>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php echo '<div class="products">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div>';
  $id = $_GET['productid'];
  $sql1 = "SELECT product_image FROM products WHERE product_id=$id ";
  $result1 = mysqli_query($conn, $sql1);
  while ($row = mysqli_fetch_assoc($result1)) {
    $p_img = $row['product_image'];
    $p_price = $row['product_price'];
    echo '<img src="data:image;base64,' . base64_encode($p_img) . '" alt="" style="height:60vh;" class="img-fluid wc-image">';
  }
  echo '</div>
          <br>
          <div class="row">
            <div class="col-sm-4 col-6">
              <div>
                <img src="assets/images/product-1-370x270.jpg" alt="" class="img-fluid">
              </div>
              <br>
            </div>
            <div class="col-sm-4 col-6">
              <div>
                <img src="assets/images/product-2-370x270.jpg" alt="" class="img-fluid">
              </div>
              <br>
            </div>
            <div class="col-sm-4 col-6">
              <div>
                <img src="assets/images/product-3-370x270.jpg" alt="" class="img-fluid">
              </div>
              <br>
            </div>

            <div class="col-sm-4 col-6">
              <div>
                <img src="assets/images/product-4-370x270.jpg" alt="" class="img-fluid">
              </div>
              <br>
            </div>
            <div class="col-sm-4 col-6">
              <div>
                <img src="assets/images/product-5-370x270.jpg" alt="" class="img-fluid">
              </div>
              <br>
            </div>
            <div class="col-sm-4 col-6">
              <div>
                <img src="assets/images/product-6-370x270.jpg" alt="" class="img-fluid">
              </div>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <form action="#" method="post" class="form">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-left">Type</span>

                  <strong class="pull-right">' . $type . '</strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-left">Brand</span>

                  <strong class="pull-right">' . $make . '</strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-left"> Model</span>

                  <strong class="pull-right">' . $model . '</strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-left">First registration</span>

                  <strong class="pull-right">' . $register . '</strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-left">Range (EPA est.)</span>

                  <strong class="pull-right">' . $range_epa . '</strong>
                </div>
              </li>


              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-left">Weight</span>

                  <strong class="pull-right">' . $weigth . '</strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-left">Powertrain</span>

                  <strong class="pull-right">' . $powertrian . '</strong>
                </div>
              </li>


              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-left">SuperCharging Max</span>

                  <strong class="pull-right">' . $charging . ' </strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-left">Number of seats</span>

                  <strong class="pull-right">' . $seats . '</strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-left">Doors</span>

                  <strong class="pull-right">' . $doors . '</strong>
                </div>
              </li>

              <li class="list-group-item">
                <div class="clearfix">
                  <span class="pull-left">Color</span>

                  <strong class="pull-right">' . $color . '</strong>
                </div>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="section" id ="desc" style="height: 50vh;">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="section-heading">
            <h2>Vehicle Description</h2>
          </div>

          <div class="left-content">
            <p>' . $desc . '</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  ';
} ?>

  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="section-heading">
            <h2>Contact Details</h2>
          </div>

          <div class="left-content">
            <p>
              <span>Name</span>

              <br>

              <strong>ESparzz</strong>
            </p>

            <p>
              <span>Phone</span>

              <br>

              <strong>
                <a href="tel:123-456-789">123-456-789</a>
              </strong>
            </p>

            <p>
              <span>Mobile phone</span>

              <br>

              <strong>
                <a href="tel:456789123">456789123</a>
              </strong>
            </p>

            <p>
              <span>Email</span>

              <br>

              <strong>
                <a href="esparxx@gmail.com">esparxx@gmail.com</a>
              </strong>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container d-grid gap-2">
      <button style="padding:10px 100px 10px 100px; width:100%" class="btn btn-outline-success" type="button">Bookmark</button>
    </div>
  </div>
  <br><br><br><br>
  <br>
  <?php include 'footer.php'; ?>
  </body>

  </html>