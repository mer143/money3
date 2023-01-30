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

        <title>Incorrect Information</title>
    </head>
    <body>
<style>
    h5{
      color:white;
      margin-bottom:-10px;
    }
    .fa-comment-dollar{
      color:white;
      font-size:2rem;
      margin-left:-10px;
    }
    ins{
      color:white;
    }
    .fa-face-sad-cry{
        font-size:5rem;
        color:green;
        margin-top:20px;
   
   
   margin-bottom:30px;
   transform:rotate(-0deg);
   animation: fa-face-sad-cry 0.6s linear infinite;
 }
 @keyframes fa-face-sad-cry {
   0%{
     transform: rotate(-0deg) scale(1.07);
   }
   80%{
     transform:rotate(-0deg) scale(1.0);
   }
   100%{
     transform: rotate(-0deg) scale(0.8);
   }
 }
 h1{
          text-align: center;
    font: 800 3rem 'Montserrat';
    background: linear-gradient(to right, #000 10%, 
    #fff 50%, #000 90%);
    background-size: 200% auto;
    background-clip:  text;
    -webkit-background-clip:  text;
    -webkit-text-fill-color: transparent;
    animation: animate 2s linear infinite;
}
@keyframes animate{
    to{
        background-position: 200% center;
    }
}
    h1{
    position: relative;
}
h1::after{
        
    content: '';
    position: absolute;
    background: white;
    left:  0; bottom:0;
    width: 30%; height: 15px;
    opacity: 0;
    transition: .3s ease;
  margin-left:35%;
 
}
h1:hover::after{
    opacity: 1;
    transform: translateY(8px);
}
</style>

    <nav class="navbar navbar-expand-sm bg-success justify-content-center">
         <a class="navbar-brand" href="#">
         <img src="pictures/coin.jpg" alt="Avatar Logo" style="width:80px;" class="rounded-pill"> 
         </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <h5>Investment Platform</h5><a class="nav-link" href="#"><i class="fa-solid fa-comment-dollar"></i> <ins>About Me</ins></a>
          </li>
        </ul>
      </nav>


    <div class="container pt-5 my-5 border" style="border-radius:10px;">
        <center>
      <img src="pictures/avtar.jpg" class="rounded-circle" alt="Cinque Terre" style="width: 100px; margin-bottom:15px; margin-top:-90px; border-style:solid; border-color:green;">
</center>

<center>
<i class="fa-solid fa-face-sad-cry"></i>
<h1>Incorrect Information</h1>
<a href="login.index.php" class="btn btn-success" style="margin-bottom:20px;" > <b>Log In Again!</b></a>
</center>
</div>
    </body>
    </html>