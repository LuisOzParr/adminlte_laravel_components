<form {{$attributes->merge(['class'=>'form'])}} method="{{$getMethod}}">
    @csrf
    @if($needBladeMethod)
        @method($method??'')
    @endif
    {{$slot}}
</form>