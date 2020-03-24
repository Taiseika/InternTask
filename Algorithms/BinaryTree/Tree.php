<?php


class Tree
{
    protected $root; // корень дерева

    public function __construct() {
        $this->root = null;
    }

    public function isEmpty() {
        return $this->root === null;
    }

    public function insert($item) {
        $node = new Node($item);
        if ($this->isEmpty()) {
            // правило 1
            $this->root = $node;
        }
        else {
            // правило 1
            $this->insertNode($node, $this->root);
        }
    }

    protected function insertNode($node, &$subtree)
    {
        if ($subtree === null) {
            $subtree = $node;
        } else {
            if ($node->value > $subtree->value) {
                $this->insertNode($node, $subtree->right);
            } elseif ($node->value < $subtree->value) {
                $this->insertNode($node, $subtree->left);
            } else {
                $subtree = $node;
            }
        }
    }

    public function traverse()
    {
        $this->root->dump();
    }
}