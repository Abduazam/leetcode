<?php

namespace Easy\SameTree;

class TreeNode {

    public mixed $val = null;
    public mixed $left = null;
    public mixed $right = null;

    function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

class Solution
{
    /**
     * @param TreeNode|null $p
     * @param TreeNode|null $q
     *
     * @return boolean
     */
    public function isSameTree(?TreeNode $p, ?TreeNode $q): bool
    {
        if (is_null($p) && is_null($q)) {
            return true;
        }

        if ($p->val !== $q->val){
            return false;
        }

        return $this->isSameTree($p->left, $q->left) && $this->isSameTree($p->right, $q->right);
    }
}