<?php
include('../include/config.php');
if(isset($_POST['insert_cat'])){
    $category_title = $_POST["cat_title"];

    $checkCategory= mysqli_num_rows(mysqli_query($conn, "SELECT * FROM categories WHERE category_title='$category_title'"));
    if ($checkCategory > 0) {
          echo "<script>alert('Category already exist. Please try another.');</script>";
      }
      else{
        $insert_query = "INSERT INTO categories (category_title) VALUES ('$category_title')";
        $result = mysqli_query($conn, $insert_query);
        if ($result) {
            echo "<script>alert('Category has been inserted successfully');</script>";
        }
      }
}
?>

<form action="" method="post">
    <div>
        <h2 class="text-center">Insert Category</h2>
        <input type="text" placeholder="Insert Categories" name="cat_title" class="sec_input"><br>
        <input type="submit" value="Insert Category" name="insert_cat"  class="sec_btn">
    </div>
</form>