<?php 
    include('../include/connected.php');
    if(isset($_post['insertproduct'])){

        $products_title=$_post['product_tittle'];
        $Description=$_post['Description'];
        $product_keywords=$_post['product_keywords'];
        $products_category=$_post['product_cetogory'];
        $products_brands=$_post['product_brands'];
        $products_price=$_post['product_price'];
        $products_status='true';

        //accesing images
        $Product_Image1=$_file['Product_Image1']['name'];
        $Product_Image2=$_file['Product_Image2']['name'];
        $Product_Image3=$_file['Product_Image3']['name'];
        $Product_Image4=$_file['Product_Image4']['name'];

        //accesing image tmp name
        $temp_Image1=$_file['Product_Image1']['tmp_name'];
        $temp_Image2=$_file['Product_Image2']['tmp_name'];
        $temp_Image3=$_file['Product_Image3']['tmp_name'];
        $temp_Image4=$_file['Product_Image4']['tmp_name'];

        echo"<script>alter('choosen')</script>";

        //checking empty condition
        if($products_title=='' or $Description=='' or $product_keywords==''
         or $products_category=='' or $products_brands=='' or $products_price==''
         or $Product_Image1=='' or$Product_Image2=='' or $Product_Image3==''
          or $Product_Image4==''){
            echo "<script>alert('please fill all the available files')</script>";
            exit();
         }else{
            move_uploaded_file($temp_Image1,"./Product_Images/$temp_Image1");
            move_uploaded_file($temp_Image2,"./Product_Images/$temp_Image2");
            move_uploaded_file($temp_Image3,"./Product_Images/$temp_Image3");
            move_uploaded_file($temp_Image4,"./Product_Images/$temp_Image4");
                
            //insert query
            $insert_products="INSERT INTO `products` (producttitle,
            productdescription ,productkeyword, categoryid, brandid, productimage1,
            productimage2, productimage3, productimage4, productprice, date, status) 
            values ('$products_title','$Description','$product_keywords',' $products_category',
            '$products_brands','$Product_Image1','$Product_Image2','$Product_Image3','$Product_Image4',
            '$products_price', NOW(), '$products_status')";
            if($result_query){
                echo"<script>alter('successfully inserted the products')</script>";
            }

         }
          
    }
    ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product-Admin Dashborder</title>

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
    <link rel="stylesheet"href="../style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center"> Insert Products</h1>
        <!-- form -->
         <form action="" method="post" enctype="multipart/from-data">
            <!-- tittle -->
            <div class= "form-outline. mb-4 w-50 m-auto">
                <label for="product_tittle" class="from-label"> Product tittle</label>
                <input type="text" name="product_tittle" id="product_tittle"
                class="form-control" placeholder="Enter Product title" autocomplete="off"
                required="required">
            </div>
            <!-- Description -->
            <div class= "form-outline. mb-4 w-50 m-auto">
                <label for=" Description" class="from-label"> Product Description </label>
                <input type="text" name=" Description" id=" Description"
                class="form-control" placeholder="Enter Product Description " 
                autocomplete="off" required="required">
            </div>
        
            <!-- keyword -->
            <div class= "form-outline. mb-4 w-50 m-auto">
                <label for="product_keywords" class="from-label"> Product keyword </label>
                <input type="text" name=" product_keywords" id="product_keywords"
                class="form-control" placeholder="Enter Product keywords" 
                autocomplete="off" required="required">
            </div>    

                <!-- categories --> 
            <div class= "form-outline mb-4 my-3 w-50 m-auto">
                <select name="product_cetogory" id="" class="form-select">
                    <option value="">Select a category</option>

                    <?php
                        $select_query="select * from `categories`";
                        $result_query=mysqli_query($con,$select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $category_title=$row['categorytitle'];
                            $category_id=$row['category_id'];
                            echo "<option value='$category_id'>$category_title</option>";
                        }
                    ?>
                      
                    
                </select>
            </div>

               <!--Brand --> 
               <div class= "form-outline mb-4 my-3 w-50 m-auto">
                <select name="product_brands" id="" class="form-select">
                    <option value="">Select a Brands</option>
                        <?php
                            $select_query="select * from `brands`";
                            $result_query=mysqli_query($con,$select_query);
                            while($row=mysqli_fetch_assoc($result_query)){
                                $brand_title=$row['brandtitle'];
                                $brand_id=$row['brand_id'];
                                echo "<option value='$brand_id'>$brand_title</option>";
                            }
                        ?>
 
                </select>
            </div>

                <!-- Image 1-->
                <div class= "form-outline. mb-4 w-50 m-auto">
                <label for="Product_Image1" class="from-label"> Product image 1 </label>
                <input type="file" name=" Product_Image1" id="Product_Image1"
                class="form-control" autocomplete="off" required="required">
            </div> 

               <!-- Image 2-->
               <div class= "form-outline. mb-4 w-50 m-auto">
                <label for="Product_Image2" class="from-label"> Product image 2 </label>
                <input type="file" name="Product_Image2" id="Product_Image2"
                class="form-control" autocomplete="off" required="required">
            </div> 

               <!-- Image 3-->
               <div class= "form-outline. mb-4 w-50 m-auto">
                <label for="Product_Image3" class="from-label"> Product image 3 </label>
                <input type="file" name="Product_Image3" id="Product_Image3"
                class="form-control" autocomplete="off" required="required">
            </div> 
             
               <!-- Image 4-->
               <div class= "form-outline. mb-4 w-50 m-auto">
                <label for=" Product_Image4" class="from-label"> Product image 4</label>
                <input type="file" name="Product_Image4" id="Product_Image4"
                class="form-control" autocomplete="off" required="required">
            </div> 

             <!-- price -->
              <div class='form-outline  mb-4 w-50 m-auto'>
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name='product_price'
                id='product_price' class='form-control' 
                placeholder='enter price' autocomplete='off' required='required'>
              </div>


            <!-- Submit -->
            <div class= "form-outline mb-4 w-50 m-auto">
                <input type="submit" name="Insert_product" 
                class="btn btn-info mb-3 px-3" value="insertproduct">
            </div> 

         </form>

    </div>
    
</body>
</html>