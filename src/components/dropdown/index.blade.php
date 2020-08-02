<div class="dropdown">
    <button {{$attributes->merge(['class' => 'btn btn-secondary dropdown-toggle'])}} type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{$title}}
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        {{$slot}}
    </div>
</div>
