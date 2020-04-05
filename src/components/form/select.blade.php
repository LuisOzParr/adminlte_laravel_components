<div class="form-group">
    <label>{{$slot}}</label>
    <select {{$attributes->merge(['class' => 'form-control'])}}>
        {{$options}}
    </select>
</div>