<div>
    <span class="fw-bolder">Tagi</span>
    <input
        type="hidden"
        id="tagsInput"
        name="tags"
    />
    <x-tags.tags-bar />
    <div id="tagsArea" class="mt-2 d-flex">
        <x-tags.tags-card
            tag-number="1"
            text="tag1"
        />
        <x-tags.tags-card
            tag-number="2"
            text="tag2"
        />
    </div>
</div>

@vite('resources/js/tags/tags.ts')
    