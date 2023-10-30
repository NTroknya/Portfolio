//  Name: Noah Troknya
//  Project #2 - FIGHT!
//  Files from CS3100 Spring 2022
//  Information gathering and combat simulation for 2 characters

#include <iostream>
#include <stdlib.h>
#include <time.h>
#include "character.h"

using namespace std;

int main() {
    // Initializing randomness
    srand(time(NULL));
    
    // First Character User Input variables
    string firstCName;
    string firstCRole;
    int firstCHP;
    int firstCAB;
    int firstCDB;
    int firstCAC;
    
    // First Character data inputs
    cout << "First Character Name?" << endl;
    cin >> firstCName;

    cout << firstCName << "'s role?" << endl;
    cin >> firstCRole;

    cout << firstCName << " the " << firstCRole << "'s hit points?" << endl;
    cin >> firstCHP;
    
    cout << firstCName << " the " << firstCRole << "'s attack bonus?" << endl;
    cin >> firstCAB;
    
    cout << firstCName << " the " << firstCRole << "'s damage bonus?" << endl;
    cin >> firstCDB;

    cout << firstCName << " the " << firstCRole << "'s armor class?" << endl;
    cin >> firstCAC;
    
    Character firstCharacter(firstCName, firstCRole, firstCHP, firstCAB, firstCDB, firstCAC);
    // First Character summary
    firstCharacter.print(cout);

    // Second Character User Input variables
    string secondCName;
    string secondCRole;
    int secondCHP;
    int secondCAB;
    int secondCDB;
    int secondCAC;

    // Second Character data inputs
    cout << "Second Character Name?" << endl;
    cin >> secondCName;

    cout << secondCName << "'s role?" << endl;
    cin >> secondCRole;

    cout << secondCName << " the " << secondCRole << "'s hit points?" << endl;
    cin >> secondCHP;
    
    cout << secondCName << " the " << secondCRole << "'s attack bonus?" << endl;
    cin >> secondCAB;
    
    cout << secondCName << " the " << secondCRole << "'s damage bonus?" << endl;
    cin >> secondCDB;

    cout << secondCName << " the " << secondCRole << "'s armor class?" << endl;
    cin >> secondCAC;
    
    Character secondCharacter(secondCName, secondCRole, secondCHP, secondCAB, secondCDB, secondCAC);
    // Second Character summary
    secondCharacter.print(cout);

    // FIGHT!
    cout << "Simulated Combat:" << endl;
    while ((firstCharacter.getHitPoints() != 0) && (secondCharacter.getHitPoints() !=0)) {
        cout << firstCharacter.getName() << " Attacks!" << endl;
        firstCharacter.attack(secondCharacter);
        // Check to see if secondCharacter is dead
        if (secondCharacter.getHitPoints() == 0) {
            break;
        }
        cout << secondCharacter.getName() << " Attacks!" << endl;
        secondCharacter.attack(firstCharacter);
    }

    // Who won?
    if (firstCharacter.getHitPoints() == 0) {
        cout << secondCharacter.getName() << " wins!" << endl;
    }
    else {
        cout << firstCharacter.getName() << " wins!" << endl;
    }
    cout << "FATALITY!" << endl;
}