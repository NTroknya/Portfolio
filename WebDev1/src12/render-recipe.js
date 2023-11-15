/**
 * Get summary information for a recipe
 *
 * This function takes a recipe object and returns an object containing
 * 4 properties:
 *
 *   servings: the number of servings in the recipe
 *   prepTime: the recipe's prep time
 *   cookTime: the recipe's cook time
 *   totalTime: the total time required to prepare the recipe (prep + cook)
 */
export function getRecipeInfo(recipe) {
  return {
    servings: recipe.servings,
    prepTime: recipe.times.prep,
    cookTime: recipe.times.cook,
    totalTime: recipe.times.cook + recipe.times.prep,
  }
}

/**
 * Renders a recipe into the DOM
 *
 * This function takes a recipe object renders it into the DOM. It does not
 * return a value.
 */
export function renderRecipe(recipe) {
  if (!recipe) {
    document.querySelector('#recipe').classList.add('hidden');
    return;
  }

  const qs = (sel) => document.querySelector(sel);
  qs('#recipe-name').textContent = recipe.name;

  const info = getRecipeInfo();
  qs('#servingsCell').textContent = info.servings;
  qs('#prepTimeCell').textContent = info.prepTime;
  qs('#cookTimeCell').textContent = info.cookTime;
  qs('#totalTimeCell').textContent = info.totalTime;

  const img = document.createElement('img');
  img.alt = recipe.image?.label;
  img.src = recipe.image?.url;
  qs('#lightbox').replaceChildren(img);

  const steps = document.querySelector('#steps ol');
  steps.innerHTML = '';
  for (const s of recipe.steps) {
    const step = document.createElement('li');
    step.textContent = s;
    steps.append(step);
  }

  const ingredients = document.querySelector('#ingredients ul');
  ingredients.innerHTML = '';
  for (const i of recipe.ingredients) {
    const ingredient = document.createElement('li');
    ingredient.textContent = i;
    ingredients.append(ingredient);
  }

  document.querySelector('#recipe').classList.remove('hidden');
}
