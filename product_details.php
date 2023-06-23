<!--connect file-->
<?php
 include('includes/connect.php');
 include('functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--css link-->
  <link rel="stylesheet" href="style1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jewellery_shopping_website</title>
    <!--bootsrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--font aswsome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .card-img-top{
    width: 100%;
    height: 200px;
    object-fit: contain;
  }
</style>
</head>
<body>
 <!---navbar-->
 <div class="container-fluid p-0">
    <!--first child-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
<!--<img src="product_images/logo.png" alt="image" class="logo" >-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><sup><sup><?php cart_item();?></sup></a>
        </li>
        <a class="nav-link" href="#"><?php total_cart_price();?></a>

        
      </ul>
      <form class="d-flex" action="" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data" >
         <input type="submit" value="search"  class="btn btn-outline-light" name="search_data_products">
      </form>
    </div>
  </div>
</nav>
<!--second  child--->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
  <li class="nav-item">
          <a class="nav-link" href="#">Welcome-Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./user_area/user_login.php">Login</a>
        </li>
  </ul>
</nav>
<!--third child--->
<div class="bg-light">
  <h3 class="text-center">Sejal Store</h3>
 <p class="text-center">Welcome To Our Website</p>
</div>
 <!--last child--->
 <div class="row px-1">
  <div class="col-md-10">
    <!--products--->
    <div class="row">
    
    <!--fetching products-->
    <?php
    //calling function
        
         get_unique_categories();
         get_unique_brands();
         view_details()
        
    
    ?>
      

      <!--row end-->
    </div>
    <!--col ending-->
  </div>

  <!--sidenav--->
  <div class="col-md-2 bg-secondary p-0">
    <!--brands to displayed-->
    <ul class="navbar-nav me-auto text-center">
   <li class="nav-item bg-info">
    <a href="#" class="nav-link text-light"> <h4> Delivery Brands</h4></a>
   </li>
   <?php
    getbrand();
   ?>
    </ul>
    <!--categories to be displayed-->
    <ul class="navbar-nav me-auto text-center">
   <li class="nav-item bg-info">
    <a href="#" class="nav-link text-light"> <h4>categories</h4></a>
   </li>
   <?php
  // getcategories();
   ?>
    </ul>
  </div>
 </div>
 <!--last child--->
 <!--include footer-->
 <?php
  include("./includes/footer.php");
 ?>
    <!--js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
</body>
</html>