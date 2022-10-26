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
<link rel="stylesheet" type="text/css" href="css/menu.css">



            <!-- Custom styles for this template -->
            <link href="dashboard.css" rel="stylesheet">

            <?php
          
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

        include "../src/vistes/menu.php"

        ?>


        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <h3>PERSONAL INFORMATION</h3>
          <table class="table table-bordered">
            <tbody>
              <tr>
                <th class="w-25">Name</th>
                <td class="d-flex justify-content-between"><?php echo $list["name"]?><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Change Name</button>
              
                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Enter new name</h4>
                      </div>
                      <div class="modal-body">
                        <form action="index.php?r=updateperfil" method="post">
                          <input name="new" type="text" class="form-control-plaintext" value="new name"/>
                          <input name="originvalue" type="hidden" value="name"/>
                          <button type="submit" class="btn btn-primary btn-sm">Send</button>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
              
                </td>
                
              </tr>
              <tr>
                <th class="w-25">Surname</th>
                <td class="d-flex justify-content-between"><?php echo $list["surename"]?><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal2">Change Surename</button>
                  <!-- Modal -->
                <div id="myModal2" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Enter new Surename</h4>
                      </div>
                      <div class="modal-body">
                        <form action="index.php?r=updateperfil" method="post">
                          <input name="new" type="text" class="form-control-plaintext" value="new surename"/>
                          <input name="originvalue" type="hidden" value="surename"/>
                          <button type="submit" class="btn btn-primary btn-sm">Send</button>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
                </td>
                
              </tr>
              <tr>
                <th class="w-25">Phone number</th>
                <td class="d-flex justify-content-between"><?php echo $list["telefon"]?><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal3">Change Phone Number</button>
                    <!-- Modal -->
                <div id="myModal3" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Enter new Phone Number</h4>
                      </div>
                      <div class="modal-body">
                        <form action="index.php?r=updateperfil" method="post">
                          <input name="new" type="text" class="form-control-plaintext" value="new Number"/>
                          <input name="originvalue" type="hidden" value="phone"/>
                          <button type="submit" class="btn btn-primary btn-sm">Send</button>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
              
              
              
              
              
                </td>
                
              </tr>
            </tbody>
          </table>
          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal4">Change password</button>
              <!-- Modal -->
              <div id="myModal4" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Enter new Password</h4>
                      </div>
                      <div class="modal-body">
                        <form action="index.php?r=updateperfil" method="post">
                          <input name="new" type="text" class="form-control-plaintext" value="new password"/>
                          <input name="originvalue" type="hidden" value="password"/>
                          <button type="submit" class="btn btn-primary btn-sm">Send</button>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
        
        </main>
    
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>

  </body>
</html>