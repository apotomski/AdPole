<div>
    <span class="fw-bolder">Tagi</span>
    <input
        type="hidden"
        id="tagsInput"
        name="tags[]"
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

<script>
    
    //deleted tag after click x
    document.querySelectorAll('.tag-card-delete-btn').forEach(element => {
        element.addEventListener('click', (event) => {
            document.querySelector(`#tag-${event.target.dataset.parentNumber}`).remove();
        });
    });
    
</script>