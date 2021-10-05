<?php 

$host="localhost";
$user="root";
$password="";
$db="login";

mysqli_connect($host,$user,$password);
//mysqli_select_db($db);

if(isset($_POST['username'])){
    
    $uname=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="select * from info where Username='".$uname."'AND Password='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rural Asset Mapping</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="signin.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center" style="background-image: url('vpic6.png');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">
    
<main class="form-signin">
  <form method = "POST" action = "index.php">
    <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="h3 mb-3 fw-normal">Please Login</h1>

    <div class="form-floating">
      <!-- <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"> -->
      <!-- <label for="floatingInput">Email address</label> -->
      <select class = "form-control" id = "floatingInput" required>
        <option>Select Field...</option>
        <option> BDPO </option>
        <option> DDPO </option>
        <option> ADC </option>
      </select>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <!-- <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div> -->
    <button class="w-100 btn btn-lg btn-primary" type="submit">Log In</button>
  </form>
</main>


    
  </body>
</html>