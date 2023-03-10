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

        <title>Dashboard</title>
    </head>
    <body>
<style>
   .card{
         margin: auto;
         margin-top:15px;
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
    img:hover{
      transform: scale(1.10);
    transition: 0.3s;
    }
    .fa-hand-holding-dollar{
      color:green;
    }
    .fa-calendar-days{
      color:green;
    }
    .fa-sack-dollar{
      color:green;
    }
    .btn-warning{
      margin-bottom:10px;
    }

    .btn-success{
   
    margin-bottom:30px;
    transform:rotate(-0deg);
    animation: btn-success 0.6s linear infinite;
  }
  @keyframes btn-success{
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
  .fa-wallet{
    border-left:solid;
    border-color:black;
    color:orange;
    font-size:2rem;
  }
  .fa-coins{
    border-left:solid;
    border-color:black;
    color:orange;
     font-size:2rem;
  }
  .fa-gears{
    border-left:solid;
    border-color:black;
    color:orange;
    font-size:2rem;
  }
  .fa-person-walking-arrow-right{
    border-left:solid;
    border-color:black;
    color:orange;
    font-size:2rem;
  }
  .card-img-top{
    height:150px;
  }
  video{
    margin-top:10px;
  }
  h1{
    background-color:lightblue;
  }
  .investor{
    margin-right:20px;
    margin-left:10px;
  
  }
  .p-2{
    margin-bottom:20px;
    border-left:solid;
    border-radius:15px;
    border-color:orange;
    cursor:pointer;
    color:white;
  }
  .long{
    background-color:yellow;
  }
  .fa-peso-sign{
    font-size:2rem;

  }
  .money{
    font-size:1.5rem;
    cursor:pointer;
  }
  .btn-danger{
    margin-bottom:20px;
  }
  .hanging{
        animation: hanging ease-in-out 1s infinite alternate;
        transform-origin: center -20px;
        float: left;
        
        box-shadow: 5px 5px 10px rgba(0,0,0,0.5);
    }
    .hanging img{
        border: 5px solid #e6e3e3;
        display: block;
    }
    .hanging:after{
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        border: 2px solid crimson;
        top: -10px;
        left: 50%;
        z-index:0;
border-bottom: none;
border-right: none;
transform: rotate(45deg);
}
.hanging:before{
    content: '';
    position: absolute;
    width: 5px;
    height: 5px;
    top: -10px;
    left: 50%;
    z-index: 5;
    border-radius: 50% 50%;
    background: whitesmoke;
}
@keyframes hanging{
    0%{transform: rotate(3deg)}
    10%{transform: rotate(-3deg)}
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
      <figure class="hanging">
        <a href="gift.php"><img src="pictures/gift.jpg" width="100" height="100"></a>
       </figure> 
      
      <div class="container pt-5 my-5 border">
        <center>
      <img src="pictures/avtar.jpg" class="rounded-circle" alt="Cinque Terre" style="width: 100px; margin-bottom:15px; margin-top:-90px; border-style:solid; border-color:green;">
</center>

<div class="container p-3 my-3 border" style=" border-radius:20px; background-color:lightgreen;"><b style="font-size:1.5rem;">Announcement !</b>
<i class="fa-solid fa-volume-high" style="color:red; font-size:1.5rem;"></i>

<marquee direction="right">
<b style="color:black;">Money 3 Investment Release Date: 02/05/23 !</b>
<b style="color:red;">Dont missout the CASHBACK EVENTS !</b>
<b style="color:orangered;">Recharge total amount of 500 to Activate your invitation link !</b>

</marquee>

    </div>

      <div class="progress">
       <b class="investor">Investors</b> 
  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"  style="width:20%">20%</div>
</div>

      <nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
  <video  autoplay loop muted src="pictures/promo.mp4" width="300px" height="250" data-toggle="tooltip" title="try to invest"></video>

    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link active" href="investment.php" data-toggle="tooltip" title="cash in"><b class="money" >Balance: <i class="fa-solid fa-peso-sign"></i>30.00</b><i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="investment.php"><i class="fa-solid fa-wallet"></i> wallet</a>
      </li>
     <li class="nav-item">
        <a class="nav-link active" href="invest.php"><i class="fa-solid fa-coins"></i> investment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="setting.php"><i class="fa-solid fa-gears"></i> setting</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="index.php"><i class="fa-solid fa-person-walking-arrow-right"></i> exit</a>
      </li>
    </ul>
  </div>
</nav>


<div class="d-flex justify-content-center" style="background-color:lightgreen;">
<a href="invites.php"><button type="button" class="btn btn-danger" style="margin-top:15px;">Invites <i class="fa-solid fa-handshake" style="solor:white;"></i></button></a>
<a href="events.php"><button type="button" class="btn btn-danger" style="margin-left:15px; margin-top:15px;">Events <i class="fa-solid fa-calendar-days" style="color:white;"></i></button></a>
<a href="store.php"><button type="button" class="btn btn-danger" style="margin-left:15px; margin-top:15px;">Store <i class="fa-solid fa-store" style="color:white;"></i></button></a>
<a href="mail.php"><button type="button" class="btn btn-danger" style="margin-left:15px; margin-top:15px;">Mail <i class="fa-solid fa-envelope" style="color:white;"></i></button></a>
 
</div>

        <div class="row">
          <!--card1-->
        <div class="col-lg-4 col-mb-6 col-ms-10 pb-5 hover">
        <div class="card" style="width:250px">
          <img class="card-img-top" src="pictures/save.jpg" alt="Card image" data-bs-toggle="tooltip" title="invest now!">
          <div class="card-body">
            <h1 class="card-title" style="text-align:center;">Personal</h1>
            <p class="card-text">
              <b><i class="fa-solid fa-hand-holding-dollar"></i> Price - <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>100<br>
              <i class="fa-solid fa-calendar-days"></i> Duration - 5 Days<br>
              <i class="fa-solid fa-sack-dollar"></i> Profit - <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>100<br>
              <i class="fa-solid fa-circle-up" style="color:green;"></i> Total : <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>200<br>
              <i class="fa-solid fa-sun" style="color:green;"></i> Everyday <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>40<br>
              <i class="fa-solid fa-cart-shopping" style="color:green;"></i> Available 3x<br></p></b>
              
            <div class="d-grid">
            <a  class="btn btn-success" data-bs-toggle="popover" title="Not Enough Money" data-bs-content="Please Check you Balance!"><i class="fa-solid fa-cash-register" ></i> <b>Invest</b></a>
           </div>
           </div>
          </div>
         </div>
           <!--card2-->
        <div class="col-lg-4 col-mb-6 col-ms-10 pb-5 hover">
        <div class="card" style="width:250px">
          <img class="card-img-top" src="pictures/duo.jpg" alt="Card image" data-bs-toggle="tooltip" title="invest now!">
          <div class="card-body">
            <h1 class="card-title" style="text-align:center;"> Shares</h1>
            <p class="card-text">
            <b><i class="fa-solid fa-hand-holding-dollar"></i> Price - <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>500<br>
              <i class="fa-solid fa-calendar-days"></i> Duration - 10 Days<br>
              <i class="fa-solid fa-sack-dollar"></i> Profit - <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>100<br>
              <i class="fa-solid fa-circle-up" style="color:green;"></i> Total : <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>600<br>
              <i class="fa-solid fa-sun" style="color:green;"></i> Everyday <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>60<br>
              <i class="fa-solid fa-cart-shopping" style="color:green;"></i> Available 10x<br></p></b>
             
            <div class="d-grid">
            <a  class="btn btn-success" data-bs-toggle="popover" title="Not Enough Money" data-bs-content="Please Check you Balance!"><i class="fa-solid fa-cash-register" ></i> <b>Invest</b></a>
           </div>
           </div>
          </div>
         </div>

           <!--card3-->
        <div class="col-lg-4 col-mb-6 col-ms-10 pb-5 hover">
        <div class="card" style="width:250px">
          <img class="card-img-top" src="pictures/pagibig.jpg" alt="Card image" data-bs-toggle="tooltip" title="invest now!">
          <div class="card-body">
            <h1 class="card-title" style="text-align:center;">Pag-ibig</h1>
            <p class="card-text">
           <b> <i class="fa-solid fa-hand-holding-dollar"></i> Price - <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>1000<br>
              <i class="fa-solid fa-calendar-days"></i> Duration - 10 Days<br>
              <i class="fa-solid fa-sack-dollar"></i> Profit - <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>200<br>
              <i class="fa-solid fa-circle-up" style="color:green;"></i> Total : <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>1200<br>
              <i class="fa-solid fa-sun" style="color:green;"></i> Everyday <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>120<br>
              <i class="fa-solid fa-cart-shopping" style="color:green;"></i> Available 10x<br></p></b>
            
            <div class="d-grid">
            <a  class="btn btn-success" data-bs-toggle="popover" title="Not Enough Money" data-bs-content="Please Check you Balance!"><i class="fa-solid fa-cash-register" ></i> <b>Invest</b></a>
           </div>
           </div>
          </div>
         </div>

          <!--card4-->
        <div class="col-lg-4 col-mb-6 col-ms-10 pb-5 hover">
        <div class="card" style="width:250px">
          <img class="card-img-top" src="pictures/coin.jpg" alt="Card image" data-bs-toggle="tooltip" title="invest now!">
          <div class="card-body">
            <h1 class="card-title" style="text-align:center;">Funds</h1>
            <marquee direction="right"><p class="long"><b>Long term investment</b></p></marquee>
            <p class="card-text">
           <b> <i class="fa-solid fa-hand-holding-dollar"></i> Price - <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>2000<br>
              <i class="fa-solid fa-calendar-days"></i> Duration - 30 Days<br>
              <i class="fa-solid fa-sack-dollar"></i> Profit - <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>600<br>
              <i class="fa-solid fa-circle-up" style="color:green;"></i> Total : <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>2600<br>
              <i class="fa-solid fa-sun" style="color:green;"></i> Everyday <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>86.66<br>
              <i class="fa-solid fa-cart-shopping" style="color:green;"></i> Available 10x<br></p></b>
           
          
            <div class="d-grid">
            <a  class="btn btn-success" data-bs-toggle="popover" title="Not Enough Money" data-bs-content="Please Check you Balance!"><i class="fa-solid fa-cash-register" ></i> <b>Invest</b></a>
           </div>
           </div>
          </div>
         </div>

         <!--card4-->
        <div class="col-lg-4 col-mb-6 col-ms-10 pb-5 hover">
        <div class="card" style="width:250px">
          <img class="card-img-top" src="pictures/hand1.jpg" alt="Card image" data-bs-toggle="tooltip" title="invest now!">
          <div class="card-body">
            <h1 class="card-title" style="text-align:center;">Single</h1>
            <marquee direction="right"><p class="long"><b>Long term investment</b></p></marquee>
            <p class="card-text">
           <b> <i class="fa-solid fa-hand-holding-dollar"></i> Price - <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>3000<br>
              <i class="fa-solid fa-calendar-days"></i> Duration - 30 Days<br>
              <i class="fa-solid fa-sack-dollar"></i> Profit - <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>700<br>
              <i class="fa-solid fa-circle-up" style="color:green;"></i> Total : <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>3700<br>
              <i class="fa-solid fa-sun" style="color:green;"></i> Everyday <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>123.33<br>
              <i class="fa-solid fa-cart-shopping" style="color:green;"></i> Available 10x<br></p></b>
           
          
            <div class="d-grid">
            <a  class="btn btn-success" data-bs-toggle="popover" title="Not Enough Money" data-bs-content="Please Check you Balance!"><i class="fa-solid fa-cash-register" ></i> <b>Invest</b></a>
           </div>
           </div>
          </div>
         </div>

          <!--card5-->
        <div class="col-lg-4 col-mb-6 col-ms-10 pb-5 hover">
        <div class="card" style="width:250px">
          <img class="card-img-top" src="pictures/money.jpg" alt="Card image" data-bs-toggle="tooltip" title="invest now!">
          <div class="card-body">
            <h1 class="card-title" style="text-align:center;">Limited</h1>
            <marquee direction="right"><p class="long"><b>once purchases only</b></p></marquee>
            <p class="card-text">
            <b><i class="fa-solid fa-hand-holding-dollar"></i> Price - <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>1000<br>
              <i class="fa-solid fa-calendar-days"></i> Duration - 24Hours<br>
              <i class="fa-solid fa-sack-dollar"></i> Profit - <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>200<br>
              <i class="fa-solid fa-circle-up" style="color:green;"></i> Total : <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>1200<br>
              <i class="fa-solid fa-sun" style="color:green;"></i> 1day <i class="fa-solid fa-coins" style="font-size:1rem; border-left:none;"></i>1200<br>
              <i class="fa-solid fa-cart-shopping" style="color:green;"></i> Available 10x<br></p></b>
           
            <div class="d-grid">
            <a class="btn btn-success" data-bs-toggle="popover" title="Not Enough Money" data-bs-content="Please Check you Balance!"><i class="fa-solid fa-cash-register" ></i> <b>Invest</b></a>
           </div>
           </div>
          </div>
         </div>
         <script>
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
</script>
         <script>
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
</script>

        <script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
</div>
      </div>
<!--bottom-->

<div class="container mt-5" >
  <div class="row">
    <center>
    <div class="col-sm-4">
      <h3> Contact Us</h3>
      <p><i class="fa-brands fa-whatsapp" style="font-size:2rem;"></i><b>+639558776671</b></p>
      <p><i class="fa-brands fa-telegram" style="font-size:2rem;"></i><b>@money3_administ</b></p>
    </div>
</center>
  </div>
</div>
</body>
</html>