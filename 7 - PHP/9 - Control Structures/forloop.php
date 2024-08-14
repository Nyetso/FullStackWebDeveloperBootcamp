<?php

//for loop
// for (initialization; condition1 ; condition2){
//    //code to be executed
// }

//Sample 1
for ($value = 1 ; $value <= 10 ; $value++){
    echo $value."<br>";
}

//Sample 2
for ($value = 1 ; $value <= 10 ; $value++){
    $result = $value%2;
    if ($result > 0 ) {
        echo "Odd number <br>";
    } else {
        echo "Even number <br>";
    }
}

//Sample 3
for ($value = 0 ; $value <= 10 ; ++$value){
    $result = $value%2;
    if ($result > 0 ) {
        echo "Odd number <br>";
    } else {
        echo "Even number <br>";
    }
}

//Sample 4
$value = 0 ;
for (; $value <= 10 ; ){
    $result = $value%2;
    if ($result > 0 ) {
        echo "Odd number <br>";
    } else {
        echo "Even number <br>";
    }
    ++$value;
}


?>