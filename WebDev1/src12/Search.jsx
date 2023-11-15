import { React, useState } from 'https://unpkg.com/es-react/dev';
import SearchForm from './SearchForm';

export default function Search(props) {
  const { renderRecipe, ...rest } = props;
  const [inputVal, setInputVal] = useState('');
  const [recipes, setRecipes] = useState();

  const fetchRecipe = async (url) => {
    const response = await fetchRecipe(url);
    return await response.json();
  };

  return (
    <div>
      <h3>Find a recipe</h3>

      <SearchForm
        {...rest}
        label="Recipe name"
        inputVal={inputVal}
        setInputVal={setInputVal}
        setRecipes={setRecipes}
        renderRecipe={renderRecipe}
        fetchRecipe={fetchRecipe}
      />

      <ul id="search-results">
        {recipes?.map((recipe, i) => (
          <li
            key={recipe.name}
            onClick={() => {
              renderRecipe(recipe);
            }}
          >
            {recipe.name}
          </li>
        ))}
      </ul>
    </div>
  );
}
