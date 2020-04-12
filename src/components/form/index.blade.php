<form {{$attributes->merge(['class'=>'form'])}} method="{{$getMethod}}">
    @if($method != 'GET')
        @csrf
    @endif
    @if($needBladeMethod)
        @method($method??'')
    @endif
    {{$slot}}
</form>