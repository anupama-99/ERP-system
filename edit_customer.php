<?php 
  include "db_conn.php";
  $id = $_GET['id'];

  if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $first_name = $_POST['first_name'];
    $middel_name =$_POST['middel_name'];
    $last_name = $_POST['last_name'];
    $contact_no= $_POST['contact_no'];
    $district=$_POST['district'];

    $sql ="UPDATE `customer` SET `title`='$title',`first_name`='$first_name',`middle_name`='$middle_name',`last_name`='$last_name',`contact_no`='$contact_no',`district`='$district' WHERE id=$id";
  
    $result = mysqli_query($conn,$sql);

    if($result) {
        header("Location:customer.php?msg=Data Updated successfully");
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
    <title>Edit Customer</title>

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
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >Reports<span class="caret"></span></a>
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
        <h3>Edit Customer Information</h3>
        <p class="text-muted"> Click update after changing any information</p>
    </div>

    <?php 
    $sql ="SELECT * FROM customer WHERE id = $id LIMIT 1 ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    ?>



    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min: width 300px; background-color:#E3E1D9; padding:10px; border-radius: 10px;">
            <div class="col">
                <label class="form-label">Title:</label>
                <input type="text" class="form-control" name="title" value="<?php echo $row['title']?>">
            </div>
            <br>
            <div class="col">
                <label class="form-label">First Name:</label>
                <input type="text" class="form-control" name="first_name"  value="<?php echo $row['first_name']?>">
            </div>
            <br>
            <div class="col">
                <label class="form-label">Middel Name:</label>
                <input type="text" class="form-control" name="middel_name"  value="<?php echo $row['middle_name']?>">
            </div>
            <br>
            <div class="col">
                <label class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="last_name"  value="<?php echo $row['last_name']?>">
            </div>
            <br>
            <div class="col">
                <label class="form-label">Contact No:</label>
                <input type="text" class="form-control" name="contact_no"  value="<?php echo $row['contact_no']?>">
            </div>
            <br>
            <div class="col">
                <label class="form-label">District:</label>
                <input type="text" class="form-control" name="district"  value="<?php echo $row['district']?>">
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-success" name="submit" >Update</button>
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