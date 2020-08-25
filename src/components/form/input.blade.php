<div class="form-group">
    <label for="{{$getId($attributes)}}">{{$slot}}</label>
    @if($icon)
        <div class="input-group">
            @if($iconPosition == 'right')
                <input {{$attributes->merge(['class' => $errors->has($name) ? 'form-control is-invalid' : 'form-control'])}}
                       id="{{$getId($attributes)}}"
                       type="{{$getType($attributes)}}"
                       name="{{$name}}"
                       @if(isset($model))
                       value="{{isset($model) ? $model->{$name} : ''}}"
                       @else
                       value="{{old($name) ? old($name): (isset($value) ? $value : '')}}"
                       @endif
                >
            @endif
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="{{$icon}}"></i></span>
            </div>
            @if($iconPosition == 'left')
                <input {{$attributes->merge(['class' => $errors->has($name) ? 'form-control is-invalid' : 'form-control'])}}
                       id="{{$getId($attributes)}}"
                       type="{{$getType($attributes)}}"
                       name="{{$name}}"
                       @if(isset($model))
                       value="{{isset($model) ? $model->{$name} : ''}}"
                       @else
                       value="{{old($name) ? old($name): (isset($value) ? $value : '')}}"
                       @endif
                >
            @endif
        </div>
    @else
        <input {{$attributes->merge(['class' => $errors->has($name) ? 'form-control is-invalid' : 'form-control'])}}
               id="{{$getId($attributes)}}"
               type="{{$getType($attributes)}}"
               name="{{$name}}"
               @if(isset($model))
               value="{{isset($model) ? $model->{$name} : ''}}"
               @else
               value="{{old($name) ? old($name): (isset($value) ? $value : '')}}"
               @endif
        >
    @endif
    <div class="invalid-feedback">{{$errors->first($name)}}</div>
</div>

