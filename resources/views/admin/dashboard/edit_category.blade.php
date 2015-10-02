@include('admin.dashboard._header')


<body  >
<!-- style="background-image: url('images/fb.png'); background-repeat: repeat;"-->

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
    <p style="text-align: center;">Use the Forms below to edit the category </p>

</div>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">

                <div class="list-group">

                    @include('admin.dashboard._list_group_category')

                </div>



            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_a" data-toggle="tab">Edit Category</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_a">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Category Info:
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <div class="tab-pane active" id="tab_a">
                                                <h5>Category Info:</h5>
                                                <div class="bs-example">
                                                    {!! Form::model($item, ['url' => '/edit-category/' . $item->id, 'method' => 'PATCH' ]) !!}

                                                    @include('admin.dashboard._category')


                                                    <button type="submit" class="btn btn-primary">Update</button>

                                                    {!! Form::close()!!}
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