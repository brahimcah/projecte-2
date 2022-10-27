<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Perroqueria Papesos</title>

   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    
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

      include "../src/vistes/menu.php"

    ?>


        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="container-fluid">
            <form class="d-flex flex-column w-50" action="" method="post">
              <label>hello there</label>
              <input type="date">
              <label>time select</label>
              <select>
                <option value="8:00:00">8</option>
                <option value="9:00:00">9</option> 
                <option value="10:00:00">10</option> 
                <option value="11:00:00">11</option>
                <option value="12:00:00">12</option> 
                <option value="13:00:00">13</option>   
              </select>
              <label>cosa</label>
              <select>
                <option value="Tallar cabell">Tallar cabell</option>
                <option value="Tenyir">Tenyir</option> 
                <option value="Pentinar">Pentinar</option> 
                <option value="Fer barba">Fer barba</option> 
              </select>
              <br/>
              <button type="submit" class="btn btn-primary">Send</button>
            </form>
          </div>
        </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
  </body>
</html>