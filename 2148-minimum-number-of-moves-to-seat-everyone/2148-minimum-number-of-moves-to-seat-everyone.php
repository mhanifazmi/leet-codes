class Solution {

    /**
     * @param Integer[] $seats
     * @param Integer[] $students
     * @return Integer
     */
    function minMovesToSeat($seats, $students) {
        $move = 0;
        sort($seats);
        sort($students);
        foreach($students as $key => $student){
            $move = $move + abs($student - $seats[$key]);
        }
        return $move;
    }
}