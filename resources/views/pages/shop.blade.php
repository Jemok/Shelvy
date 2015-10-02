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

            <a class="navbar-brand" style="color: #4682b4;" href="#"> <span class="glyphicon glyphicon-ok" style="color: limegreen;"></span>{{ $shop->shop_name }} - {{ $shop->shop_location}}</a>

            <p class="navbar-text" style="color: limegreen;"> <span class="glyphicon glyphicon-arrow-right" style="color: limegreen;"></span> {{ $shop->shop_description }} </p>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a style="color: #4682b4;"  href="/cart/cart"><span class="glyphicon glyphicon-shopping-cart" style="color: limegreen;"></span>Cart <span style="color: red; font-weight: bold;">{{ $count_cart }}</span></a>
                </li>

                <li>
                    <a style="color: #4682b4;"  href="/wish/wish/"><span class="glyphicon glyphicon-heart-empty" style="color: limegreen;"></span>Wishes <span style="color: red; font-weight: bold;">{{ $count }}</span></a>
                </li>
                <li>
                     <span class="navbar-text glyphicon glyphicon-xbt" style="color: limegreen;" data-toggle="modal" data-target="#myModal"><span style="color: #4682b4;">About</span></span>
                </li>
                <!--<li>
                    <a style="color: #4682b4;"  href="customer_registration">Customer Accounts</a>
                </li>-->

                @if(!(\Auth::check()))
                <li>


                    <!--<a style="color: #4682b4;"  href="login"><span class="glyphicon glyphicon-user" style="color: limegreen;"></span>Login</a>-->
                    <span class="navbar-text navbar-right glyphicon glyphicon-user" style="color: limegreen;" data-toggle="modal" data-target="#myLoginModal"><span style="color: #4682b4;">Login</span></span>
                </li>

                    @else
                <li>

                     <a href="{{ url('customer-account', \Auth::user()->id) }}" style="color: #4682b4;"><span class="glyphicon glyphicon-user" style="color: limegreen;"></span>{{ \Auth::user()->fullName() }}</a>
                </li>

                @endif

                @if(\Auth::check() == true)
                <li>
                    <a href="{{ url('/logout') }}" style="color: #4682b4;"><span class="glyphicon glyphicon-off" style="color: limegreen;"></span>Logout</a>
                </li>
                @endif
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

            @if(isset($shop->shop_image))

            <img src="{{ asset('shop_images/' . $shop->shop_image) }}" class="img-responsive img-rounded" alt="Responsive image" />

            @else

            <img src="{{ asset('images/320x150.gif') }}" class="img-responsive img-rounded" alt="Responsive image" />

            @endif




            <div class="list-group">
                &nbsp;



                <p class="list-group-item-text list-group-item-success text-center" style="color: limegreen"><span style="color: #4682b4;">Shop by category</span></p>

                @foreach($categories as $category )
               <a href="#" class="list-group-item-info list-group-item glyphicon glyphicon-link" style="color: limegreen"> <span style="color: midnightblue; font-size: 12px;" >{{ $category->category_name }}</span></a>
                <!--<a href="#" class="list-group-item">Category 2</a>
                <a href="#" class="list-group-item">Category 3</a>
                <a href="#" class="list-group-item">Category 4</a>
                <a href="#" class="list-group-item">Category 5</a>-->
                @endforeach
            </div>







            <!--<div class="list-group">-->
                <!--<a href="#" class="list-group-item"  style="color: #4682b4;" ><strong>Manufacturers</strong></a>-->
                <!--<a href="#" class="list-group-item " style="color: midnightblue;">Manufacturer 1</a>
                <a href="#" class="list-group-item"  style="color: midnightblue;">Manufacturer 2</a>
                <a href="#" class="list-group-item"  style="color: midnightblue;">Manufacturer 3</a>
                <a href="#" class="list-group-item"  style="color: midnightblue;">Manufacturer 4</a>
                <a href="#" class="list-group-item"  style="color: midnightblue;">Manufacturer 5</a>-->
            <!--</div>-->
        </div>







        <div class="col-md-8">
            <form class="form-group-sm" method="GET">
                <div class="form-group-sm" style="display:inline;">
                    <div class="input-group">
                        <input class="form-control" type="search" name="search_shop_products" placeholder="Search items here">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                    </div>
                </div>
            </form>
            &nbsp;

        </div>






        <div class="col-md-8">

            <div class="row">

               @if($products->count())
               @foreach(array_chunk($products->all(), 4) as $item)

                <div class="row">

                @foreach($item as $product)
                   <div class="col-sm-3 col-lg-3 col-md-3">
                       <div class="thumbnail" style="border: none;">

                        <a href="product/{{$product->id}} ">
                           <img src="{{ asset('product_images/'. $product->thumbnail)}}" alt="image" />

                            <div class="caption">
                               <h6 class="pull-right" style="color: limegreen; font-weight: bold;">ksh {{ $product->product_price }}</h6>
                               <h6 ><a href="product/{{$product->id}} ">{{ $product->product_name }}</a>
                               </h6>
                               <p style="color:#000000; font-size: 11.5px;">{{ $product->product_description }}</p>
                               <div class="row">
                                <div class="col-md-5 col-sm-5 col-lg-5">
                                    {!!Form::open(['method' => 'POST', 'url' => '/wish/'.$product->id])!!}
                                    <span class="glyphicon glyphicon-heart-empty" style="color: limegreen; font-size: 12px;"></span>
                                    {!!form::submit('+', ['class' => 'glyphicon glyphicon-heart-empty', 'style' => 'color:skyblue; font-size: 7px;']) !!}
                                    {!!Form::close()!!}
                                </div>

                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    {!!Form::open(['method' => 'POST', 'url' => '/cart/'.$product->id])!!}
                                    <span class="glyphicon glyphicon-shopping-cart" style="color: limegreen; font-size: 12px;"></span>
                                    {!!form::submit('+', ['class' => 'glyphicon glyphicon-shopping-cart', 'style' => 'color:skyblue; font-size: 7px;']) !!}
                                    {!!Form::close()!!}
                                </div>
                                </div>





                           </div>

                        </a>
                           <!--<div class="ratings">
                               <p class="pull-right">15 reviews</p>
                               <p>
                                   <span class="glyphicon glyphicon-star"></span>
                                   <span class="glyphicon glyphicon-star"></span>
                                   <span class="glyphicon glyphicon-star"></span>
                                   <span class="glyphicon glyphicon-star"></span>
                                   <span class="glyphicon glyphicon-star"></span>
                               </p>

                           </div>-->
                       </div>

                   </div>
                    @endforeach
                  </div>

               @endforeach

               @else

               <h1 class="label-info lead text-center">{{ $shop->shop_name  }} is not selling right now, come back later please</h1>

               @endif





               <!-- Modal -->
               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               <h4 class="modal-title" id="myModalLabel" style="color: #4682b4;">About <span class="glyphicon glyphicon-ok" style="color: limegreen;"></span>{{ $shop->shop_name}} </h4>
                           </div>
                           <div class="modal-body">
                               <h4 style="color: #4682b4;">Shop Description</h4>
                               <p><span class="glyphicon glyphicon-arrow-right" style="color: limegreen;"></span> {{ $shop->shop_description }}</p>
                               <h4 style="color: #4682b4;">Contacts</h4>
                               <p><span class="glyphicon glyphicon-arrow-right" style="color: limegreen;"></span> {{$shop->shop_location}}</p>
                               <p><span class="glyphicon glyphicon-arrow-right" style="color: limegreen;"></span> {{$shop->shop_building}}</p>
                               <p><span class="glyphicon glyphicon-arrow-right" style="color: limegreen;"></span> {{$shop->shop_street}}</p>
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                               <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                           </div>
                       </div>
                   </div>
               </div>

               <!-- Modal -->
               <div class="modal fade" id="myLoginModal" tabindex="-1" role="dialog" aria-labelledby="myLoginModalLabel" aria-hidden="true">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               <h4 class="modal-title glyphicon glyphicon-ok text-center" id="myLoginModalLabel" style="color: limegreen;"><span style="color: #4682b4;">Login</span></h4>
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

</body>

</html>
