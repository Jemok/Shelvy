<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <style type="text/css">

        @import "http://fonts.googleapis.com/css?family=Roboto:300,400,500,700";

        .container { margin-top: 20px; }
        .mb20 { margin-bottom: 20px; }

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


<div class="container">

<hgroup class="mb20">
    <h1>Search Results</h1>
    <h2 class="lead"><strong class="text-danger">3</strong> results were found for the search for <strong class="text-danger">Lorem</strong></h2>
</hgroup>

@if($shops->count())

@foreach($shops as $shop)
<section class="col-xs-7 col-sm-7 col-md-7">
<article class="search-result row">
    <!--<div class="col-xs-12 col-sm-12 col-md-3">
        <a href="#" title="Lorem ipsum" class="thumbnail"><img  src="/home/james/Desktop/iphone.jpeg" alt="Lorem ipsum" width="80" height="100" /></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
            <li ><i class="glyphicon glyphicon-calendar" ></i> <span>kshs 1,000,000/=</span></li>
            <li><i class="glyphicon glyphicon-time"></i> <span>{{ $shop->shop_name }}</span></li>
            <li><i class="glyphicon glyphicon-tags"></i> <span>View item</span></li>
        </ul>
    </div>-->
    <div class="col-xs-12 col-sm-12 col-md-10 excerpet">

        <div class="col-xs-12 col-sm-12 col-md-3">
            <!--<a href="#" title="Lorem ipsum" class="thumbnail"><img src="/home/james/Desktop/thomascook.jpeg" alt="Lorem ipsum" /></a>-->
            <img src="{{ asset('shop_images/'. $shop->shop_image)}}" alt="image" class="thumbnail" height="100" width="90" />

        </div>
        <h3><a href="{{ asset('/'. $shop->slug)}}" title="">{{ $shop->shop_name }} - {{ $shop->shop_location}} - {{ $shop->shop_building }}</a></h3>
        <p style="font-size: 12px;">{{ $shop->shop_description }} </p>




    </div>


    <span class="clearfix borda"></span>
</article>
@endforeach

@endif

<!--
<article class="search-result row">
    <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="#" title="Lorem ipsum" class="thumbnail"><img src="/home/james/Desktop/iphone2.jpeg" alt="Lorem ipsum" /></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
            <li><i class="glyphicon glyphicon-calendar"></i> <span>kshs 1,000,000/=</span></li>
            <li><i class="glyphicon glyphicon-time"></i> <span>Buy now</span></li>
            <li><i class="glyphicon glyphicon-tags"></i> <span>View item</span></li>
        </ul>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-7 excerpet">

        <div class="col-xs-12 col-sm-12 col-md-3">
            <a href="#" title="Lorem ipsum" class="thumbnail"><img src="/home/james/Desktop/bodyshop.jpeg" alt="Lorem ipsum" /></a>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-7">
            <h3><a href="#" title="">@jiam_clothing_nairobi</a></h3>
            <p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

        </div>
        <span class="clearfix borda"></span>
</article>


<article class="search-result row">
    <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="#" title="Lorem ipsum" class="thumbnail"><img src="/home/james/Desktop/iphone3.jpeg" alt="Lorem ipsum" /></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
            <li><i class="glyphicon glyphicon-calendar"></i> <span>kshs 1,000,000/=</span></li>
            <li><i class="glyphicon glyphicon-time"></i> <span>Buy now</span></li>
            <li><i class="glyphicon glyphicon-tags"></i> <span>View item</span></li>
        </ul>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-7 excerpet">

        <div class="col-xs-12 col-sm-12 col-md-3">
            <a href="#" title="Lorem ipsum" class="thumbnail"><img src="/home/james/Desktop/sports.jpeg" alt="Lorem ipsum" /></a>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-7">
            <h3><a href="#" title="">@nairobi_sports_house </a></h3>
            <p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        </div>

        <span class="clearfix border"></span>
</article>



<article class="search-result row">
    <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="#" title="Lorem ipsum" class="thumbnail"><img src="/home/james/Desktop/iphone.jpeg" alt="Lorem ipsum" /></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
            <li><i class="glyphicon glyphicon-calendar"></i> <span>kshs 1,000,000/=</span></li>
            <li><i class="glyphicon glyphicon-time"></i> <span>Buy now</span></li>
            <li><i class="glyphicon glyphicon-tags"></i> <span>View item</span></li>
        </ul>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7 excerpet">

        <div class="col-xs-12 col-sm-12 col-md-3">
            <a href="#" title="Lorem ipsum" class="thumbnail"><img src="/home/james/Desktop/thomascook.jpeg" alt="Lorem ipsum" /></a>

        </div>
        <h3><a href="#" title="">@kamau_electronics_githurai</a></h3>
        <p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>




    </div>


    <span class="clearfix borda"></span>
</article>



<article class="search-result row">
    <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="#" title="Lorem ipsum" class="thumbnail"><img src="/home/james/Desktop/iphone2.jpeg" alt="Lorem ipsum" /></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
            <li><i class="glyphicon glyphicon-calendar"></i> <span>kshs 1,000,000/=</span></li>
            <li><i class="glyphicon glyphicon-time"></i> <span>Buy now</span></li>
            <li><i class="glyphicon glyphicon-tags"></i> <span>View item</span></li>
        </ul>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-7 excerpet">

        <div class="col-xs-12 col-sm-12 col-md-3">
            <a href="#" title="Lorem ipsum" class="thumbnail"><img src="images/shops/bodyshop.jpeg" alt="Lorem ipsum" /></a>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-7">
            <h3><a href="#" title="">@jiam_clothing_nairobi</a></h3>
            <p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

        </div>
        <span class="clearfix borda"></span>
</article>


<article class="search-result row">
    <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="#" title="Lorem ipsum" class="thumbnail"><img src="/home/james/Desktop/iphone3.jpeg" alt="Lorem ipsum" /></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
            <li><i class="glyphicon glyphicon-calendar"></i> <span>kshs 1,000,000/=</span></li>
            <li><i class="glyphicon glyphicon-time"></i> <span>Buy now</span></li>
            <li><i class="glyphicon glyphicon-tags"></i> <span>View item</span></li>
        </ul>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-7 excerpet">

        <div class="col-xs-12 col-sm-12 col-md-3">
            <a href="#" title="Lorem ipsum" class="thumbnail"><img src="/home/james/Desktop/sports.jpeg" alt="Lorem ipsum" /></a>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-7">
            <h3><a href="#" title="">@nairobi_sports_house</a></h3>
            <p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        </div>
        <span class="clearfix border"></span>
</article>

<article class="search-result row">
    <div class="col-xs-12 col-sm-12 col-md-3">
        <a href="#" title="Lorem ipsum" class="thumbnail"><img src="/home/james/Desktop/iphone.jpeg" alt="Lorem ipsum" /></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2">
        <ul class="meta-search">
            <li><i class="glyphicon glyphicon-calendar"></i> <span>kshs 1,000,000/=</span></li>
            <li><i class="glyphicon glyphicon-time"></i> <span>Buy now</span></li>
            <li><i class="glyphicon glyphicon-tags"></i> <span>View item</span></li>
        </ul>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7 excerpet">

        <div class="col-xs-12 col-sm-12 col-md-3">
            <a href="#" title="Lorem ipsum" class="thumbnail"><img src="/home/james/Desktop/thomascook.jpeg" alt="Lorem ipsum" /></a>

        </div>
        <h3><a href="#" title="">@kamau_electronics_githurai</a></h3>
        <p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>




    </div>


    <span class="clearfix borda"></span>
</article>-->



</section>
</div>
<!-- jQuery -->
<script src="{{ asset('js/jquery.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>







































