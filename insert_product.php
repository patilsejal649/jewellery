<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
  $product_title=$_POST['product_title'];
  $discription=$_POST['discription'];
  $product_keywords=$_POST['product_keywords'];
  $product_category=$_POST['product_category'];
  $product_brands=$_POST['product_brands'];
  $product_price=$_POST['product_price'];
  $product_status="true";
  //accesing images
  $product_image=$_FILES['product_image']['name'];
  // accesing image temp name
  $temp_image=$_FILES['product_image']['tmp_name'];
  //cheking empty conditon
  if($product_title=='' or $discription=='' or $product_keywords=='' or $product_category=='' or  $product_brands=='' or $product_price=='' or $product_image=='')
  {
    echo "<script>alert('please fill all the available filds')</script>";
    exit();
  }else{
        move_uploaded_file($temp_image,"./product_images/$product_image");
        //insert query
        $insert_products="insert into `products` (product_title,product_description,product_keywords,category_id,brand_id,product_image,product_price,date,status) 
        values('$product_title','$discription','$product_keywords','$product_category','$product_brands','$product_image','$product_price',NOW(),'$product_status')";
        $result_query=mysqli_query($con,$insert_products);
        if($result_query){
          echo "<script>alert('successfully inserted the products')</script>";
        }

  }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert_products Admin dashbord</title>
    <!--bootsrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--font aswsome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--css link-->
  <link rel="stylesheet" href="style1.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!--form-->
        <form action="" method="post" enctype="multipart/form-data"> 
      <!--tile-->
      <div class="form-outline mb-4 w-50 m-auto">
           <label for="product_title" class="form-label">Product title</label>
           <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required="required">
          </div>
      <!--description-->
          <div class="form-outline mb-4 w-50 m-auto">
           <label for="discription" class="form-label">discrption </label>
           <input type="text" name="discription" id="discrption" class="form-control" placeholder="Enter discription" autocomplete="off" required="required">
          </div>
      
           <!--keywords-->
      <div class="form-outline mb-4 w-50 m-auto">
           <label for="product_keywords" class="form-label">product keywords</label>
           <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter discription" autocomplete="off" required="required">
          </div>
           <!--categories-->
      <div class="form-outline mb-4 w-50 m-auto">
        <select name="product_category" id="" class="form-select"
        class="product_category">
            <option value=""> Select Category</option>
            <?php
                $select_query="select * from `categories`";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc( $result_query)){
                  $category_title=$row['category_title'];
                  $category_id=$row['category_id'];
                  echo "<option value='$category_id'>$category_title</option>";
                }
            ?>
        </select>
      </div>
       <!--brands-->
       <div class="form-outline mb-4 w-50 m-auto">
        <select name="product_brands" id="" class="form-select"
        class="product_brands">
            <option value=""> Select brands</option>
            <?php
                $select_query="select * from `brands`";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc( $result_query)){
                  $brand_title=$row['brand_title'];
                  $brand_id=$row['brand_id'];
                  echo "<option value='$brand_id'>$brand_title</option>";
                }
            ?>
        </select>
      </div>
      <!--image-->
      <div class="form-outline mb-4 w-50 m-auto">
           <label for="product_image" class="form-label">Product Image</label>
           <input type="file" name="product_image" id="product_image" class="form-control" required="required">
          </div>
           <!--price-->
      <div class="form-outline mb-4 w-50 m-auto">
           <label for="product_price" class="form-label">product Price</label>
           <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter price" autocomplete="off" required="required">
          </div>
          <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_product" class="btn-info mb-3 px-3" value="Insert products" >
          </div>
        </form>
    </div> 
</body>
</html>