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

        <title>Maya Cashout</title>
    </head>
    <body>
        <style>
           .card{
            margin:auto;
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

      <div class="container p-5 my-5 border" style="background-color:lightgreen;">
      <center>
      <img src="pictures/avtar.jpg" class="rounded-circle" alt="Cinque Terre" style="width: 100px; margin-bottom:15px; margin-top:-90px; border-style:solid; border-color:green;">
</center>
      <center>
      <a href="investment.php"><button type="button" class="btn btn-success" style="margin-bottom:15px;">Back</button></a>
      <a href="transaction.php"><button type="button" class="btn btn-success" style="margin-bottom:15px;">Transaction History</button></a>
      <a href="cashout.gcash.php"><button type="button" class="btn btn-primary" style="margin-bottom:15px;">Gcash <i class="fa-solid fa-right-left"></i></button></a>
     
    </center>
      <div class="card" style="width:300px">
          <img class="card-img-top" style="height:150px;" src="pictures/maya.jpg" alt="Card image" data-bs-toggle="tooltip" title="cashout now!">
          <div class="card-body">
            <h1 class="card-title" style="text-align:center; background-color:lightgreen;">Maya</h1>
            <p class="card-text"></p>
 <form action="/action_page.php">
  <div class="mb-3 mt-3">
    <label for="text" class="form-label"><b style="color:green;">Account Name</b></label>
    <input type="text" class="form-control" id="email" placeholder="Enter account name" name="Aname">
  </div>
  <div class="mb-3">
    <label for="number" class="form-label"><b style="color:green;">Acoount Number</b></label>
    <input type="number" class="form-control" id="pwd" placeholder="Enter account number" name="Anumber">
  </div>
  <div class="mb-3">
    <label for="number" class="form-label"><b style="color:green;">Amount / 100-10000</b></label>
    <input type="number" class="form-control" id="pwd" placeholder="Enter amount" name="amount" data-bs-toggle="popover" title="Not Enough Money" data-bs-content="Please Check you Balance!">
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> 0% fees
    </label>
  </div>
  <div class="d-grid gap-3">
  <button type="submit" disabled class="btn btn-success">cashout</button>
</div>
<p >cashout day & time | mon-friday | 6:00am-6:00pm</p> 
<script>
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
</script>
</form>
</div>
</div>
      </div>


    </body>
    </html>