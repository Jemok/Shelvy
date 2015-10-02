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
<h1 style="color: limegreen;" class="text-center"><span class="glyphicon glyphicon-heart-empty" ></span></h1>
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
<p style="color: limegreen; font-weight: bold;" class="text-right">You have {!! $count !!} wishes, totaling to:Ksh {!! $total !!}</p>

@if($count > 0)
<p class="text-right"><a href="/checkout/now" class="glyphicon glyphicon-saved" style="color: limegreen; font-weight: bold;">Checkout</a></p>
@else
    <p class="text-center" style="color: limegreen;"><span class="glyphicon glyphicon-hourglass">Checkout Later</span></p>
@endif
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
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
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