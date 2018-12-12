<!--
['$className'=>'', 'title'=>'']

slot('buttons')
slot('footer')

-->
<div class="box @isset($className){!! $className!!} @endisset">
@if(isset($title) || isset($buttons))
    <div class="box-header with-border">
        <h3 class="box-title">@isset($title){!! $title !!}@endisset</h3>

        <div class="box-tools pull-right">
            @isset($buttons){{$buttons}}  @endisset
        </div>
    </div>
@endif
<!-- /.box-header -->
<div class="box-body">
    {{ $slot }}
</div>
<!-- /.box-body -->
@isset($footer)
    <div class="box-footer clearfix">
        {!! $footer !!}
    </div>
@endisset
<!-- /.box-footer -->
</div>