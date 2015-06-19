<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/pills.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="background-image: url('images/fb.png'); background-repeat: repeat;" >

<!-- Static navbar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Shelves.com</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">

                <li><a href="shop">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>

<div col-md-9>
    <p style="text-align: center;">Welcome Admin, Manage your shop using this dashboard </p>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-9 bhoechie-tab-container">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
    <div class="list-group">
        <a href="#" class="list-group-item active text-left">
            <h4 class="glyphicon glyphicon-plane"></h4><br/>Products
        </a>
        <a href="#" class="list-group-item text-left">
            <h4 class="glyphicon glyphicon-road"></h4><br/>Categories
        </a>
        <a href="#" class="list-group-item text-left">
            <h4 class="glyphicon glyphicon-home"></h4><br/>Settings
        </a>

    </div>
</div>
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
<!-- flight section -->
<div class="bhoechie-tab-content active">
<ul class="nav nav-tabs">
    <li class="active"><a href="#tab_a" data-toggle="tab">New Product</a></li>
    <li><a href="#tab_b" data-toggle="tab">All Products</a></li>

</ul>
<div class="tab-content">
<div class="tab-pane active" id="tab_a">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Product Info:
            </a>
        </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
            <div class="tab-pane active" id="tab_a">
                <h5>Product Info:</h5>
                <div class="bs-example">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputName2">Product Name</label>
                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Samsung Laptop">
                        </div>




                        <div class="form-group">
                            <label for="exampleInputName2">Price (Kshs)</label>
                            <div class="input-group">
                                <div class="input-group-addon">kshs</div>
                                <input type="text" class="form-control" id="exampleInputAmount" placeholder="10000">
                                <div class="input-group-addon">.00</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category">Category</label>
                            <select  class="form-control">
                                <option>category 1</option>
                                <option>category 2</option>
                                <option>category 3</option>
                            </select>
                        </div>







                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>




            </div>
        </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Category Details:
            </a>
        </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
            <div class="tab-pane active" id="tab_a">
                <h5>Product Category Details</h5>
                <div class="bs-example">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputName2">Product Name</label>
                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Samsung Laptop">
                        </div>




                        <div class="form-group">
                            <label for="exampleInputName2">Price (Kshs)</label>
                            <div class="input-group">
                                <div class="input-group-addon">kshs</div>
                                <input type="text" class="form-control" id="exampleInputAmount" placeholder="10000">
                                <div class="input-group-addon">.00</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category">Category</label>
                            <select  class="form-control">
                                <option>category 1</option>
                                <option>category 2</option>
                                <option>category 3</option>
                            </select>
                        </div>







                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>




            </div>
        </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Manufacturer Details
            </a>
        </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
            <div class="tab-pane active" id="tab_a">
                <h5>Product Manufacturer Details</h5>
                <div class="bs-example">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputName2">Product Name</label>
                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Samsung Laptop">
                        </div>




                        <div class="form-group">
                            <label for="exampleInputName2">Price (Kshs)</label>
                            <div class="input-group">
                                <div class="input-group-addon">kshs</div>
                                <input type="text" class="form-control" id="exampleInputAmount" placeholder="10000">
                                <div class="input-group-addon">.00</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category">Category</label>
                            <select  class="form-control">
                                <option>category 1</option>
                                <option>category 2</option>
                                <option>category 3</option>
                            </select>
                        </div>







                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>




            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Product Images:
            </a>
        </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body">
            <div class="tab-pane active" id="tab_a">
                <h5>Upload Product Images</h5>
                <div class="bs-example">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputName2">Product Name</label>
                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Samsung Laptop">
                        </div>




                        <div class="form-group">
                            <label for="exampleInputName2">Price (Kshs)</label>
                            <div class="input-group">
                                <div class="input-group-addon">kshs</div>
                                <input type="text" class="form-control" id="exampleInputAmount" placeholder="10000">
                                <div class="input-group-addon">.00</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category">Category</label>
                            <select  class="form-control">
                                <option>category 1</option>
                                <option>category 2</option>
                                <option>category 3</option>
                            </select>
                        </div>



                        <a href="uploader">Upload Images</a>



                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>




            </div>
        </div>
    </div>
</div>
</div>

</div>
<div class="tab-pane" id="tab_b">

    <table class="table table-striped">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Edit</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Samsung Laptop</td>
            <td>1000.00</td>
            <td>+</td>


        </tr>
        <tr>
            <td>1</td>
            <td>Samsung Laptop</td>
            <td>1000.00</td>
            <td>+</td>


        </tr>
        <tr>
            <td>1</td>
            <td>Samsung Laptop</td>
            <td>1000.00</td>
            <td>+</td>


        </tr>
        <tr>
            <td>1</td>
            <td>Samsung Laptop</td>
            <td>1000.00</td>
            <td>+</td>


        </tr>
        <tr>
            <td>1</td>
            <td>Samsung Laptop</td>
            <td>1000.00</td>
            <td>+</td>


        </tr>
        <tr>
            <td>1</td>
            <td>Samsung Laptop</td>
            <td>1000.00</td>
            <td>+</td>


        </tr>
    </table>

</div>

</div><!-- tab content -->





<!--<center>
  <h1 class="glyphicon glyphicon-plane" style="font-size:14em;color:#55518a"></h1>
  <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
  <h3 style="margin-top: 0;color:#55518a">Flight Reservation</h3>
</center>-->
</div>
<!-- train section -->
<div class="bhoechie-tab-content">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_c" data-toggle="tab">New Category</a></li>
        <li><a href="#tab_d" data-toggle="tab">All Categories</a></li>

    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="tab_c">
            <h4>New Product</h4>
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
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>




        </div>
        <div class="tab-pane" id="tab_d">

            <table class="table table-striped">
                <tr>
                    <th>Product ID</th>
                    <th>Category Name Name</th>
                    <th>Edit</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Samsung</td>
                    <td>+</td>


                </tr>
                <tr>
                    <td>1</td>
                    <td>Samsung</td>
                    <td>+</td>


                </tr>
                <tr>
                    <td>1</td>
                    <td>Samsung</td>
                    <td>+</td>


                </tr>
                <tr>
                    <td>1</td>
                    <td>Samsung</td>
                    <td>+</td>


                </tr>
                <tr>
                    <td>1</td>
                    <td>Samsung</td>
                    <td>+</td>


                </tr>
                <tr>
                    <td>1</td>
                    <td>Samsung</td>
                    <td>+</td>


                </tr>
            </table>

        </div>

    </div>













</div>

<!-- hotel search -->
<div class="bhoechie-tab-content">

    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_e" data-toggle="tab">Admin Settings</a></li>
        <li><a href="#tab_f" data-toggle="tab">Shop Settings</a></li>
        <li><a href="#tab_g" data-toggle="tab">Shop Images</a></li>
        <li><a href="#tab_h" data-toggle="tab">Account Password</a></li>
        <li><a href="#tab_i" data-toggle="tab">Account Email</a></li>


    </ul>


    <div class="tab-content">

        <div class="tab-pane active" id="tab_e">
            <h4>Admin Settings</h4>
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
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>






        </div>


        <div class="tab-pane " id="tab_f">
            <h4>Shop Settings</h4>
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
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>






        </div>

        <div class="tab-pane " id="tab_g">
            <h4>Shop Images</h4>
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
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>

        <div class="tab-pane " id="tab_h">
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
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>



        <div class="tab-pane " id="tab_i">
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
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>



    </div>


</div>
</div>
</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
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