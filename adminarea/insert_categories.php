<?php
include('../include/connected.php');
if(isset($_POST['insert_cat'])){
    $category_title=$_POST['cat_title'];

    //select data from database
    $select_query="SELECT * from `categories` where categorytitle = '$category_title'";
    $result_select = mysqli_query($con,$select_query);
    $number = mysqli_num_rows($result_select);
    if($number>0){
        echo "<script>alert('This category is present inside the database')</script>";
    }else{

    $insert_query="INSERT INTO `categories` (categorytitle) VALUES ('$category_title')";
    $result = mysqli_query($con,$insert_query);
    if($result){
        echo "<script>alert('category has been inserted successfully')</script>";
    }else{
        echo "<script>alert('category has not been inserted successfully')</script>";
        echo "Error: " . mysqli_error($con);
    };};
}
?>
<H2 class="text-center">Insert Categories</H2> 

<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid
            fa-receipt"></i></span>
            <input type="text" class="form-control" name="cat_title"
             placeholder="insert categories" aria-label="categories" 
             aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 mb-2 m-auto">
         <input type="submit" class="bg-info border-0 p-2 my-2" name="insert_cat"
         value="Insert Categories">
         
    </div>
</form>
