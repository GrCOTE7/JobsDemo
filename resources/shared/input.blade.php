@php
    $type ??= 'text';
    $label ??= ucfirst($name);
    $name ??= '';
    $value ??= '';
    $class ??= null;
@endphp

<div @class(['form-group', $class])>

    <label for="{{ $name }}">{{ $label }}<span style="color: red">*</span></label>

    @if ($type === 'textarea')
        <textarea class="form-control @error($name) is-invalid @enderror" type="{{ $type }}" id="{{ $name }}" name="{{ $name }}">{{ old($name, $value) }}</textarea>
    @else
        <input class="form-control @error($name) is-invalid @enderror" type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}">
    @endif

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

</div>
