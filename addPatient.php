<?php
include_once("common_code.php");

if (isset($_POST['patient_entry'])) {

  do
  {
    if(is_valid_security_token("USER_ADD_TOKEN", $_POST['USER_ADD_TOKEN']) == false)
    {
       header("location:error?code=INVALID_TOKEN"); exit;
    }

    $name =  $_POST['fname'];
    $dob = $_POST['dob'];
    $gender =  $_POST['inlineRadioOptions'];
    $mob = $_POST['phone'];
    $email = $_POST['inputEmail3'];
    $address = $_POST['Address'];
    if(isset($_GET['patients_id'])){
      $id = $_GET['patients_id'];
      $sql = "UPDATE `patients` SET `patients_Mobile_number` = '" . $mob . "', `patients_Full_Name` = '" . $name . "', 
      `patients_DOB` = '" . $dob . "', `patients_Gender` = '" . $gender . "', `patients_Address` = '" . $address . "', `patients_Email_id` = '" . $email . "' WHERE `patients`.`patients_id` = ".$id.";";
      $result = mysqli_query($conn, $sql);
      if ($result) {
         header("Location:view.php?MSG=Edited_SUCCESSFULLY");
         exit;
      } else {
        echo '<div class="alert alert-danger fade show" role="alert">Could Not Inserted</div>';
      }
    }
    else{$sql = "INSERT INTO `patients` (`patients_Mobile_number`, `patients_Full_Name`, `patients_DOB`, `patients_Gender`, `patients_Address`, `patients_Email_id`) VALUES ('" . $mob . "', '" . $name . "', '" . $dob . "', '" . $gender . "', '" . $address . "', '" . $email . "');";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        // header("Location:view.php?MSG=ADDED_SUCCESSFULLY");
         //exit;
      } else {
        echo '<div class="alert alert-danger fade show" role="alert">Could Not Inserted</div>';
      }
    }
    

    
    
  }while(false);
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">

  <title>Hosptial Management System</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link active" href="./addPatient.php">Add Patient </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./view.php">View List</a>
      </li>
</ul>
    </div>
  </div>
</nav>

  <div class="container-sm input-form">
  
    <div class="patient_dets">

      <form action="" method="post" class="needs-validation" novalidate>
          <!--security check-->
          <?php echo print_security_token("USER_ADD_TOKEN"); ?>
          <?php 
          //error_reporting(0);
          if(isset($_GET['patients_id']))
          {
            $patients_id = $_GET['patients_id'];
          $patient_sql = "SELECT * FROM `patients` WHERE `patients_id` = ".$patients_id."";
          $patient_result = mysqli_query($conn,$patient_sql);
          $patient_row = mysqli_fetch_assoc($patient_result);
          $gender = $patient_row['patients_Gender'];}
          else{
            $gender = "";
          }
          ?>
          
          <div class="row form-group">
          <label class="fname col-sm-2 col-form-label" for="fname">Full name:</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" id="fname" placeholder="Enter Full Name" value="<?php echo isset($patient_row['patients_Full_Name'])?$patient_row['patients_Full_Name']:'' ;?>" name="fname" required>
          </div>
        </div>
        <br><br>
        <div class="row form-group">
          <label for="dob" class="col-sm-2 col-2 col-form-label">Date of Birth:</label>
          <div class="col-sm-3 col-3">
            <input class="form-control" value="<?php echo isset($patient_row['patients_DOB'])?$patient_row['patients_DOB']:'' ;?>" type="date" id="dob" name="dob" required>
          </div>
          <div class="col-sm-1 col-0"></div>
          <label for="phone" class="col-sm-1 col-2 col-form-label">Mob no.:</label>
          <div class="col-sm-5 col-4">

            <input class="form-control" type="tel" id="phone" value="<?php echo isset($patient_row['patients_Mobile_number'])?$patient_row['patients_Mobile_number']:'' ;?>" name="phone" placeholder="Mobile no." pattern="[0-9]{10}" required>
          </div>
        </div>
        <br><br>
        <div class="row form-group"">
          <label class=" col-sm-2 col-form-label" for="gender">Gender:</label>

          <div class="col-sm-10">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Male" <?php echo ($gender=='Male')?'checked':'' ?> required>
              <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Female" <?php echo ($gender=='Female')?'checked':'' ?> required>
              <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Others"  <?php echo ($gender=='Others')?'checked':'' ?> required>
              <label class="form-check-label" for="inlineRadio3">Others</label>
            </div>
          </div>
        </div>
        <br>


        <div class="form-group row ">
          <label for="address" class="col-sm-2 col-form-label">Address</label>
          <div class="col-sm-10">
            <textarea class="form-control" id="Address" name="Address" placeholder="Address" value="" required><?php echo isset($patient_row['patients_Address'])?$patient_row['patients_Address']:'' ;?></textarea>
          </div>
        </div>
        <br>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" name="inputEmail3" placeholder="Email" value="<?php echo isset($patient_row['patients_Email_id'])?$patient_row['patients_Email_id']:'' ;?>" required>
          </div>
        </div>
        <br><br>
        <button class="btn btn-primary" name="patient_entry" type="submit">Submit</button>
      </form>
    </div>
  </div>





<!-- vallidation -->
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>