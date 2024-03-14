<?php
class Solution {

/**
 * @param Integer[] $nums1
 * @param Integer $m
 * @param Integer[] $nums2
 * @param Integer $n
 * @return NULL
 */
function merge(&$nums1, $m, $nums2, $n) {
    for ( $j = 0, $i = $m; $j<$n; $j++){
        $nums1[$i] = $nums2[$j];
        $i++;
    }
    sort($nums1);
}
}
?>