<li class="nav-item">
    <a {{ $attributes->merge(['class' => 'nav-link']) }}
       id="{{$reference}}-tab"
       data-toggle="pill"
       href="#{{$reference}}"
       role="tab"
       aria-controls="{{$reference}}"
       aria-selected="{!! $isActive($attributes['class']) !!}">{{$slot}}</a>
</li>
