@include('admin.dashboard._header')


<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

<link href="{{ asset('/css/test/fileinput.css') }}"  rel="stylesheet">


<body  >

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
                                                    <button type="submit" class="btn btn-primary">Upload Image</button>




                                                </div>




                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>

                            -------------------

                            <div class="container kv-main">



                                <!-- <div class="page-header">
                                     <h1>Bootstrap File Input Example <small><a href="https://github.com/kartik-v/bootstrap-fileinput-samples"><i class="glyphicon glyphicon-download"></i> Download Sample Files</a></small></h1>
                                 </div>-->
                                <!--<form enctype="multipart/form-data">
                                    <input id="file-0a" class="file" type="file" multiple data-min-file-count="1">
                                    <br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </form>-->
                                <hr>
                                <!--<form enctype="multipart/form-data">
                                    <label>Test invalid input type</label>
                                    <input id="file-0b" class="file" type="text" multiple data-min-file-count="1">
                                    <script>
                                        $(document).on('ready', function(){$("#file-0b").fileinput();});
                                    </script>
                                </form>-->
                                <hr>
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
                                        <input id="file-5" class="file" type="file" multiple data-preview-file-type="any" data-upload-url="#" data-preview-file-icon="">
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


                            --------------------

                        </div>
                    </div>
                 </div>
            </div>



                            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                            <script src="{{ asset('js/jquery.js') }}"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                            <!-- Include all compiled plugins (below), or include individual files as needed -->
                           <script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>

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

<script>
    $('#file-fr').fileinput({
        language: 'fr',
        uploadUrl: '#',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
    $('#file-es').fileinput({
        language: 'es',
        uploadUrl: '#',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
    $("#file-0").fileinput({
        'allowedFileExtensions' : ['jpg', 'png','gif'],
    });
    $("#file-1").fileinput({
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
    });
    /*
     $(".file").on('fileselect', function(event, n, l) {
     alert('File Selected. Name: ' + l + ', Num: ' + n);
     });
     */
    $("#file-3").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-primary btn-lg",
        fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
    });
    $("#file-4").fileinput({
        uploadExtraData: {kvId: '10'}
    });
    $(".btn-warning").on('click', function() {
        if ($('#file-4').attr('disabled')) {
            $('#file-4').fileinput('enable');
        } else {
            $('#file-4').fileinput('disable');
        }
    });
    $(".btn-info").on('click', function() {
        $('#file-4').fileinput('refresh', {previewClass:'bg-info'});
    });
    /*
     $('#file-4').on('fileselectnone', function() {
     alert('Huh! You selected no files.');
     });
     $('#file-4').on('filebrowse', function() {
     alert('File browse clicked for #file-4');
     });
     */
    $(document).ready(function() {
        $("#test-upload").fileinput({
            'showPreview' : false,
            'allowedFileExtensions' : ['jpg', 'png','gif'],
            'elErrorContainer': '#errorBlock'
        });
        /*
         $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
         alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
         });
         */
    });
</script>
</html>