<label for="provinces">
    @if ($required)
        Województwo*
    @else
        Województwo
    @endif
</label>

<select 
    id="provinces" 
    name="provinces" 
    class="form-control text-center"
    @if ($required)
        required
    @endif
>
    <option value="">
        --- BRAK ---
    </option>
    @forelse (\App\Models\Province::all() as $province)
        <option value="{{ $province->id }}">
            {{ $province->name }}
        </option>
    @empty
        
    @endforelse
</select>