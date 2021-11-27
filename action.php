<?php
include 'common_code.php';
// if (isset($_POST['patient_entry'])) {

//   do
//   {
//     if(is_valid_security_token("USER_ADD_TOKEN", $_POST['USER_ADD_TOKEN']) == false)
//     {
//        header("location:error?code=INVALID_TOKEN"); exit;
//     }

//     $name =  $_POST['fname'];
//     $dob = $_POST['dob'];
//     $gender =  $_POST['inlineRadioOptions'];
//     $mob = $_POST['phone'];
//     $email = $_POST['inputEmail3'];
//     $address = $_POST['Address'];
//     $sql = "INSERT INTO `patients` (`patients_Mobile_number`, `patients_Full_Name`, `patients_DOB`, `patients_Gender`, `patients_Address`, `patients_Email_id`) VALUES ('" . $mob . "', '" . $name . "', '" . $dob . "', '" . $gender . "', '" . $address . "', '" . $email . "');";

//     $result = mysqli_query($conn, $sql);
//     if ($result) {
//       header("Location:index.php?MSG=ADDED_SUCCESSFULLY");
// exit;
//     } else {
//       echo '<div class="alert alert-danger fade show" role="alert">Could Not Inserted</div>';
//     }
//   }while(false);
// }

  ?>