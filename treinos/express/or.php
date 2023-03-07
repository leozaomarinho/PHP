<?php

$a = 10;
$b = 20;
$c = 20;

if($a >= $b || $c == $b ){
    echo 'Uma das duas condições foram atendidas!';
}
else{
    echo 'as condições não foram atendidas!';
}

echo '<br>';
echo '<br>';
echo '<br>';

if(12<5 || 'João' === 'João' || 1 > 5 || 20 === '02' && 51>=31){

    echo 'duas condições foram atendidas!';
}
else{
    echo ' as condições não foram atendidas!';
}

?>