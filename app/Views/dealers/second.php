<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="http://localhost/CopyCI/public/index.css" rel="stylesheet">
 
  <script src="js/bootstrap.bundle.min.js">
   </script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-custom  navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="https://cdn-icons-png.flaticon.com/512/3028/3028631.png" alt="Logo" style="width:45px ;" ></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <span class="navbar-text">STATIONARY HOUSE</span>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav  ms-auto list">
                <li class="nav-item nvitems">
                    <a class="nav-link" href="">Product Inventory</a>
                  </li>
                  <li class="nav-item nvitems">
                    <a class="nav-link" href="">Product List</a>
                  </li>
                  <li class="nav-item nvitems">
                    <a class="nav-link" href="">Dealers</a>
                  </li>
                  <button class="btn btn-secondary btnls"  type="button" data-bs-toggle="modal" data-bs-target="#myModal2">Add Dealers </button>
                  <button class="btn btn-danger btnls"  type="button" data-bs-toggle="modal" data-bs-target="#myModal">Add Products </button>
            </ul>
          
          </div>
        </div>
      </nav>
<div class="bg">
      <div class="container">
      <div class ="row">
      <div class="col-md-12 mt-5">
      <?php 
      if(session()->getFlashdata('status'))
      { echo "<h4>".session()->getFlashdata('status')."</h4>";}
      ?> 
      <div class="card">
      <div class="card-header">
      <h4>Dealers Data
      <a href="<?= base_url('dealers/dealer-add') ?>" class="btn btn-primary float-end">Add Dealer</a>
      </h4>
      
      </div>
      <div class="card-body">
      <table class= "table table-bordered">
      <thead>
      <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Phone</th>
      <th>Company</th>
      <th>Action</th>
      </tr>
      </thead>
      <tbody>
      <?php
      if($dealers)
      { foreach($dealers as $row)
      {
      echo '<tr>
      <td>'.$row["id"].'</td>
      <td>'.$row["name"].'</td>
      <td>'.$row["phone"].'</td>
      <td>'.$row["company"].'</td>
      <td>
      <a href="" class="btn btn-success btn-sm">Edit</a>
      <a href="" class="btn btn-danger btn-sm">Delete</a>
      </td>
      
      </tr>'
      
      ;}} ?>
      </tbody></table>
      
      </div>
      </div>
      </div>
      
      </div>
      </div>
    </div>
    
</body>
</html>
