<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>shelves.com</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <link href="css/gsdk-base.css" rel="stylesheet" />

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet" />

</head>

<body>

<div class="image-container set-full-height" style="background-image: url('images/fb.png')">
    <!--   Creative Tim Branding   -->
    <a href="/">

        <div class="logo-container">

            <div class="brand">

                shelves.com

            </div>

        </div>
    </a>

    <!--   Big container   -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!--      Wizard container        -->
                <div class="wizard-container">
                    @include('partials.errors')
                    {!! Form::open(['method' => 'POST', 'url' => '/register/customer/']) !!}

                    <!--<!form action="register" method="post">-->
                        <div class="card wizard-card ct-wizard-azzure" id="wizard">

                            <!--        You can switch "ct-wizard-orange"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->

                            <div class="wizard-header">
                                <h3>
                                    <b>BUILD</b> YOUR SHOP <br>
                                    <small>This information is important for your shop validity and security</small>
                                </h3>
                            </div>
                            <ul>
                                <li><a href="#about" data-toggle="tab">Admin Details</a></li>
                                <li><a href="#account" data-toggle="tab">Account Security</a></li>
                                <li><a href="#address" data-toggle="tab">Shop Details</a></li>
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
                                            <div class="form-group">
                                                <!--<label for="exampleInputEmail1">First Name</label>-->
                                                {!! Form::label('firstName', 'First Name')!!}

                                                <!--<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Andrew...">-->

                                                {!! Form::text('firstName', null, ['class' => 'form-control', 'placeholder' => 'first name'])!!}
                                            </div>
                                            <div class="form-group">
                                                <!--<label for="exampleInputEmail1">Last Name</label>-->
                                                {!! Form::label('last_name', 'Last Name')!!}
                                                <!--<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Smith...">-->

                                                {!! Form::text('lastName', null, ['class' => 'form-control', 'placeholder' => 'last name'])!!}

                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                {!! Form::label('email', 'Email')!!}
                                                <!--<label>Email</label>-->
                                                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email'])!!}
                                                <!--<input type="email" class="form-control" placeholder="andrew@creative-tim.com">-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="account">
                                    <h4 class="info-text"> Get Secured </h4>
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                           <!-- <label for="exampleInputEmail1">Password</label>-->
                                            {!! Form::label('password', 'Password')!!}
                                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                                            <!--<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Andrew...">-->
                                        </div>
                                        <div class="form-group">
                                            <!--<label for="exampleInputEmail1">Repeat Password</label>-->
                                            {!! Form::label('password_ confirmation', 'Repeat Password')!!}
                                            {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Repeat Password']) !!}
                                            <!--<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Smith...">-->
                                        </div>

                                        <div class="form-group">
                                            <!--<label for="exampleInputEmail1">Phone Number</label>-->
                                            {!! Form::label('phone_number', 'Phone Number' ) !!}
                                            <!--<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Smith...">-->
                                            {!! Form::text('phoneNumber', null, ['class' => 'form-control', 'placeholder' => 'phone number']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="address">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="info-text"> Say more about your shop </h4>
                                        </div>
                                        <div class="col-sm-7 col-sm-offset-1">
                                            <div class="form-group">
                                                <!--<label>Shop Name</label>-->
                                                {!! Form::label('nationality', 'Nationality')!!}
                                                    <!--<input type="text" class="form-control" placeholder="5h Avenue">-->
                                                {!! Form::select('nationality',
                                                (['0' => 'Select a country', '1' => 'Kenya']),
                                                null,
                                                ['class' => 'form-control']) !!}

                                            </div>
                                        </div>

                                        <div class="col-sm-3">

                                            <div class="form-group">

                                                <!--<label>City</label>-->

                                                {!! Form::label('current_location', 'Current Location')!!}

                                                <!--<input type="text" class="form-control" placeholder="242">-->
                                                {!! Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'current location']) !!}

                                            </div>

                                        </div>

                                        <div class="col-sm-5 col-sm-offset-1">

                                            <div class="form-group">

                                                <!--<label>Street</label>-->
                                                {!! Form::label('location_two', 'Where else do you shop') !!}

                                                <!--<input type="text" class="form-control" placeholder="New York...">-->

                                                {!! Form::text('preferredShop', null, ['class' => 'form-control', 'placeholder' => 'place you shop often']) !!}

                                            </div>

                                        </div>

                                        <div class="col-sm-5">

                                            <div class="form-group">

                                                <!--<label>Building Name</label><br>-->

                                                {!! Form::label('shopping_category' , 'Tell us Your Shopping Interest')!!}

                                               <!-- <select name="country" class="form-control">

                                                    <option value="KICC"> KICC</option>

                                                </select>-->

                                                {!! Form::select('interest',
                                                (['0' => 'Select an Interest', '1' => 'Mobile Phones']),
                                                null,
                                                ['class' => 'form-control']) !!}

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



        </div><!-- end row -->

    </div>

</div> <!--  big container -->

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<!--   plugins 	 -->
<script src="js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

<script src="js/wizard.js"></script>

</body>
</html>