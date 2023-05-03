<?php
  include('include/config.php');
  include('function/common_function.php');
 
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
        <button id="search"><i class="fa-solid fa-magnifying-glass"></i></button>
        <button><i class="fa-regular fa-heart"></i></button>
        <button><i class="fa-solid fa-cart-plus"></i></button>
        <button><i class="fa-regular fa-user"></i></button>
      </div>
    </header>

    <div id="searchForm"  class="search">
        <button class="btn-1 fs-1" id="close"><b>x</b></button>
          <form method="" action="">
              <input type="text" placeholder="" class="inp1" name="search_data">
              <input type="submit" value="search" class="btn-3" name="search_data_product">
            
          </form>
    </div>
  

    <main>

    <section class="categories hide" id="cat">
      <h2 class="col1 rel">Categories</h2>
      <?php
        get_category();
      ?>    
       <h2 class="col1 rel">Brands</h2>
      <?php
       get_brand();
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
          <img src="image/img6.jpeg" alt="" class="img" />
          <button class="btn rel">Shop Now</button>
        </section>
        <section>
          <img src="image/img1.jpeg" alt="" class="img" />
          <button class="btn rel">Shop Now</button>
        </section>
        <section>
          <img src="image/img7.jpeg" alt="" class="img" />
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
            get_product();
            get_unique_category();
            get_unique_brand();
      ?>    

        </section>
        <section class="grid grid-col-4" id="sec2">

        </section>
        <section class="grid grid-col-4" id="sec3">

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

        featured Products
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
