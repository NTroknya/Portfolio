import { React } from 'https://unpkg.com/es-react/dev';

export default function SearchForm(props) {
  const {
    searchEndpoint,
    renderRecipe,
    fetchRecipe,
    inputVal,
    setInputVal,
    setRecipes,
    label,
  } = props;

  for (const name of ['setRecipes', 'inputVal', 'fetchRecipe']) {
    if (!props[name]) {
      throw new Error(`SearchForm's ${name} prop can't be undefined`);
    }
  }

  return (
    <form>
      <label>
        {label}:{' '}
        <input
          value={inputVal ?? ''}
          onChange={(event) => {
            setInputVal(event.target.value);
          }}
        />
      </label>
      <button
        type="button"
        onClick={async () => {
          const params = new URLSearchParams();
          params.set('query', inputVal ?? '');
          const data = await fetchRecipe(`${searchEndpoint}?${params}`);
          setRecipes(data);
        }}
      >
        Search
      </button>
      <button
        type="button"
        onClick={() => {
          setInputVal('');
          setRecipes(undefined);
          renderRecipe();
        }}
      >
        Reset
      </button>
    </form>
  );
}
