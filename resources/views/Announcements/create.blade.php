@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                Dodawanie Ogłoszenia
            </div>
            <div class="card-body">
                <form 
                    id="announcementFormId"
                    method="POST"
                    action="{{ route($action) }}"
                >
                    @csrf
                    @if ($action === \App\Enums\RouteNamesEnum::AnnouncementEdit->value)
                        @method('PUT')
                    @endif

                    <x-inputs.text 
                        input-id="title"
                        label="Tytuł*"
                        name="title"
                        placeholder="Miasto"
                        value=""
                        min-length="3"
                        max-length="100"
                        :required=true
                    />

                    <x-inputs.provinces :required=true/>

                    <x-inputs.text 
                        input-id="city"
                        label="Miasto*"
                        name="city"
                        placeholder="Miasto"
                        value=""
                        min-length="3"
                        max-length="100"
                        :required=true
                    />

                    <x-inputs.select 
                        :collection="$durations"
                        :required=true
                        input-id="duration"
                        label="Dostępne przez*"
                        name="duration"
                    />

                    <x-inputs.textArea
                        input-id="description"
                        label="Opis"
                        name="description"
                        placeholder="Opis"
                        value=""
                        rows="10"
                        cols=""
                        min-length=""
                        max-length="1000"
                    />

                    <x-tags.tags />

                    <hr>

                    <x-inputs.double-buttons 
                        first-name="Zapisz"
                        second-name="Anuluj"
                        second-href="{{ route(\App\Enums\RouteNamesEnum::AnnouncementList->value) }}"
                        css-class="d-flex justify-content-end"
                    />
                </form>
            </div>
        </div>
    </div>

@endsection