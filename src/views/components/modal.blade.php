<!--
Parameters:

['id'=>'','size'=>'','title'=>'']


slot('footer')
-->

<div class="modal fade" id="{!! $id !!}" role="dialog" aria-labelledby="myModalLabel" style="display: none;" >
    <div class="modal-dialog" role="document" id="modalTamaño" style="width: {!! $size !!}">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                @if(isset($title))
                    <h3 class="modal-title"> {!! $title !!} </h3>
                @endif
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            @isset($footer)
                <div class="modal-footer">
                    {{ $footer }}
                </div>
            @endisset
        </div>
    </div>
</div>