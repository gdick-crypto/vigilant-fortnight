<?php
$a = 5; // 5 as an integer

var_dump($a == 5);              // Compare value; return true
var_dump($a == '5');            // Compare value (ignore type); return true
var_dump($a === 5);             // Compare type/value (integer vs integer); return true
var_dump($a === '5');           // Compare type/value (integer vs string); return false

// Equality comparisons
if (strpos('testing', 'test')) {        // 'test' is found at position 0, which is interpreted as the boolean 'false'
    echo "Equality comparisons is true!\n";
} else {
    echo "Equality comparisons is false!\n";
}


// Strict comparisons
if (strpos('testing', 'test') !== false) {      // True, as strict comparison was made (0 !== false)
    echo "Strict comparisons is false!\n";
} else {
    echo "Strict comparisons is true!\n";
}

// Switch
$answer = test(2);      // the code from both 'case 2' and 'case 3' will be implemented

function test($a){
    switch ($a){
        case 1:
            echo "Case number 1 is up and running, sir!\n";
            break;
        case 2:
            echo "Case number 2 is up and running, sir!\n";
        case 3:
            echo "Case number 3 is up and running, Sir!\n";
            return $result;
        default:
            echo "Default case is up and running, sir!\n";
            return $error;
    }
}

?>