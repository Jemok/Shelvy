

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
            <a class="navbar-brand" href="#" style="color: #4682b4;"><span class="glyphicon glyphicon-ok" style="color: limegreen;"></span> shelves.com</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: #4682b4;"><span class="glyphicon glyphicon-dashboard" style="color: limegreen;"></span> Dashboards <span style="color: red;">{{ $shops_count }}</span> <span class="caret" style="color: #4682b4;"></span></a>
                    <ul class="dropdown-menu" role="menu">

                        @foreach($shops as $shop)

                        <li><a href="{{ url('/dashboard', $shop->id )}}" style="color: #4682b4;"><span class="glyphicon glyphicon-dashboard" style="color: limegreen;"></span>{{ $shop->shop_name }}</a></li>

                        @endforeach

                    </ul>
                </li>

                <li>



                </li>

                <li>
                    <!--<a href="/shops/create">New Shop</a>-->
                    <p class="navbar-text glyphicon glyphicon-question-sign" style="color: limegreen;" data-toggle="modal" data-target="#myNewShopModal"><span style="color: #4682b4;">NewDashboard</span></p>

                </li>

                <li>

                    <a href="{{ url('/customer-account/settings', \Auth::user()->id)}}" style="color: #4682b4;"><span class="glyphicon glyphicon-wrench" style="color: limegreen;"></span>Settings</a>
                </li>
                <li>
                    <a href="{{ url('/logout') }}" style="color: #4682b4;"><span class="glyphicon glyphicon-off" style="color: limegreen;"></span> Logout</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

@include('partials.dashboard_new_errors')

<!-- Modal -->
<div class="modal fade" id="myNewShopModal" tabindex="-1" role="dialog" aria-labelledby="myNewShopModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="myNewShopModalLabel" style="color: #4682b4;"><span class="glyphicon glyphicon-ok" style="color: limegreen;"></span>New Shop </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                {!! Form::open(['url' => 'shops']) !!}
                <!--<form role="form">-->
                <div class="col-md-12">

                    <div class="form-group {{ $errors->has('shop_name') ? 'has-error' : ''}}">

                        <div class="input-group">
                            {!! Form::text('shop_name', null, ['class' => 'form-control', 'placeholder' => 'Shop Name'] )!!}
                            <!--<input type="text" class="form-control" name="InputName" id="InputName" placeholder="First Name" required>-->
                            <span class="input-group-addon"></span>
                        </div>
                        {!! $errors->first('shop_name', '<span class="help-block">:message</span>' ) !!}
                    </div>

                    <div class="form-group {{ $errors->has('shop_description') ? 'has-error' : ''}}">

                        <div class="input-group">
                            {!! Form::text('shop_description', null, ['class' => 'form-control', 'placeholder' => 'Short Description'])!!}
                            <!--<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Second Name" required>-->
                            <span class="input-group-addon"></span>
                        </div>
                        {!! $errors->first('shop_description', '<span class="help-block">:message</span>' ) !!}
                    </div>

                    <div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">

                        <div class="input-group">
                            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Your preferred shop URL, use A-Z , - , _ '])!!}

                            <!--<input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Email" required>-->
                            <span class="input-group-addon"></span>
                        </div>
                        {!! $errors->first('slug', '<span class="help-block">:message</span>' ) !!}
                    </div>
                    <div class="form-group {{ $errors->has('shop_location') ? 'has-error' : ''}}">

                        <div class="input-group">
                            {!! Form::text('shop_location', null, ['class' => 'form-control', 'placeholder' => 'Town where your shop is located'])!!}

                            <!--<input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Confirm Email" required>-->
                            <span class="input-group-addon"></span>
                        </div>
                        {!! $errors->first('shop_location', '<span class="help-block">:message</span>' ) !!}
                    </div>

                    <div class="form-group {{ $errors->has('shop_building') ? 'has-error' : ''}}">

                        <div class="input-group">
                            {!! Form::text('shop_building', null, ['class' => 'form-control', 'placeholder' => 'Building where your shop resides'])!!}

                            <!--<input type="text" class="form-control" name="InputPhoneNumber" id="InputPhoneNumber" placeholder="Phone Number" required>-->
                            <span class="input-group-addon"></span>
                        </div>
                        {!! $errors->first('shop_building', '<span class="help-block">:message</span>' ) !!}
                    </div>




                    <div class="form-group {{ $errors->has('shop_category') ? 'has-error' : ''}}">

                        <div class="input-group">
                            {!! Form::text('shop_category', null, ['class' => 'form-control', 'placeholder' => 'What do you sell??'])!!}

                            <!--<input type="password" class="form-control" id="InputPasswordlFirst" name="InputPassword" placeholder="Password" required>-->
                            <span class="input-group-addon"></span>
                        </div>

                        {!! $errors->first('shop_category', '<span class="help-block">:message</span>' ) !!}
                    </div>
                    <div class="form-group {{ $errors->has('shop_street') ? 'has-error' : ''}}">

                        <div class="input-group">
                            {!! Form::text('shop_street', null, ['class' => 'form-control', 'placeholder' => 'The street where your shop is located'])!!}

                            <!--<input type="password" class="form-control" id="InputPasswordSecond" name="RepeatPassword" placeholder="Confirm Password" required>-->
                            <span class="input-group-addon"></span>
                        </div>
                        {!! $errors->first('shop_street', '<span class="help-block">:message</span>' ) !!}
                    </div>

                    <input type="submit" name="update" id="update" value="Submit" class="btn btn-info pull-right">
                </div>
                <!--</form>-->
                {!! Form::close() !!}
            </div>
           </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
    </div>
</div>


<!-- Page Content -->
<div class="container">

<div class="row">

<div class="col-md-2">
    <p class="navbar-text" style="color: #4682b4;"><span class="glyphicon glyphicon-user" style="color: limegreen;"></span> {{ \Auth::user()->fullName( )}} </p>
    <img src="{{ asset('images/320x150.gif') }}" class="img-responsive img-rounded" alt="Responsive image" height="700" width="400"/>




    <!--<div class="list-group">
        &nbsp;

        <a href="#" class="list-group-item text-center" style="color: #4682b4;"><strong>My Stuff</strong></a>
        <a href="#" class="list-group-item" style="color: #4682b4;"><span class="glyphicon glyphicon-folder-close" style="color: limegreen"></span> Search Store</a>
        <a href="#" class="list-group-item" style="color: #4682b4;"><span class="glyphicon glyphicon-screenshot" style="color: limegreen"></span>Group Search</a>
        <a href="#" class="list-group-item" style="color: #4682b4;"><span class="glyphicon glyphicon-shopping-cart" style="color: limegreen"></span>Cart</a>
        <a href="#" class="list-group-item" style="color: #4682b4;"><span class=" glyphicon glyphicon-heart-empty" style="color: limegreen"></span>Wishes</a>
        <a href="#" class="list-group-item" style="color: #4682b4;"><span class="glyphicon glyphicon-import" style="color: limegreen"></span>Orders</a>
        <a href="/locate/import" class="list-group-item" style="color: #4682b4;"><span class="glyphicon glyphicon-globe" style="color: limegreen"></span>Import Locate Address</a>
    </div>-->
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

    <br>
    <br>
    <br>
    <br>

    <div role="tabpanel" class="col-md-8">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#cart" aria-controls="cart" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-shopping-cart" style="color: limegreen"></span>Cart</a></li>
            <li role="presentation"><a href="#wish" aria-controls="wish" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-heart-empty" style="color: limegreen"></span>Wishes </a></li>
            <li role="presentation"><a href="#search_store" aria-controls="search_store" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-folder-close" style="color: limegreen"></span>Search Store</a></li>
            <li role="presentation"><a href="#group_search" aria-controls="group_search" role="tab" data-toggle="tab"><span class=" glyphicon glyphicon-screenshot" style="color: limegreen"></span>Group Search</a></li>
            <li role="presentation"><a href="#orders" aria-controls="orders" role="tab" data-toggle="tab"><span class=" glyphicon glyphicon-import" style="color: limegreen"></span>Orders</a></li>
            <li role="presentation"><a href="#locate" aria-controls="locate" role="tab" data-toggle="tab"><span class=" glyphicon glyphicon-globe" style="color: limegreen"></span>Import Locate Address</a></li>


        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="cart">

           <div class="col-md-12">
               <br>
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
               <button class="btn btn-success" class="glyphicon glyphicon-saved"style="margin-left: 90%; bold;" style="color: limegreen;" data-toggle="modal" data-target="#myCheckoutModal">Checkout</button>
              <!-- <p class="text-right"><a href="/checkout/now" class="glyphicon glyphicon-saved" style="color: limegreen; font-weight: bold;">Checkout</a></p>-->
                @else
                <p class="text-center" style="color: limegreen;"><span class="glyphicon glyphicon-hourglass">Checkout Later</span></p>
                @endif
            </div>

           </div>

            <div role="tabpanel" class="tab-pane fade" id="wish">

                <div class="col-md-12">
                    <br>
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
                        @foreach( $wishes as $wish )
                        <tr>
                            <td><img src="{{ asset('product_images/'. $wish->image)}}" alt="image" /></td>
                            <td style="color: limegreen; font-weight: bold;" >{{ $wish->product_price }}</td>
                            <td>{{ $wish->product_name }}</td>
                            <td>{{ $wish->product_description }}</td>
                            <td><a href="/product/{{$wish->product_id}} "><span class="glyphicon glyphicon-resize-full" style="color: limegreen;"></span></a></td>

                            <td>

                                {!!Form::open(['method' => 'POST', 'url' => '/wish/'.$wish->id])!!}
                                <span class="glyphicon glyphicon-shopping-cart" style="color: limegreen;"></span>
                                {!!form::submit('+', ['class' => 'glyphicon glyphicon-shopping-cart', 'style' => 'color:skyblue;']) !!}
                                {!!Form::close()!!}


                            </td>
                            <td>
                                {!! Form::open(['url' => '/delete-wish/'. $wish->id,  'method' => 'DELETE' ]) !!}

                                <div class="form-group">

                                    {!! Form::submit('x', ['class' => ' glyphicon glyphicon-remove', 'style' => 'color:red;' ]) !!}
                                </div>

                                {!! Form::close() !!}
                            </td>
                        </tr>


                        @endforeach
                    </table>
                    <p style="color: limegreen; font-weight: bold;" class="text-right">You have {!! $count_wishes !!} wishes, totaling to:Ksh {!! $total_wishes !!}</p>

                    @if($count_wishes > 0)
                    <p class="text-right"><a href="/checkout/now" class="glyphicon glyphicon-saved" style="color: limegreen; font-weight: bold;">Checkout</a></p>
                    @else
                    <p class="text-center" style="color: limegreen;"><span class="glyphicon glyphicon-hourglass">Checkout Later</span></p>
                    @endif
                </div>

            </div>
            <div role="tabpanel" class="tab-pane fade" id="search_store">Search Store</div>
            <div role="tabpanel" class="tab-pane fade" id="group_search">Group search</div>
            <div role="tabpanel" class="tab-pane fade" id="orders">Orders</div>
            <div role="tabpanel" class="tab-pane fade" id="locate">Locate</div>
        </div>

    </div>








    <div class="col-md-8">


</div>



<div class="container">
    <div class="row">



        <!--<div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="{{ asset('images/shops/iphone2.jpeg') }}" alt="iphone"/>
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
        </div>-->


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
                <p class="text-center" style="color: #4682b4;">Copyright &copy; shelves.com 2014</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="{{ asset('js/jquery.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script>
    $(function () {
        $('#myTab a:last').tab('show')
    })
</script>


</body>

</html>
