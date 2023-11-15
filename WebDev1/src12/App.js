import { React, ReactDOM } from "https://unpkg.com/es-react/dev";
import Search from "./Search.js";
import { renderRecipe } from "./render-recipe.js";

const container = document.querySelector("#search");
ReactDOM.render(
  React.createElement(Search, {
    searchEndpoint: "/getRecipes",
    renderRecipe,
  }),
  container,
);
