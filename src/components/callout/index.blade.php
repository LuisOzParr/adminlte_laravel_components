@isset($col)
    <div class="row">
        <div class="col-md-{{$col}}">
@endisset

    <div {{$attributes->merge(['class' => 'callout'])}}>
        <h5>
            <i class="{{$icon??'fas fa-info'}}"></i> {{$title}}
        </h5>
        {{$slot}}
    </div>

@isset($col)
        </div>
    </div>
@endisset

