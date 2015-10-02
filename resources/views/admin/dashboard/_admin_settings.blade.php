<!--<form>-->
<div class="form-group {{ $errors->has('shop_name') ? 'has-error' : ''}}">
    {!! Form::label('shop_name', 'Shop Name')!!}
    <!--<label for="inputEmail">Email</label>-->
    {!! Form::text('shop_name', null, ['class' => 'form-control', 'id' => 'shop_name'])!!}
    <!--<input type="email" class="form-control" id="inputEmail" placeholder="Email">-->
    {!! $errors->first('shop_name', '<span class="help-block">:message</span>' ) !!}
</div>
<div class="form-group {{ $errors->has('shop_description') ? 'has-error' : ''}}">
    {!! Form::label('shop_description', 'Shop Description')!!}
    <!--<label for="inputPassword">Password</label>-->
    {!! Form::text('shop_description', null, ['class' => 'form-control', 'id' => 'shop_description'])!!}
    <!--<input type="password" class="form-control" id="inputPassword" placeholder="Password">-->
    {!! $errors->first('shop_description', '<span class="help-block">:message</span>' ) !!}
</div>


<div class="form-group {{ $errors->has('shop_description') ? 'has-error' : ''}}">
    {!! Form::label('slug', 'Shop URL')!!}
    <!--<label for="inputPassword">Password</label>-->
    {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug'])!!}
    <!--<input type="password" class="form-control" id="inputPassword" placeholder="Password">-->
    {!! $errors->first('slug', '<span class="help-block">:message</span>' ) !!}
</div>
<!--<button type="submit" class="btn btn-primary">Update</button>-->
<!--</form>-->