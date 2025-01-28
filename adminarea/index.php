<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashbord</title>
    <!-- bootstrap css link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">

        <!-- css file -->
         <link rel="stylesheet"href="../style.css">
         <style>
            .admin_image{
             width: 100px;
            object-fit: contain;
            }  

            .footer{
                position: absolute;
                bottom: 0;
            }
         </style>
    </head>
  <body>
    
  <!-- navbar -->
    <div class="container-fluid">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../image/download.jpeg" alt=""class="logo">
                <nav class="navbar navbar-expand-lg navbar-light bg-info">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">WELCOM GUEST</a>
                        </li>
                    </ul>
                </nav>
            </div>   
        </nav>  
            <!-- second child  -->
            <div class="bg-light">
                <h3 class="text-center p-2">Manage Details</h3>
            </div>

    <!-- third child -->
        <div class="row">
            <div class="col-m-12 bg-secondary p-1 d-flex align-items-center">
                <div class="px-5">
                    <a href="#"><img src="../image/sel.jpeg" 
                    alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div> 
                <!-- Button*10>a.nav-link.text-light.bg-info.my-1 -->
                <div class="button text-center">
                    <button><a href="insertproduct.php" class="nav-link text-light bg-info my-1">Insert products</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Viwe Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Viwe categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Viwe Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All payment</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">List user</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>        
            </div>
        </div>

        <!-- fourth child -->
         <div class="container my-3" >
            <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET["insert_brand"])){
                include('insert_brands.php');
            }   
            
            ?>
         </div>

         <!-- last child -->
             <div class="bg-info p-3 text-center footer">
                <p>"Join our family of happy customers :) — buy today!" </p>
            </div>   
    </div>
           

<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
  crossorigin="anonymous">
</script>

  </body>
</html>