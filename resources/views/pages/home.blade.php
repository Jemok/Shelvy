<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
</head>

<body style="background-image: url('images/bg.jpg');" >


<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">shelves.com</a>

                    </div>


                    <div id="navbar" class="navbar-collapse collapse">
                    @if(!(\Auth::check()))

                        {!! Form::open(['class' => 'navbar-form navbar-right', 'method' => 'post' , 'url' => 'login']) !!}

                        <div class="form-group">
                            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Sign In', ['class' => 'btn btn-info']) !!}
                        </div>

                        {!! Form::close() !!}

                        @else
                        <div class="navbar-form navbar-right" style="color: #ffffff;"> Welcome, {{ \Auth::user()->fullName() }}</div>
                    @endif

                        <!--<form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" class="form-control">
                            </div>
                            <a href="customer_account"> <input type="button" class="btn btn-info" value="Sign in" /></a>

                        </form>-->
                        <p class="navbar-text navbar-left"><a href="customer_registration" class="navbar-link">Customer Accounts</a></p>
                        <p class="navbar-text navbar-left"><a href="login" class="navbar-link">Admin Login</a></p>
                    </div><!--/.navbar-collapse -->
                </div>
            </nav>
                    <div >
                        &nbsp;
                    </div>
                    <div >
                        &nbsp;
                    </div>

                    <a href="shop"><img src="images/shops/bodyshop.jpeg" class="shop img-responsive" alt="Responsive image" hspace="220" /></a>

                    <div >
                        &nbsp;
                    </div>






        {!! Form::open(['class' => 'form-group-sm']) !!}

            <div class="form-group-sm" style="display:inline;">

                <div class="form-group">

                    {!! Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Search shops, items, shops in malls, cities, buildings e.t.c'])!!}

                </div>

                    {!! Form::submit('search', ['class' => 'btn btn-success']) !!}

            </div>

       {!! Form::close() !!}

            <div class="inner cover">

                <h2 class="cover-heading">welcome, you are here</h2>
                <p class="lead">With only 3 steps, get your online shop, admin dashboard, upload your products, build categories and
                    start selling your products, get a network of your customers, integrated delivery system and more, all for free</p>
                <p class="lead">
                    <a href="register1" ><button type="button" class="btn btn-lg btn-info">Build your shop now</button></a>
                    <!--<a href="register1" class="btn btn-lg btn-info">Build your shop now</a>-->
                </p>
            </div>

            <div class="mastfoot">
                <div class="inner">
                    <p>copyright@<a href="#">shelves.com</a> 2015 </p>
                </div>
            </div>

        </div>

    </div>

</div>

<script src="js/ie-emulation-modes-warning.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>

</body>
</html>




