#include "sequence.h"

Sequence::Sequence( size_type sz )
{
    if(sz == 0){
        numElts = 0;
        head = NULL;
        tail = NULL;
    }
    else{
        numElts = sz;
        for(int i = 0; i<numElts;i++){
            if (head == NULL){
                head = new SequenceNode();
                tail = head;
            }
            else{
                SequenceNode* current = head;
                while (current->next != NULL){
                    current = current->next;
                }
                current->next = new SequenceNode();
                current->next->prev = current;
                if(current->next == NULL){
                    tail = current;
                }
            }
        }
        
    }
}

Sequence::Sequence( const Sequence& s )
{
    numElts = s.numElts;
    head = new SequenceNode();
    head->elt = s.head->elt;
    SequenceNode* current1 = head;
    SequenceNode* current2 = s.head;
    for(int i = 0; i<numElts;i++){
        while (current1->next != NULL){
            current1 = current1->next;
            current2 = current2->next;
        }
        current1->next = new SequenceNode();
        current1->next->prev = current1;
        current1->elt = current2->elt;
        if(current1->next == NULL){
            tail = current1;
        }
    }
}

Sequence::~Sequence()
{
    SequenceNode* current = tail;
    SequenceNode* last = current->prev;
    while(current->prev != NULL) {
        delete[] current;
        current = last;
        last = current->prev;
    }
    current = head;
    delete[] current;   
}

Sequence& Sequence::operator=( const Sequence& s )
{
    head = s.head;
    Sequence* copyS = this;
    return *copyS;
}

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

void Sequence::pop_back()
{
    if(numElts != 0){
        numElts--;
        SequenceNode* current = tail;
        tail = current->prev;
        tail->next = NULL;
    }
    else {
        throw exception();
    }
}

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

bool Sequence::empty() const
{
    if(head == NULL){
        return true;
    }
    else{
        return false;
    }
}

Sequence::size_type Sequence::size() const
{
    return numElts;
}

void Sequence::clear()
{
    head->next = NULL;
    head = NULL;
}

void Sequence::erase( size_type position, size_type count )
{
    
}

void Sequence::print() {
    SequenceNode* current = head;
    while(current->next != NULL) {
        cout << current->elt << " ";
        current = current->next;
    }

}


ostream& operator<<( ostream& os, Sequence& s )
{
    s.print();
    return os;
}