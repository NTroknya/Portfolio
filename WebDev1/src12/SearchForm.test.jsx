import { React } from 'https://unpkg.com/es-react/dev';
import { render, fireEvent } from '@testing-library/react';
import SearchForm from './SearchForm.jsx';

test('SearchForm renders', () => {
    const { container } = render(<SearchForm label='Label' searchEndpoint=''
        renderRecipe=''
        fetchRecipe={(input) => { console.log(input); }}
        inputVal='in'
        setInputVal={(input) => { inputVal = input; }}
        setRecipes={(data) => { recipes = data; }} />);
    expect(container.querySelectorAll('input')).toHaveLength(1);
    expect(container.querySelectorAll('button')).toHaveLength(2);
    expect(container.querySelector('label')).toHaveTextContent('Label');
});

test('SearchForm searches with proper URL', () => {
    const searched = jest.fn();
    const { container } = render(<SearchForm label='Label' searchEndpoint='rendered'
        renderRecipe=''
        fetchRecipe={searched}
        inputVal='recipe'
        setInputVal={(input) => { inputVal = input; }}
        setRecipes={(data) => { recipes = data; }} />);
    const button = container.querySelector('button');
    fireEvent.click(button);
    expect(searched).toHaveBeenCalledWith('rendered?query=recipe');
});
