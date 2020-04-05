<div {{$attributes->merge(['class'=>'modal fade'])}} aria-modal="true" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog {{$sizeModal}}">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{$title??''}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                {{$body??''}} {{$slot??''}}
            </div>
            @isset($footer)
                <div class="modal-footer justify-content-between">
                    {{$footer}}
                </div>
            @endisset
        </div>
    </div>
</div>

