<div class="form-group">
    <label for="{{$getId($attributes)}}">{{$slot}}</label>
    @if($icon)
        <div class="input-group">
            @if($iconPosition == 'right')
                <input {{$attributes->merge(['class' => 'form-control'])}} id="{{$getId($attributes)}}" type="{{$getType($attributes)}}" name="{{$name}}">
            @endif
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="{{$icon}}"></i></span>
            </div>
            @if($iconPosition == 'left')
                <input {{$attributes->merge(['class' => 'form-control'])}} id="{{$getId($attributes)}}" type="{{$getType($attributes)}}" name="{{$name}}">
            @endif
        </div>
    @else
        <input {{$attributes->merge(['class' => 'form-control'])}} id="{{$getId($attributes)}}" type="{{$getType($attributes)}}" name="{{$name}}">
    @endif
</div>

