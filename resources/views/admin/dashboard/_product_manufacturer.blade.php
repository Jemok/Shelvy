<!--<form>-->
<div class="form-group">
    {!! Form::label('maker', 'Manufacturer')!!}
    <!--<label for="category">Category</label>-->

    {!! Form::select('maker', ['0' => 'Select a Manufacturer', '1' => 'Samsung'], null, ['class' => 'form-control'] )!!}
    <!--<select  class="form-control">
        <option>category 1</option>
        <option>category 2</option>
        <option>category 3</option>
    </select>-->
</div>



<!--</form>-->