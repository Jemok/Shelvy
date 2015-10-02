<!--<form>-->
<div class="form-group">
    {!! Form::label('category_name', 'Category Name')!!}
    <!--<label for="inputEmail">Email</label>-->
    {!! Form::text('category_name', null, ['class' => 'form-control'])!!}
    <!--<input type="email" class="form-control" id="inputEmail" placeholder="Email">-->
</div>

<div class="form-group">
    {!! Form::label('category_description', 'Category Description') !!}
    <!--<label for="exampleInputName2">Product Name</label>-->

    {!! Form::text('category_description', null, ['class' => 'form-control', 'id' => 'category_description'])!!}
    <!--<input type="text" class="form-control" id="exampleInputName2" placeholder="Samsung Laptop">-->
</div>


<!--</form>-->