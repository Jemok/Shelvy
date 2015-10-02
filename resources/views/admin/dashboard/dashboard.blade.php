@include('admin.dashboard._header')


<body >

<!--style="background-image: url('images/fb.png'); background-repeat: repeat;"-->

<!-- Static navbar -->
@include('admin.dashboard._nav')

<p class="text-center label-info"><a href="{{ asset('/'. $shop->slug)}}" style="color:  lavender; font-weight: bold;">View Shop Public Side</a></p>

<!-- Static navbar -->

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




<div class="container-fluid">



<h3 class="lead text-center" style="color: limegreen;">({{ $shop->shop_name }} -- Dashboard)</h3>

<div class="col-md-2">


    <div class="list-group">
        <a href="#" class="list-group-item active text-center">
            <h4 class=""></h4><br/>Miscellaneous
        </a>

        <a href="#" class="list-group-item text-center">
            <h4 class=""></h4><br/>Customers
        </a>

        <a href="#" class="list-group-item text-center">
            <h4 class=""></h4><br/>Orders
        </a>


        <a href="#" class="list-group-item text-center">
            <h4 class=""></h4><br/>Pages
        </a>

        <a href="{{url('/dashboard/settings', $shop->id ) }}" class="list-group-item  text-center">
            <h6 class="glyphicon glyphicon-collapse-wrench"></h6><br/>Settings
        </a>

    </div>

</div>


@include('partials.errors')
<div class="row col-md-offset-2">





<div class="col-md-9 bhoechie-tab-container ">



    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 bhoechie-tab col-md-offset-1">
        <!-- flight section -->
        <div class="bhoechie-tab-content active">





            <div class="tab-content">
                <div class="tab-pane active" id="tab_a">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">



                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <p class="text-center" >

                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            All Products
                                        </a>
                                    </p>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <div class="tab-pane active" id="tab_a">
                                        <h5>Product Meta Info</h5>
                                        <div class="bs-example">

                                            @if($products->count())
                                            <table class="table table-striped">
                                                <tr>

                                                    <th style="font-size: 12px">Product Image</th>
                                                    <th style="font-size: 12px">Product Name</th>
                                                    <th style="font-size: 12px">Description</th>
                                                    <th style="font-size: 12px">Price</th>
                                                    <th style="font-size: 12px">Edit</th>
                                                    <th style="font-size: 12px">Remove</th>
                                                </tr>


                                                @foreach($products as $product)
                                                <tr>

                                                    <td>  <img src="{{ asset('product_images/'. $product->thumbnail_small)}}" alt="image" /></td>
                                                    <td style="font-size: 11.5px">{{ $product->product_name}}</td>
                                                    <td style="font-size: 11.5px">{{ $product->product_description }}</td>
                                                    <td style="font-size: 11.5px">{{ $product->product_price }}</td>
                                                    <td style="font-size: 11.5px"><a href="{{ url('/edit-product', $product->id )}}">+Edit</a></td>

                                                    <td>

                                                        {!! Form::open(['url' => '/delete-product/'.$shop->id . '/' .$product->id,  'method' => 'DELETE' ]) !!}

                                                        <div class="form-group">

                                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger' ]) !!}
                                                        </div>

                                                        {!! Form::close() !!}

                                                    </td>


                                                </tr>

                                                @endforeach


                                            </table>

                                            @else

                                            <table class="table table-striped">
                                                <tr>
                                                    <th>Product ID</th>
                                                    <th>Product Name</th>
                                                    <th>Price</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </table>

                                            <h1 class="lead">You don't have any Products right now!



                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">New Product</a>





                                            </h1>
                                            @endif


                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <p class="text-center">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            New Product
                                        </a>
                                    </p>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <div class="tab-pane active" id="tab_b">

                                        <div class="bs-example">





                                            {!! Form::open(['url' => '/create-product/'.$shop->id , 'method' => 'POST', 'files' => 'true']) !!}

                                            @include('admin.dashboard._product_info')

                                            {!! Form::label('thumbnail', 'Product Main Image') !!}

                                            {!! Form::file('thumbnail') !!}


                                            <button type="submit" class="btn btn-primary">Save</button>

                                            {!! Form::close() !!}





                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix">
                                <h4 class="panel-title">
                                    <p class="text-center">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                           Product Meta Data
                                        </a>
                                    </p>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body">
                                    <div class="tab-pane active" id="tab_b">

                                        <div class="bs-example">





                                            {!! Form::open(['url' => '/meta-product/'. $shop->id, 'method' => 'PATCH']) !!}

                                            @include('admin.dashboard._product_meta_details')

                                            <button type="submit" class="btn btn-primary">Update</button>

                                            {!! Form::close() !!}


                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSeven">
                                <h4 class="panel-title">
                                    <p class="text-center">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            Product Images
                                        </a>
                                    </p>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                <div class="panel-body">
                                    <div class="tab-pane active" id="tab_b">

                                        <div class="bs-example">





                                            <!-- Change /upload-target to your upload address -->
                                            <!--<form action="{{ url('upload-image', $shop->id)}}" class="dropzone" enctype="multipart/form-data" method="post">-->

                                            {!! Form::open(['url' => '/upload-image/', 'method' => 'POST', 'class' => 'dropzone', 'files' => 'true']) !!}

                                            {!! Form::close() !!}



                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <p class="text-center">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            All Categories
                                        </a>
                                    </p>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="Four">
                                <div class="panel-body">
                                    <div class="tab-pane active" id="tab_b">

                                        <div class="bs-example">


                                            @if($items->count())
                                            <table class="table table-striped">


                                                <tr>
                                                    <th>Category Name</th>
                                                    <th>Description</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                                @foreach($items as $item)
                                                <tr>
                                                    <td>{{ $item->category_name }}</td>
                                                    <td>{{ $item->category_description }}</td>
                                                    <td><a href="{{ url('/edit-category', $item->id)}}">+Edit</a></td>


                                                    <td>
                                                        {!! Form::open(['url' => '/delete-category/'. $shop->id. '/' .$item->id,  'method' => 'DELETE' ]) !!}

                                                        <div class="form-group">

                                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger' ]) !!}
                                                        </div>

                                                        {!! Form::close() !!}

                                                    </td>
                                                </tr>
                                                @endforeach

                                            </table>

                                            @else


                                            <table class="table table-striped">
                                                <tr>
                                                    <th>Category Name</th>
                                                    <th>Description</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </table>

                                            <h1 class="lead">You dont have any categories right now!



                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">New Category</a>





                                            </h1>


                                            @endif




                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <p class="text-center">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            New Category
                                        </a>
                                    </p>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="Five">
                                <div class="panel-body">
                                    <div class="tab-pane active" id="tab_b">

                                        <div class="bs-example">


                                            {!! Form::open(['url' => '/create-category/'.$shop->id , 'method' => 'POST']) !!}

                                            @include('admin.dashboard._category')


                                            <button type="submit" class="btn btn-primary">Save</button>

                                            {!! Form::close()!!}




                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>

                </div>
            </div>
        </div>
    </div>




</div>





</div>
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


<script>
    $('div.alert').not('.alert-important').delay(2000).slideUp(300);
</script>



</body>
</html>