<!--<form>-->
<div class="form-group">
    {!! Form::label('key_words', 'Key Words') !!}
    <!--<label for="exampleInputName2">Product Name</label>-->
    {!! Form::text('key_words', null, ['class' => 'form-control', 'id' => 'key_words'])!!}
    <!--<input type="text" class="form-control" id="exampleInputName2" placeholder="Samsung Laptop">-->
</div>




<div class="form-group">
    {!! Form::label('long_description', 'Long Description') !!}
    <!--<label for="exampleInputName2">Product Name</label>-->

    {!! Form::textarea('long_description', null, ['class' => 'form-control', 'id' => 'long_description'])!!}
    <!--<input type="text" class="form-control" id="exampleInputName2" placeholder="Samsung Laptop">-->
</div>



<!--</form>-->