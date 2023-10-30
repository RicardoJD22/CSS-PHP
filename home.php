<?php
  session_start();
	if (!isset($_SESSION['user_id'])) {
		header("Location: /CSS-PHP/index.html");
	}
  include('products_all.php');    
  $products = new Products();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			Home
		</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	    <style type="text/css">
	      
	      body{
	        background-color: #70D464;
	      } 

	    </style>
	</head>
	<body>  

		<div class="container-fluid">
			
			<div class="row min-vh-100"> 

				<div class=" col-auto d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
				    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
				      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
				      <span class="fs-4">Sidebar</span>
				    </a>
				    <hr>
				    <ul class="nav nav-pills flex-column mb-auto">
				      <li class="nav-item">
				        <a href="#" class="nav-link active" aria-current="page">
				          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
				          Home
				        </a>
				      </li>
				      <li>
				        <a href="#" class="nav-link text-white">
				          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
				          Dashboard
				        </a>
				      </li>
				      <li>
				        <a href="#" class="nav-link text-white">
				          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
				          Orders
				        </a>
				      </li>
				      <li>
				        <a href="#" class="nav-link text-white">
				          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
				          Products
				        </a>
				      </li>
				      <li>
				        <a href="#" class="nav-link text-white">
				          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
				          Customers
				        </a>
				      </li>
				    </ul>
				    <hr>
				    <div class="dropdown">
				      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
				        <img src="<?= $_SESSION['avatar'] ?>" alt="" width="32" height="32" class="rounded-circle me-2">
				        <strong>
				        	<?= $_SESSION['name'] ?>
				        </strong>
				      </a>
				      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="">
				        <li><a class="dropdown-item" href="#">New project...</a></li>
				        <li><a class="dropdown-item" href="#">Settings</a></li>
				        <li><a class="dropdown-item" href="#">Profile</a></li>
				        <li><hr class="dropdown-divider"></li>
				        <li><a class="dropdown-item" href="#">Sign out</a></li>
				      </ul>
				    </div>
				</div>

				<div class="col m-0 p-0"> 
					
					<nav class="navbar bg-dark border-bottom border-body navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
					  <div class="container-fluid">
					    <a class="navbar-brand" href="#">Navbar</a>
					    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					      <span class="navbar-toggler-icon"></span>
					    </button>
					    <div class="collapse navbar-collapse" id="navbarNavDropdown">
					      <ul class="navbar-nav">
					        <li class="nav-item">
					          <a class="nav-link active" aria-current="page" href="#">Home</a>
					        </li>
					        <li class="nav-item">
					          <a class="nav-link" href="#">Features</a>
					        </li>
					        <li class="nav-item">
					          <a class="nav-link" href="#">Pricing</a>
					        </li>
					        <li class="nav-item dropdown">
					          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					            Dropdown link
					          </a>
					          <ul class="dropdown-menu">
					            <li><a class="dropdown-item" href="#">Action</a></li>
					            <li><a class="dropdown-item" href="#">Another action</a></li>
					            <li><a class="dropdown-item" href="#">Something else here</a></li>
					          </ul>
					        </li>
					      </ul>
					      <form class="d-flex" role="search">
					        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					        <button class="btn btn-outline-success" type="submit">Search</button>
					      </form>
					      <div class="dropdown">
						      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
						        <img src="<?= $_SESSION['avatar'] ?>" alt="" width="32" height="32" class="rounded-circle me-2">
						        <strong>
						        	<?= $_SESSION['name'] ?>
						        </strong>
						      </a>
						      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="">
						        <li><a class="dropdown-item" href="#">New project...</a></li>
						        <li><a class="dropdown-item" href="#">Settings</a></li>
						        <li><a class="dropdown-item" href="#">Profile</a></li>
						        <li><hr class="dropdown-divider"></li>
						        <li><a class="dropdown-item" href="#">Sign out</a></li>
						      </ul>
						    </div>
					    </div>
					  </div>
					</nav> 

					<div class="container">
        <div class="row">
          <?php foreach($products->getProducts() as $product): ?>
            <div class="col-12 col-md-4 mt-3">
              <div class="card mb-4">
                <img class="card-img-top" src="<?= $product->cover?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?= $product->name ?></h5>
                  <p class="card-text"><?= $product->description ?></p>
                </div>
                <div class="card-body">
                  <a href="detalles.php?id=<?= $product->id ?>" class="card-link">Go Somewhere</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

					
				</div>

			</div>

		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
	</body>
</html>