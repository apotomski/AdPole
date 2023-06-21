<div>
    <span class="fw-bolder">Tagi</span>
    <input
        type="hidden"
        id="tagsInput"
        name="tags"
    />
    <x-tags.tags-bar />
    <div id="tagsArea" class="mt-2 d-flex">
        {{-- <x-tags.tags-card
            tag-number="1"
            text="tag1"
        /> --}}
        @if(!empty($tags) && !$tags->isEmpty())
            @foreach ($tags as $tag)
                <x-tags.tags-card
                    :tag-number="$tag->id"
                    :text="$tag->text"
                />
            @endforeach
        @endif
    </div>
</div>

@vite('resources/js/tags/tags.ts')
    