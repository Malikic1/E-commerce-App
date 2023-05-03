<?php
include('include/config.php');

function get_product(){
    global $conn;
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){

    $fetchProduct = mysqli_query($conn, "SELECT * FROM products order by rand() LIMIT 0,4");
    while ( $row_data = mysqli_fetch_assoc($fetchProduct)) {
        $title = $row_data['product_title'];
        $price= $row_data['product_price'];
        $slash_price= $row_data['slashed_price'];
        $image1= $row_data['product_image1'];
        $discount_percent = round($price/$slash_price * 100);
        $star  = $row_data['star_rating'];   

        switch ($star) {
          case '1':
            $data = "<i class='fa-solid fa-star col3'></i>
                    (20)";
            break;
          case '2':
              $data =  "<i class='fa-solid fa-star col3'></i>
                      <i class='fa-solid fa-star col3'></i>
                      (40)";
              break;
          case '3':
                $data =  "<i class='fa-solid fa-star col3'></i>
                        <i class='fa-solid fa-star col3'></i>
                        <i class='fa-solid fa-star col3'></i>
                        (60)";
                break;
                case '4':
                  $data =  "<i class='fa-solid fa-star col3'></i>
                          <i class='fa-solid fa-star col3'></i>
                          <i class='fa-solid fa-star col3'></i>
                          <i class='fa-solid fa-star col3'></i>
                          (80)";
                  break;
                  case '5':
                    $data = "<i class='fa-solid fa-star col3'></i>
                            <i class='fa-solid fa-star col3'></i>
                            <i class='fa-solid fa-star col3'></i>
                            <i class='fa-solid fa-star col3'></i>
                            <i class='fa-solid fa-star col3'></i>
                            (100)";
                    break;
          default:
            $data = "No rating yet.";
            break;
        }

        echo "
            <div class='product-card'>
              <div class='text-center'>
                <img src='./admin_area/product_images/$image1' alt='' class='product-img' />
              </div>
              <div class='flex rel'>
                <div class='div1'>
                  <p class='product-name col fs-sm'>$title</p>
                  <span>
                    <small class='product-price'>&#8358;$price</small>
                    <span class='col fs-sm'>
                      <span class='strike'>&#8358;$slash_price</span>
                       -$discount_percent%</span
                    > </span
                  ><br />
                  <p class='rating fs-sm'>
                    $data
                  </p>
                </div>
                <div class='div2'>
                  <button class='wish btn-1 fs-1 col1'>
                    <i class='fa-regular fa-heart'></i>
                  </button>
                  <br /><br />
                  <button class='btn-1 fs-1 col1 cart-add'>
                    <i class='fa-solid fa-cart-plus'></i>
                  </button>
                </div>
              </div>
            </div>";
    } 
        }
    }
}

function get_unique_category(){
    global $conn;
    if(isset($_GET['category'])){
        $category_id = $_GET['category'];
        $fetchCategory = mysqli_query($conn, "SELECT * FROM products where category_id=$category_id");

        $num_of_rows= mysqli_num_rows($fetchCategory);
        if($num_of_rows==0){
            echo "<h2 class='col1 text-center' style='width: 90vw !important'>No stock for this category</h2>";
        }


        while ( $row_data = mysqli_fetch_assoc($fetchCategory)) {
        $title = $row_data['product_title'];
        $price= $row_data['product_price'];
        $slash_price= $row_data['slashed_price'];
        $image1= $row_data['product_image1'];
        $discount_percent = round($price/$slash_price * 100);
        $star  = $row_data['star_rating'];   
        switch ($star) {
          case '1':
            $data = "<i class='fa-solid fa-star col3'></i>
                    (20)";
            break;
          case '2':
              $data =  "<i class='fa-solid fa-star col3'></i>
                      <i class='fa-solid fa-star col3'></i>
                      (40)";
              break;
          case '3':
                $data =  "<i class='fa-solid fa-star col3'></i>
                        <i class='fa-solid fa-star col3'></i>
                        <i class='fa-solid fa-star col3'></i>
                        (60)";
                break;
                case '4':
                  $data =  "<i class='fa-solid fa-star col3'></i>
                          <i class='fa-solid fa-star col3'></i>
                          <i class='fa-solid fa-star col3'></i>
                          <i class='fa-solid fa-star col3'></i>
                          (80)";
                  break;
                  case '5':
                    $data = "<i class='fa-solid fa-star col3'></i>
                            <i class='fa-solid fa-star col3'></i>
                            <i class='fa-solid fa-star col3'></i>
                            <i class='fa-solid fa-star col3'></i>
                            <i class='fa-solid fa-star col3'></i>
                            (100)";
                    break;
          default:
            $data = "No rating yet.";
            break;
        }

        echo "
            <div class='product-card'>
              <div class='text-center'>
                <img src='./admin_area/product_images/$image1' alt='' class='product-img' />
              </div>
              <div class='flex rel'>
                <div class='div1'>
                  <p class='product-name col fs-sm'>$title</p>
                  <span>
                    <small class='product-price'>&#8358;$price</small>
                    <span class='col fs-sm'>
                      <span class='strike'>&#8358;$slash_price</span>
                       -$discount_percent%</span
                    > </span
                  ><br />
                  <p class='rating fs-sm'>
                    $data
                  </p>
                </div>
                <div class='div2'>
                  <button class='wish btn-1 fs-1 col1'>
                    <i class='fa-regular fa-heart'></i>
                  </button>
                  <br /><br />
                  <button class='btn-1 fs-1 col1 cart-add'>
                    <i class='fa-solid fa-cart-plus'></i>
                  </button>
                </div>
              </div>
            </div>";
        } 
    }
}

function get_unique_brand(){
    global $conn;
    if(isset($_GET['brand'])){
        $brand_id = $_GET['brand'];
        $fetchBrand = mysqli_query($conn, "SELECT * FROM products where brand_id=$brand_id");

        $num_of_rows= mysqli_num_rows($fetchBrand);
        if($num_of_rows==0){
            echo "<h2 class='col1 text-center' style='width: 90vw !important'>No stock for this brand</h2>";
        }
        
        while ( $row_data = mysqli_fetch_assoc($fetchBrand)) {
        $title = $row_data['product_title'];
        $price= $row_data['product_price'];
        $slash_price= $row_data['slashed_price'];
        $image1= $row_data['product_image1'];
        $discount_percent = round($price/$slash_price * 100);
        $star  = $row_data['star_rating'];   
        switch ($star) {
          case '1':
            $data = "<i class='fa-solid fa-star col3'></i>
                    (20)";
            break;
          case '2':
              $data =  "<i class='fa-solid fa-star col3'></i>
                      <i class='fa-solid fa-star col3'></i>
                      (40)";
              break;
          case '3':
                $data =  "<i class='fa-solid fa-star col3'></i>
                        <i class='fa-solid fa-star col3'></i>
                        <i class='fa-solid fa-star col3'></i>
                        (60)";
                break;
                case '4':
                  $data =  "<i class='fa-solid fa-star col3'></i>
                          <i class='fa-solid fa-star col3'></i>
                          <i class='fa-solid fa-star col3'></i>
                          <i class='fa-solid fa-star col3'></i>
                          (80)";
                  break;
                  case '5':
                    $data = "<i class='fa-solid fa-star col3'></i>
                            <i class='fa-solid fa-star col3'></i>
                            <i class='fa-solid fa-star col3'></i>
                            <i class='fa-solid fa-star col3'></i>
                            <i class='fa-solid fa-star col3'></i>
                            (100)";
                    break;
          default:
            $data = "No rating yet.";
            break;
        }

        echo "
            <div class='product-card'>
              <div class='text-center'>
                <img src='./admin_area/product_images/$image1' alt='' class='product-img' />
              </div>
              <div class='flex rel'>
                <div class='div1'>
                  <p class='product-name col fs-sm'>$title</p>
                  <span>
                    <small class='product-price'>&#8358;$price</small>
                    <span class='col fs-sm'>
                      <span class='strike'>&#8358;$slash_price</span>
                       -$discount_percent%</span
                    > </span
                  ><br />
                  <p class='rating fs-sm'>
                    $data
                  </p>
                </div>
                <div class='div2'>
                  <button class='wish btn-1 fs-1 col1'>
                    <i class='fa-regular fa-heart'></i>
                  </button>
                  <br /><br />
                  <button class='btn-1 fs-1 col1 cart-add'>
                    <i class='fa-solid fa-cart-plus'></i>
                  </button>
                </div>
              </div>
            </div>";
        } 
    }
}

function get_brand(){

    global $conn;
    $selectBrand= mysqli_query($conn, "SELECT * FROM brands");
    while ( $row_data = mysqli_fetch_assoc($selectBrand)) {
      $brand_title = $row_data['brand_title'];
      $brand_id = $row_data['brand_id'];
      echo   "<ul><li class='nav-item i text-center'>
                <a href='index.php?brand=$brand_id' class='col'>$brand_title</a>
              </li></ul>";
     }  
}

function get_category(){
    global $conn;
    $selectCategory= mysqli_query($conn, "SELECT * FROM categories");
    while ( $row_data = mysqli_fetch_assoc($selectCategory)) {
    $category_title = $row_data['category_title'];
    $category_id = $row_data['category_id'];
    echo   "<ul><li class='nav-item i text-center'>
                <a href='index.php?category=$category_id' class='col'>$category_title</a>
            </li></ul>"  ;
    
    }   
}

function search_product(){
  global $conn;
  if(!isset($_GET['search_data_product'])){
  $search_data_value = $_GET['search_data'];
  $fetchProduct = mysqli_query($conn, "SELECT * FROM products where product_keyword LIKE '%$search_data_value%'");
  while ( $row_data = mysqli_fetch_assoc($fetchProduct)) {
      $title = $row_data['product_title'];
      $price= $row_data['product_price'];
      $slash_price= $row_data['slashed_price'];
      $image1= $row_data['product_image1'];
      $discount_percent = round($price/$slash_price * 100);
      $star  = $row_data['star_rating'];   

      switch ($star) {
        case '1':
          $data = "<i class='fa-solid fa-star col3'></i>
                  (20)";
          break;
        case '2':
            $data =  "<i class='fa-solid fa-star col3'></i>
                    <i class='fa-solid fa-star col3'></i>
                    (40)";
            break;
        case '3':
              $data =  "<i class='fa-solid fa-star col3'></i>
                      <i class='fa-solid fa-star col3'></i>
                      <i class='fa-solid fa-star col3'></i>
                      (60)";
              break;
              case '4':
                $data =  "<i class='fa-solid fa-star col3'></i>
                        <i class='fa-solid fa-star col3'></i>
                        <i class='fa-solid fa-star col3'></i>
                        <i class='fa-solid fa-star col3'></i>
                        (80)";
                break;
                case '5':
                  $data = "<i class='fa-solid fa-star col3'></i>
                          <i class='fa-solid fa-star col3'></i>
                          <i class='fa-solid fa-star col3'></i>
                          <i class='fa-solid fa-star col3'></i>
                          <i class='fa-solid fa-star col3'></i>
                          (100)";
                  break;
        default:
          $data = "No rating yet.";
          break;
      }

      echo "
          <div class='product-card'>
            <div class='text-center'>
              <img src='./admin_area/product_images/$image1' alt='' class='product-img' />
            </div>
            <div class='flex rel'>
              <div class='div1'>
                <p class='product-name col fs-sm'>$title</p>
                <span>
                  <small class='product-price'>&#8358;$price</small>
                  <span class='col fs-sm'>
                    <span class='strike'>&#8358;$slash_price</span>
                     -$discount_percent%</span
                  > </span
                ><br />
                <p class='rating fs-sm'>
                  $data
                </p>
              </div>
              <div class='div2'>
                <button class='wish btn-1 fs-1 col1'>
                  <i class='fa-regular fa-heart'></i>
                </button>
                <br /><br />
                <button class='btn-1 fs-1 col1 cart-add'>
                  <i class='fa-solid fa-cart-plus'></i>
                </button>
              </div>
            </div>
          </div>";
  } 
      }
  }
?>