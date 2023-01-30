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

        <title>Money 3</title>
    </head>
    <body>
      <style>
         .card{
         margin: auto;
        
         }
         
         .fa-user-plus{
          color:green;
         }
         
         p{
          text-align: center;
          background-color: lightgreen;
          border-radius: 10px;
          margin-bottom: 20px;
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

img:hover{
      transform: scale(1.10);
    transition: 0.3s;
    }
    .container-fluid{
      background-color:lightgreen;
    }
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
    h3{
      border-left:solid;
      border-color:green;
      border-width:10px;
    }
    .card-img-top{
      height:200px;
    }
    .rounded-circle{
     margin-top:-5%;
     border-style:solid;
     border-width:5px;
     border-color:white;
    }
   
    .carousel-item{
      height:500px;
    }
      </style>


      <nav class="navbar navbar-expand-sm bg-success justify-content-center">
         <a class="navbar-brand" href="#">
         <img src="pictures/coin.jpg" alt="Avatar Logo" style="width:80px;" class="rounded-pill"> 
         </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <h5>Investment Platform</h5><a class="nav-link" href="#"><i class="fa-solid fa-comment-dollar" data-bs-toggle="tooltip" title="about me"></i> <ins>About Me</ins></a>
          </li>
        </ul>
      </nav>


      <div class="container-fluid p-5 my-5 border">
      <center>
      <img src="pictures/avtar.jpg" class="rounded-circle" alt="Cinque Terre" style="width: 100px; margin-bottom:15px; margin-top:-90px; border-style:solid; border-color:green;">
</center>
        <div class="card" style="width:300px">
          <img class="card-img-top" src="pictures/save.jpg" alt="Card image" data-bs-toggle="tooltip" title="invest now!">
          <div class="card-body">
            <h1 class="card-title">Money 3</h1>
            <p class="card-text">
              <i class="fa-solid fa-hand-holding-dollar"></i> invest<br>
              <i class="fa-solid fa-circle-check"></i> trust<br>
              <i class="fa-solid fa-sack-dollar"></i> earn</p>
           
            <a href="login.index.php" class="btn btn-success" data-bs-toggle="tooltip" title="sign in"><b>Sign In</b>   <i class="fa-solid fa-right-from-bracket"></i></a>

            <a href="signup.index.php" class="btn btn-warning" data-bs-toggle="tooltip" title="sign up"><b>Sign Up</b> <i class="fa-solid fa-user-plus"></i></a>
          
          </div>
        </div>
        <script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
      </div>
     
<!--bottom-->
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3> Terms and Condition</h3>
      <p>If you want to invest in this platform you considered youre money was safety.</p>
      <p>follow the rules and regulations for better use of this platform.</p>
    </div>
    <div class="col-sm-4">
      <h3> Guide</h3>
      <p>Invest what you can afford to lose, invest as you can.</p>
      <p>Dont use any aattached files or APK to cheat. once youre account was detected we will punished it.</p>
    </div>
    <div class="col-sm-4">
      <h3> Permit</h3>
      <p>https://money3Permit.com/status.site</p>
      
    </div>
  </div>
</div>
    </body>
</html>