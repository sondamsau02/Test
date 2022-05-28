<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Latest compiled and minified CSS -->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <style type="text/css">
          input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}


      
  </style>
	<title> Yessirrr!!!</title>
</head>
<body>
	<div class="container">
         <div class="row">
         	<ul class="nav nav-tabs">
         		<li><a href="homepage.php"> <span class="glyphicon glyphicon-home ">HomePage</span></a></li>
         		<li><a href=""> <span class="glyphicon glyphicon-user">User </span></a></li>
         		<li><a href="contact.php"> <span class="glyphicon glyphicon-earphone">Contact </span></a></li>
                <li><a href="register.php"> <span class="fa fa-registered">Register </span></a></li>
                <li><a href="login.php"> <span class="glyphicon glyphicon-log-in"> Log-in </span></a></li>
                
                <form class="form-inline my-2 my-lg-0" action="homepage.php" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Search for song" style="width: 400px" name="Search">
                <input type="submit"name="search" value="Search" />
                </form>
         	</ul>
         </div>
	</div>
	<nav class="navbar navbar-inverse">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse " data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse " id = "  myNavbar">
            <ul class="nav navbar-nav"> 
            	<li><a href=""> <span class="glynphicon glynphicon-home"></span>Personal</a></li>
            	<li><a href=""> <span class="glynphicon glynphicon-user"></span>Introduction</a></li>
            	<li><a href=""> <span class="glynphicon glynphicon-asterisk"></span>Break New</a></li>
            	<li><a href=""> Brand</a></li>
            	<li><a href=""> <span class="glynphicon glynphicon-envelope"></span>Contact</a></li>
                <li><a href=""> <span class="fa fa-shopping-cart"></span>shopping</a></li>
            </ul>
		</div>
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>
   <div class="carousel-inner">
    <div class="item active">
     <img src="img1/banner1.jpg" alt="Los Angeles"style="width: 1200px; height: auto;margin: 0 auto;">
    </div>

    <div class="item">
      <img src="img1/banner2.jpg" alt="Chicago" style="width: 1200px; height: auto;margin: 0 auto;">
    </div>

    <div class="item">
      <img  src="img1/banner3.jpg" alt="New York" style="width: 1200px; height: auto;margin: 0 auto;">
    </div>
    <div class="item">
      <img  src="img1/banner4.jpg" alt="New " style="width: 1200px; height: auto;margin: 0 auto;">
    </div>
    <div class="item">
      <img  src="img1/banner5.jpg" alt="New " style="width: 1200px; height: auto;margin: 0 auto;">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  

	</nav>
        <!-- Wrapper for slides -->
      
   <div class="col-md-4 col-sm-6 col-12">
                <div class="card card-product mb-4">
                    <img class="card-img-top" src="img1/baihat1.jpg" style="height:280px ;width:auto; margin: auto  ;">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <h5 class="card-title"></h5>
                        <audio controls controlsList="nodownload" style="width: 100%;" ontimeupdate="myAudio(this)">
                            <source src="audio/don'talkanymore.mp3" type="audio/mpeg">
                            </audio>          
                            <script type="text/javascript">
                                function MyAudio(event){
                                    if(event.currentTime>10){
                                        event.currentTime=0;
                                        event.pause();
                                        alert("you have to pay to listen all the song")
                                    }
                                }

                            </script>
                            <p>
                                <a href="cart.php?id=<?php echo$value['id'] ?>" class="btn btn-primary">add to cart</a>
                                 <a href='detail.php' class='btn btn-primary'>Details</a>

                            </p>
                            
                            
                        </div>
                    </div>

                </div>
                <div class="card card-product col-md-4 col-sm-6 col-12">
                    <img class="card-img-top" src="img1/baihat2.jpg" style="height:280px ;width:auto; margin: auto; ">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <h5 class="card-title"></h5>
                        <audio controls controlsList="nodownload" style="width: 100%;" ontimeupdate="myAudio(this)">
                            <source src="audio/shapeofyou.mp3"type="audio/mpeg">
                            </audio>          
                            <script type="text/javascript">
                                function MyAudio(event){
                                    if(event.currentTime>10){
                                        event.currentTime=0;
                                        event.pause();
                                        alert("Bạn phải trả phí để nghe cả bài")
                                    }
                                }
                            </script>
                            <a href='detail.php' class='btn btn-primary'>Details</a>
                        </div>
                    </div>
                     <div class="card card-product col-md-4 col-sm-6 col-12">
                    <img class="card-img-top" src="img1/baihat3.jpg" style="height:320px ;width:auto; margin: auto;">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <h5 class="card-title"></h5>
                        <audio controls controlsList="nodownload" style="width: 100%;" ontimeupdate="myAudio(this)">
                            <source src="audio/senorita.mp3"type="audio/mpeg">
                            </audio>          
                            <script type="text/javascript">
                                function myAudio(event){
                                    if(event.currentTime>10){
                                        event.currentTime=0;
                                        event.pause();
                                        alert("Bạn phải trả phí để nghe cả bài")
                                    }
                                }
                            </script>
                            <a href='detail.php' class='btn btn-primary'>Details</a>
                        </div>

                    </div>
                    <div class="card card-product col-md-4 col-sm-6 col-12">
                    <img class="card-img-top" src="img1/baihat4.jpg" style="height:200px ;width:auto; margin: auto;">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <h5 class="card-title"></h5>
                        <audio controls controlsList="nodownload" style="width: 100%;" ontimeupdate="myAudio(this)">
                            <source src="audio/darari.mp3"type="audio/mpeg">
                            </audio>          
                            <script type="text/javascript">
                                function myAudio(event){
                                    if(event.currentTime>10){
                                        event.currentTime=0;
                                        event.pause();
                                        alert("Bạn phải trả phí để nghe cả bài")
                                    }
                                }
                            </script>
                            <a href='detail.php' class='btn btn-primary'>Details</a>
                        </div>
                    </div>
                    <div class="card card-product col-md-4 col-sm-6 col-12">
                    <img class="card-img-top" src="img1/baihat5.jpg" style="height:200px ;width:auto; margin: auto;">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <h5 class="card-title"></h5>
                        <audio controls controlsList="nodownload" style="width: 100%;" ontimeupdate="myAudio(this)">
                            <source src="audio/swu.mp3"type="audio/mpeg">
                            </audio>          
                            <script type="text/javascript">
                                function myAudio(event){
                                    if(event.currentTime>10){
                                        event.currentTime=0;
                                        event.pause();
                                        alert("Bạn phải trả phí để nghe cả bài")
                                    }
                                }
                            </script>
                            <a href='detail.php' class='btn btn-primary'>Details</a>
                        </div>
                    </div>
                    <div class="card card-product col-md-4 col-sm-6 col-12">
                    <img class="card-img-top" src="img1/baihat6.jpg" style="height:200px ;width:auto; margin: auto;">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <h5 class="card-title"></h5>
                        <audio controls controlsList="nodownload" style="width: 100%;" ontimeupdate="myAudio(this)">
                            <source src="audio/waybackhome.mp3"type="audio/mpeg">
                            </audio>          
                            <script type="text/javascript">
                                function myAudio(event){
                                    if(event.currentTime>10){
                                        event.currentTime=0;
                                        event.pause();
                                        alert("Bạn phải trả phí để nghe cả bài")
                                    }
                                }
                            </script>
                            <a href='detail.php' class='btn btn-primary'>Details</a>
                        </div>
                    </div>





  </div>
  </div>
</body>
</html>