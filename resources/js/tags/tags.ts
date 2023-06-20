const serchTagsInput = document.querySelector('#tagsBar');
const tagsArea = document.querySelector('#tagsArea');
const hiddenTagsInput = document.querySelector('#tagsInput');
const addTagBtn = document.querySelector('#addTagBtn');
let tagsDeleteButtons = document.querySelectorAll('.tag-card-delete-btn');

if(tagsDeleteButtons) {
    tagsDeleteButtons.forEach((element) => {
        deleteTagCardListener(element);
    });
}

if(addTagBtn && serchTagsInput && tagsArea) {
    addTagBtn.addEventListener('click', () => {
        let serchTagsInputValue = (<HTMLInputElement>serchTagsInput).value;

        if(serchTagsInputValue !== '' && serchTagsInputValue != undefined) {
            tagsArea.append(createNewTagCard(serchTagsInputValue));
            (<HTMLInputElement>serchTagsInput).value = '';
        }
    });
}

function createNewTagCard(value: string): HTMLElement
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
    console.log(123);

    baseDiv.append(spanTag);

    return baseDiv;
}

function generateCardUniqId(): string
{
    return Math.random().toString(16).slice(2);
}

function deleteTagCardListener(element: Element): void
{
    element.addEventListener('click', (event) => {
        if(event.target) {
            let tagCardElement = document.querySelector(`#tag-${(<HTMLTextAreaElement>event.target).dataset.parentId}`);
            if(tagCardElement)
                tagCardElement.remove();
        }
    });
}