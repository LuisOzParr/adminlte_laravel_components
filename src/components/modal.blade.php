<!--
PARAMETROS

['id'=>'','size'=>'','titulo'=>'']

slots
 $pie
-->

<div class="modal fade" id="{!! $id !!}" role="dialog" aria-labelledby="myModalLabel" style="display: none;" >
    <div class="modal-dialog" role="document" id="modalTamaño" style="width: {!! $size !!}">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                @if(isset($titulo))
                    <h3 class="modal-title"> {!! $titulo !!} </h3>
                @endif
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            @isset($pie)
                <div class="modal-footer">
                    {{ $pie  }}
                </div>
            @endisset
        </div>
    </div>
</div>