<?php
include('../include/config.php');

if(isset($_POST['insert_brand'])){
    $brand_title = $_POST["brand_title"];

    $checkBrand= mysqli_num_rows(mysqli_query($conn, "SELECT * FROM brands WHERE brand_title='$brand_title'"));
    if ($checkBrand > 0) {
          echo "<script>alert('Brand already exist. Please try another.');</script>";
      }
      else{
        $insert_query = "INSERT INTO brands (brand_title) VALUES ('$brand_title')";
        $result = mysqli_query($conn, $insert_query);
        if ($result) {
            echo "<script>alert('Brand has been inserted successfully');</script>";
        }
      }
}
?>

<form action="" method="post">
    <div>
        <h2 class="text-center">Insert Brands</h2>
        <input type="text" placeholder="Insert Brands" name="brand_title" class="sec_input"><br>
        <input type="submit" value="Insert Brand" name="insert_brand" class="sec_btn">
    </div>
</form>