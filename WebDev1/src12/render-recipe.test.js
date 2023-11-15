import { getRecipeInfo } from './render-recipe.js';

test('getRecipeInfo returns correct values for: servings, prepTime, cookTime, and totalTime', () => {
    const recipeInfo = getRecipeInfo(
        {
            name: 'Hard boiled egg',
            servings: 1,
            ingredients: [
                '1 egg',
                '8 cups water'
            ],
            times: {
                prep: 2,
                cook: 10,
            },
            steps: [
                'Boil the water',
                'Add the egg',
                'Boil for 10 minutes',
                'Remove egg and let cool',
            ],
            image: {
                url: '/recipe-image/egg.jpg',
                label: 'An egg',
            }
        })

    expect(recipeInfo).toEqual(expect.objectContaining({
        servings: 1,
        prepTime: 2,
        cookTime: 10,
        totalTime: 12
    }));
});

test('getRecipeInfo throws an error with an invalid recipe', () => {
    expect(() => getRecipeInfo({ servings: 4 })).toThrow();
});