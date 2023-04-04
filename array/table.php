<?php

$arr = [
    'joao' => 25.7,
    'leonardo' => 15.1,
    'thays' => 12.4,
    'maria' => 45.5,
    'henrique' => 35.7
];

arsort($arr);

?>

<h1>Ranking</h1>
<ol>
<?php foreach($arr as $pessoa => $pontuacao):?>
    <li><?=$pessoa?> -> <?=$pontuacao?> pontos</li>
<?php endforeach; ?>
</ol>