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

<div class="container">
    @include ('flash::message')
</div>


<div class="container-fluid">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <table class="table table-striped">
                <tr>

                    <th>Category Name</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

                @foreach($categories as $category)
                <tr>

                    <td>{{ $category->category_name}}</td>
                    <td>{{ $category->category_description }}</td>
                    <td><a href="{{ url('/edit-category', $category->id )}}">+Edit</a></td>

                    <td>

                        {!! Form::open(['url' => '/delete-category/'. $shop->id . '/' . $category->id,  'method' => 'DELETE' ]) !!}

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

<script>
    $('div.alert').not('.alert-important').delay(2000).slideUp(300);
</script>
</body>
</html>