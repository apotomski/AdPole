<label for="{{ $inputId }}">
    {{ $label }}
</label>
<input 
    type="text" 
    class="form-control" 
    id="{{ $inputId }}" 
    name="{{ $name }}" 
    value="{{ $value }}"
    placeholder="{{ $placeholder }}"
    minlength="{{ $minLength }}"
    maxlength="{{ $maxLength }}"
/>