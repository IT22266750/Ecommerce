<!-- connect file  -->
<?php
include('include/connected.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ecommerce website using PHP and MySQL.</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />



<!-- css file -->
<link rel="stylesheet"href="style.css">

</head>
<body>
  <!-- navbar  -->
  <div class="container-fluid">
    <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light"  style="background-color:pink">
          <div class="container-fluid">
            <img src="./image/download.jpeg" alt="" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Product</a>
                </li>
            
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true"><i class="fa-solid fa-cart-shopping"></i><sup>1<sup></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">Total Price:100</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true"></a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
              </form>
            </div>
            
          </div>
        </nav>

    <!-- second child -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">welcom</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">login</a>
          </li>
        </ul>
    </nav>
    <!-- third child -->
    <div class="big-light">
      <h3 class="text-center">Hidden store</h3>
      <p class="text-center">Communication is at the heart of e-commerce and community</p>
    </div>
    <!-- fourth child -->
      <div class="row">
        <div class="col md-10">
            <!-- products -->
             <!-- row 1 -->
            <div class="row">
              <div class="col md-4">
                <div class="card">
                  <img src=" ./image/imag(7).jpeg" class="card-img-top" alt="Sunset Over the Sea"/>
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-info">add to cart</a>
                    <a href="#" class="btn btn-secondary">View more</a>
                  </div>
                </div>
              </div>
              <div class="col md-4 mb-2">
                <div class="card">
                  <img src="./image/shoes.jpeg" class="card-img-top" alt="Sunset Over the Sea"/>
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-info">add to cart</a>
                    <a href="#" class="btn btn-secondary">View more</a>  
                  </div>
                </div>
              </div>
              <div class="col md-4 mb-2">
                <div class="card" >
                  <img src="./image/Mac.jpeg" class="card-img-top" alt="Sunset Over the Sea"/>
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-info">add to cart</a>
                    <a href="#" class="btn btn-secondary">View more</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- row 2 -->
            <div class="row">
              <div class="col md-4">
                <div class="card">
                  <img src=" ./image/image1.jpeg" class="card-img-top" alt="Sunset Over the Sea"/>
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-info">add to cart</a>
                    <a href="#" class="btn btn-secondary">View more</a>
                  </div>
                </div>
              </div>
              <div class="col md-4 mb-2">
                <div class="card">
                  <img src="./image/image(31)" class="card-img-top" alt="Sunset Over the Sea"/>
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-info">add to cart</a>
                    <a href="#" class="btn btn-secondary">View more</a>  
                  </div>
                </div>
              </div>
              <div class="col md-4 mb-2">
                <div class="card" >
                  <img src="./image/image(16).jpeg" class="card-img-top" alt="Sunset Over the Sea"/>
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-info">add to cart</a>
                    <a href="#" class="btn btn-secondary">View more</a>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="col-md-2 bg-secondary p-0">
          <!-- brand to be displayed -->
            <ul class="navbar-nav me-auto text-center">
              <li class="nav-item bg-info">
                 <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
              </li>

            <?php

             $select_brands = "SELECT *  FROM `brands`";
             $result_brands = mysqli_query($con,$select_brands);
            //  $row_data = mysqli_fetch_assoc($result_brands);
            //  echo $row_data['brandtitle'];
             while($row_data=mysqli_fetch_assoc($result_brands)){
              $brandtitle=$row_data['brandtitle'];
              $Brand_id=$row_data['Brand_id'];
              echo " <li class='nav-item'>
                 <a href='index.php?brand=$Brand_id' class='nav-link text-light'>$brandtitle</a>
              </li>" ;
             }

            ?>
            
            </ul>

            <!--categories to be displayed -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                   <a href="#" class="nav-link text-light"><h4>categories</h4></a>
               </li> 

               <?php

             $select_categories = "SELECT *  FROM `categories`";
             $result_categories= mysqli_query($con,$select_categories);
            //  $row_data = mysqli_fetch_assoc($result_brands);
            //  echo $row_data['brandtitle'];
             while($row_data=mysqli_fetch_assoc($result_categories)){
              $categorytitle=$row_data['categorytitle'];
              $category_id=$row_data['category_id'];
              echo " <li class='nav-item'>
                 <a href='index.php?category=$category_id'class='nav-link text-light'>$categorytitle</a>
              </li>" ;
             }

            ?>
            </ul> 
          
          
        </div>

      </div>



  </div>



  <!-- last child -->
  <div class="p-4" style="background-color:pink">
      <p style="text-align:center">"Join our family of happy customers :) — buy today!"</p>
  </div>
 


  <!-- bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
  crossorigin="anonymous">
  </script>
</body>
</html>