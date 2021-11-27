
<?php 
$added=0;
if(isset($_GET['MSG']))
{
$added=1;
}
?>
<?php  
// INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES (NULL, 'But Books', 'Please buy books from Store', current_timestamp());
include_once("common_code.php");

if(isset($_GET['addCase'])){
  $sno = $_GET['addCase'];
  $delete = true;
  $sql = "DELETE FROM `patients` WHERE `patients_Mobile` = $sno";
  $result = mysqli_query($conn, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset( $_POST['snoEdit'])){
  // Update the record
    $sno = $_POST["snoEdit"];
    $title = $_POST["titleEdit"];
    $description = $_POST["descriptionEdit"];

  // Sql query to be executed
  $sql = "UPDATE `notes` SET `title` = '$title' , `description` = '$description' WHERE `notes`.`sno` = $sno";
  $result = mysqli_query($conn, $sql);
  if($result){
    $update = true;
}
else{
    echo "We could not update the record successfully";
}
}
else{
    $title = $_POST["title"];
    $description = $_POST["description"];

  // Sql query to be executed
  $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
  $result = mysqli_query($conn, $sql);

   
  if($result){ 
      $insert = true;
  }
  else{
      echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
  } 
}
}
?>


    
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


  <title>iNotes - Notes taking made easy</title>

</head>

<body>
 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="./addPatient.php">Add Patient </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./view.php">View List</a>
      </li>
    
    </div>
  </div>
</nav>
  
  
  

  <div class="container my-2">


    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Name</th>
          <th scope="col">DOB</th>
          <th scope="col">Mobile Number</th>
          <th scope="col">Gender</th>
          <th scope="col">Address</th>
          <th scope="col">Email</th>

        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `patients`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['patients_Full_Name'] . "</td>
            <td>". $row['patients_DOB'] . "</td>
            <td>". $row['patients_Mobile_number'] . "</td>
            <td>". $row['patients_Gender'] . "</td>
            <td>". $row['patients_Address'] . "</td>
            <td>". $row['patients_Email_id'] . "</td>
            
            <td> <a href='addPatient.php?patients_id=".$row['patients_id']."' class='edit btn btn-sm btn-primary'>Edit</a> </td>
            <td> <a href='patient_details.php?patients_id=".$row['patients_id']."' class='addCase btn btn-sm btn-primary' >View</a>  </td>
          </tr>";
        } 
          ?>


      </tbody>
    </table>
  </div>
  <hr>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
  
</body>

</html>    