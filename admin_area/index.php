<!DOCTYPE html>
<html>
  <head>
    <title>SJC-Admin Portal</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0," />
    <meta http-equiv="X-UA compatible" content="i.e-edge" />
    <link href="style.css" rel="stylesheet" />
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
    <header class="flex">
      <button id="menu_btn" class="col1">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div>
        <h1 class="rel brand font-effect-3d">
          SJC-<i class="fa-solid fa-shop"></i>
        </h1>
      </div>

      <div class="align-self">
        <h3 class="">Welcome ADMIN</h3>
      </div>
    </header>
    <main>
      <h2 class="text-center">Manage Details</h2>
      <div class="flex gap-sm">
        <section>
          <img src="hero.jpeg" alt="" class="hero" />
        </section>
        <section class="sec align-self text-center">
          <button><a href="insert_product.php">Insert Product</a></button>
          <button><a href="index.php?view_product">View Product</a></button>
          <button><a href="index.php?insert_category">Insert Categories</a></button>
          <button><a href="index.php?view_categories">View Categories</a></button>
          <button><a href="index.php?insert_brand">Insert Brands</a></button>
          <button><a href="index.php?view_brands">View Brands</a></button>
          <button><a href="index.php?view_orders">All Orders</a></button>
          <button><a href="">All Payment</a></button>
          <button><a href="">List Users</a></button>
          <button><a href="">Logout</a></button>
        </section>
      </div>
      <hr />

      <div class="section">
       <?php
       if(isset($_GET['insert_category'])){
        include('insert_category.php');
       }
       if(isset($_GET['insert_brand'])){
        include('insert_brand.php');
       }
       if(isset($_GET['insert_product'])){
        include('insert_product.php');
       }
       ?>
      </div>

   
   


    </main>
  </body>
</html>
