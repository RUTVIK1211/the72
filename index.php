<?php
require 'import/header.php';
?>
<div class="container-fluid">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <section class="content">
          <div class="container">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-6 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h2 class="mb-5">Insert <i class="fa fa-plus" aria-hidden="true"></i></h2>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="insert" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h2 class="mb-5 ">View <i class="fa fa-eye"></i></h2>

                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="view" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
          </div>
          <h1 class="m-0 text-dark">Devloped By Rutvik Bhimani</h1>
          <?php
          require 'import/footer.php';
          ?>
