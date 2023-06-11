<div 
    class="tag-card bg-info rounded-pill p-1 m-1"
    id="tag-{{ $tagNumber }}"
>
    #{{ $text }}
    <span
        role="button"
        class="tag-card-delete-btn text-danger fs-5 fw-bold"
        data-parent-number="{{ $tagNumber }}"
    >
        x
    </span>
</div>