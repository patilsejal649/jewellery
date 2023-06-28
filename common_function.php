<?php
//including connect file


//getting products
function getproducts(){
    global $con;
    //conditon to check is set or not
    if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
     $select_query="select * from `products` order by rand()";
    $result_query=mysqli_query($con,$select_query);
    //$row=mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image=$row['product_image'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo "<div class='col-md-4 mb-2'>
      <div class='card' style='width: 18rem;'>
  <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_description</p>
    <p class='card-text'> price: $product_price</p>
    <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add To Cart</a>
    <a href='product_details.php?product_id=$product_id' 
    class='btn btn-secondary'>View More</a>
  </div>
      </div>
      </div>";

}
}
}
}
// getting all products
function get_all_products(){
  global $con;
    //conditon to check is set or not
    if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
     $select_query="select * from `products` order by rand() LIMIT 0,4";
    $result_query=mysqli_query($con,$select_query);
    //$row=mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image=$row['product_image'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo "<div class='col-md-4 mb-2'>
      <div class='card' style='width: 18rem;'>
  <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_description</p>
    <p class='card-text'>$product_price</p>
    <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add To Cart</a>
    
    <a href='product_details.php?product_id=$product_id' 
    class='btn btn-secondary'>View More</a>
  </div>
      </div>
      </div>";
}
    }
  }
}

//getting unique categories
function get_unique_categories(){
    global $con;
    //conditon to check is set or not
    if(isset($_GET['category'])){
   $category_id=$_GET['category'];
   $select_query="select * from `products` where category_id=$category_id";
    $result_query=mysqli_query($con,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
        echo"<h2 class='text-center text-danger'>No stock for this category</h2>";
    }
    //$row=mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image=$row['product_image'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo "<div class='col-md-4 mb-2'>
      <div class='card' style='width: 18rem;'>
  <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_description</p>
    <p class='card-text'>$product_price</p>
    <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add To Cart</a>
   
    <a href='product_details.php?product_id=$product_id' 
    class='btn btn-secondary'>View More</a>
  </div>
      </div>
      </div>";

}
}
}
//getting unique brands
function get_unique_brands(){
    global $con;
    //conditon to check is set or not
    if(isset($_GET['brand'])){
   $brand_id=$_GET['brand'];
   $select_query="select * from `products` where  brand_id=$brand_id";
    $result_query=mysqli_query($con,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
        echo"<h2 class='text-center text-danger'>this brand is not available for servis</h2>";
    }
    //$row=mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image=$row['product_image'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo "<div class='col-md-4 mb-2'>
      <div class='card' style='width: 18rem;'>
  <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_description</p>
    <p class='card-text'>$product_price</p>
    <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add To Cart</a>
    
    <a href='product_details.php?product_id=$product_id' 
    class='btn btn-secondary'>View More</a>
  </div>
      </div>
      </div>";

}
}
}


//displaying brand in sidenav
function getbrand(){
    global $con;
    $select_brands="select * from `brands`";
    $result_brands=mysqli_query($con,$select_brands);
    //$row_data=mysqli_fetch_assoc($result_brands);
   // echo $row_data['brand_title'];
   while( $row_data=mysqli_fetch_assoc($result_brands)){
    $brand_title=$row_data['brand_title'];
    $brand_id=$row_data['brand_id'];
   echo " <li class='nav-item'>
   <a href='index.php?brand=$brand_id' class='nav-link text-light'> <h4> $brand_title</h4></a>
  </li>";
   }
}
//displaying brand in sidenav
function getcategories(){
    global $con;
    
    $select_categories="select * from `categories`";
    $result_categories=mysqli_query($con,$select_categories);
    //$row_data=mysqli_fetch_assoc($result_brands);
   // echo $row_data['brand_title'];
   while($row_data=mysqli_fetch_assoc($result_categories)){
    $category_title=$row_data['category_title'];
    $category_id=$row_data['category_id'];
   echo " <li class='nav-item'>
   <a href='index.php?category=$category_id' class='nav-link text-light'> <h4>$category_title</h4></a>
  </li>";
   }
}
// get searching products
    function search_product(){
        global $con;
        if(isset($_GET['search_data_products'])){
         $search_data_value=$_GET['search_data'];
        $search_query="select * from `products` where product_keywords  like
        '%$search_data_value%'";
        $result_query=mysqli_query($con,$search_query);    
        $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
        echo"<h2 class='text-center text-danger'>No results match. No products found on this category</h2>";
    }
        while($row=mysqli_fetch_assoc($result_query)){
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $product_image=$row['product_image'];
          $product_price=$row['product_price'];
          $category_id=$row['category_id'];
          $brand_id=$row['brand_id'];
          echo "<div class='col-md-4 mb-2'>
          <div class='card' style='width: 18rem;'>
      <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='...'>
      <div class='card-body'>
        <h5 class='card-title'>$product_title</h5>
        <p class='card-text'>$product_description</p>
        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add To Cart</a>
        
    <a href='product_details.php?product_id=$product_id' 
    class='btn btn-secondary'>View More</a>
      </div>
          </div>
          </div>";
    
    }
    }
}

// view ditails funtion
function view_details(){
  global $con;
    //conditon to check is set or not
    if(isset($_GET['product_id'])){
    if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
      $product_id=$_GET['product_id'];
     $select_query="select * from `products` where product_id= $product_id";
    $result_query=mysqli_query($con,$select_query);
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image=$row['product_image'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo "<div class='col-md-4 mb-2'>
      <div class='card' style='width: 18rem;'>
  <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='$product_title'>
  <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_description</p>
    <p class='card-text'>price: $product_price/</p>
    <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add To Cart</a>
    <a href='index.php' 
    class='btn btn-secondary'>Go home</a>
  </div>
      </div>
      </div>

      <div class='col-md-8'>
      <!--realated card-->
      <div class='row'>
          <div class='col-md-12'>
              <h4 class='text-center text-info mb-5'>related products</h4>
          </div>
          <div class='col-md-6'>
          <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='...'>
      
      </div>
      <div class='col-md-6'>
      <img src='./admin_area/product_images/$product_image' class='card-img-top' alt='...'>
      
      </div>
      </div>
              </div>";
      

}
}
}
}
}// get ip address funtion
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;   
}  
$ip = getIPAddress();  
echo 'User Real IP Address - '.$ip;  
// cart function
function cart(){
if(isset($_GET['add_to_cart'])){
  global $con;
  $ip=getIPAddress(); 
  $get_product_id=$_GET['add_to_cart'];
  $select_query="select * from `cart_details` where ip_address='$ip' and product_id=$get_product_id";
  $result_query=mysqli_query($con,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows>0){
      echo "<script>alert('This item is already present inside the cart')</script>";
      echo "<script>window.open('index.php','_self')</script>";
  }else{
    $insert_query="insert into `cart_details` (ip_address,quantity,product_id) values ('$ip','0',$get_product_id)";
    
    $result_query=mysqli_query($con,$insert_query);
    echo "<script>alert('Item is added to cart')</script>";
    echo "<script>window.open('index.php','_self')</script>";
  }
}
}
// function to get cart item numbers
function cart_item(){
  if(isset($_GET['add_to_cart'])){
    global $con;
    $ip=getIPAddress(); 
    $select_query="select * from `cart_details` where ip_address='$ip'";
    $result_query=mysqli_query($con,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
    
    }else{
      global $con;
    $ip=getIPAddress(); 
    $select_query="select * from `cart_details` where ip_address='$ip'";
    $result_query=mysqli_query($con,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
    
    }
    echo $count_cart_items;
  }
  

// total price
function total_cart_price(){
  global $con;
  $ip = getIPAddress();
  $total_price=0;
  $cart_query="select * from `cart_details` where ip_address='$ip'";
  $result=mysqli_query($con,$cart_query);
  while($row=mysqli_fetch_array($result)){
    $product_id=$row['product_id'];
    $select_products="select * from `products` where product_id='$product_id'";
    $result_products=mysqli_query($con,$select_products);
    while($row_product_price=mysqli_fetch_array($result_products)){
      $product_price=array($row_product_price['product_price']);
      $product_value=array_sum($product_price);
      $total_price+=$product_value;

  }
}
   echo $total_price;
}
?>