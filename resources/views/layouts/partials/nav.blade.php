<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">shelves.com</a>

        </div>


        <div id="navbar" class="navbar-collapse collapse">

            {!! Form::open(['class' => 'navbar-form navbar-right']) !!}

                <div class="form-group">
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email'] ) !!}
                </div>

                <div class="form-group">
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Sign In', ['class' => 'btn btn-info']) !!}
                </div>

            {!! Form::close() !!}

            <!--<form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                </div>
                <a href="customer_account"> <input type="button" class="btn btn-info" value="Sign in" /></a>

            </form>-->
            <p class="navbar-text navbar-left"><a href="customer_registration" class="navbar-link">Customer Accounts</a></p>
            <p class="navbar-text navbar-left"><a href="login" class="navbar-link">Admin Login</a></p>
        </div><!--/.navbar-collapse -->
    </div>
</nav>




