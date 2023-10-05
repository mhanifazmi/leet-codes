class Solution {

    /**
     * @param String $colors
     * @return Boolean
     */
    function winnerOfGame($colors) {
        $alice_wins = $bob_wins = 0;

        for ($i = 1; $i < strlen($colors) - 1; $i++) {
            if ($colors[$i - 1] == $colors[$i] && $colors[$i] == $colors[$i + 1]) {
                if ($colors[$i] == 'A') {
                    $alice_wins++;
                } else {
                    $bob_wins++;
                }
            }
        }

        return $alice_wins > $bob_wins;
    }
}