<?php
  include('include/config.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>SJC</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0," />
    <meta http-equiv="X-UA compatible" content="i.e-edge" />
    <link href="home.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Rancho&effect=3d|3d-float"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>

  <body>
    <aside class="flex">
      <div style="margin-top: -6px">
        <p class="col">
          <span
            ><i class="fa-solid fa-envelope"> </i> &nbsp;<small>
              user@gmail.com</small
            ></span
          >
          &nbsp;&nbsp; &nbsp;&nbsp;
          <span
            ><i class="fa-solid fa-phone"></i> &nbsp;<small>
              +100842457</small
            ></span
          >
        </p>
      </div>
      <div class="nav" style="margin-top: -5px">
        <button><i class="fa-brands fa-facebook"></i></button>
        <button><i class="fa-brands fa-instagram"></i></button>
        <button><i class="fa-brands fa-twitter"></i></button>
        <button><i class="fa-brands fa-telegram"></i></button>
      </div>
    </aside>
    <header class="flex">
      <button id="menu_btn" class="col1">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div>
        <h1 class="rel brand font-effect-3d">
          SJC-<i class="fa-solid fa-shop"></i>
        </h1>
      </div>
      <div class="flex nav1" id="nav">
        <nav>
          <ul>
            <li>
              <a href="" class="col"><b>Home</b></a>
            </li>
            <li><a id="category">Categories</a></li>
            <li><a href="">Great Deal</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="">Contact Us</a></li>
          </ul>
        </nav>
      </div>

      <div class="align-self nav">
        <button><i class="fa-solid fa-magnifying-glass"></i></button>
        <button><i class="fa-regular fa-heart"></i></button>
        <button><i class="fa-solid fa-cart-plus"></i></button>
        <button><i class="fa-regular fa-user"></i></button>
      </div>
    </header>
    <main>

    <section class="categories hide" id="cat">
      <h2 class="col1 rel">Categories</h2>
      <?php
        $selectCategory= mysqli_query($conn, "SELECT * FROM categories");
        while ( $row_data = mysqli_fetch_assoc($selectCategory)) {
          $category_title = $row_data['category_title'];
          $category_id = $row_data['category_id'];
          echo   "<ul><li class='nav-item i text-center'>
                    <a href='index.php?category=$category_id' class='col'>$category_title</a>
                  </li></ul>"  ;
          
        }   
      ?>    
       <h2 class="col1 rel">Brands</h2>
      <?php
        $selectBrand= mysqli_query($conn, "SELECT * FROM brands");
        while ( $row_data = mysqli_fetch_assoc($selectBrand)) {
          $brand_title = $row_data['brand_title'];
          $brand_id = $row_data['brand_id'];
          echo   "<ul><li class='nav-item i text-center'>
                    <a href='index.php?brand=$brand_title' class='col'>$brand_title</a>
                  </li></ul>";
         }  
        ?>       
    </section>

      <div class="flex container1">
        <section>
          <h1>
            EXPLOSIVE <br />
            <span class="col1 f-family"><i>Big Sale</i></span>
          </h1>
          <button class="btn rel"><b>Buy Now</b></button>
          <div class="aside rel">
            <p>
              <b>
                <span class="fs-2">SAVE</span><br />
                <span class="fs-3">50</span><span class="fs-2">%</span></b
              >
            </p>
            <p class="date rel"><b>13th DEC</b></p>
          </div>
        </section>
        <section class="align-self">
          <img src="image/shop.jpeg" alt="" class="hero" />
        </section>
      </div>
      <br />

      <div class="grid container2 grid-col-4">
        <section class="align-self flex gap-sm">
          <p class="align-self"><i class="fa-solid fa-wallet i col"></i></p>
          <p>
            <b class="">Free Shipping</b><br />
            <span class="fs-sm col">From all order over $100</span>
          </p>
        </section>
        <section class="align-self flex gap-sm">
          <p class="align-self">
            <i class="fa-solid fa-arrows-rotate i col"></i>
          </p>
          <p>
            <b class="">Free Return</b><br />
            <span class="fs-sm col">Return policy guaranteed</span>
          </p>
        </section>
        <section class="align-self flex gap-sm">
          <p class="align-self"><i class="fa-solid fa-lock i col"></i></p>
          <p>
            <b>Safe shopping</b><br />
            <span class="fs-sm col">You're safe with us</span>
          </p>
        </section>
        <section class="align-self flex gap-sm">
          <p class="align-self"><i class="fa-solid fa-tag i col"></i></p>
          <p>
            <b class="">Over 1000 styles</b><br />
            <span class="fs-sm col">We have everything you want</span>
          </p>
        </section>
      </div>
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />

      <div class="grid grid-col-3">
        <section>
          <img src="image/img3.jpeg" alt="" class="img" />
          <button class="btn rel">Shop Now</button>
        </section>
        <section>
          <img src="image/img1.jpeg" alt="" class="img" />
          <button class="btn rel">Shop Now</button>
        </section>
        <section>
          <img src="image/img4.jpeg" alt="" class="img" />
          <button class="btn rel">Shop Now</button>
        </section>
      </div>
      <br />
      <br />

      <div class="product1">
        <section class="text-center">
          <h2>Great Deals</h2>
          <p>Get an exciting discount in great Products!</p>
          <p>
            <button class="col1 btn-1" id="show4"><b>Men</b></button>
            &nbsp;&nbsp;
            <button class="btn-1" id="show5"><b>Women</b></button>
            &nbsp;&nbsp;
            <button class="btn-1" id="show6"><b>Kids</b></button>
          </p>
        </section>
        <br /><br />

        <section class="grid grid-col-4" id="sec1">
        <?php

                $fetchProduct= mysqli_query($conn, "SELECT * FROM products");
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
      ?>    

        </section>
        <section class="grid grid-col-4" id="sec2">
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">&#8358;15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
        </section>
        <section class="grid grid-col-4" id="sec3">
          <div class="product-card">
            <div class="text-center">
              <img src="image/img2.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img2.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img2.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img2.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
        </section>
        <br />
        <button class="btn rel btn-2"><b>View all</b></button>
      </div>
      <br /><br /><br />

      <div class="product1">
        <section class="text-center">
          <h2>Featured Products</h2>
          <p>Get your desired product from featured Products!</p>
          <p>
            <button class="col1 btn-1" id="show1"><b>Men</b></button
            >&nbsp;&nbsp;
            <button class="btn-1" id="show2"><b>Women</b></button>&nbsp;&nbsp;
            <button class="btn-1" id="show3"><b>Kids</b></button>
          </p>
        </section>
        <br /><br />
        <section class="grid grid-col-4" id="section1">
          <div class="product-card">
            <div class="text-center">
              <img src="image/img2.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
        </section>
        <section class="grid grid-col-4" id="section2">
          <div class="product-card">
            <div class="text-center">
              <img src="image/img2.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img1.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img1.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img1.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img1.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img2.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
        </section>
        <section class="grid grid-col-4" id="section3">
          <div class="product-card">
            <div class="text-center">
              <img src="image/img2.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img1.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img1.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img1.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img3.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="product-card">
            <div class="text-center">
              <img src="image/img1.jpeg" alt="" class="product-img" />
            </div>
            <div class="flex rel">
              <div class="div1">
                <p class="product-name col fs-sm">Long Sleeve Casual for Men</p>
                <span>
                  <small class="product-price">$15.25</small>
                  <span class="col fs-sm">
                    <span class="strike">$30.50</span>
                    -50%</span
                  > </span
                ><br />
                <p class="rating fs-sm">
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  <i class="fa-solid fa-star col3"></i>
                  (100)
                </p>
              </div>
              <div class="div2">
                <button class="wish btn-1 fs-1 col1">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <br /><br />
                <button class="btn-1 fs-1 col1 cart-add">
                  <i class="fa-solid fa-cart-plus"></i>
                </button>
              </div>
            </div>
          </div>
        </section>
        <br />
        <button class="btn rel btn-2"><b>View all</b></button>
      </div>
      <br /><br />
      <div class="product1">
        <section class="text-center">
          <h2>Brands and Designers</h2>
          <p>Check out for your favourites.</p>
        </section>
      </div>
    </main>
    <footer>
      <div class="flex">
        <div class="column1">
          <div class="flex" style="gap: 0.8rem">
            <h1 class="rel brand font-effect-3d">
              SJC-<i class="fa-solid fa-shop"></i>
            </h1>
          </div>
          <small>
            Shop with us @SJC and feel great. <br />
            We deliver across the nation!
          </small>
          <br /><br />
          <p><i class="fa-solid fa-envelope"></i> &nbsp;&nbsp;user@gmail.com</p>
        </div>
        <div class="column2">
          <ul>
            <p class="col"><b>Company</b></p>
            <li>
              <a class="col1"><b>Home</b></a>
            </li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">Great Deal</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="column2">
          <ul>
            <p class="col"><b>Help</b></p>
            <li><a href="#">User FAQs</a></li>
            <li><a a href="#">How To Order</a></li>
            <li><a a href="#">Privacy Policy</a></li>
            <li><a a href="#">Terms of Service</a></li>
            <li><a a href="#">Returns and Refund</a></li>
          </ul>
        </div>
        <div class="column4 rel">
          <p class=""><b class="col">Newsletter</b></p>
          <input type="email" placeholder="enter email.." /><br /><br />
          <button class="c-btn btn"><b>Subscribe Now</b></button>
        </div>
      </div>
      <br />
      <div class="">
        <small>©Copyright 2023 <b>AzeezCode</b>. All rights reserved</small>
        <br />
      </div>
    </footer>
    <script src="index.js"></script>
  </body>
</html>
