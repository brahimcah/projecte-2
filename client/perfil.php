<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Perroqueria Papesos</title>

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom styles for this template -->
            <link href="dashboard.css" rel="stylesheet">

            <?php
    require_once "../Database/Database.php";

    
    $username = "demo";

    $sql = "SELECT * FROM users usr WHERE usr.username='".$username."';";
    $result = $conn->query($sql);

                   
    ?>
          </head>
          <body>
            
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
          <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Perroqueria Papesos</a>
          <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-nav">
            <div class="nav-item text-nowrap">
              <a class="nav-link px-3" href="#">Sign out</a>
            </div>
          </div>
        </header>


        <?php 

        include "menu.php"

        ?>


        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <?php  if ($result->num_rows > 0) {?>
            <h3>PERSONAL INFORMATION</h3>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">Name</th>
                        <td>filler</td>
                    </tr>
                    <tr>
                        <th scope="row">Name</th>
                        <td>filler</td>
                    </tr>
                </tbody>
            </table> 
            
            <?php }else{
            echo "<p>pues no</p>";
        }?>
        
        </main>
      </div>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>