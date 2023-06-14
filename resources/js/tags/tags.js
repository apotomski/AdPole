const serchTagsInput = document.querySelector('#tagsBar');
const tagsArea = document.querySelector('#tagsArea');
const hiddenTagsInput = document.querySelector('#tagsInput');

document.querySelectorAll('.tag-card-delete-btn').forEach(element => {
    deleteTagCardListener(element);
});

document.querySelector('#addTagBtn').addEventListener('click', function() {
    if(serchTagsInput.value !== '' && serchTagsInput.value != undefined) {
        tagsArea.append(createNewTagCard(serchTagsInput.value));
        serchTagsInput.value = '';
    }
});

function createNewTagCard(value)
{
    let baseDiv = document.createElement("div");
    let spanTag = document.createElement("span");

    let newId = generateCardUniqId();

    baseDiv.className = 'tag-card bg-info rounded-pill p-1 m-1';
    baseDiv.id = `tag-${newId}`;
    baseDiv.textContent = value;
    
    spanTag.role = 'button';
    spanTag.className = 'tag-card-delete-btn text-danger fs-5 fw-bold';
    spanTag.dataset.parentId = newId;
    spanTag.textContent = 'x';
    deleteTagCardListener(spanTag);

    baseDiv.append(spanTag);

    return baseDiv;
}

function generateCardUniqId()
{
    return Math.random().toString(16).slice(2)
}

function deleteTagCardListener(element)
{
    element.addEventListener('click', (event) => {
        document.querySelector(`#tag-${event.target.dataset.parentNumber}`).remove();
    });
}