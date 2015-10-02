<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>shelves.com</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="background-image: url('{{ asset('images/fb.png') }}'); background-repeat: repeat;" >

<!-- Navigation -->
<nav class="navbar navbar-fixed-top navbar-default" role="navigation" >
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

                    <p class="navbar-text">Signed in as <a href="{{ url('customer-account', \Auth::user()->id) }}" class="navbar-link">{{ \Auth::user()->fullName( )}}</a></p>

                </li>



                <li>
                    <a href="#">Account Settings</a>
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

<div class="site-wrapper" style="padding-top: 70px;">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="container">

                <div class="row">



                    {!! Form::open(['url' => 'shops']) !!}
                    <!--<form role="form">-->
                    <div class="col-lg-6">
                        <div class="well well-sm"><span class="glyphicon glyphicon-asterisk"></span>Required Fields</div>
                        <div class="form-group {{ $errors->has('shop_name') ? 'has-error' : ''}}">

                            <div class="input-group">
                                {!! Form::text('shop_name', null, ['class' => 'form-control', 'placeholder' => 'Shop Name'] )!!}
                                <!--<input type="text" class="form-control" name="InputName" id="InputName" placeholder="First Name" required>-->
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                            {!! $errors->first('shop_name', '<span class="help-block">:message</span>' ) !!}
                        </div>

                        <div class="form-group {{ $errors->has('shop_description') ? 'has-error' : ''}}">

                            <div class="input-group">
                                {!! Form::text('shop_description', null, ['class' => 'form-control', 'placeholder' => 'Short Description'])!!}
                                <!--<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Second Name" required>-->
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                            {!! $errors->first('shop_description', '<span class="help-block">:message</span>' ) !!}
                        </div>

                        <div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">

                            <div class="input-group">
                                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Your preferred shop URL, use A-Z , - , _ '])!!}

                                <!--<input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Email" required>-->
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                            {!! $errors->first('slug', '<span class="help-block">:message</span>' ) !!}
                        </div>
                        <div class="form-group {{ $errors->has('shop_location') ? 'has-error' : ''}}">

                            <div class="input-group">
                                {!! Form::text('shop_location', null, ['class' => 'form-control', 'placeholder' => 'Town where your shop is located'])!!}

                                <!--<input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Confirm Email" required>-->
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                            {!! $errors->first('shop_location', '<span class="help-block">:message</span>' ) !!}
                        </div>

                        <div class="form-group {{ $errors->has('shop_building') ? 'has-error' : ''}}">

                            <div class="input-group">
                                {!! Form::text('shop_building', null, ['class' => 'form-control', 'placeholder' => 'Building where your shop resides'])!!}

                                <!--<input type="text" class="form-control" name="InputPhoneNumber" id="InputPhoneNumber" placeholder="Phone Number" required>-->
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                            {!! $errors->first('shop_building', '<span class="help-block">:message</span>' ) !!}
                        </div>




                        <div class="form-group {{ $errors->has('shop_category') ? 'has-error' : ''}}">

                            <div class="input-group">
                                {!! Form::text('shop_category', null, ['class' => 'form-control', 'placeholder' => 'What do you sell??'])!!}

                                <!--<input type="password" class="form-control" id="InputPasswordlFirst" name="InputPassword" placeholder="Password" required>-->
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>

                            {!! $errors->first('shop_category', '<span class="help-block">:message</span>' ) !!}
                        </div>
                        <div class="form-group {{ $errors->has('shop_street') ? 'has-error' : ''}}">

                            <div class="input-group">
                                {!! Form::text('shop_street', null, ['class' => 'form-control', 'placeholder' => 'The street where your shop is located'])!!}

                                <!--<input type="password" class="form-control" id="InputPasswordSecond" name="RepeatPassword" placeholder="Confirm Password" required>-->
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                            {!! $errors->first('shop_street', '<span class="help-block">:message</span>' ) !!}
                        </div>

                        <input type="submit" name="update" id="update" value="Submit" class="btn btn-info pull-right">
                    </div>
                    <!--</form>-->
                    {!! Form::close() !!}

                </div>
            </div>
        </div>



    </div>

</div>


</div>
<div class="mastfoot">
    <div class="inner">
        <p>copyright@<a href="#">shelves.com</a> 2015 </p>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
