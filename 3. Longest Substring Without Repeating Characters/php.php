<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $len = strlen($s);
        $maxLen = $left = 0;
        for ($right=0;$right<strlen($s);$right++) {
            $char = $s[$right];

            if (isset($seen[$char]) && ($seen[$char] >= $left)) {
                $left = $seen[$char] + 1;
            }

            $seen[$char] = $right;
            $maxLen = max($maxLen, $right - $left + 1);
        }

        return $maxLen;
    }
}