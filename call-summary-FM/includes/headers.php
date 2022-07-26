
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Fire Master Portal</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.charts.load('43', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    ...
</script>

  </head>
  <body class="p-3 m-0 border-0 bd-example">
    <nav class="navbar bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./img/Picture1.png" alt="" width="300" height="50" class="d-inline-block align-text-top"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="./img/Picture1.png" alt="" width="300" height="50" class="d-inline-block align-text-top"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="invoiceInput.php">Invoice Total Input</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="usr.php">USR Input</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="FESales.php">Fire Extinguisher Sales</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">Reports</a>
                <ul class="dropdown-menu dropdown-menu-dark">

                  <li><a class="dropdown-item"  href="SSQuery.php" >Sales Summary</a></form></li>
                 <li><a class="dropdown-item" href="USRQuery.php">USR Report</a></li>
                 <li><a class="dropdown-item" href="index.php">Dashboard Report</a></li>
                 <li><a class="dropdown-item" href="FEReport.php">Fire Extinguishers Report</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">Modifications</a>
                <ul class="dropdown-menu dropdown-menu-dark">

                  <li><a class="dropdown-item"  href="modifyUSR.php" >Modify USR</a></form></li>
                 <li><a class="dropdown-item" href="modifySS.php">Modify Sales Summaries</a></li>
                </ul>
              </li>

            </ul>

          </div>
        </div>
      </div>
    </nav>
  
