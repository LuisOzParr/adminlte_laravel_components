<div {{ $attributes->merge(['class' => 'tab-pane fade']) }}
     aria-labelledby="{{$reference}}-tab"
     id="{{$reference}}"
     role="tabpanel">

    {{$slot}}
</div>