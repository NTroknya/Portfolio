#include <iostream>
#include <fstream>
#include <iomanip>
#include <string>
#include <stdlib.h>
#include "trie.h"

using namespace std;


int main() {
    Trie myTrie = Trie();
    string nextWord;
    ifstream infile;
    infile.open("wordlist_windows.txt");
    if(!infile){
        cout << "Couldn't open file" << endl;
        return 1;
    }

    while(!infile.eof()){
        getline(infile, nextWord);
        myTrie.insert(nextWord);
    }

    string query;
    string yn;
    cout << "Please enter a word prefix (or enter an ellipsis(...) to exit): " << endl;
    cin >> query;
    while(query != "..."){
        cout << "There are " << myTrie.completeCount(query) << " completions for the prefix '" + query + "'. Show Completions?(please use all lowercase)  " << endl;
        cin >> yn;
        vector<string> completions;
        if(yn == "yes"){
            completions = myTrie.complete(query);
            cout << "Completions" << endl;
            cout << "--------------------------" << endl;
            for (auto i = completions.begin(); i != completions.end(); ++i)
                cout << *i << "/n ";
        }
        cout << "Please enter a word prefix (or enter an ellipsis(...) to exit): " << endl;
        cin >> query;
    }
}