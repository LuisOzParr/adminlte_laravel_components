<div class="form-group">
    <label for="{{$getId($attributes)}}">{{$slot}}</label>
    <textarea
        {{$attributes->merge(['rows'=>'3', 'cols'=>'50', 'class' => $errors->has($name) ? 'form-control is-invalid' : 'form-control'])}}
        name="{{$name}}"
        id="{{$getId($attributes)}}"
    >@if(isset($model)){{isset($model) ? $model->{$name} : ''}}@else{{old($name) ? old($name): (isset($value) ? $value : '')}}@endif</textarea>
</div>
