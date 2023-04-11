<?php 
session_start();
if(!isset($_SESSION['admin'])){
  header('location:index.php');
}
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
  <style>
    label{
      float:left;
    }
    </style>
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
    <a href="index3.html" class="brand-link">
      <img src="" alt=" Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="" class="img-circle elevation-2" alt="User Image">
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
            <a href="Advisor.php" class="nav-link active">
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
                <a href="Process_Application.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Process Application</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Room_Assignment.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Room Assignment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Resident.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Residents</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="Rooms.php" class="nav-link ">
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
            <h1 class="m-0">Dashboard </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="advisor.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid" >
       <center> <h2>Process Form</h2>
        <form action="advisor.php" method="POST" style="width:60%;">
        <h5>Personal information</h5>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="first_name">First Name</label>
                    <input type="text"  class="form-control" id="first_name" name="first_name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
            </div>
        
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>

</select>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone </label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <h3>Address</h3>
             
             <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="street">Street</label>
                    <input type="text" class="form-control" id="street" name="street" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="zip">Zip</label>
                    <input type="text" class="form-control" id="zip" name="zip" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" name="country" required>
                </div>
             </div>
             <h3>School information</h3>
             <div class="form-group">
                <label for="school_name">School Name</label>
                <input type="text" class="form-control" id="school_name" name="school_name" required>
             </div>
             <h3>School address</h3>
             <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="school_street">Street</label>
                    <input type="text" class="form-control" id="school_street" name="school_street" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="school_zip">Zip</label>
                    <input type="text" class="form-control" id="school_zip" name="school_zip" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="school_country">Country</label>
                    <input type="text" class="form-control" id="school_country" name="school_country" required>
                </div>
            </div>
            <h3>Emergency Contact</h3>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="e_first_name">First Name</label>
                    <input type="text" class="form-control" id="e_first_name" name="e_first_name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="e_last_name">Last Name</label>
                    <input type="text" class="form-control" id="e_last_name" name="e_last_name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="e_email">Email</label>
                <input type="email" class="form-control" id="e_email" name="e_email" required>
            </div>
            <div class="form-group">
                <label for="e_phone">Phone </label>
                <input type="tel" class="form-control" id="e_phone" name="e_phone" required>
            </div>
            <div class="form-group">
                <label for="room_type_preference">Room type Preference</label>
                <select class="form-control" id="room_type_preference" name="room_type_preference" required>
                    <option value="Single">Single</option>
                    <option value="Double">Double</option>

</select>
            </div>
            <div class="form-group">
                <label for="password">Make a Password </label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <input type="submit" class="btn btn-success" style="width:300px" value="Apply" name="submit" >

</form> 
</center>
<?php

if(isset($_POST['submit'])){
    include_once 'project/person.php';
    include_once 'connection.php';

include_once 'project/School.php';
include_once 'project/Address.php';
include_once 'project/Contactinfo.php';
include_once 'project/EmergencyContact.php';
include_once 'project/UI.php';
include_once 'project/Application.php';

    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];

    $dob=$_POST['date_of_birth'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $zip=$_POST['zip'];
    $street=$_POST['street'];
    $country=$_POST['country'];
    $school_name=$_POST['school_name'];
    $szip=$_POST['school_zip'];
    $sstreet=$_POST['school_street'];
    $scountry=$_POST['school_country'];
    $efname=$_POST['e_first_name'];
    $elname=$_POST['e_last_name'];

    $ephone=$_POST['e_phone'];
    $eemail=$_POST['e_email'];
    $room=$_POST['room_type_preference'];
    $password=$_POST['password'];
    $person=new person($fname,$lname,$dob,$gender); 
    $saddress=new Address($sstreet,$szip,$scountry);
    $school=new School($school_name,$saddress);
    $econtact=new ContactInfo($ephone,$eemail);
    $Emergency=new EmergencyContact($efname,$elname,$econtact);
    $contact=new ContactInfo($phone,$email);
    $address=new Address($street,$zip,$country);
  
$application =new Application($contact,$address,$school,$Emergency,$room,"pending",$person,$password);


$ui=new UI($conn,$application);
$ui->submitApplication();

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
