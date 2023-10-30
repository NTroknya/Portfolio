//-------------------------
//Noah Troknya
//Project 1: Simulating Dice Rolls
//A program to simulate rolling pairs of dice
//-------------------------

//  Libraries needed to run the program
#include <iostream>
#include <stdlib.h>
#include <time.h>

//  Defining how big we wish our array(s) to be.
#define ARRAY_SIZE 13

//  Using standard output (the terminal).
using namespace std;

//  Prompts the user for how many pairs of dice they want to roll
//  Simulates that many rolls
//  Store totals in array slots
//  Output data to the user in a readable format
int main()
{
//  Declaring user input variable, seed rand function, 
//  and declaring array for roll storage with 0's in each position  
    int userValue;
    int rollsArray[ARRAY_SIZE];
    srand(time(NULL));
    // For loop to place 0's in each position the array
    for (int i = 0; i < ARRAY_SIZE; i++)
    {
        rollsArray[i] = 0;
    }
//  Asking the user how many pairs of dice they want to roll 
//  (tested through 2,147,483,647, takes 61 sec to process the rolls and output to the terminal from time of input on my machine)
//  as well as letting the user know that it is simulating the rolls via the terminal.
    cout << "How many rolls? (Integers only, can't roll part of a die) " << endl;
    cin >> userValue;
    cout << "Simulating " << userValue << " rolls..." << endl;
//  Simulating x rolls, where x is the number of rolls the user input
    for (int i = 0; i < userValue; i++)
    {
        // Using rand function to simulate each roll of the dice.
        int randNum = (rand() % 6) + 1;
        int randNum2 = (rand() % 6) + 1;
        // Iterate the number of times each outcome was rolled.
        rollsArray[randNum + randNum2] ++;
    }
//  Printing out results to the terminal for the user to view.
    for (int i = 2; i < ARRAY_SIZE; i++)
    {
        cout << i << " was rolled: " << rollsArray[i] << " times." << endl;
    }
}
