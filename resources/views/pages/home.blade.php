<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">

    <link href="{{ asset('css/gsdk-base.css') }}" rel="stylesheet" />
</head>

<body style="background-image: url('images/bg.jpg');" >


<div class="site-wrapper">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="color: #4682b4;"><span class="glyphicon glyphicon-ok" style="color: limegreen;"></span> shelves.com</a>

        </div>




        <div id="navbar" class="navbar-collapse collapse">



            @if(!(\Auth::check()))

            <button type="button" class="navbar-btn btn btn-sm btn-info" data-toggle="modal" data-target=".bs-example-modal-lg">Create a Shelves Account </button>

            <span class="navbar-text navbar-right glyphicon glyphicon-user" style="color: limegreen;" data-toggle="modal" data-target="#myLoginModal"><span style="color: #4682b4;">Login</span></span>

            @else
            <a href="{{ url('customer-account', \Auth::user()->id) }}" style="color: #4682b4;" class=""><span class="glyphicon glyphicon-user" style="color: limegreen;"></span> {{ \Auth::user()->fullName() }}</a>

            <a href="{{ url('/logout') }}"><button type="button" class="btn navbar-btn btn-sm btn-info">Log Out {{\Auth::user()->fullName() }} to create a new Account</button></a>

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
            <!--<p class="navbar-text navbar-left"><a href="customer_registration" class="navbar-link">Customer Accounts</a></p>-->
            <!--<p class="navbar-text navbar-left"><a href="login" class="navbar-link">Admin Login</a></p>-->
        </div><!--/.navbar-collapse -->
    </div>


</nav>



    <div class="site-wrapper-inner">


        <div class="col-md-3">
            <h6>Shop Categories</h6>
            @foreach($shop_categories as $category)

            <p><a style="text-decoration: none; color: #000000;" href="/shop-category/{{$category->category_name}}"> {{ $category->category_name }}</a></p>

            @endforeach
        </div>

        <div class="cover-container col-md-7">



            @include('partials.errors')





            <div class="col-md-12">

                <form class="form-group-sm" method="GET">
                    <div class="form-group-sm" style="display:inline;">
                        <div class="input-group">
                            <input class="form-control text-center" type="search" name="search_shops" placeholder="Search">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                        </div>
                    </div>
                </form>
                &nbsp;

            </div>

            <div>
                <p class="text-center"><span class="glyphicon glyphicon-bullhorn"></span> Featured</p>
            </div>

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <a href="/jackies-boutique" style="color: #000000;">
                    <div class="col-lg-4">
                        <img class="img-circle" src="{{ asset('images/shops/index7.jpeg')}}" alt="Generic placeholder image" width="140" height="140">
                       <h5>Jackies-Boutique</h5>
                        <p>For all your clothing and shoes needs..</p>

                    </div><!-- /.col-lg-4 -->
                </a>

                <a href="/jack-electronics" style="color: #000000;">
                    <div class="col-lg-4">
                        <img class="img-circle" src="{{ asset('images/shops/tv3.jpeg')}}" alt="Generic placeholder image" width="140" height="140">
                        <h5>Jack-computers</h5>
                        <p>We sell all electronics and computers</p>

                    </div><!-- /.col-lg-4 -->
                </a>
                <div class="col-lg-4">
                    <img class="img-circle" src="{{ asset('images/shops/thomascook.jpeg')}}" alt="Generic placeholder image" width="140" height="140">
                    <h5>Thomas cook</h5>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget </p>

                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->



            <!-- Modal -->
            <div class="modal fade" id="myLoginModal" tabindex="-1" role="dialog" aria-labelledby="myLoginModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title glyphicon glyphicon-ok" id="myLoginModalLabel" style="color: limegreen;"><span style="color: #4682b4;">Login</span></h4>
                        </div>
                        <div class="modal-body">
                            {!! Form::open(['class' => 'form-inline', 'method' => 'post' , 'url' => 'login']) !!}

                            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email'] ) !!}

                            </div>

                            <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}

                            </div>

                            <div class="form-group">
                                {!! Form::submit('Sign In', ['class' => 'btn btn-info']) !!}
                            </div>

                            {!! Form::close() !!}
                        </div>
                        <div class="modal-footer">
                            <p class="text-center" style="color: #4682b4;">copyright &copy; shelves.com  2015 </p>
                        </div>
                    </div>
                </div>
            </div>





                    <!--<div >
                        &nbsp;
                    </div>
                    <div >
                        &nbsp;
                    </div>

                    <a href="shop"><img src="images/shops/bodyshop.jpeg" class="shop img-responsive" alt="Responsive image" hspace="220" /></a>

                    <div >
                        &nbsp;
                    </div>-->

            <div class="inner cover">



            </div>

            <!-- Modal -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <!--      Wizard container        -->
                        <div class="wizard-container">

                        {!! Form::open(['method' => 'POST', 'url' => '/register/customer/']) !!}

                        <!--<!form action="register" method="post">-->
                        <div class="card wizard-card ct-wizard-azzure" id="wizard">

                            <!--        You can switch "ct-wizard-orange"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->

                            <div class="wizard-header">
                                <h3>
                                    <b><span class="glyphicon glyphicon-ok" style="color: limegreen;"></span> Build </b> Your Shelves Account  <br>
                                    <small>This information is important for your account validity and security</small>
                                </h3>
                            </div>
                            <ul>
                                <li><a href="#about" data-toggle="tab">Basic Info</a></li>
                                <li><a href="#account" data-toggle="tab">Account Security</a></li>
                                <li><a href="#address" data-toggle="tab">Other Details</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane" id="about">
                                    <div class="row">
                                        <h4 class="info-text"> Let's start with your basic information</h4>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <!--<div class="picture-container">
                                                 <div class="picture">
                                                     <img src="images/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                                     <input type="file" id="wizard-picture">
                                                 </div>
                                                 <h6>Choose Picture</h6>
                                             </div>-->

                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group {{ $errors->has('firstName') ? 'has-error' : ''}}">
                                                <!--<label for="exampleInputEmail1">First Name</label>-->
                                                {!! Form::label('firstName', 'First Name')!!}

                                                <!--<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Andrew...">-->

                                                {!! Form::text('firstName', null, ['class' => 'form-control', 'placeholder' => 'first name'])!!}

                                                {!! $errors->first('firstName', '<span class="help-block">:message</span>' ) !!}
                                            </div>
                                            <div class="form-group {{ $errors->has('lastName') ? 'has-error' : ''}}">
                                                <!--<label for="exampleInputEmail1">Last Name</label>-->
                                                {!! Form::label('lastName', 'Last Name')!!}
                                                <!--<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Smith...">-->

                                                {!! Form::text('lastName', null, ['class' => 'form-control', 'placeholder' => 'last name'])!!}
                                                {!! $errors->first('lastName', '<span class="help-block">:message</span>' ) !!}

                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                                {!! Form::label('email', 'Email')!!}
                                                <!--<label>Email</label>-->
                                                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email'])!!}
                                                {!! $errors->first('email', '<span class="help-block">:message</span>' ) !!}
                                                <!--<input type="email" class="form-control" placeholder="andrew@creative-tim.com">-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="account">
                                    <h4 class="info-text"> Secure Your Account </h4>
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                                            <!-- <label for="exampleInputEmail1">Password</label>-->
                                            {!! Form::label('password', 'Password')!!}
                                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                                            {!! $errors->first('password', '<span class="help-block">:message</span>' ) !!}
                                            <!--<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Andrew...">-->
                                        </div>
                                        <div class="form-group">
                                            <!--<label for="exampleInputEmail1">Repeat Password</label>-->
                                            {!! Form::label('password_ confirmation', 'Repeat Password')!!}
                                            {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Repeat Password']) !!}
                                            <!--<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Smith...">-->
                                        </div>

                                        <div class="form-group {{ $errors->has('phone_number') ? 'has-error' : ''}}">
                                            <!--<label for="exampleInputEmail1">Phone Number</label>-->
                                            {!! Form::label('phone_number', 'Phone Number' ) !!}
                                            <!--<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Smith...">-->
                                            {!! Form::text('phoneNumber', null, ['class' => 'form-control', 'placeholder' => 'phone number']) !!}
                                            {!! $errors->first('phoneNumber', '<span class="help-block">:message</span>' ) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="address">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="info-text"> Say more </h4>
                                        </div>
                                        <div class="col-sm-7 col-sm-offset-1">
                                            <div class="form-group {{ $errors->has('nationality') ? 'has-error' : ''}}">
                                                <!--<label>Shop Name</label>-->
                                                {!! Form::label('nationality', 'Nationality')!!}
                                                <!--<input type="text" class="form-control" placeholder="5h Avenue">-->
                                                {!! Form::select('nationality',
                                                (['0' => 'Select a country', '1' => 'Kenya']),
                                                null,
                                                ['class' => 'form-control']) !!}
                                                {!! $errors->first('nationality', '<span class="help-block">:message</span>' ) !!}
                                            </div>
                                        </div>

                                        <div class="col-sm-3">

                                            <div class="form-group {{ $errors->has('location') ? 'has-error' : ''}}">

                                                <!--<label>City</label>-->

                                                {!! Form::label('location', 'Current Location')!!}

                                                <!--<input type="text" class="form-control" placeholder="242">-->
                                                {!! Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'current location']) !!}
                                                {!! $errors->first('location', '<span class="help-block">:message</span>' ) !!}
                                            </div>

                                        </div>

                                        <div class="col-sm-5 col-sm-offset-1">

                                            <div class="form-group {{ $errors->has('preferredShop') ? 'has-error' : ''}}">

                                                <!--<label>Street</label>-->
                                                {!! Form::label('location_two', 'Where else do you shop') !!}

                                                <!--<input type="text" class="form-control" placeholder="New York...">-->

                                                {!! Form::text('preferredShop', null, ['class' => 'form-control', 'placeholder' => 'place you shop often']) !!}
                                                {!! $errors->first('preferredShop', '<span class="help-block">:message</span>' ) !!}
                                            </div>

                                        </div>

                                        <div class="col-sm-5">

                                            <div class="form-group {{ $errors->has('interest') ? 'has-error' : ''}}">

                                                <!--<label>Building Name</label><br>-->

                                                {!! Form::label('shopping_category' , 'Tell us Your Shopping Interest')!!}

                                                <!-- <select name="country" class="form-control">

                                                     <option value="KICC"> KICC</option>

                                                 </select>-->

                                                {!! Form::select('interest',
                                                (['0' => 'Select an Interest', '1' => 'Mobile Phones']),
                                                null,
                                                ['class' => 'form-control']) !!}
                                                {!! $errors->first('interest', '<span class="help-block">:message</span>' ) !!}

                                            </div>

                                        </div>

                                        <!--<div class="col-sm-10 col-sm-offset-1">

                                            <div class="form-group">

                                                <label>Brief Description</label>

                                                <input type="email" class="form-control" placeholder="andrew@creative-tim.com">

                                            </div>

                                        </div>-->

                                    </div>

                                </div>

                            </div>

                            <div class="wizard-footer">

                                <div class="pull-right">

                                    <input type='button' class='btn btn-next btn-fill btn-info btn-wd btn-sm' name='next' value='Next' />

                                    <input type='submit' class='btn btn-finish btn-fill btn-info btn-wd btn-sm' name='finish' value='Finish' />

                                </div>

                                <!-- Previous_button-->

                                <div class="pull-left">

                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />

                                </div>

                                <div class="clearfix"></div>

                            </div>

                        </div>

                        {!! Form::close() !!}

                        </div> <!-- wizard container -->

                      </div>
                    </div>
                 </div>








            <div class="mastfoot">
                <div class="inner">
                    <p style="color: #000000;">copyright &copy; shelves.com 2015 </p>
                </div>
            </div>

        </div>

    </div>

</div>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/ie-emulation-modes-warning.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

<script src="js/wizard.js"></script>


</body>
</html>




