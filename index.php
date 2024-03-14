<!--connect file-->
<?php
include('includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
  </head>
<header>
    <!--navbar -->
    <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <img src="./images/logo.jpg" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: 100/-</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php" class="btn btn-popup">Logout</a>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <!-- categories to b displayed-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">
      <?php
   $select_categories="SELECT * FROM `categories`";
   $result_categories=mysqli_query($con,$select_categories);
   $row_data=mysqli_fetch_assoc($result_categories);
   if ($row_data) {
    echo $row_data['category_title'];
  } else {
    echo "No categories found";
  }
   ?>
      <li class="nav-category">
          <a class="nav-link" href="#thobe-category">Thobe Category</a>
        </li>
        <li class="nav-category">
          <a class="nav-link" href="#jilbab-category">Jilbab Category</a>
        </li>
        <li class="nav-category">
          <a class="nav-link" href="#sajjara-category">Sajjara Category</a>
        </li>
        <li class="nav-category">
          <a class="nav-link" href="#kuppiya-category">Kuppiya Category</a>
        </li>
        <li class="nav-category">
          <a class="nav-link" href="#tasbih-category">Tasbih Category</a>
        </li>
      </ul>

    </nav>
</header>
<body>
      <div class="bg-dark">
        <h3 class="content">FaithFinds Corner</h3>
        <p class="content">E-commerce is a powerful means to connect the unconnected to global trade</p>

    <!-- First brand category -->
    <div id="category" class="brand-category">
        <h2>Thobe</h2>
        <!-- Add brand images or content specific to this category -->
        <div class="row">
  <div class="col-md-3">
    <!-- Products -->
    <div class="card mb-2">
      <img src="./images/haramain-stripe-brown.jpg" class="card-img-top" alt="..."  style="height: 300px; object-fit: cover;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build</p>
        <a href="#" class="btn btn-info">Add to Cart</a>
        <a href="#" class="btn btn-secondary">View more</a>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <!-- Products -->
    <div class="card mb-2">
      <img src="./images/haramain-stripe-gray.jpg" class="card-img-top" alt="..." style="height: 300px; object-fit: cover;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build</p>
        <a href="#" class="btn btn-info">Add to Cart</a>
        <a href="#" class="btn btn-secondary">View more</a>
    </div>
  </div>
</div>  
    </div>

  <!-- Second brand category -->
  <div id="jilbab-category" class="brand-category">
        <h2>Jilbab Brand</h2>
        <!-- Add brand images or content specific to this category -->
        <div class="row">
  <div class="col-md-3">
    <!-- Products -->
    <div class="card mb-2">
      <img src="./images/jilbab-brown.jpg" class="card-img-top" alt="..."  style="height: 300px; object-fit: cover;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build</p>
        <a href="#" class="btn btn-info">Add to Cart</a>
        <a href="#" class="btn btn-secondary">View more</a>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <!-- Products -->
    <div class="card mb-2">
      <img src="./images/jilbab-kaki.jpg" class="card-img-top" alt="..."  style="height: 300px; object-fit: cover;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build</p>
        <a href="#" class="btn btn-info">Add to Cart</a>
        <a href="#" class="btn btn-secondary">View more</a>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <!-- Products -->
    <div class="card mb-2">
      <img src="./images/jilbab-maroon.jpg" class="card-img-top" alt="..."  style="height: 300px; object-fit: cover;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build</p>
        <a href="#" class="btn btn-info">Add to Cart</a>
        <a href="#" class="btn btn-secondary">View more</a>
      </div>
    </div>
  </div>
    </div>
  </div>
        </div>
  </div>
    </div>
  </div>
  </div>
</div>
  <div id="sajjara-category" class="brand-category">
        <h2>Sajjara Brand :</h2>
        <!-- Add brand images or content specific to this category -->
  <div class="row"> 
  <div class="col-md-3">
    <!-- Products -->
    <div class="card mb-2">
      <img src="./images/sajjara-black.jpg" class="card-img-top" alt="..."  style="height: 300px; object-fit: cover;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build</p>
        <a href="#" class="btn btn-info">Add to Cart</a>
        <a href="#" class="btn btn-secondary">View more</a>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <!-- Products -->
    <div class="card mb-2">
      <img src="./images/sajjara-blue.jpg" class="card-img-top" alt="..."  style="height: 300px; object-fit: cover;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build</p>
        <a href="#" class="btn btn-info">Add to Cart</a>
        <a href="#" class="btn btn-secondary">View more</a>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <!-- Products -->
    <div class="card mb-2">
      <img src="./images/sajjara-brown.jpg" class="card-img-top" alt="..."  style="height: 300px; object-fit: cover;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build</p>
        <a href="#" class="btn btn-info">Add to Cart</a>
        <a href="#" class="btn btn-secondary">View more</a>
      </div>
    </div>
  </div>
  </div>
  </div>
</div>
  </div>
  <div id="kuppiya-category" class="brand-category">
        <h2>Turkish Kuppiya Brand :</h2>
        <!-- Add brand images or content specific to this category -->
  <div class="row"> 
  <div class="col-md-3">
    <!-- Products -->
    <div class="card mb-2">
      <img src="./images/turkish1.jpg" class="card-img-top" alt="..."  style="height: 300px; object-fit: cover;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build</p>
        <a href="#" class="btn btn-info">Add to Cart</a>
        <a href="#" class="btn btn-secondary">View more</a>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <!-- Products -->
    <div class="card mb-2">
      <img src="./images/turkish2.jpg" class="card-img-top" alt="..."  style="height: 300px; object-fit: cover;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build</p>
        <a href="#" class="btn btn-info">Add to Cart</a>
        <a href="#" class="btn btn-secondary">View more</a>
      </div>
    </div>
  </div>
</div>
  <div id="tasbih-category" class="brand-category">
        <h2>Crystal Tasbih Brand :</h2>
        <!-- Add brand images or content specific to this category -->
  <div class="row"> 
  <div class="col-md-3">
    <!-- Products -->
    <div class="card mb-2">
      <img src="./images/tasbih1.jpg" class="card-img-top" alt="..."  style="height: 300px; object-fit: cover;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build</p>
        <a href="#" class="btn btn-info">Add to Cart</a>
        <a href="#" class="btn btn-secondary">View more</a>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <!-- Products -->
    <div class="card mb-2">
      <img src="./images/tasbih2.jpg" class="card-img-top" alt="..."  style="height: 300px; object-fit: cover;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build</p>
        <a href="#" class="btn btn-info">Add to Cart</a>
        <a href="#" class="btn btn-secondary">View more</a>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
      <!-- last context -->
   <div class="bg-success p-3 text-center">
      <p>All right reserve: Designed by FaithFinds Corner</p>
    </div>
    </div>
</div>
<!-- Bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>