<?php

namespace Easy\ReverseLinkedList;

class ListNode
{
	public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{
	/**
     * @param ListNode $head
     * 
     * @return ListNode
     */
    function reverseList($head) {
        $prev = null; 
        
        while(! is_null($head)){
            $next = $head->next;
            $head->next = $prev;
            $prev = $head;
            $head = $next; 
        }

        return $prev;
    }
}

$solution = new Solution();
$result = $solution->reverseList();
var_dump($result);