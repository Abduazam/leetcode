<?php

namespace Easy\PalindromeLinkedList;

class ListNode
{
	public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{
	/**
     * @param ListNode $head
     * @return Boolean
     */
    public function isPalindrome($head)
    {
    	$values = [];

    	while (!is_null($head)) {
    		$values[] = $head->val;
    		$head = $head->next;
    	}

    	$left = 0;
    	$right = count($values) - 1;

    	while ($left < $right) {
    		if ($values[$left] !== $values[$right]) {
    			return false;
    		}
    		
    		$left++;
    		$right--;
    	}

    	return true;
    }
}

$solution = new Solution();
$result = $solution->isPalindrome();
var_dump($result);