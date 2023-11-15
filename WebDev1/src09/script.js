export async function recipeApp(searchEndpoint, renderRecipe) {
  const search = document.querySelector('#searchButton');
  search.addEventListener('click', async () => {
    const form = document.querySelector('#recipeForm');
    const input = form.querySelector('#recipeInput');
    const params = new URLSearchParams();
    params.set(input.name, input.value);
    const response = await fetch(`${searchEndpoint}?${params}`);
    const resultList = await response.json();
    const sResult = document.querySelector('#search-results');
    sResult.replaceChildren();
    let li = document.createElement('li');
    for (let i = 0; i < resultList.length; i++) {
      li.textContent = resultList[i].name;
      li.id = resultList[i].name;
      li.addEventListener('click', () => {
        renderRecipe(resultList[i]);
      });
      sResult.append(li);
      li = document.createElement('li');
    }
  });

  const reset = document.querySelector('#reset');
  reset.addEventListener('click', () => {
    const form = document.querySelector('#recipeForm');
    const input = form.querySelector('#recipeInput');
    input.value = "";
    const sResult = document.querySelector('#search-results');
    sResult.replaceChildren();
    renderRecipe();
  });
}
