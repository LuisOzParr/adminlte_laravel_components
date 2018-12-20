<div class="btn-group">
    @isset($name)
        <button @isset($propsAction) {{$propsAction}} @endisset type="button" class="btn btn-default @isset($size) btn-{{$size}} @endisset @if(isset($classAction)) {{$classAction}} @else btn-default @endif" >{{$name}}</button>
    @endisset
    <button  @isset($propsDropdown) {{$propsDropdown}} @endisset type="button" class="btn dropdown-toggle @isset($size) btn-{{$size}} @endisset @if(isset($classDropdown)) {{$classDropdown}}@else btn-default @endif"  data-toggle="dropdown" aria-expanded="false">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" role="menu">
        {{$slot}}
    </ul>
</div>