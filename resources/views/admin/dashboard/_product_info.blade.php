<!--<form>-->
<div class="form-group {{ $errors->has('product_name') ? 'has-error' : ''}}">
    {!! Form::label('product_name', 'Product Name') !!}
    <!--<label for="exampleInputName2">Product Name</label>-->

    {!! Form::text('product_name', null, ['class' => 'form-control', 'id' => 'product_name'])!!}
    <!--<input type="text" class="form-control" id="exampleInputName2" placeholder="Samsung Laptop">-->

    {!! $errors->first('product_name', '<span class="help-block">:message</span>' ) !!}
</div>




<div class="form-group {{ $errors->has('product_price') ? 'has-error' : ''}}">
    {!! Form::label('product_price', 'Price')!!}
    <!--<label for="exampleInputName2">Price (Kshs)</label>-->
    <div class="input-group">
        <div class="input-group-addon">kshs</div>
        {!! Form::text('product_price', null, ['class' => 'form-control', 'id' => 'price'])!!}
        <!--<input type="text" class="form-control" id="exampleInputAmount" placeholder="10000">-->
        <div class="input-group-addon">.00</div>
        {!! $errors->first('product_price', '<span class="help-block">:message</span>' ) !!}
    </div>
</div>

<div class="form-group {{ $errors->has('product_description') ? 'has-error' : ''}}">
    {!! Form::label('product_description', 'Brief Description') !!}
    <!--<label for="exampleInputName2">Product Name</label>-->

    {!! Form::textarea('product_description', null, ['class' => 'form-control', 'id' => 'brief_description'])!!}
    <!--<input type="text" class="form-control" id="exampleInputName2" placeholder="Samsung Laptop">-->
    {!! $errors->first('product_description', '<span class="help-block">:message</span>' ) !!}
</div>










<!--</form>-->
