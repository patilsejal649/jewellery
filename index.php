<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/style1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dashbord</title>
    <!--bootsrap css link--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!--font awesome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!---first child-->
     <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="product_images/image1.webp" alt="" class="logo">
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav" >
                    <li class="nav-item" >
                        <a href="" class="nav-link"> Welcome Guest</a>
                    </li>
                </ul>
            </nav>
        </div>
     </nav>
     <!---second child-->
     <div class="bg-light">
        <h3 class="text-center p-10">Manage Details</h3>
     </div>
     <!--third child-->
     <div class="row">
        <div class="col-md-12 bg-secondary p-3 d-flex align-items-center margin-left-100px">
            <div class="p-3 margin-left-100px" >
              
                <p class="text-light text-center"></p>
            </div>
           <div class="button text-center p-3 margin-left-10">
            <button><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
            <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
            <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
            
           </div>
        </div>
     </div>
    </div>
    <!--forth child-->
    <div class="container my-3">
        <?php
          if(isset($_GET['insert_category'])){
            include('insert_categories.php');
          }
          if(isset($_GET['insert_brand'])){
            include('insert_brands.php');
          }
        ?>
    </div>
    <!--bootsrap jslink--->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <!--last child-->
    <div class="bg-info p-3 text-center">
  <p>patilsejal649@gmail.com    samatanager,miraj</p>
 </div>
</body>
</html>