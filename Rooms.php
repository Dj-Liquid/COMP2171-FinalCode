
<?php 
session_start();
if(!isset($_SESSION['admin'])){
  header('location:index.php');
}
  include_once 'connection.php';

include_once 'project/person.php';
include_once 'project/FacadeClass.php';

include_once 'project/School.php';
include_once 'project/Address.php';
include_once 'project/Contactinfo.php';
include_once 'project/EmergencyContact.php';
include_once 'project/UI.php';
include_once 'project/Application.php';
include_once 'project/Room.php';
include_once 'project/Resident.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

 

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="advisor.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a href="logout.php" class="nav-link">Logout</a>
      </li>
    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="advisor.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="Advisor.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="Advisor.php" class="nav-link  ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Process Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Process_Application.php" class="nav-link  ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Process Application</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Room_Assignment.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Room Assignment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Resident.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Residents</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="Rooms.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rooms</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Rooms </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="advisor.php">Home</a></li>
              <li class="breadcrumb-item active">Room</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    


    <div class="container" >
     
<table class="table table-hover">
<thead>
  <tr>
    <th>RoomNo</th>
    <th>Block</th>
    <th>RoomCapacity</th>
    <th>AccupacyAmount</th>
    <th>Type</th>

  </tr>
</thead>
<tbody>
     

<?php
 


$result=UI::showAllRooms($conn);
 



  if (@$result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $roomno=$row['RoomNo'];
   $block=$row['Block'];
   $capacity=$row['RoomCapacity'];

   $Accupacy=$row['accupacyAmount'];
   $type=$row['Type'];
    ?>
  <tr>
    <td><?=$roomno?></td>
    <td><?=$block?></td>
    <td><?=$capacity?></td>
    <td>
    <?=$Accupacy?>
  </td>
  <td><?=$type?></td>
  </tr>
 




 
<?php
} 
?> </tbody>
</table>
<?php
}


?> 
</div>



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="#"></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>



</body>
</html>

   