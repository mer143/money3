<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--Bootstrap5 offline-->
      <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet" 
       integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
       crossorigin="anonymous">
       <!--Bootstrap5 offline script-->
       <script src="bootstrap5/js/bootstrap.bundle.min.js" 
       integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
       crossorigin="anonymous"></script>
       <!--Fontawesome offline connection-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
       integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
       crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--Fontawesome offline libraries-->
       <link href="fontawesome/css/all.css" rel="stylesheet">

        <title>Log In</title>
    </head>
    <body>
        <style>
            
          body{
            justify-content:center;
            align-items:center;
           display:flex;
           height:100vh;
           background-color:lightgreen;
          }
          form{
            width:500px;
            
            padding:30px;
            border-radius:30px;
            margin:auto;
          }
          
h1{
   background-color:white;
  
margin-bottom:40px;
color:green;
}
ins{
    color:blue;
    cursor:pointer;
}
p{
    margin-top:20px;
}

        </style>

    <div class="container-sm">
    <center>
      <img src="pictures/avtar.jpg" class="rounded-circle" alt="Cinque Terre" style="width: 100px; margin-bottom:15px; margin-top:-90px; border-style:solid; border-color:green;">
</center>
<form action="login.php" method="post" class="was-validated">
<center><b><h1>SIGN IN</h1></center>
    <div class="form-floating mb-3 mt-3">
        <input type="phone" class="form-control"  placeholder="Enter number" name="phone" required>
  <label >Phone Number</label>
   </div>
   
   <div class="form-floating mb-3 mt-3">
        <input type="password" class="form-control"  placeholder="Enter password" name="password" required>
  <label >Password</label>
   </div>
    
<div class="d-grid">
  <button type="submit" class="btn btn-success " name="LoginSubmit">Login</button>
</div>
    <b><p>Dont have an Account?<a href="signup.index.php"><ins>Signup here!</ins></p>

</form>
</div>
    </body>
</html>