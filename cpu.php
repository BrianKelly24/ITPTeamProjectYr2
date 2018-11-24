<!DOCTYPE html>
<html>
<head>
  <title>ITP Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet" />
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="nav-brand" href="#"><img src="img/logo2.png">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse-main">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        
       <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Build PC</a>
				<ul class="dropdown-menu">
					<li><a href="business.php">Business</a></li>	
					<li><a href="gaming.php">Gaming</a></li>
					<li><a href="general.php">General</a></li>
				</ul>
			</li>
			  <li><a href= "cpu.php">Shop</a></li>
        <li><a href= "newsletter.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="landing-text">
 <legend>I</legend>
</div>
<br>
<div class="heading"></div>
<h1 style= "color:#263d66; text-align:center"><b><u>Our Products</u></b></h1>
</div>
<br>

<div class="padding">
<div class="container">
  
  <h3>Processors</h3>
  <div class="col-md-3">
      <h4>Intel Core i7-8700K Coffee Lake 6-Core 3.7 GHz</h4>
      <img src="img/cpu1.jpg" alt="CPU" id="images">
      <p class= "price">Price: €415.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
  </div>
  <div class="col-md-3">
      <h4>Corsair Crystal 570X RGB ATX</h4>
      <img src="img/cpu2.jpg" alt="CPU" id="images">
      <p class= "price">Price: €180.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
  </div>
  <div class="col-md-3">
      <h4>Core Crystal 570X </h4>
      <img src="img/cpu3.jpg" alt="CPU" id="images">
      <p class= "price">Price: €80.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>
  </div>
  <div class="col-md-3">
      <h4>G.SKILL TridentZ RGB Series 32GB DDR4</h4>
      <img src="img/cpu4.jpg" alt="CPU" id="images">
      <p class= "price">Price: €435.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
  </div>
   <br>_______________________________________________________________________________________________________________________________________________________________</br>
  <h3>Graphic Cards</h3>
  <div class="col-md-3">
      <h4>EVGA GeForce GTX 1060 GAMING, ACX 2.0 (Single Fan), 06G-P4-6161-KR, 6GB GDDR5, DX12 </h4>
      <img src="img/vc1.jpg" alt="CPU" id="images">
      <p class= "price">Price: €289.99</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Details</button>
  </div>
  <div class="col-md-3">
      <h4>GIGABYTE GeForce GTX 1060 DirectX 12 GV-N1060G1 GAMING-6GD REV 2.0 6GB 192-Bit GDDR5 </h4>
      <img src="img/vc2.jpg" alt="CPU" id="images">
      <p class= "price">Price: €350.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-6">Details</button>
  </div>
  <div class="col-md-3">
      <h4>ASUS Radeon RX 580 O4G Dual-fan OC Edition GDDR5 DP HDMI DVI VR Ready AMD Graphics Card </h4>
      <img src="img/vc3.jpg" alt="CPU" id="images">
      <p class= "price">Price: €435.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-7">Details</button>
  </div>
  <div class="col-md-3">
      <h4>PNY GeForce GTX 1060 DirectX 12 VCGGTX10603PB 3GB 192-Bit GDDR5 PCI Express 3.0 x16 Video </h4>
      <img src="img/vc4.jpg" alt="CPU" id="images">
      <p class= "price">Price: €259.99</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>
  </div>
   <br>_______________________________________________________________________________________________________________________________________________________________</br>
  <h3>RAM</h3>
  <div class="col-md-3">
      <h4>G.SKILL TridentZ RGB Series 32GB DDR4</h4>
      <img src="img/ram1.jpg" alt="CPU" id="images">
      <p class= "price">Price: €89.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-9">Details</button>
  </div>
  <div class="col-md-3">
      <h4>G.SKILL TridentZ RGB Series 32GB DDR4</h4>
      <img src="img/ram2.jpg" alt="CPU" id="images">
      <p class= "price">Price: €89.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-10">Details</button>
  </div>
  <div class="col-md-3">
      <h4>G.SKILL TridentZ RGB Series 32GB DDR4</h4>
      <img src="img/ram3.jpg" alt="CPU" id="images">
      <p class= "price">Price: €90.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-11">Details</button>
  </div>
  <div class="col-md-3">
      <h4>G.SKILL TridentZ RGB Series 32GB DDR4</h4>
      <img src="img/ram4.jpg" alt="CPU" id="images">
      <p class= "price">Price: €90.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-12">Details</button>
  </div>
  <br>_______________________________________________________________________________________________________________________________________________________________</br>
  <h3>Storage</h3>
  <div class="col-md-3">
      <h4>1TB HDD WD BLUE</h4>
      <img src="img/s1.jpg" alt="CPU" id="images">
      <p class= "price">Price: €180.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-13">Details</button>
  </div>
  <div class="col-md-3">
      <h4>4TB HDD DESKSTAR NAS</h4>
      <img src="img/s2.jpg" alt="CPU" id="images">
      <p class= "price">Price: €320.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-14">Details</button>
  </div>
  <div class="col-md-3">
      <h4>128GB SSD TOSHIBA TR128</h4>
      <img src="img/s5.jpg" alt="CPU" id="images">
      <p class= "price">Price: €159.99</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-15">Details</button>
  </div>
  <div class="col-md-3">
      <h4>500GB SSD TOSHIBA TR500</h4>
      <img src="img/s5.jpg" alt="CPU" id="images">
      <p class= "price">Price: €210.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-16">Details</button>
  </div>
  
  
  
  
  </div>
  </div>

<div class="padding">
<div class="container">
  <p>
    
    <br></br>
    
  </p>
</div>
</div>

<footer>
  
</footer>


<?php include 'details-modal-cpu1.php';
      include 'details-modal-cpu2.php';
      include 'details-modal-cpu3.php';
      include 'details-modal-cpu4.php';
      include 'details-modal-vc5.php';
      include 'details-modal-vc6.php';
      include 'details-modal-vc7.php';
      include 'details-modal-vc8.php';
      include 'details-modal-ram9.php';
      include 'details-modal-ram10.php';
      include 'details-modal-ram11.php';
      include 'details-modal-ram12.php';
      include 'details-modal-s13.php';
      include 'details-modal-s14.php';
      include 'details-modal-s15.php';
      include 'details-modal-s16.php';
      
?>
    


<footer class="foot text-center">
  <div class="row">
    <div class="col-sm-4">
      <h3 style= "color:#FFF;"><b>Contact</h3>
      <a href="newsletter.php" style="color:#FFF;">info@UrPC.com</a> 
    </div>
    <div class="col-sm-4">
      <h3 style= "color:#FFF;"><b>Connect With Us</h3>
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-google"></a>
      <a href="#" class="fa fa-instagram"></a>
    </div>
    <div class="col-sm-4">
      <h3 style= "color:#FFF;"><b>Sign up to our Newsletter  </h3>
      <a href="newsletter.php" style="color:#FFF;">Click Me</a> 
    </div>
  </div>
</footer>

</body>
</html>






