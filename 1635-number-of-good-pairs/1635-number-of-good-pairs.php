class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        $total = 0;
        foreach($nums as $key1 => $i){
            foreach($nums as $key2 => $j){
                if($key1 == $key2) continue;
                if($i == $j){
                    $total++;
                }
            }
        }

        return $total / 2;
    }
}