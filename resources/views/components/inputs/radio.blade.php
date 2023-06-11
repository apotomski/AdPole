<input 
    type="radio"
    id="{{ $inputId }}"
    value="{{ $value }}"
    name="{{ $name }}"
    @if ($checked)
        checked
    @endif
/>
<label for="{{ $inputId }}">
    {{ $label }}
</label>