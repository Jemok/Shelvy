@include('admin.dashboard._header')


<body  >

<!--style="background-image: url('images/fb.png'); background-repeat: repeat;"-->

<!-- Static navbar -->
@include('admin.dashboard._nav')

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

<div col-md-9>
    <p style="text-align: center;">Use the Forms below to edit the product </p>

</div>



<div class="container-fluid">
    <div class="row">

            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active col-md-offset-2">

                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_a">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <p class="text-center">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Product Info:
                                            </a>
                                            </p>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <div class="tab-pane active" id="tab_a">
                                                <h5>Product Info:</h5>
                                              <div class="bs-example">

                                                    {!! Form::model($item, ['url' => '/edit-product/'.$item->id, 'method' => 'PATCH', 'files' => 'true']) !!}

                                                    @include('admin.dashboard._product_info')

                                                  <table>
                                                      <th>
                                                         Change Product main image:
                                                      </th>
                                                      <tr>
                                                      <td>
                                                      <img src="{{ asset('product_images/'. $item->thumbnail_small)}}" alt="image" /></td>
                                                      </td>

                                                      <td>

                                                          {!! Form::file('thumbnail') !!}

                                                      </td>
                                                      </tr>
                                                  </table>

                                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>

                                                    {!! Form::close()!!}
                                              </div>




                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <p class="text-center">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Meta Details:
                                            </a>
                                            </p>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <div class="tab-pane active" id="tab_a">
                                                <h5>Product Meta Info</h5>
                                                <div class="bs-example">
                                                    {!! Form::model(['url' => '/meta-product/', 'method' => 'POST']) !!}

                                                    @include('admin.dashboard._product_meta_details')

                                                    <button type="submit" class="btn btn-primary">Update</button>

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
                                                Product Images:
                                            </a>
                                            </p>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="panel-body">
                                            <div class="tab-pane active" id="tab_a">
                                                <h5>Upload Product Images</h5>
                                                <div class="bs-example">
                                                    <form>

                                                        <a href="uploader">Upload Images</a>

                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </form>
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