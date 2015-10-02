<!DOCTYPE html>
<!-- release v4.2.3, copyright 2014 - 2015 Kartik Visweswaran -->
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Krajee JQuery Plugins - &copy; Kartik</title>
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/test/fileinput.css') }}" media="all" rel="stylesheet" type="text/css" />
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/test/fileinput.min.js') }}" type="text/javascript"></script>
    <script src="../js/fileinput_locale_fr.js" type="text/javascript"></script>
    <script src="../js/fileinput_locale_es.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>




<!--style="background-image: url('images/fb.png'); background-repeat: repeat;"-->

<!-- Static navbar -->
@include('admin.dashboard._nav')

<!-- Static navbar -->


<div class="container">
    @include ('flash::message')
</div>

<div col-md-9>
    <p class="text-center ">STEP 2: Click below to add more details about your product </p>

</div>



<!--<div class="container-fluid">
    <div class="row col-md-offset-2">
        <div class="col-md-9 bhoechie-tab-container col-md-offset-2">-->

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 bhoechie-tab col-md-offset-2">
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
                                        Meta Details
                                    </a>
                                </p>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <div class="tab-pane active" id="tab_a">
                                    <h5>Product Meta Info</h5>
                                    <div class="bs-example">
                                        {!! Form::open(['url' => '/meta-product/'. $productId, 'method' => 'POST']) !!}

                                        @include('admin.dashboard._product_meta_details')

                                        <button type="submit" class="btn btn-primary">Update</button>

                                        {!! Form::close() !!}
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
                                        Product Images
                                    </a>
                                </p>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <div class="tab-pane active" id="tab_b">

                                    <div class="bs-example">





                                            <!-- <div class="page-header">
                                                 <h1>Bootstrap File Input Example <small><a href="https://github.com/kartik-v/bootstrap-fileinput-samples"><i class="glyphicon glyphicon-download"></i> Download Sample Files</a></small></h1>
                                             </div>-->
                                            <!--<form enctype="multipart/form-data">
                                                <input id="file-0a" class="file" type="file" multiple data-min-file-count="1">
                                                <br>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-default">Reset</button>
                                            </form>-->

                                            <!--<form enctype="multipart/form-data">
                                                <label>Test invalid input type</label>
                                                <input id="file-0b" class="file" type="text" multiple data-min-file-count="1">
                                                <script>
                                                    $(document).on('ready', function(){$("#file-0b").fileinput();});
                                                </script>
                                            </form>-->

                                            <form enctype="multipart/form-data">
                                                <!-- <input id="file-0a" class="file" type="file" multiple data-min-file-count="3">
                                                 <hr>
                                                 <div class="form-group">
                                                     <input id="file-0b" class="file" type="file">
                                                 </div>
                                                 <hr>
                                                 <div class="form-group">
                                                     <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
                                                 </div>
                                                 <hr>
                                                 <div class="form-group">
                                                     <input id="file-2" type="file" class="file" readonly data-show-upload="false">
                                                 </div>
                                                 <hr>
                                                 <div class="form-group">
                                                     <label>Preview File Icon</label>
                                                     <input id="file-3" type="file" multiple=true>
                                                 </div>
                                                 <hr>
                                                 <div class="form-group">
                                                     <input id="file-4" type="file" class="file" data-upload-url="#">
                                                 </div>
                                                 <hr>
                                                 <div class="form-group">
                                                     <button class="btn btn-warning" type="button">Disable Test</button>
                                                     <button class="btn btn-info" type="reset">Refresh Test</button>
                                                     <button class="btn btn-primary">Submit</button>
                                                     <button class="btn btn-default" type="reset">Reset</button>
                                                 </div>
                                                 <hr>
                                                 <div class="form-group">
                                                     <input type="file" class="file" id="test-upload" multiple>
                                                     <div id="errorBlock" class="help-block"></div>
                                                 </div>
                                                 <hr>-->
                                                <div class="form-group">
                                                    <input id="input-700" name="kartik-input-700[]" type="file" multiple class="file-loading">
                                                </div>
                                            </form>


                                            <!--<hr>
                                            <h4>Multi Language Inputs</h4>
                                            <form enctype="multipart/form-data">
                                                <label>French Input</label>
                                                <input id="file-fr" name="file-fr[]" type="file" multiple>
                                                <hr style="border: 2px dotted">
                                                <label>Spanish Input</label>
                                                <input id="file-es" name="file-es[]" type="file" multiple>
                                            </form>
                                            <hr>
                                            <br>-->





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


<script>
    $("#input-700").fileinput({
        uploadUrl: "/images-upload/", // server upload action
        uploadAsync: true,
        maxFileCount: 5
    });
</script>










</body>

</html>