import { React, useState } from 'https://unpkg.com/es-react/dev';
import SearchForm from './SearchForm';

export default function Search(props) {
  const { renderRecipe, searchEndpoint } = props;
  const [recips, setRecips] = useState(undefined);
  const [val, setVal] = useState('');

  const listItems = [];
  if (recips != undefined) {
    for (const recipe of recips) {
      listItems.push(<li key={recipe.name}
        onClick={() => { renderRecipe(recipe) }}>{recipe.name}</li>);
    }
  }

  const props2 = {
    label: "Recipe name",
    inputVal: val,
    setInputVal: setVal,
    recipes: recips,
    setRecipes: setRecips,
    renderRecipe: renderRecipe,
    searchEndpoint: searchEndpoint
  }
  
  return (
    <div>
      <h3>Find a recipe</h3>

      <SearchForm {...props2}/>

      <ul id="search-results">
        {listItems}
      </ul>
    </div>
  );
}
