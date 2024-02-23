
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body style="background-color: #F2EFE5">
<nav class="navbar navbar-inverse mg-2" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">LOGO</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="customer.php">Customer</a></li>
      <li ><a href="item.php">Item</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Reports<span class="caret"></span></a>
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

<div class="container" >
    <button class="btn btn-secondary " style="background-color: #C9D7DD">
    <a href="add_customer.php" class="" >New Customer</a>
    </button>
    <br><br>
    <table class="table table-hover" style="border: 0px solid" >
        <thead style="background-color:#B4B4B8">
            <tr class="tr-dark">
               <th scope="col">ID</th>
               <th scope="col">Title</th>
               <th scope="col">First Name</th>
               <th scope="col">Middel Name</th>
               <th scope="col">Last Name</th>
               <th scope="col">Contact No</th>
               <th scope="col">Discrict</th>
               <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody style="background-color:#E3E1D9">
            <?php
               include "db_conn.php";

               $sql = "SELECT * FROM customer";
               $result = mysqli_query($conn,$sql);
               while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr >
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['middle_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
                <td><?php echo $row['contact_no'] ?></td>
                <td><?php echo $row['district'] ?></td>
                <td>
                  <a href="edit_customer.php?id=<?php echo $row['id']?>" class="link-dark " style="padding:8px">
                      <span class="glyphicon glyphicon-pencil "></span>
                  </a>
                  
                  <a href="delete_customer.php?id=<?php echo $row['id']?>" class="link-dark">
                      <span class="glyphicon glyphicon-trash "></span>
                  </a>
                </td>
                </tr> 
              <?php
            }
            
            ?>    
            
        </tbody>
</table>
</div>




<!-- Bootstrap-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</body>
</html>