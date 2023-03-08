<?php

$a = ['oi',2,'o',false,'hello',8,4,'4',true,'oshe',5];

$x = count($a);
$y =0;

while($y<$x){


if(is_string($a[$y])){
    echo $a[$y].' é string<br>';
    $y++;
}
else{
    echo $a[$y].' Não e string<br>';
    $y++;

};

};



?>