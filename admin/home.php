<!-- <h1>Welcome to <?php echo $_settings->info('name') ?></h1> -->
<html>
<?php require_once('inc/header.php') ?>
<body>
<div class="container-fluid">
  <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3 my-5">
            <div class="card text-white bg-primary o-hidden h-100 ">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">2 Active Users</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3 my-5">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-list"></i>
                </div>
                <div class="mr-5">11 New Quote Requests</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3 my-5">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">5 New Tickets</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3 my-5">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-support"></i>
                </div>
                <div class="mr-5">3 New Customers</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
   </div>
  <div class="card mb-3">
      <div class="card-header">
          <i class="fa fa-area-chart"></i> Area Chart Example</div>
      <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>
  <div class="bg-primary" style="padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px; color:#FFFF" >Latest Users</div>
            <div class="panel-body">
              <!-- Table -->
              <table class="table table-striped table-hover">
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Joined</th>
                </tr>
                <tr>
                  <td>Harsh Yadavade</td>
                  <td>harshyadavade@gmail.com</td>
                  <td>Sept 12,2022</td>
                </tr>
                <tr>
                  <td>Atharv Sathe</td>
                  <td>atharvyedzhava@gmail.com</td>
                  <td>Sept 12,2022</td>
                </tr>
                <tr>
                  <td>Jayesh Sandhu</td>
                  <td>jayeshsingh@gmail.com</td>
                  <td>Sept 12,2022</td>
                </tr>
                <tr>
                  <td>Sahil Shetty</td>
                  <td>sahilshetty@gmail.com</td>
                  <td>Sept 12,2022</td>
                </tr>

              </table>
            </div>  
</div>
</body>
</html>

