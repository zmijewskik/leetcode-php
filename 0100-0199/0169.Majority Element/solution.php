<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $valuesCount = array_count_values($nums);
        return array_keys($valuesCount, max($valuesCount))[0];
    }
}
?>