<?php

$x = $_GET['num1'] ?? 0;
$y = $_GET['num2'] ?? 0;

echo " <h3> $x e $y </h3>";


if ($x > $y) {
    echo "$x é maior que $y<br>";
} else {
    echo "$x não é maior que $y<br>";
}

if ($x < $y) {
    echo "$x é menor que $y<br>";
} else {
    echo "$x não é menor que $y<br>";
}


if ($x >= $y) {
    echo "$x é maior ou igual a $y<br>";
} else {
    echo "$x não é maior ou igual a $y<br>";
}


if ($x <= $y) {
    echo "$x é menor ou igual a $y<br>";
} else {
    echo "$x não é menor ou igual a $y<br>";
}


if ($x == $y) {
    echo "$x é igual a $y <br>";
} else {
    echo "$x não é igual a $y <br>";
}


if ($x != $y) {
    echo "$x é diferente de $y <br>";
} else {
    echo "$x não é diferente de $y <br>";
}


if ($x <> $y) {
    echo "$x é diferente de $y <br>";
} else {
    echo "$x não é diferente de $y<br>";
}


if ($x === $y) {
    echo "$x é idêntico a $y <br>";
} else {
    echo "$x não é idêntico a $y <br>";
}


if ($x !== $y) {
    echo "$x não é idêntico a $y <br>";
} else {
    echo "$x é idêntico a $y <br>";
}


$result = $x <=> $y;
if ($result == -1) {
    echo "$x é menor que $y (resultado: -1)<br>";
} elseif ($result == 0) {
    echo "$x é igual a $y (resultado: 0)<br>";
} else {
    echo "$x é maior que $y (resultado: 1)<br>";
}
?>
