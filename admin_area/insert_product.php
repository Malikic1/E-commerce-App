<?php
include('../include/config.php');


if(isset($_POST["insert_product"])){
    
    $product_title = $_POST["title"];
    $product_desc = $_POST['description'];
    $product_price = $_POST['price'];
    $slash_price = $_POST['slash'];
    $star_rating = $_POST['star'];
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

if($product_title=='' or $product_desc=='' or $product_price=='' or $product_keyword=='' 
    or $product_category=='' or $product_brands=='' or $product_image1=='' ){
        echo "<script>alert('Please update necessary field and try again.');</script>";
    }else{

        move_uploaded_file($temp_image1, "./product_images/$product_image1");
        move_uploaded_file($temp_image2, "./product_images/$product_image2");
        move_uploaded_file($temp_image3, "./product_images/$product_image3");


            $insert_query = "INSERT INTO products (product_title,product_description,product_price,slashed_price,star_rating,product_keyword,category_id,brand_id,product_image1,product_image2,product_image3,date,status)
            VALUES ('$product_title','$product_desc','$product_price','$slash_price','$star_rating','$product_keyword','$product_category','$product_brands','$product_image1','$product_image2','$product_image3','NOW()','$product_status')";
            $result = mysqli_query($conn, $insert_query);
        if ($result) {
            echo "<script>alert('Product has been inserted successfully');</script>";
            
        }else{
            echo
            "<script>alert('Product not added successfully. Please try again.');</script>";
          }
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
        <input type="text" placeholder="Enter Product Title" class="sec_input" name="title" required><br>

        <label for="">Product description</label><br>
        <input type="text" placeholder="Enter Product Description" class="sec_input"  name="description" required><br>


        <label for="">Product price</label><br>
        <input type="text" placeholder="Enter Product Price" class="sec_input"  name="price" required><br>

        <label for="">Slashed price</label><br>
        <input type="text" placeholder="Slashed Price (this is the initial price the product was brought down from)" class="sec_input"  name="slash"><br>

        
        <label for="">Stars rating</label><br>
        <input type="number" placeholder="Star rating (maximum of 5stars)" class="sec_input"  name="star"><br>

        <label for="">Product keyword</label><br>
        <input type="text" placeholder="Insert Search Keyword" class="sec_input"  name="keyword"  required><br>

        <select class="sec_input" name="category"  required>
            <option value="">Select a Category</option>
            <?php
                $selectCategory= mysqli_query($conn, "SELECT * FROM categories");
                while ( $row_data = mysqli_fetch_assoc($selectCategory)) {
                    $category_title = $row_data['category_title'];
                    $category_id = $row_data['category_id'];
                    echo   "<option value='$category_id'>
                                $category_title
                            </option>" ;
          
                    }   
                    ?>    
        </select><br>

        <select class="sec_input" name="brand"  required>
            <option value="">Select a Brand</option>
            <?php
                $selectBrand= mysqli_query($conn, "SELECT * FROM brands");
                while ( $row_data = mysqli_fetch_assoc($selectBrand)) {
                    $brand_title = $row_data['brand_title'];
                    $brand_id = $row_data['brand_id'];
                    echo   "<option value='$brand_id'>
                                $brand_title
                            </option>"  ;
          
                    }   
                    ?>    
        </select><br>

        <label for="">Product Image 1</label><br>
        <input type="file"  class="sec_input" name="image_1" required><br>

      
        <label for="">Product Image 2</label><br>
        <input type="file" class="sec_input" name="image_2" required><br>

        <label for="">Product Image 3</label><br>
        <input type="file"  class="sec_input" name="image_3"><br>
        
        <input type="submit" value="Insert Product"  class="sec_btn"  name="insert_product">
    </div>
</form>

</body>
</html>





