<div class="form-group">
    <label>{{$slot}}</label>
    <select {{$attributes->merge(['class' => $errors->has($name) ? 'form-control is-invalid' : 'form-control'])}} name="{{$name}}">
        {{$options}}
    </select>
    <div class="invalid-feedback">{{$errors->first($name)}}</div>
</div>
