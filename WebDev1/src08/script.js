export async function renderRecipe(name, render, container) {
    const recipePromise = await fetch('/recipe/' + name);
    const obj = await recipePromise.json();
    render(obj);

    let imag = document.createElement('img');
    for (let i = 0; i < obj.images.length; i++) {
        imag.src = obj.images[i].url;
        imag.alt = obj.images[i].label;
        container.append(imag);
        imag = document.createElement('img');
    }

    const interval = setInterval(() => {
        container.append(container.firstElementChild)
    }, 3000);
}