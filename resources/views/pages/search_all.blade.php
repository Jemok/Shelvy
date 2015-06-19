<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">

        @import "http://fonts.googleapis.com/css?family=Roboto:300,400,500,700";

        .hamja { margin-top: 70px; }
        .mb20 { margin-bottom: 20px; margin-top: 30px; }

        hgroup { padding-left: 15px; border-bottom: 1px solid #ccc; }
        hgroup h1 { font: 500 normal 1.625em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin-top: 0; line-height: 1.15; }
        hgroup h2.lead { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin: 0; padding-bottom: 10px; }

        .search-result .thumbnail { border-radius: 0 !important; }
        .search-result:first-child { margin-top: 0 !important; }
        .search-result { margin-top: 20px; }
        .search-result .col-md-2 { border-right: 1px dotted #ccc; min-height: 140px; }
        .search-result ul { padding-left: 0 !important; list-style: none;  }
        .search-result ul li { font: 400 normal .85em "Roboto",Arial,Verdana,sans-serif;  line-height: 30px; }
        .search-result ul li i { padding-right: 5px; }
        .search-result .col-md-7 { position: relative; }
        .search-result h3 { font: 500 normal 1.375em "Roboto",Arial,Verdana,sans-serif; margin-top: 0 !important; margin-bottom: 10px !important; }
        .search-result h3 > a, .search-result i { color: #248dc1 !important; }
        .search-result p { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; }
        .search-result span.plus { position: absolute; right: 0; top: 126px; }
        .search-result span.plus a { background-color: #248dc1; padding: 5px 5px 3px 5px; }
        .search-result span.plus a:hover { background-color: #414141; }
        .search-result span.plus a i { color: #fff !important; }
        .search-result span.border { display: block; width: 97%; margin: 0 15px; border-bottom: 1px dotted #ccc; }














    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>







<div class="container hamja">

<div class="col-md-8">

    <form class="form-group-sm">
        <div class="form-group-sm" style="display:inline;">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search items here">
                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
            </div>
        </div>
    </form>

</div>

<hgroup class="mb20">

    <p><strong class="text-danger">3</strong> results were found for the search for <strong class="text-danger">Lorem</strong></p>
</hgroup>

<section class="col-xs-7 col-sm-6 col-md-10">
<article class="search-result row">
    <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="product" title="Lorem ipsum" class="thumbnail"><img src="images/shops/iphone.jpeg" height="60" alt="Lorem ipsum" /></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
            <li><i class="glyphicon glyphicon-calendar"></i> <span>kshs 1,000,000/=</span></li>
            <li><i class="glyphicon glyphicon-time"></i> <span>Buy now</span></li>
           <a href="product"><li><i class="glyphicon glyphicon-tags"></i> <span>View item</span></li></a>
        </ul>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7 excerpet">

        <div class="col-xs-12 col-sm-12 col-md-3">
            <a href="shop" title="Lorem ipsum" class="thumbnail"><img src="images/shops/thomascook.jpeg"  alt="Lorem ipsum" /></a>

        </div>
        <h3><a href="shop" title="">shelves.com/@kamau_electronics_githurai</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>




    </div>


    <span class="clearfix borda"></span>
</article>

<hr />

<article class="search-result row">
    <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="product" title="Lorem ipsum" class="thumbnail"><img src="images/shops/iphone2.jpeg" alt="Lorem ipsum" /></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
            <li><i class="glyphicon glyphicon-calendar"></i> <span>kshs 1,000,000/=</span></li>
            <li><i class="glyphicon glyphicon-time"></i> <span>Buy now</span></li>
           <a href="product"><li><i class="glyphicon glyphicon-tags"></i> <span>View item</span></li></a>
        </ul>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-7 excerpet">

        <div class="col-xs-12 col-sm-12 col-md-3">
            <a href="shop" title="Lorem ipsum" class="thumbnail"><img src="images/shops/bodyshop.jpeg" alt="Lorem ipsum" /></a>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-7">
            <h3><a href="shop" title="">shelves.com/@jiam_clothing_nairobi</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

        </div>
        <span class="clearfix borda"></span>
</article>

<hr />

<article class="search-result row">
    <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="product" title="Lorem ipsum" class="thumbnail"><img src="images/shops/iphone3.jpeg" alt="Lorem ipsum" /></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
            <li><i class="glyphicon glyphicon-calendar"></i> <span>kshs 1,000,000/=</span></li>
            <li><i class="glyphicon glyphicon-time"></i> <span>Buy now</span></li>
            <a href="product"> <li><i class="glyphicon glyphicon-tags"></i> <span>View item</span></li></a>
        </ul>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-7 excerpet">

        <div class="col-xs-12 col-sm-12 col-md-3">
            <a href="shop" title="Lorem ipsum" class="thumbnail"><img src="images/shops/sports.jpeg" alt="Lorem ipsum" /></a>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-7">
            <h3><a href="shop" title="">shelves.com/@nairobi_sports_house </a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        </div>

        <span class="clearfix border"></span>
</article>

<hr />

<article class="search-result row">
    <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="product" title="Lorem ipsum" class="thumbnail"><img src="images/shops/iphone.jpeg" alt="Lorem ipsum" /></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
            <li><i class="glyphicon glyphicon-calendar"></i> <span>kshs 1,000,000/=</span></li>
            <li><i class="glyphicon glyphicon-time"></i> <span>Buy now</span></li>
            <a href="product"><li><i class="glyphicon glyphicon-tags"></i> <span>View item</span></li></a>
        </ul>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7 excerpet">

        <div class="col-xs-12 col-sm-12 col-md-3">
            <a href="shop" title="Lorem ipsum" class="thumbnail"><img src="images/shops/thomascook.jpeg" alt="Lorem ipsum" /></a>

        </div>
        <h3><a href="shop" title="">shelves.com/@kamau_electronics_githurai</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>




    </div>


    <span class="clearfix borda"></span>
</article>

<hr />

<article class="search-result row">
    <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="product" title="Lorem ipsum" class="thumbnail"><img src="images/shops/iphone2.jpeg" alt="Lorem ipsum" /></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
            <li><i class="glyphicon glyphicon-calendar"></i> <span>kshs 1,000,000/=</span></li>
            <li><i class="glyphicon glyphicon-time"></i> <span>Buy now</span></li>
            <a href="product"><li><i class="glyphicon glyphicon-tags"></i> <span>View item</span></li></a>
        </ul>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-7 excerpet">

        <div class="col-xs-12 col-sm-12 col-md-3">
            <a href="shop" title="Lorem ipsum" class="thumbnail"><img src="images/shops/bodyshop.jpeg" alt="Lorem ipsum" /></a>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-7">
            <h3><a href="shop" title="">shelves.com/@jiam_clothing_nairobi</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

        </div>
        <span class="clearfix borda"></span>
</article>

<hr />

<article class="search-result row">
    <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="product" title="Lorem ipsum" class="thumbnail"><img src="images/shops/iphone3.jpeg" alt="Lorem ipsum" /></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
            <li><i class="glyphicon glyphicon-calendar"></i> <span>kshs 1,000,000/=</span></li>
            <li><i class="glyphicon glyphicon-time"></i> <span>Buy now</span></li>
            <a href="product"><li><i class="glyphicon glyphicon-tags"></i> <span>View item</span></li></a>
        </ul>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-7 excerpet">

        <div class="col-xs-12 col-sm-12 col-md-3">
            <a href="shop" title="Lorem ipsum" class="thumbnail"><img src="images/shops/sports.jpeg" alt="Lorem ipsum" /></a>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-7">
            <h3><a href="shop" title="">shelves.com/@nairobi_sports_house</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        </div>
        <span class="clearfix border"></span>
</article>

<article class="search-result row">
    <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="product" title="Lorem ipsum" class="thumbnail"><img src="images/shops/iphone.jpeg" alt="Lorem ipsum" /></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
            <li><i class="glyphicon glyphicon-calendar"></i> <span>kshs 1,000,000/=</span></li>
            <li><i class="glyphicon glyphicon-time"></i> <span>Buy now</span></li>
            <a href="product" ><li><i class="glyphicon glyphicon-tags"></i> <span>View item</span></li></a>
        </ul>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7 excerpet">

        <div class="col-xs-12 col-sm-12 col-md-3">
            <a href="shop" title="Lorem ipsum" class="thumbnail"><img src="images/shops/thomascook.jpeg" alt="Lorem ipsum" /></a>

        </div>
        <h3><a href="shop" title="">shelves.com/@kamau_electronics_githurai</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>




    </div>


    <span class="clearfix borda"></span>
</article>

<article class="search-result row">
    <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="product" title="Lorem ipsum" class="thumbnail"><img src="images/shops/iphone2.jpeg" alt="Lorem ipsum" /></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
            <li><i class="glyphicon glyphicon-calendar"></i> <span>kshs 1,000,000/=</span></li>
            <li><i class="glyphicon glyphicon-time"></i> <span>Buy now</span></li>
            <a href="product"><li><i class="glyphicon glyphicon-tags"></i> <span>View item</span></li></a>
        </ul>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-7 excerpet">

        <div class="col-xs-12 col-sm-12 col-md-3">
            <a href="shop" title="Lorem ipsum" class="thumbnail"><img src="images/shops/bodyshop.jpeg" alt="Lorem ipsum" /></a>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-7">
            <h3><a href="shop" title="">shelves.com/@jiam_clothing_nairobi</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

        </div>
        <span class="clearfix borda"></span>
</article>

<article class="search-result row">
    <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="product" title="Lorem ipsum" class="thumbnail"><img src="images/shops/iphone3.jpeg" alt="Lorem ipsum" /></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
            <li><i class="glyphicon glyphicon-calendar"></i> <span>kshs 1,000,000/=</span></li>
            <li><i class="glyphicon glyphicon-time"></i> <span>Buy now</span></li>
            <a href="product"><li><i class="glyphicon glyphicon-tags"></i> <span>View item</span></li></a>
        </ul>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-7 excerpet">

        <div class="col-xs-12 col-sm-12 col-md-3">
            <a href="shop" title="Lorem ipsum" class="thumbnail"><img src="images/shops/sports.jpeg" alt="Lorem ipsum" /></a>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-7">
            <h3><a href="shop" title="">shelves.com/@nairobi_sports_house</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        </div>
        <span class="clearfix border"></span>
</article>

</section>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>







































