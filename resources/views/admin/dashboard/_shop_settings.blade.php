<!--<form>-->
<div class="form-group {{ $errors->has('shop_location') ? 'has-error' : ''}}">
    {!! Form::label('shop_location', 'City')!!}
    <!--<label for="inputEmail">Email</label>-->
    {!! Form::text('shop_location', null, ['class' => 'form-control', 'id' => 'shop_location'])!!}
    <!--<input type="email" class="form-control" id="inputEmail" placeholder="Email">-->
    {!! $errors->first('shop_location', '<span class="help-block">:message</span>' ) !!}
</div>

<div class="form-group {{ $errors->has('shop_building') ? 'has-error' : ''}}">
    {!! Form::label('shop_building', 'Building')!!}
    <!--<label for="inputEmail">Email</label>-->
    {!! Form::text('shop_building', null, ['class' => 'form-control', 'id' => 'building'])!!}
    <!--<input type="email" class="form-control" id="inputEmail" placeholder="Email">-->
    {!! $errors->first('shop_building', '<span class="help-block">:message</span>' ) !!}
</div>

<div class="form-group {{ $errors->has('shop_category') ? 'has-error' : ''}}">
    {!! Form::label('shop_category', 'Shop Category')!!}
    <!--<label for="inputEmail">Email</label>-->
    {!! Form::text('shop_category', null, ['class' => 'form-control', 'id' => 'shop_category'])!!}
    <!--<input type="email" class="form-control" id="inputEmail" placeholder="Email">-->
    {!! $errors->first('shop_category', '<span class="help-block">:message</span>' ) !!}
</div>

<div class="form-group {{ $errors->has('shop_street') ? 'has-error' : ''}}">
    {!! Form::label('shop_street', 'Street') !!}
    <!--<label for="exampleInputName2">Product Name</label>-->

    {!! Form::text('shop_street', null, ['class' => 'form-control', 'id' => 'shop_street'])!!}
    <!--<input type="text" class="form-control" id="exampleInputName2" placeholder="Samsung Laptop">-->
    {!! $errors->first('shop_street', '<span class="help-block">:message</span>' ) !!}
</div>


<!--</form>-->