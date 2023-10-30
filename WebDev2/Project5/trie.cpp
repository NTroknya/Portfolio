#include "trie.h"

using namespace std;

Trie::Trie() {
    root = new TrieNode();
    countNum = 0;
    size = 1;
}

void Trie::insert(string key) {
    TrieNode* current = root;
    for (int i = 0; i< key.length(); i++) {
        int index = key[i] - 'a';
        if (!current->childArray[index]) {
            current->childArray[index] = new TrieNode();
            size++;
            current = current->childArray[index];
        }
    }
    current->endOfWord = true;
    countNum++;
}

int Trie::count() {
    return countNum;
}

int Trie::getSize() {
    return size;
}

bool Trie::find(string key) {
    TrieNode* current = root;
    for (int i = 0; i< key.length(); i++) {
        int index = key[i] - 'a';
        if(!current->childArray[index]){
            return false;
        }
        current = current->childArray[index];
    }
    return (current != NULL && current->endOfWord);    
}

vector<string> Trie::completeHelp(TrieNode* root, string currPrefix, vector<string> completions){
    if(root->endOfWord){
        completions.push_back(currPrefix);
    }
    for(int i = 0; i < ALPHABET_SIZE; i++){
        if(root->childArray[i] != NULL) {
            char child = 'a' + i;
            completeHelp(root->childArray[i], currPrefix + child, completions);
        }
    }
    return completions;
}

int Trie::completeCount(string query) {
    TrieNode* current = root;
    int numRecs = 0;
    vector<string> completions;
    for(char c : query) {
        int index = c - 'a';
        if (current->childArray[index] != NULL){
            completeHelp(current, query, completions);
        }
        current = current->childArray[index];
    }
    numRecs = completions.size();
    return numRecs;
}

vector<string> Trie::complete(string query) {
    TrieNode* current = root;
    vector<string> completions;
    if(completeCount(query) == 0){
        return completions;
    }
    for(int i = 0; i < ALPHABET_SIZE; i++){
        if(root->childArray[i] != NULL) {
            completeHelp(current, query, completions);
        }
    }
    return completions;
}