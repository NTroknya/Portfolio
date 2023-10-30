//  Name: Noah Troknya
//  Project #2 - FIGHT!
//  Files from CS3100 Spring 2022
//  Gives actual function to the Character class

#include "character.h"
#include <iostream>
#include <stdlib.h>
#include <time.h>

// Default Constructor
Character::Character(){
    name = "";
    role = "";
    hitPoints = 0;
    attackBonus = 0;
    damageBonus = 0;
    armorClass = 0;
}

// Parameterized Constructor
Character::Character(string newName, string newRole, int newHP, int newAB, int newDB, int newAC){
    name = newName;
    role = newRole;
    hitPoints = newHP;
    attackBonus = newAB;
    damageBonus = newDB;
    armorClass = newAC;
}

// Pretty Print
void Character::print(ostream& os){
 os << "Character Summary" << endl;
 os << "-----------------" << endl;
 os << name << " the " << role << endl;
 os << "HP: " << hitPoints << endl;
 os << "AB: " << attackBonus << endl;
 os << "DB: " << damageBonus << endl;
 os << "AC: " << armorClass << endl;
}

// Get HP
int Character::getHitPoints(){
    return hitPoints;
}

// Get Name
string Character::getName(){
    return name;
}

// Get Role
string Character::getRole(){
    return role;
}

// Get AB
int Character::getAttackBonus(){
    return attackBonus;
}

// Get DB
int Character::getDamageBonus(){
    return damageBonus;
}

// Get AC
int Character::getArmorClass(){
    return armorClass;
}

// Attack  -- sees whether or not a character damages another
// Inputs:
//      &otherCharacter (Character) - the character that is attacked
//  Returns: void
void Character::attack(Character &otherCharacter){
    int attackRoll = attackBonus + (rand() % 20 + 1);
    if (attackRoll >= otherCharacter.armorClass){
        cout << name << " hit with a " << attackRoll << endl;
        int damageRoll = damageBonus + (rand() % 10 + 1);
        otherCharacter.damage(damageRoll);
    }
    else {
        cout << name << " missed with a " << attackRoll << endl;
    }
}

// Damage -- deal damage to a character
//  Inputs:
//    ouch (int) - the amount of damage
//  Returns:  void
void Character::damage(int ouch){
    hitPoints -= ouch;
    if (hitPoints < 0) {
        hitPoints = 0;
    }
    cout << name << " took " << ouch << " damage and has " << hitPoints << " HP remaining" << endl;
}
