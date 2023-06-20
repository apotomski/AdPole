<label for="{{ $inputId }}">
    {{ $label }}
</label>

<select 
    id="{{ $inputId }}" 
    name="{{ $name }}" 
    class="form-control  text-center" 
    @if ($required)
        required
    @endif
>
    <option hidden>--- BRAK ---</option>
    @foreach ($collection as $data)
        <option value="{{ $data->value }}">
            {{ $data->title }}
        </option>
    @endforeach
</select>