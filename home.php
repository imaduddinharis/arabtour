<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ArabTour</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .homepage
        {
            width:600px;
        }
        .footer-logo
        {
            width:100px;
        }
        .footer
        {
            background-color:#ac2925;
            padding:20px;
            box-shadow: 0 0 10px 0 black;
            color:white;
        }
        .navbar-inverse
        {
            background-color:#ac2925;
            border-radius:0;
        }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
      <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" >
        <li><a href="#">Home</a></li>
        <li><a href="#">Hotels</a></li>
        <li><a href="#">Flights</a></li>
        <li><a href="#">LA</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> </a></li>
        <li><a href="#"><span class="glyphicon glyphicon-cog"></span> </a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> </a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      
      <div id="myCarousel" class="carousel slide" data-ride="carousel"style="background-color: #FFF; padding-top:40px;padding-bottom:40px;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner"style="background-color: #FFF;">
      
        <div class="item active">
          <center><img src="img/slider1.png" width="75%" height="430px"></center>
           <div class="carousel-caption">
            <h3>Hotel Meihwa</h3>
            <p>Alamat : Jalan Merdeka No.72, Bandung</p>
            <p>Mail : meihwahotel@hotemail.com | Hotline : (022)888-2467</p>
          </div>
        </div><!-- End Item -->
 
         <div class="item">
          <center><img src="img/slider2.jpg" width="75%" height="430px"></center>
           <div class="carousel-caption">
            <h3>Hotel Meihwa</h3>
            <p>Alamat : Jalan Merdeka No.72, Bandung</p>
            <p>Mail : meihwahotel@hotemail.com | Hotline : (022)888-2467</p>
          </div>
        </div><!-- End Item -->
        
        <div class="item">
          <center><img src="img/slider3.jpg" width="75%" height="430px"></center>
           <div class="carousel-caption">
             <h3>Hotel Meihwa</h3>
            <p>Alamat : Jalan Merdeka No.72, Bandung</p>
            <p>Mail : meihwahotel@hotemail.com | Hotline : (022)888-2467</p>
          </div>
        </div><!-- End Item -->
        
      </div><!-- End Carousel Inner -->
    
      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div><!-- End Carousel -->


        
      <hr/>
      <div class="row footer">
            <div class="container-fluid">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/homepage1.jpeg" alt="homepage1" class="footer-logo"/>
                        </div>
                        <div class="col-md-4">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    
                </div>
            </div>
        </div>
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>