<div class="w-100">
    <h2 class="w-100 text-center">
        Filtry
    </h2>

    <hr>

    <form id="filtersInput" method="POST" action="{{ route('filters.announcement') }}">
        @csrf

        <x-inputs.double-buttons 
            first-name="Filtruj"
            second-name="Czyść"
            second-href=""
            css-class="d-flex justify-center"
        />

        <hr>

        <span class="fw-bolder">Sortuj</span>
        <div class="form-control border-0">
            <x-inputs.radio 
                input-id="sortAsc"
                label="Od najnowszych"
                name="sort_by"
                value="desc"
                checked="1"
            />
            <br>
            <x-inputs.radio 
                input-id="sortDesc"
                label="Od najstarszych"
                name="sort_by"
                value="asc"
                checked="0"
            />
        </div>

        <hr>

        <x-inputs.provinces />
        <x-inputs.text 
            input-id="city"
            label="Miasto"
            name="city"
            placeholder="Miasto"
            value=""
            min-length=""
            max-length="30"
        />

        <hr>

        <x-inputs.date 
            input-id="date_from"
            label="Dodane od"
            name="date_from"
            value=""
            min-date="2023-01-01"
            max-date="{{ date('Y-m-d') }}"
        />

        <hr>

        <x-tags.tags />
    </form>
</div>