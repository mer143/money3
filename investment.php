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

        <title>Wallet Account</title>
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
    .fa-peso-sign{
    font-size:2rem;

  }
  .money{
    font-size:1.5rem;
    cursor:pointer;
  }
  .bank{
    border-style:solid;
    border-color:green;
    border-radius:10px;
    cursor:pointer;
  }
  img:hover{
      transform: scale(1.10);
    transition: 0.3s;
    }
    .fa-peso-sign{
   
   margin-bottom:30px;
   transform:rotate(-0deg);
   animation: fa-peso-sign 0.6s linear infinite;
 }
 @keyframes fa-peso-sign {
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
        </style>

    <nav class="navbar navbar-expand-sm bg-success justify-content-center">
         <a class="navbar-brand" href="#">
         <img src="pictures/coin.jpg" alt="Avatar Logo" style="width:80px;" class="rounded-pill"> 
         </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <h5>Investment Platform</h5><a class="nav-link" href="About.php"><i class="fa-solid fa-comment-dollar"></i> <ins>About Me</ins></a>
          </li>
        </ul>
      </nav>

      <div class="container p-5 my-5 border" style=" border-radius:10px;">
      <center>
      <img src="pictures/avtar.jpg" class="rounded-circle" alt="Cinque Terre" style="width: 100px; margin-bottom:15px; margin-top:-90px; border-style:solid; border-color:green;">
</center>
      <img src="pictures/wallet.jpg"class="img-thumbnail" alt="Cinque Terre" style="width:100px"> 
       <a class="nav-link active" href="investment.php" data-toggle="tooltip" title="cash in"><b class="money" >Balance: <i class="fa-solid fa-peso-sign"></i>30.00</b><i class="fa-solid fa-coins" style="font-size:1rem; border-left:none; color:yellow;"></i></a>
      <a href="home.php"><button type="button" class="btn btn-warning" style="margin-top:15px;">Back</button></a>
      <a href="transaction.php"><button type="button" class="btn btn-primary" style="margin-top:15px;">Transaction History</button></a>
    </div>

      <div class="container p-5 my-5 border" style=" border-radius:10px;">
        <h4 style="background-color:lightgreen"><b>Cash in</b> <i class="fa-solid fa-money-bill-transfer"></i></h4>
       <a href="gcash.php"> <img  class="bank" src="pictures/gcash.jpg" height="150" width="350"> </img></a>
       <a href="maya.php"> <img class="bank" src="pictures/maya.jpg" height="150" width="350" > </img></a>
      </div>

      <div class="container p-5 my-5 border" style=" border-radius:10px;">
        <h4 style="background-color:yellow"><b>Cash out</b> <i class="fa-solid fa-landmark"></i></h4>
       <a href="cashout.gcash.php"> <img class="bank" src="pictures/gcash.jpg" height="150" width="350"> </img></a>
        <a href="cashout.maya.php"><img class="bank" src="pictures/maya.jpg" height="150" width="350"> </img></a>
      </div>



    </body>
    </html>