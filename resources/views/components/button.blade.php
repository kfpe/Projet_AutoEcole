<div>
    <button type="{{ $type }}" {{$attributes->merge(['class'=>"btn btn-$btn"])}}>
        {{ $message }}
    </button>
</div>
