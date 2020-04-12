<div {{$attributes->merge(['class'=>'info-box'])}}>
    @isset($icon)
        <span class="info-box-icon bg-{{$iconColor??'info'}}"><i class="{{$icon}}"></i></span>
    @endisset
    <div class="info-box-content">
        <span class="info-box-text">{!! $title !!}</span>
        @isset($number)
            <span class="info-box-number">{!! $number !!}</span>
        @endisset

        @isset($progress)
            <div class="progress">
                <div class="progress-bar" style="width: {{$progress}}"></div>
            </div>
        @endisset
        @isset($progressDescription)
            <span class="progress-description">
                {!! $progresDescription !!}
            </span>
        @endisset
    </div>
</div>