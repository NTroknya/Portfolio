#pragma once
#include <iostream>
#include <string>
#include <vector>
using namespace std;

class AVLTree
{
public:
	typedef string value_type;
	typedef unsigned int size_type;

	AVLTree(size_type sz = 0);

	AVLTree(const AVLTree &s);
	~AVLTree();

	AVLTree &operator=(const AVLTree &s);

	bool insert(size_type key, value_type value);

	bool find(size_type key, value_type &value);

	vector<value_type> findRange(int lowkey, int highkey);

	size_type getSize() const;

	size_type getHeight() const;

	void print();

private:
	class AVLTreeNode
	{
	public:
		AVLTreeNode *left;
		AVLTreeNode *right;
		value_type value;
		size_type key;

		AVLTreeNode()
		{
			left = nullptr;
			right = nullptr;
		}

		AVLTreeNode(value_type item, size_type newKey)
		{
			left = nullptr;
			right = nullptr;
			value = item;
			key = newKey;
		}

		~AVLTreeNode(){};
	};
	AVLTreeNode *root;
	size_type numNodes;
};
ostream &operator<<(ostream &, AVLTree &);