<?php
require 'import/header.php';
require_once 'dbconnection.php';
// session_start();
if(empty($_SESSION['email']))
{
   header("Location: login");
}

?>

 <div class="content-wrapper"  style="background-color: #edfffc;
background-image: linear-gradient(180deg, #edfffc 0%, #39cc8c 100%);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">View</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content"	>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card ">
              <div class="card-header bg-teal">
                <h3 class="card-title">All entries</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped rounded border-info">
                  <thead>
                  <tr>
                    <th>Form id</th>
                    <th>Societe</th>
                    <th>Numberbobl</th>
                    <th>Edit entries</th>
                    <th>View entries</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php  $sql = "SELECT * FROM user_testing";
                      $result = mysqli_query($conn,$sql);
                     ?>
                    <?php while($data = mysqli_fetch_assoc($result)): ?>
                  <tr>
                    <td><?=$data['userid']; ?></td>
                    <td><?=$data['societe']; ?></td>
                    <td><?=$data['numberbobl'];?></td>
                    <td><button type="button" class="btn btn-block btn-outline-secondary btn-xs border-0" data-id="<?=$data['userno'];?>"  data-toggle="modal" onclick="editbtn(this)"  data-target="#modal-x2">
                      edit
                </button></td>
                    <td>
                    <button type="button" class="btn btn-block btn-outline-secondary btn-xs border-0" data-toggle="modal"  data-target="#modal-xl" data-id="<?=$data['userno'];?>" onclick="getbtn(this)">
                  		View More
                </button></td>
                  </tr>
                  <?php endwhile; ?>
                  </tbody>
                 <tfoot>

                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    <!-- /.content -->
<!-- /.modal disabled  -->
<div class="modal fade" id="modal-x2">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="editform">

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<!-- model upadate   -->
    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">view</h4>
              <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="viewform">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
  <?php
   require 'import/footer.php';
  ?>
<script type="text/javascript">
// $(document).ready(function() {
    function getbtn(e){
        var id = $(e).data('id');
     $.ajax({
      url: 'fetch.php',
      type: 'POST',
      data: {
        'id': id
      },
      success: function(response){
        $('#viewform').empty();
        $('#viewform').append(response);
      }
    });
      }
      function editbtn(e){
        var id = $(e).data('id');
     $.ajax({
      url: 'edit.php',
      type: 'POST',
      data: {
        'id': id
      },
      success: function(response){
        $('#editform').empty();
        $('#editform').append(response);
      }
    });
      }
</script>
