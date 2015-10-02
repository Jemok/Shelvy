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
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/shop-homepage.css') }}" rel="stylesheet">

    <link href="{{ asset('css/gsdk-base.css') }}" rel="stylesheet" >

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

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

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a style="color: #4682b4;" href="#">Cart</a>
                </li>

                <li>
                    <a style="color: #4682b4;"  href="#">Help</a>
                </li>
                <li>
                    <a style="color: #4682b4;" href="#">About</a>
                </li>
                <li>
                    <a style="color: #4682b4;"  href="customer_registration">Customer Accounts</a>
                </li>

                @if(!(\Auth::check()))
                <li>


                    <a style="color: #4682b4;"  href="/login">Login</a>
                </li>

                @else
                <li>

                    <a href="{{ url('customer-account', \Auth::user()->id) }}" style="color: limegreen;">Signed In as, {{ \Auth::user()->fullName() }}</a>
                </li>

                @endif

                <li>
                    <a href="{{ url('/logout') }}" style="color: #4682b4;">Logout</a>
                </li>
            </ul>
        </div>
</nav>
<!-- /.navbar-collapse -->
<div class="container">
    @if(Session::has('flash_message'))

    <div class="alert alert-success {{ Session::has('flash_message_important') ? 'alert-important' : '' }}">
        @if(Session::has('flash_message_important'))

        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        @endif

        {{ session('flash_message') }}

    </div>

    @endif
</div>
<h1 style="color: limegreen;" class="text-center"><span class="glyphicon glyphicon-shopping-cart" ></span></h1>
<div class="col-md-8 col-lg-8 col-sm-8 col-md-offset-2">
    <table class="table table-striped">
        <tr>
            <th class="text-center"><span class="glyphicon glyphicon-camera" style="color: limegreen;"></span></th>
            <th class="text-center"><span class="glyphicon glyphicon-usd" style="color: limegreen;"></span></th>
            <th class="text-center"><span class="glyphicon glyphicon-text-color" style="color: limegreen;"></span></th>
            <th> <span class="glyphicon glyphicon-book" style="color: limegreen;"></span></th>
            <th> <span class="glyphicon glyphicon-resize-full" style="color: limegreen;"></span></th>
            <th><span class="glyphicon glyphicon-shopping-cart" style="color: limegreen;"></span></th>
            <th><span class="glyphicon glyphicon-remove" style="color: red;"></span></th>
        </tr>
        @foreach( $items as $item )
        <tr>
            <td><img src="{{ asset('product_images/'. $item->image)}}" alt="image" /></td>
            <td style="color: limegreen; font-weight: bold;" >{{ $item->product_price }}</td>
            <td>{{ $item->product_name }}</td>
            <td>{{ $item->product_description }}</td>
            <td><a href="/product/{{$item->product_id}} "><span class="glyphicon glyphicon-resize-full" style="color: limegreen;"></span></a></td>

            <td>

                {!!Form::open(['method' => 'POST', 'url' => '/cart/'.$item->id])!!}
                <span class="glyphicon glyphicon-shopping-cart" style="color: limegreen;"></span>
                {!!form::submit('+', ['class' => 'glyphicon glyphicon-shopping-cart', 'style' => 'color:skyblue;']) !!}
                {!!Form::close()!!}


            </td>
            <td>
                {!! Form::open(['url' => '/delete-cart-item/'. $item->id,  'method' => 'DELETE' ]) !!}

                <div class="form-group">

                    {!! Form::submit('x', ['class' => ' glyphicon glyphicon-remove', 'style' => 'color:red;' ]) !!}
                </div>

                {!! Form::close() !!}
            </td>
        </tr>


        @endforeach
    </table>
    <p style="color: limegreen; font-weight: bold;" class="text-right">You have {!! $count_items !!} items, totaling to:Ksh {!! $total !!}</p>

    @if($count_items > 0)
    <button class="btn btn-success" class="glyphicon glyphicon-saved"style="margin-left: 90%; bold;" style="color: limegreen;" data-toggle="modal" data-target=".bs-example-modal-lg">Checkout</button>
    @else
    <p class="text-center" style="color: limegreen;"><span class="glyphicon glyphicon-hourglass">Checkout Later</span></p>
    @endif
</div>


<!-- Modal -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<!--      Wizard container        -->
<div class="wizard-container">



<!--<!form action="register" method="post">-->
<div class="card wizard-card ct-wizard-azzure" id="wizard">

    <!--        You can switch "ct-wizard-orange"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->

    <div class="wizard-header">
        <h3>
            <b><span class="glyphicon glyphicon-ok" style="color: limegreen;"></span> Shelves </b> Checkout Process  <br>
            <small>All steps require completion</small>
        </h3>
    </div>
    <ul>
        <li><a href="#about" data-toggle="tab">Cart</a></li>
        <li><a href="#account" data-toggle="tab">Address</a></li>
        <li><a href="#address" data-toggle="tab">Other Details</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" id="about">
            <div class="row">
                <h4 class="info-text">You have chosen to checkout wth the following items</h4>
                <div class="col-sm-4 col-sm-offset-1">
                    <!--<div class="picture-container">
                         <div class="picture">
                             <img src="images/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                             <input type="file" id="wizard-picture">
                         </div>
                         <h6>Choose Picture</h6>
                     </div>-->

                </div>
                <div class="col-md-10 col-sm-offset-1">

                    <table class="table table-striped">
                        <tr>
                            <th class="text-center"><span class="glyphicon glyphicon-camera" style="color: limegreen;"></span></th>
                            <th class="text-center"><span class="glyphicon glyphicon-usd" style="color: limegreen;"></span></th>
                            <th class="text-center"><span class="glyphicon glyphicon-text-color" style="color: limegreen;"></span></th>
                            <th> <span class="glyphicon glyphicon-book" style="color: limegreen;"></span></th>
                            <th> <span class="glyphicon glyphicon-resize-full" style="color: limegreen;"></span></th>
                            <th><span class="glyphicon glyphicon-shopping-cart" style="color: limegreen;"></span></th>
                            <th><span class="glyphicon glyphicon-remove" style="color: red;"></span></th>
                        </tr>
                        @foreach( $items as $item )
                        <tr>
                            <td><img src="{{ asset('product_images/'. $item->image)}}" alt="image" /></td>
                            <td style="color: limegreen; font-weight: bold;" >{{ $item->product_price }}</td>
                            <td>{{ $item->product_name }}</td>
                            <td>{{ $item->product_description }}</td>
                            <td><a href="/product/{{$item->product_id}} "><span class="glyphicon glyphicon-resize-full" style="color: limegreen;"></span></a></td>

                            <td>

                                {!!Form::open(['method' => 'POST', 'url' => '/cart/'.$item->id])!!}
                                <span class="glyphicon glyphicon-shopping-cart" style="color: limegreen;"></span>
                                {!!form::submit('+', ['class' => 'glyphicon glyphicon-shopping-cart', 'style' => 'color:skyblue;']) !!}
                                {!!Form::close()!!}


                            </td>
                            <td>
                                {!! Form::open(['url' => '/delete-cart-item/'. $item->id,  'method' => 'DELETE' ]) !!}

                                <div class="form-group">

                                    {!! Form::submit('x', ['class' => ' glyphicon glyphicon-remove', 'style' => 'color:red;' ]) !!}
                                </div>

                                {!! Form::close() !!}
                            </td>
                        </tr>


                        @endforeach
                    </table>
                    <p style="color: limegreen; font-weight: bold;" class="text-right">You have {!! $count_items !!} items, totaling to:Ksh {!! $total !!}</p>



                </div>
            </div>
        </div>
        <div class="tab-pane" id="account">
            <h4 class="info-text"> Your delivery information </h4>
            <div class="col-sm-10 col-sm-offset-1">
                <h5 class="info-text"> Log In to Shelves To get Locate Address </h5>
                {!! Form::open(['class' => 'form-inline', 'method' => 'post' , 'url' => '/login']) !!}

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




<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p class="text-center" style="color: #4682b4;">Copyright &copy; shelves.com 2014</p>
        </div>
    </div>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/jquery.js') }}"></script>

<script src="{{ asset('js/ie-emulation-modes-warning.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/jquery.bootstrap.wizard.js') }}"></script>

<script src="{{ asset('js/wizard.js') }}"></script>
<script type="text/javascript">

    $(document).ready(function() {
        $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
            e.preventDefault();
            $(this).siblings('a.active').removeClass("active");
            $(this).addClass("active");
            var index = $(this).index();
            $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
            $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
        });
    });

</script>


<script>
    $('div.alert').not('.alert-important').delay(2000).slideUp(300);
</script>



</body>
</html>