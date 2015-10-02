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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="background-image: url('images/fb.png'); background-repeat: repeat;" >

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">




            <div class="container">
                <div class="row">
                    {!! Form::open() !!}
                    <!--<form role="form">-->
                    <div class="col-lg-6">
                        <div class="well well-sm"><span class="glyphicon glyphicon-asterisk"></span>Required Fields</div>
                        <div class="form-group">

                            <div class="input-group">
                                {!! Form::text('shop_name', null, ['class' => 'form-control', 'placeholder' => 'Shop Name'])!!}
                                <!--<input type="text" class="form-control" name="InputName" id="InputName" placeholder="First Name" required>-->
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="input-group">
                                {!! Form::text('shop_description', null, ['class' => 'form-control', 'placeholder' => 'Short Description'])!!}
                                <!--<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Second Name" required>-->
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="input-group">
                                {!! Form::text('shop_url', null, ['class' => 'form-control', 'placeholder' => 'Your preferred shop URL'])!!}

                                <!--<input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Email" required>-->
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="input-group">
                                {!! Form::text('shop_location', null, ['class' => 'form-control', 'placeholder' => 'Town where your shop is located'])!!}

                                <!--<input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Confirm Email" required>-->
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="input-group">
                                {!! Form::text('shop_building', null, ['class' => 'form-control', 'placeholder' => 'Building where your shop resides'])!!}

                                <!--<input type="text" class="form-control" name="InputPhoneNumber" id="InputPhoneNumber" placeholder="Phone Number" required>-->
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>




                        <div class="form-group">

                            <div class="input-group">
                                {!! Form::text('shop_category', null, ['class' => 'form-control', 'placeholder' => 'What do you sell??'])!!}

                                <!--<input type="password" class="form-control" id="InputPasswordlFirst" name="InputPassword" placeholder="Password" required>-->
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="input-group">
                                {!! Form::text('shop_street', null, ['class' => 'form-control', 'placeholder' => 'The street where your shop is located'])!!}

                                <!--<input type="password" class="form-control" id="InputPasswordSecond" name="RepeatPassword" placeholder="Confirm Password" required>-->
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>

                        <a href="customer_account"> <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right"></a>
                    </div>
                    <!--</form>-->
                    {!! Form::close() !!}

                </div>
            </div>
        </div>

        <div class="mastfoot">
            <div class="inner">
                <p>copyright@<a href="#">shelves.com</a> 2015 </p>
            </div>
        </div>

    </div>

</div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
