<label for="{{ $inputId }}">
    {{ $label }}
</label>

<input
    type="date" 
    id="{{ $inputId }}" 
    class="form-control"
    name="{{ $name }}"
    value="{{ $value }}"
    min="{{ $minDate }}"
    max="{{ $maxDate }}"
/>