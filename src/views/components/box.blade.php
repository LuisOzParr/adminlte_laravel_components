<!--
['$className'=>'', 'title'=>'', 'collapse'=>true/false]

slot('buttons')
slot('footer')

-->
<div class="box panle @isset($className){!! $className!!} @endisset">
    @if(isset($title) || isset($buttons))
        <div class="box-header @if(isset($withBorder) && $withBorder == true)with-border @elseif(!isset($withBorder)) with-border @endif">

            <h3 class="box-title">
                @if(isset($title))
                    @if(!isset($collapse) || $collapse == false)
                        {!! $title !!}
                    @else
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
                            {{$title}}
                        </a>
                    @endif
                @endif
            </h3>

            <div class="box-tools pull-right">
                @isset($buttons){{$buttons}}  @endisset
            </div>
        </div>
    @endif

    @if(isset($collapse) && $collapse == true)
        <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
    @endif

    <!-- /.box-header -->
    <div class="box-body">
        {{ $slot }}
    </div>
    <!-- /.box-body -->

    @if(isset($collapse))
        </div>
    @endif


    @isset($footer)
        <div class="box-footer clearfix">
            {!! $footer !!}
        </div>
    @endisset
    <!-- /.box-footer -->
</div>