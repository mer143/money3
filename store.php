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

        <title>Money 3 Store</title>
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
    th{
        color:white;
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
<!--
      <div class="card" style="width:300px">
          <img class="card-img-top" style="height:150px;" src="pictures/gcash.jpg" alt="Card image" data-bs-toggle="tooltip" title="cashout now!" >
          <div class="card-body">
            <h1 class="card-title" style="text-align:center; background-color:red; color:white;">TM</h1>
            <p class="card-text" style="text-align:center;"><b >AutoLoadMax</b></p>
            <p style="text-align:center;"><i class="fa-solid fa-peso-sign"></i><b > 50.00</b></p>
</div>-->

<table class="table table-bordered">
<center>
      <img src="pictures/avtar.jpg" class="rounded-circle" alt="Cinque Terre" style="width: 100px; margin-bottom:15px; margin-top:-90px; border-style:solid; border-color:green;">
</center>
    <center>
    <a class="nav-link active" href="investment.php" data-toggle="tooltip" title="cash in"><b class="money" >Balance: <i class="fa-solid fa-peso-sign"></i>30.00</b>
    <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none; color:yellow;"></i></a>
   <br>
<a href="home.php"><button type="button" class="btn btn-warning" style="margin-bottom:20px;" >Back</button></a>
<a href="investment.php"><button type="button" class="btn btn-primary" style="margin-left:10px; margin-bottom:20px;" >Cash In</button></a>
</center>
    <thead style="background-color:red;">
      <tr>
        <th>TM / GLOBE</th>
        <th>PRICE</th>
        <th>STATUS</th>
        <th><i class="fa-solid fa-percent"></i> PRICE</th>
        <th>YOUR NUMBER</th>
        <th>PROCESSING</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><b>AutoLoadMax</b></td>
        <td><b>50</b></td>
        <td><b style="background-color:yellow;">Available</b></td>
        <td><i class="fa-solid fa-peso-sign"></i> 40</td>
        <td>
        <div class="mb-3 mt-3">
       <label for="text" class="form-label"><b style="color:green;">Your Number</b></label>
       <input type="text" class="form-control" id="email" placeholder="Enter Your Number" name="number">
       </div>
        </td>
        <td><a ><button type="button" class="btn btn-danger" data-bs-toggle="popover" title="Not Enough Money" data-bs-content="Please Check you Balance!" >Buy</button></a></td>
      </tr>
      <tr>
      <td><b>AutoLoadMax</b></td>
        <td><b>100</b></td>
        <td ><b style="background-color:yellow;">Available</b></td>
        <td><i class="fa-solid fa-peso-sign"></i> 80</td>
        <td>
        <div class="mb-3 mt-3">
       <label for="text" class="form-label"><b style="color:green;">Your Number</b></label>
       <input type="text" class="form-control" id="email" placeholder="Enter Your Number" name="number">
       </div>
        </td>
        <td><a ><button type="button" class="btn btn-danger" data-bs-toggle="popover" title="Not Enough Money" data-bs-content="Please Check you Balance!">Buy</button></a></td>
      </tr>
      <tr>
      <td><b>AutoLoadMax</b></td>
        <td><b>200</b></td>
        <td><b style="background-color:yellow;">Available</b></td>
        <td><i class="fa-solid fa-peso-sign"></i> 160</td>
        <td>
        <div class="mb-3 mt-3">
       <label for="text" class="form-label"><b style="color:green;">Your Number</b></label>
       <input type="text" class="form-control" id="email" placeholder="Enter Your Number" name="number">
       </div>
        </td>
        <td><a ><button type="button" class="btn btn-danger" data-bs-toggle="popover" title="Not Enough Money" data-bs-content="Please Check you Balance!">Buy</button></a></td>
      </tr>
      <tr>
      <td><b>AutoLoadMax</b></td>
        <td><b>500</b></td>
        <td><b style="background-color:yellow;">not Available</b></td>
        <td><i class="fa-solid fa-peso-sign"></i> 350</td>
        <td>
        <div class="mb-3 mt-3">
       <label for="text" class="form-label"><b style="color:green;">Your Number</b></label>
       <input type="text" class="form-control" id="email" placeholder="Enter Your Number" name="number">
       </div>
        </td>
        <td><a ><button type="button" class="btn btn-warning" data-bs-toggle="popover" title="Not Enough Money" data-bs-content="Please Check you Balance!">Sold</button></a></td>
      </tr>
      <tr>
      <td><b>AutoLoadMax</b></td>
        <td><b>1000</b></td>
        <td><b style="background-color:yellow;">not Available</b></td>
        <td><i class="fa-solid fa-peso-sign"></i> 850</td>
        <td>
        <div class="mb-3 mt-3">
       <label for="text" class="form-label"><b style="color:green;">Your Number</b></label>
       <input type="text" class="form-control" id="email" placeholder="Enter Your Number" name="number">
       </div>
        </td>
        <td><a ><button type="button" class="btn btn-warning" data-bs-toggle="popover" title="Not Enough Money" data-bs-content="Please Check you Balance!">Sold</button></a></td>
      </tr>
    </tbody>
  </table>
  <script>
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
</script>

</div>

    </body>
    </html>