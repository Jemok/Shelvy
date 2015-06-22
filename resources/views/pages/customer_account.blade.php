

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">shelves.com</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">

                <li>

                    <p class="navbar-text">Signed in as <a href="#" class="navbar-link">{{ \Auth::user()->fullName( )}}</a></p>

                </li>

                <li>
                    <a href="#">Help</a>
                </li>

                <li>
                    <a href="customer_registration">Account Settings</a>
                </li>
                <li>
                    <a href="{{ url('/logout') }}">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

<div class="row">

<div class="col-md-2">
    <p class="lead">My Account</p>
    <img src="images/320x150.gif" class="img-responsive img-rounded" alt="Responsive image" height="700" width="400"/>




    <div class="list-group">
        &nbsp;

        <a href="#" class="list-group-item"><strong>My Stuff</strong></a>
        <a href="#" class="list-group-item">Search Store</a>
        <a href="#" class="list-group-item">Group Search</a>
        <a href="#" class="list-group-item">Cart</a>
        <a href="#" class="list-group-item">Orders</a>
        <a href="#" class="list-group-item">Locate Address</a>
    </div>



    <div class="list-group">
        <a href="#" class="list-group-item"><strong>My Shops</strong></a>
        <a href="#" class="list-group-item">Shop 1</a>
        <a href="#" class="list-group-item">Shop 2</a>
        <a href="#" class="list-group-item">Shop 3</a>
        <a href="#" class="list-group-item">Shop 4</a>
        <a href="#" class="list-group-item">Shop 5</a>
    </div>
</div>






<div class="col-md-8">
    <form class="form-group-sm">
        <div class="form-group-sm" style="display:inline;">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search items here">
                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
            </div>
        </div>
    </form>
    &nbsp;

</div>


<div class="col-md-8">


</div>



<div class="container">
    <div class="row">



        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="images/shops/iphone2.jpeg" alt="iphone"/>
                <div class="caption">
                    <h4 class="pull-right">kshs 100,000/=</h4>
                    <h4><a href="product">iphone 6</a>

                    </h4>
                    <p><a href="product">@ shelves.com/@Nairobi phone shop</a></p>
                    <p>iphone 6 phone with long battery life and 4G internet, wifi, 3.5mm jack, radio..</p>
                </div>
                <div class="ratings">
                    <p class="pull-right">15 reviews</p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </p>
                </div>
            </div>
        </div>


        <div class="col-xs-4 col-xs-4 col-xs-4">
        </div>



    </div>
</div>




</div>



</div>

</div>
<!-- /.container -->

<div class="container">

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
