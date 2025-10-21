<div class="form-input">
    <input {{ $attributes->merge(['class'=>'form-control'])}} type="{{ $type ?? $text}}" name="{{ $name}}" id="{{$id ?? $name}}" >
</div>