@include('admin.dashboard._header')


<body  >

<!--style="background-image: url('images/fb.png'); background-repeat: repeat;"-->

<!-- Static navbar -->
@include('admin.dashboard._nav')

<!-- Static navbar -->


<div class="container">
    @include ('flash::message')
</div>

<div col-md-9>
    <p style="text-align: center;">Use the Forms below to edit the product </p>

</div>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">

                <div class="list-group">

                    @include('admin.dashboard._list_group_product')

                </div>

            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_a" data-toggle="tab">Edit Product</a></li>
                    </ul>


                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_a">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">



                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Product Images
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <div class="tab-pane active" id="tab_a">
                                                <h5>Upload Product Images</h5>
                                                <div class="bs-example">
                                                    {!! Form::open(['url' => '/product-images/'. $productId, 'method' => 'POST']) !!}

                                                    @include('admin.dashboard._product_meta_details')

                                                    <button type="submit" class="btn btn-primary">Update</button>

                                                    {!! Form::close() !!}
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