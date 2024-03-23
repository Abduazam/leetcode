<?php

namespace Easy\RemoveDuplicatesFromSortedList;

class ListNode {
    public mixed $val = 0;
    public mixed $next = null;

    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{
    /**
     * @param  ListNode  $head
     * @return ListNode
     */
    function deleteDuplicates(ListNode $head): ListNode
    {
        $current = $head->next;
        $previous = $head;

        while (! is_null($current))
        {
            if ($previous->val === $current->val) {
                $temp = $current->next;
                $previous->next = $temp;
                $current = $temp;
            } else {
                $previous = $current;
                $current = $current->next;
            }
        }

        return $head;
    }
}