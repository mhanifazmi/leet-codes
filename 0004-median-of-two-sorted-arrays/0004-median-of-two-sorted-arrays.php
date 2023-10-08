class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $num = array_merge($nums1, $nums2);
        array_multisort($num, SORT_ASC, SORT_NUMERIC);
        $total = count($num);
        
        if(count($num) % 2 == 0){
           return round($num[($total / 2) - 1] + $num[($total / 2)], 2) / 2;
        }
        else{
            return $num[floor($total / 2)];
        }
    }
}