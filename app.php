<?php

function solveMatrix($matrix) {
    $result_arr = array();
    $top_row = 0;
    $bottom_row = count($matrix) - 1;
    $left_col = 0;
    $right_col = count($matrix[0]) - 1;

    while ($top_row <= $bottom_row && $left_col <= $right_col) {
        // Traverse right on top row
        for ($col = $left_col; $col <= $right_col; $col++) {
            array_push($result_arr, $matrix[$top_row][$col]);
        }
        $top_row++;

        // Traverse down on right column
        for ($row = $top_row; $row <= $bottom_row; $row++) {
            array_push($result_arr, $matrix[$row][$right_col]);
        }
        $right_col--;

        // Traverse left on bottom row
        if ($top_row <= $bottom_row) {
            for ($col = $right_col; $col >= $left_col; $col--) {
                array_push($result_arr, $matrix[$bottom_row][$col]);
            }
            $bottom_row--;
        }

        // Traverse up on left column
        if ($left_col <= $right_col) {
            for ($row = $bottom_row; $row >= $top_row; $row--) {
                array_push($result_arr, $matrix[$row][$left_col]);
            }
            $left_col++;
        }
    }

    return $result_arr;
}


$matrix = array(
    array(10, 11, 12),
    array(17, 18, 13),
    array(16, 15, 14)
);
    
print_r (solveMatrix($matrix));

?>
