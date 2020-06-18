<div {{$attributes->merge(['class' => 'card'])}}>
    @if($title)
        <div class="card-header">
            <h3 class="card-title">{{$title ?? ''}}</h3>
            @isset($tools)
                <div class="card-tools">
                    {{$tools}}
                </div>
            @endisset
        </div>
    @endif
    <div class="card-body">
        {!! $body ?? '' !!} {!! $slot !!}
    </div>

    @isset($footer)
        <div class="card-footer">
            {!! $footer !!}
        </div>
    @endisset

    @isset($actionbar)
        <div class="card-actionbar">
            <div class="card-actionbar-row">
                {!! $actionbar !!}
            </div>
        </div>
    @endisset
</div>
