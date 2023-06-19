<label for="{{ $inputId }}">
    {{ $label }}
</label>
<textarea 
    type="text" 
    class="form-control" 
    id="{{ $inputId }}" 
    name="{{ $name }}" 
    rows="{{ $rows }}"
    cols="{{ $cols }}"
    placeholder="{{ $placeholder }}"
    minlength="{{ $minLength }}"
    maxlength="{{ $maxLength }}"
>{{ $value }}</textarea>