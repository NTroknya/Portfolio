#pragma once

#include <iostream>
#include <fstream>
#include <iomanip>
#include <string>
#include <stdlib.h>
#include <vector>
#include <bits/stdc++.h>

#define ALPHABET_SIZE (26)

using namespace std;

class Trie
{
    public:
        Trie ();    //Constructor for Trie class
        void insert(string s);  //insert function taking in a string
        int count();    //return number of words in Trie
        int getSize();  //return number of nodes in Trie
        bool find(string s);    //return TRUE if item is in Trie, FALSE otherwise
        int completeCount(string s);    //return the number of words beginning with the given string. If none returns 0
        vector<string> complete(string s);  //return a vector of strings containing all words that begin with a given string, 
                                            //if no matching words vector will be empty
    private:
        class TrieNode   {
            public:
              TrieNode* childArray  [ALPHABET_SIZE];    //Array of 26 trie node "letter" pointers and 1 "end of word" pointer
              bool endOfWord;   //ture if this node is the end of a word
              TrieNode() {
                  for(int i = 0;i<ALPHABET_SIZE;i++){
                      childArray[i] = NULL;
                  }
                  endOfWord = false;
              }
        } ;     
          TrieNode* root;   //the "start" of the trie
          int countNum;        //number of word in the trie
          int size;         //number of nodes in the trie  
          vector<string> completeHelp(TrieNode* root, string s, vector<string> completions);     //helper function for complete     
};