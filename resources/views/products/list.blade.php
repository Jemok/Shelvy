@include('admin.dashboard._header')

<body  >

<!--style="background-image: url('images/fb.png'); background-repeat: repeat;"-->

<!-- Static navbar -->
@include('admin.dashboard._nav')

<!-- Static navbar -->

<div class="container">
    @include ('flash::message')
</div>


<div class="container-fluid">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">

<table class="table table-striped">
    <tr>

        <th style="font-size: 12px">Product Image</th>
        <th style="font-size: 12px">Product Name</th>
        <th style="font-size: 12px">Description</th>
        <th style="font-size: 12px">Price</th>
        <th style="font-size: 12px">Edit</th>
        <th style="font-size: 12px">Delete</th>
    </tr>




    @foreach($products as $product)
    <tr>
        <td>  <img src="{{ asset('product_images/'. $product->thumbnail_small)}}" alt="image" /></td>
        <td style="font-size: 11.5px">{{ $product->product_name}}</td>
        <td style="font-size: 11.5px">{{ $product->product_description }}</td>
        <td style="font-size: 11.5px">{{ $product->product_price }}</td>
        <td><a href="{{ url('/edit-product', $product->id )}}">+Edit</a></td>

        <td>

            {!! Form::open(['url' => '/delete-product/'.$shop->id . '/' .$product->id,  'method' => 'DELETE' ]) !!}

            <div class="form-group">

                {!! Form::submit('Delete', ['class' => 'btn btn-danger' ]) !!}
            </div>

            {!! Form::close() !!}

        </td>


    </tr>

    @endforeach


    <!--<tr>
        <td>1</td>
        <td>Samsung Laptop</td>
        <td>1000.00</td>
        <td><a href="edit-product">+Edit</a></td>


    </tr>
    <tr>
        <td>1</td>
        <td>Samsung Laptop</td>
        <td>1000.00</td>
        <td><a href="edit-product">+Edit</a></td>


    </tr>
    <tr>
        <td>1</td>
        <td>Samsung Laptop</td>
        <td>1000.00</td>
        <td><a href="edit-product">+Edit</a></td>


    </tr>
    <tr>
        <td>1</td>
        <td>Samsung Laptop</td>
        <td>1000.00</td>
        <td><a href="edit-product">+Edit</a></td>


    </tr>
    <tr>
        <td>1</td>
        <td>Samsung Laptop</td>
        <td>1000.00</td>
        <td><a href="edit-product">+Edit</a></td>


    </tr>-->
</table>
</div>
</div>
</div>

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
</body>
</html>