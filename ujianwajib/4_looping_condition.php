<?php
$x=1;
$y=3;
$z=5;
while ($x <= 50) {
    $c=$x % $y;
    $d=$x % $z;
    
    if ($c == 0 && $d==0) {
        echo "foobar";
        echo"<br>";
    }
    elseif ($d==0) {
        echo"bar";
        echo"<br>";
    }
    elseif ($c==0 ) {
        echo"foo";
        echo"<br>";
    }
    
    $x=$x+1;
}
?>