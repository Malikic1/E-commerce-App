<?php
include('../include/config.php');


if(isset($_POST["insert_product"])){
    
    $product_title = $_POST["title"];
    $product_desc = $_POST['description'];
    $product_price = $_POST['price'];
    $product_keyword = $_POST['keyword'];
    $product_category = $_POST['category'];
    $product_brands = $_POST['brand'];
    $product_status = 'true';


        // accessing iimage
        $product_image1 = $_FILES['image_1']['name'];
        $product_image2 = $_FILES['image_2']['name'];
        $product_image3 = $_FILES['image_3']['name'];
        
    // accessing template image
        $temp_image1 = $_FILES['image_1']['tmp_name'];
        $temp_image2 = $_FILES['image_2']['tmp_name'];
        $temp_image3 = $_FILES['image_3']['tmp_name'];


    $insert_query = "INSERT INTO products (product_title,product_description,product_price,product_keyword,category_id,brand_id,product_image1,product_image2,product_image3,date,status)
     VALUES ('$product_title','$product_desc','$product_price','$product_keyword','$product_category','$product_brands','$product_image1','$product_image2','$product_image3','NOW()','$product_status')";
    $result = mysqli_query($conn, $insert_query);
    if ($result) {
            echo "<script>alert('Product has been inserted successfully');</script>";
        }else{
            echo
            "<script>alert('Product not added successfully. Please try again.');</script>";
          }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>
    <link rel="stylesheet" href="insert_product.css"/>

</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <div>
        <h2 class="text-center">Insert Product</h2>
        <label for="">Product title</label><br>
        <input type="text" placeholder="Enter Product Title" class="sec_input" name="title" ><br>

        <label for="">Product description</label><br>
        <input type="text" placeholder="Enter Product Description" class="sec_input"  name="description"><br>


        <label for="">Product price</label><br>
        <input type="text" placeholder="Enter Product Price" class="sec_input"  name="price"><br>

        <label for="">Product keyword</label><br>
        <input type="text" placeholder="Insert Search Keyword" class="sec_input"  name="keyword" ><br>

        <select class="sec_input" name="category">
            <option value="">Select a Category</option>
            <?php
                $selectCategory= mysqli_query($conn, "SELECT * FROM categories");
                while ( $row_data = mysqli_fetch_assoc($selectCategory)) {
                    $category_title = $row_data['category_title'];
                    $category_id = $row_data['category_id'];
                    echo   "<option value='$category_title'>
                                $category_title
                            </option>"  ;
          
                    }   
                    ?>    
        </select><br>

        <select class="sec_input" name="brand">
            <option value="">Select a Brand</option>
            <?php
                $selectBrand= mysqli_query($conn, "SELECT * FROM brands");
                while ( $row_data = mysqli_fetch_assoc($selectBrand)) {
                    $brand_title = $row_data['brand_title'];
                    $brand_id = $row_data['brand_id'];
                    echo   "<option value='$brand_title'>
                                $brand_title
                            </option>"  ;
          
                    }   
                    ?>    
        </select><br>

        <label for="">Product Image 1</label><br>
        <input type="file"  class="sec_input" name="image_1"><br>

      
        <label for="">Product Image 2</label><br>
        <input type="file" class="sec_input" name="image_2" ><br>

        <label for="">Product Image 3</label><br>
        <input type="file"  class="sec_input" name="image_3"><br>
        
        <input type="submit" value="Insert Product"  class="sec_btn"  name="insert_product">
    </div>
</form>

</body>
</html>





