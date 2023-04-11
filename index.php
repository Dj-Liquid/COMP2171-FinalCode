

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Information Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link active" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
    </ul>
  </div>
</nav>

    <div class="container" >
       <center> <h2>Registration Form</h2>
        <form action="index.php" method="POST" style="width:70%">
        <h5>Personal information</h5>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
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

</body>
</html>