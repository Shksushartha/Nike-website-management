<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/authentication/components/sidebar/sidebar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <!-- <div class="sidebar">
        <div class = "func">
            <a href="/authentication/functionality/add/add.php" class="funcA">Add</a>
        </div>
        <div class = "func">
            <a href="/authentication/functionality/edit/edit.php" class="funcA">Edit</a>
        </div>
        <div class = "func">
            <a href="/authentication/functionality/delete/delete.php" class="funcA">Delete</a>
        </div>
    </div> -->
    <nav class="navbar bg-body ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            <div class="top">
                <a href="/authentication/main.php"><img src="/authentication/components/nike_PNG11.png" alt="" class="logo"
      /></a>
      <p class="heading"><b id="nikehead">Nike</b> Dashboard</p>
            </div>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 text-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/authentication/main.php"><strong>Home</strong></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <strong>Add</strong>
            </a>
            <ul class="dropdown-menu text-center">
              <li><a class="dropdown-item" href="/authentication/add.php">Mens</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/authentication/addFemaleShoes.php">Womens</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/authentication/addChildrenShoes.php">Childrens</a></li>
            </ul>
          </li>
          <!-- <li class="nav-item text-center">
            <a class="nav-link" href="/authentication/edit.php"><strong>Edit</strong></a>
          </li> -->
          <li class="nav-item text-center">
            <a class="nav-link" href="/authentication/delete.php"><strong>Record</strong></a>
          </li>
          
           
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary bg-body-" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
</body>
</html>