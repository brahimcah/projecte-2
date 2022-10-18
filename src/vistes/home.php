<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Perroqueria Papesos</title>

   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

            
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
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

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">DATA</th>
                  <th scope="col">Tractament</th>
                  <th scope="col">Estat</th>
                  <th scope="col">Afegeix al calendari</th>
                  <th scope="col">Modificar</th>
                  <th scope="col">Eliminar</th>
                </tr>
              </thead>
              <tbody>
                <?php   foreach($list as $entry) {?>
                <tr>  
                  <td> <?php echo $entry['date_cita'] ?> </td>
                  <td> <?php echo $entry['tipo_cita'] ?> </td>
                  <td> <?php echo $entry['nom'] ?> </td>
                  
                  <td> <a title="Exportar a l'Outlook" href="">
                        <img width="30" src="../img/microsoft_office_outlook.png" alt="Exportar a l'outlook" title="Exportar a l" class="exportarCalendariIcon">
                      </a><b> - </b> <a title="Exportar en PDF" href="">
                        <img width="30" src="../img/pdf.png" alt="Exportar a l'outlook" title="Exportar a l" class="exportarCalendariIcon">
                      </a></td>
                  <td><a title="Exportar en PDF" href="">
                        <img width="25" src="../img/pen.png" alt="Exportar a l'outlook" title="Exportar a l" class="exportarCalendariIcon">
                      </a></td>
                  <td><a title="Exportar en PDF" href="">
                        <img width="30" src="../img/bin.png" alt="Exportar a l'outlook" title="Exportar a l" class="exportarCalendariIcon">
                      </a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
        </div>  

        </main>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
  </body>
</html>