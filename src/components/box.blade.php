<!--
['estilo'=>'', 'titulo'=>'']

slot('botones')
slot('pie')

-->
<div class="box {!! $estilo ?? ''!!}">
@if(isset($titulo) || isset($botones))
    <div class="box-header with-border">
        <h3 class="box-title">@isset($titulo){!! $titulo !!}@endisset</h3>

        <div class="box-tools pull-right">
            @isset($botones){{$botones}}  @endisset
        </div>
    </div>
@endif
<!-- /.box-header -->
<div class="box-body">
    {{ $slot }}
</div>
<!-- /.box-body -->
@isset($pie)
    <div class="box-footer clearfix">
        {!! $pie !!}
    </div>
@endisset
<!-- /.box-footer -->
</div>