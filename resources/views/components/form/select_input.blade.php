<div class="input_area">
    <label for="{{$name}}">
        Categoria
     </label>
    <select name="{{$name}}" id="{{$name}}" {{empty($required) ? '' : 'required'}}>
        <option selected disabled value=""> Selecione uma categoria </option>
        {{$slot}}
    </select>
</div>