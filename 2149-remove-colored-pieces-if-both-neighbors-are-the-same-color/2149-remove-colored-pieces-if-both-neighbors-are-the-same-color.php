class Solution {

    /**
     * @param String $colors
     * @return Boolean
     */
    function winnerOfGame($colors) {
        $alice_wins = $bob_wins = 0;

        $array = str_split($colors);

        foreach($array as $i => $arr){
            if ($array[$i - 1] == $arr && $arr == $array[$i + 1]) {
                if ($arr == 'A') {
                    $alice_wins++;
                } else {
                    $bob_wins++;
                }
            }
        }

        return $alice_wins > $bob_wins;
    }
}