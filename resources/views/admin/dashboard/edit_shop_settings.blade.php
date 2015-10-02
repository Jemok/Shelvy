@include('admin.dashboard._header')


<body  >



<!--style="background-image: url('images/fb.png'); background-repeat: repeat;"-->

<!-- Static navbar -->
@include('admin.dashboard._nav')

<p class="text-center label-info"><a href="{{ asset('/'. $sh->slug)}}" style="color:  lavender; font-weight: bold;">View Shop Public Side</a></p>

<!-- Static navbar -->

<div class="container">
    @include ('flash::message')
</div>



<div class="container-fluid">
<div class="row">
<div class="col-md-9 bhoechie-tab-container">







<!--<center>
  <h1 class="glyphicon glyphicon-plane" style="font-size:14em;color:#55518a"></h1>
  <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
  <h3 style="margin-top: 0;color:#55518a">Flight Reservation</h3>
</center>-->
<!-- hotel search -->
<div class="bhoechie-tab-content active">

    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_e" data-toggle="tab">Basic Shop Settings</a></li>


        <!--<li><a href="#tab_g" data-toggle="tab">Shop Images</a></li>-->
        <!--<li><a href="#tab_h" data-toggle="tab">Account Password</a></li>
        <li><a href="#tab_i" data-toggle="tab">Account Email</a></li>-->


    </ul>


    <div class="tab-content">

        <div class="tab-pane active" id="tab_e">

            <div class="bs-example">
                {!! Form::model($sh, ['url' => 'shops/' . $sh->id, 'method' => 'PATCH', 'files' => 'true']) !!}

                @include('admin.dashboard._admin_settings')

                @include('admin.dashboard._shop_settings')


                <table>
                    <th>
                        Change Shop image:
                    </th>
                    <tr>
                        <td>
                            @if(isset($sh->shop_image))
                            <img src="{{ asset('shop_images/'. $sh->shop_image)}}" class="img-responsive img-rounded" alt="image" />
                            @else
                            <img src="{{ asset('images/320x150.gif')}}" class="img-responsive img-rounded" alt="image" />
                            @endif
                        </td>

                        <td>

                            {!! Form::file('thumbnail') !!}

                        </td>
                    </tr>
                </table>

                <button type="submit" class="btn btn-block btn-info btn-sm">Update</button>

                {!! Form::close() !!}
            </div>






        </div>




      <!-- <div class="tab-pane " id="tab_g">
            <h4>Shop Images</h4>
            <div class="bs-example">
                {!! Form::open()!!}



                {!! Form::close() !!}

            </div>
        </div>-->


        <!--<div class="tab-pane " id="tab_h">
            <h4>Account Password</h4>
            <div class="bs-example">
                <form>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>-->


        <!--<div class="tab-pane " id="tab_i">
            <h4>Account Email</h4>
            <div class="bs-example">
                <form>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>-->



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
</body>
</html>