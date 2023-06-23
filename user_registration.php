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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>user_registration</title>
</head>
<body>
    <div class="contanier-fluid my-3">
        <h2 class="text-center"> New User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <!--username-->
   <form action="" method="post" enctype="multipart/form-data">
    <div class="form-outline mb-4">
        <label for="user_username" class="form-label" >Username</label>
        <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="user_username"/>
    </div>
    <!--email fild-->
    <div class="form-outline  mb-4">
        <label for="user_email" class="form-label" >Email</label>
        <input type="text" id="user_email" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="user_email"/>
    </div>
    <!--email fild-->
    <div class="form-outline  mb-4">
        <label for="user_image" class="form-label" >User image</label>
        <input type="file" id="user_image" class="form-control"   required="required" name="user_image"/>
    </div>
    <!--password-->
    <div class="form-outline  mb-4">
        <label for="user_password" class="form-label" >password</label>
        <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user_password"/>
    </div>
    <!--conform password-->
    <div class="form-outline  mb-4">
        <label for="conf_user_password" class="form-label" >password</label>
        <input type="password" id="conf_user_password" class="form-control" placeholder="Enter conform password" autocomplete="off" required="required" name="conf_user_password"/>
    </div>
     <!--address-->
    <div class="form-outline  mb-4">
        <label for="user_address" class="form-label" >address</label>
        <input type="text" id="user_address" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="user_address">
    </div>
    <!--contact-->
    <div class="form-outline  mb-4">
        <label for="user_contact" class="form-label" >contact</label>
        <input type="text" id="user_contact" class="form-control" placeholder="Enter your mobile number" autocomplete="off" required="required" name="user_contact">
    </div>
    <div class="mt-4 pt-2">
        <input type="submit" value="Register" class="bg-info py-2 px-3 border-0"  name="user_register" >
        <p class="small fw-bold mt-2 pt-1 mb-0" >Already have an account ?<a href="user_login.php" class="text-danger" > login</a></p>
    </div>
   </form>
            </div>
        </div>
    </div>
</body>
</html>