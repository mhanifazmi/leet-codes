class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $number = $value = 0;
        $skip = 0;
        $symbols = [
            'I',
            'V',
            'X',
            'L',
            'C',
            'D',
            'M',
        ];

        $values = [1, 5, 10, 50, 100, 500, 1000];

        $reverse = strrev($s);

        foreach(str_split($reverse) as $key => $rev){
            if($skip == 1) {
                $skip = 0;
                continue;
            }
            $diff = array_search($rev, $symbols) - array_search($reverse[$key + 1], $symbols);

            if(isset($reverse[$key + 1]) && $diff > 0 && $diff <= 2){
                $value = abs($values[array_search($reverse[$key + 1], $symbols)] - $values[array_search($rev, $symbols)]);
                $skip = 1;
            }
            else{
                $value = $values[array_search($rev, $symbols)];
            }
            $number += $value;
        }
        
        return $number;
    }
}