<head>
  <title>MINI INVENTORY SYSTEM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="http://localhost/CopyCI/public/index.css" rel="stylesheet">
 
  <script src="js/bootstrap.bundle.min.js">
   </script>
<script>
    function show()
{
document.getElementById('mdlgin').style.display = 'block';
}

function hide()
    {
      document.getElementById('mdlgin').style.display = 'none';
    }

    function foc()
    {
      document.getElementById('signin').style.transform = "scale(1.1)";
    }
  </script>
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
                    <a class="nav-link" href="<?php echo base_url('dealers/second');?>" onclick="show" id="dealer">Dealers</a>
                  </li>
                  <a href="<?= base_url('dealers/dealer-add') ?>"><button class="btn btn-secondary btnls"  type="button" data-bs-toggle="modal" data-bs-target="#myModal2">Add Dealers </button></a>
                  <button class="btn btn-danger btnls"  type="button" data-bs-toggle="modal" data-bs-target="#myModal">Add Products </button>
            </ul>
          
          </div>
        </div>
      </nav>
      <div class="bg"></div>

</head>
