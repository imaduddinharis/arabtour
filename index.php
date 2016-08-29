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
        .navbar
        {
            background-color:#ac2925;
        }
        .navbar-brand
        {
            color:white;
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
    
      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Arab Tour</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <form class="navbar-form navbar-right" method="post" action="">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Username">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default">Login</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      
        <div class="row">
            <div class="container">
                <div class="col-md-8">
                    <img src="img/homepage1.jpeg" alt="homepage1" class="img-thumbnail homepage"/>
                </div>
                <div class="col-md-4">
                    <h1>SIGNUP</h1>
                    <form method="post" action="">
                        <div class="form-group">
                            <input type="text" class="form-control" id="companyName" placeholder="Company Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="country" placeholder="Country">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="stateProvince" placeholder="State / Province">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="workNumber" placeholder="Work Number">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="emailAddress" placeholder="Email Address">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
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