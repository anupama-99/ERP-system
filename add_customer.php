<?php 
  include "db_conn.php";

  if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $first_name = $_POST['first_name'];
    $middel_name =$_POST['middel_name'];
    $last_name = $_POST['last_name'];
    $contact_no= $_POST['contact_no'];
    $district=$_POST['district'];

    $sql ="INSERT INTO `customer`(`id`, `title`, `first_name`, `middle_name`, `last_name`, `contact_no`, `district`) 
    VALUES (Null,'$title','$first_name','$middel_name','$last_name','$contact_no','$district')";
  
    $result = mysqli_query($conn,$sql);

    if($result) {
        header("Location:customer.php?msg=New record created successfully");
    }else{
        echo "Failed:" . mysqli_error($conn);
    }

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
</head>
<body style="background-color: #F2EFE5">
<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">LOGO</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="customer.php">Customer</a></li>
      <li ><a href="item.php">Item</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="report.php">Reports<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="invoice_report.php">Invoice report</a></li>
          <li><a href="invoice_item.php"> Invoice item report </a></li>
          <li><a href="item_report.php">Item report </a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav> 

<div class="container">
    <div class="text-center mb-4">
        <h3>ADD CUSTOMER</h3>
        <h5 class="text-muted"> Complete the form to add new user</h5>
    </div>
    <div class="container d-flex flex-column" style="">
        <form action="" method="post" style="width:50vw; min: width 300px; background-color:#E3E1D9; padding:10px; border-radius: 10px;">
            <div class="col">
                <label class="form-label">Title:</label>
                <input type="text" class="form-control" name="title" placeholder="Miss">
            </div>
            <br>
            <div class="col">
                <label class="form-label">First Name:</label>
                <input type="text" class="form-control" name="first_name" placeholder="Sadun">
            </div>
            <br>
            <div class="col">
                <label class="form-label">Middel Name:</label>
                <input type="text" class="form-control" name="middel_name" placeholder="kumara">
            </div>
            <br>
            <div class="col">
                <label class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="last_name" placeholder="wijerathne">
            </div>
            <br>
            <div class="col">
                <label class="form-label">Contact No:</label>
                <input type="text" class="form-control" name="contact_no" placeholder="0775693202">
            </div>
            <br>
            <div class="col">
                <label class="form-label">District:</label>
                <input type="text" class="form-control" name="district" placeholder="colombo">
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-success" name="submit" >Submit</button>
                <a href="customer.php" class="btn btn-danger">Cancle</a>
            </div>
       </form>
    </div>

</div>


<!-- Bootstrap-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</body>
</html>