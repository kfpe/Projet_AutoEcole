<form action="{{$action}}" method="{{ $method ?? 'post'}}" {{ $attributes->merge(['class'=>'vstack'])}}>
    {{ $slot }}
</form>