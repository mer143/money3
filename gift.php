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

        <title>Hidden gift</title>
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
.hanging{
        animation: hanging ease-in-out 1s infinite alternate;
        transform-origin: center -20px;
        float: left;
        margin-left:40%;
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
 .btn-danger{
   
   margin-bottom:30px;
   transform:rotate(-0deg);
   animation: btn-danger 0.6s linear infinite;
 }
 @keyframes btn-danger {
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
 
    .fa-gift:hover{
      animation:shake 0.3s;
      animation-iteration-count: infinite;
      color:orangered;
    }
    @keyframes shake{
      0%{transform: translate(1px,1px) rotate(0deg);}
      10%{transform: translate(-1px,-2px) rotate(-1deg);}
      20%{transform: translate(-3px,0px) rotate(1deg);}
      30%{transform: translate(3px,2px) rotate(0deg);}
      40%{transform: translate(1px,-1px) rotate(1deg);}
      50%{transform: translate(-1px,2px) rotate(-1deg);}
      60%{transform: translate(-3px,1px) rotate(1deg);}
      70%{transform: translate(3px,1px) rotate(-1deg);}
      80%{transform: translate(-1px,-1px) rotate(1deg);}
      90%{transform: translate(1px,2px) rotate(0deg);}
      100%{transform: translate(1px,-2px) rotate(-1deg);}
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


    <div class="container pt-5 my-5 border" style="border-radius:20px; background-color:red;">
        <center>
      <img src="pictures/avtar.jpg" class="rounded-circle" alt="Cinque Terre" style="width: 100px; margin-bottom:15px; margin-top:-90px; border-style:solid; border-color:green;">
</center>

<figure class="hanging">
        <img src="pictures/gift.jpg" width="200" height="200">
       </figure> 

       <div class="container p-3 my-3 border" style=" border-radius:20px; background-color:white;">
       <center style="margin-top:300px;">

       <a class="nav-link active" href="investment.php" data-toggle="tooltip" title="cash in"><b class="money" >Balance: <i class="fa-solid fa-peso-sign"></i>30.00</b><i class="fa-solid fa-coins" style="font-size:1rem; border-left:none; color:yellow;"></i></a>
    
        <h3>Single Recharge amount of <i class="fa-solid fa-peso-sign" style="color:red;"></i><b style="color:red;" class="gifts">5000</b><br>
         and Get <i class="fa-solid fa-peso-sign" style="color:red;"></i><b style="color:red;" class="gifts">500</b></h3>
         <br>
         <i class="fa-solid fa-gift" style="font-size:5rem; color:red; margin-top:-40px; margin-bottom:20px;"></i><br>
        <a><button type="button" disabled class="btn btn-danger" style="margin-bottom:10px; " >Claim Reward</button></a>
        <br>
        <a href="investment.php" class="btn btn-success" style="margin-bottom:20px;" > <b>Back</b></a>
       </center>
</div>
</div>
    </body>
    </html>