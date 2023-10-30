#include "Sequence.h"

/// @brief Creates a sequence of size sz
/// @param sz 
Sequence::Sequence( size_type sz )
{
    if(sz == 0){
            numElts = 0;
            head = nullptr;
            tail = nullptr;
        }
    else{
        numElts = sz;
        for(int i = 0; i<numElts;i++){
            if (head == nullptr){
                head = new SequenceNode();
                tail = head;
            }
            else{
                SequenceNode* current = head;
                while (current->next != nullptr){
                    current = current->next;
                }
                current->next = new SequenceNode();
                current->next->prev = current;
                if(current->next == nullptr){
                    tail = current;
                }
            }
        }
        
    }
}

/// @brief creates a standalone copy of Sequence s
/// @param s 
Sequence::Sequence( const Sequence& s )
{
    numElts = s.numElts;
    head = new SequenceNode();
    head->elt = s.head->elt;
    SequenceNode* current1 = head;
    SequenceNode* current2 = s.head;
    for(int i = 0; i<numElts;i++){
        while (current1->next != nullptr){
            current1 = current1->next;
            current2 = current2->next;
        }
        current1->next = new SequenceNode();
        current1->next->prev = current1;
        current1->elt = current2->elt;
        if(current1->next == nullptr){
            tail = current1;
        }
    }
}

/// @brief Destructor for sequence, to destroy the nodes
Sequence::~Sequence()
{
    SequenceNode* current = tail;
    SequenceNode* last = current->prev;
    while(current->prev != nullptr) {
        delete[] current;
        current = last;
        last = current->prev;
    }
    current = head;
    delete[] current;
}

/// @brief Makes 2 sequences the same sequence
/// @param s 
/// @return copyS
Sequence& Sequence::operator=( const Sequence& s )
{
    head = s.head;
    Sequence* copyS = this;
    return *copyS;
}

/// @brief find a specific node in sequence and return it
/// @param position 
/// @return value stored in position
Sequence::value_type& Sequence::operator[]( size_type position )
{
    if(position >= 0 && position <= (numElts-1)){
        SequenceNode* current = head;
        for(int i = 0; i < position + 1;i++){
            current = current->next;
        }    
        return current->elt;
    }
    else {
        throw exception();
    }
}

/// @brief Add a new node with value at the end of the sequence
/// @param value 
void Sequence::push_back( const value_type& value )
{
    numElts++;
    SequenceNode* current = tail;
    SequenceNode* newNode;
    newNode = new SequenceNode(value);
    current->next = newNode;
    current->next->prev = current;
    tail = current->next;
}

/// @brief return the last value of the sequence and delete said node
void Sequence::pop_back()
{
    if(numElts != 0){
        numElts--;
        SequenceNode* current = tail;
        tail = current->prev;
        tail->next = nullptr;
    }
    else {
        throw exception();
    }
}

/// @brief Add a new sequence node anywhere in the current sequence, so long as it is accessible
/// @param position 
/// @param value 
void Sequence::insert( size_type position, value_type value )
{
    if(position >= 0 && position <= (numElts-1)){
        SequenceNode* current = head;
        SequenceNode* nextNode;
        for(int i = 0; i < position + 1;i++){
            current = current->next;
            if(i=position-1){
                nextNode = current->next;
                current->next = new SequenceNode();
                nextNode->prev = current->next;
                current->next->next = nextNode;
            }
        }
        numElts++;
    }
    else {
        throw exception();
    }
}

/// @brief return the first value in the sequence
/// @return NULL or the element in head
const Sequence::value_type& Sequence::front() const
{
    if(numElts == 0){
        return NULL;
    }
    else{
        SequenceNode* current = head;
        return current->elt;
    }
}

/// @brief return the last value in the sequnece
/// @return NULL or the value stored in tail
const Sequence::value_type& Sequence::back() const
{
    if(numElts == 0){
        return NULL;
    }
    else{
        SequenceNode* current = tail;
        return current->elt;
    }
}

/// @brief Check if the sequence has any nodes in it
/// @return true if empty, false otherwise
bool Sequence::empty() const
{
    if(head == nullptr){
        return true;
    }
    else{
        return false;
    }
}

/// @brief Quick way to know the size of a Sequence
/// @return numElts
Sequence::size_type Sequence::size() const
{
    return numElts;
}

/// @brief Remove all nodes from a sequence
void Sequence::clear()
{
    SequenceNode* current = tail;
    SequenceNode* last = current->prev;
    while(current->prev != nullptr) {
        delete[] current;
        current = last;
        last = current->prev;
    }
    head = nullptr;
}

/// @brief Delete specified elements in range position through (position+count-1)
/// @param position 
/// @param count 
void Sequence::erase( size_type position, size_type count )
{
    SequenceNode *current = head;
    SequenceNode *gap;
    if (position >= 0 && position + count - 1 <= numElts-1){
        if(position+count-1 == numElts-1){
            current = tail;
            for(int i = 0; i<count;i++){
                current = current->prev;
                delete(current->next);
            }
            tail = current;
            current->next = nullptr;
        }
        else{
            for(int i = 0;i<numElts-1;i++){
                current = current->next;
                if(i>position && i<=position+count-1){
                    delete(current->prev);
                    gap = current;
                }
            }
            for(int i = 0;i<numElts-1;i++){
                current = current->next;
                if(i == position-1){
                    current->next = gap;
                }
            }
            numElts = numElts-count;    
        }
    }
    else{
        throw exception();
    }
}


/// @brief quick way to print without using a (nonexistent) print function
/// @param os 
/// @param s 
/// @return ostream& os
ostream& operator<<( ostream& os, Sequence& s )
{
    Sequence::SequenceNode *current = s.head;
    while(current->next != nullptr) {
        os << current->elt << " ";
        current = current->next;
    }
    return os;
}