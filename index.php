<?php

// Два  натуральных  числа  называют  дружественными,  если  каждое  из них равно сумме всех делителей другого. Найти все пары дружественных чисел, лежащих в диапазоне от N до M.  .

$n = 2;
$m = 1000;

function sumDivisor($num)
{
  $sumDiv = 0;

  for ($i=1; $i < $num ; $i++) {

    if ($num % $i == 0) {

      $sumDiv+=$i;
    }
  }
  return $sumDiv;
}

for ($i=$n; $i <= $m; $i++) {


  for ($j=$n; $j <= $m; $j++) {

    $sumDiv_I = sumDivisor($i);
    $sumDiv_J = sumDivisor($j);

    if (($sumDiv_I == $j) && ($sumDiv_J == $i) && ($i != $j)) {
      echo $i . ' и ' . $j . ' дружественные числа <br>';
    }
  }
}
