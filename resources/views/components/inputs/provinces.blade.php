<label for="provinces">
    Województwo
</label>

<select id="provinces" name="provinces" class="form-control text-center">
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