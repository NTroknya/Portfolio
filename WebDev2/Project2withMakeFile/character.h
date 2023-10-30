//  Name: Noah Troknya
//  Project #2 - FIGHT!
//  Files from CS3100 Spring 2022
//  Function and class definitions for Characters

#pragma once
#include <string>

using namespace std;
class Character {
  private:
    string name;
    string role;
    int hitPoints;
    int attackBonus;
    int damageBonus;
    int armorClass;
  
  public:
    // Default constructor
    Character();
    // Parameterized constructor
    Character(string, string, int, int, int, int);
    // Pretty print
    void print(ostream&);
    // Get HP
    int getHitPoints();
    // Get Name
    string getName();
    // Get Role
    string getRole();
    // Get AB
    int getAttackBonus();
    // Get DB
    int getDamageBonus();
    // Get AC
    int getArmorClass();
    // Attack
    void attack(Character&);
    // Damage
    void damage(int);
};
