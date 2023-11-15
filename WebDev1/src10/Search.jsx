import { React } from 'https://unpkg.com/es-react';

export default function Search(props) {
    const { inputVal, setInputVal, setRecipes, renderRecipe, searchEndpoint, recipes } = props;
    const listItems = [];
    if (recipes != undefined) {
        for (const recipe of recipes) {
            listItems.push(<li key={recipe.name}
                onClick={() => { renderRecipe(recipe) }}>{recipe.name}</li>);
        }
    }

    const output = <div>
        <h3>Find a recipe</h3>
        <form>
            <label>
                Recipe name:
                <input
                    name="title"
                    onChange={(event) => setInputVal(event.target.value)}
                    value={inputVal}
                ></input>
            </label>
            <button
                type="button"
                onClick={async () => {
                    const params = new URLSearchParams();
                    params.set("title", inputVal);
                    const response = await fetch(`${searchEndpoint}?${params}`);
                    const resultList = await response.json();
                    setRecipes(resultList);
                }}
            >Search</button>
            <button
                type="button"
                onClick={() => {
                    setInputVal("");
                    setRecipes(undefined);
                    renderRecipe();
                }}
            >Reset</button>
        </form>
        <ul id="search-results">
            {listItems}
        </ul>
    </div>;
    return output;
}