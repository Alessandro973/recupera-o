php
<?php

$n1 = 15;
$n2 = 8;
$n3 = 23;

if ($n1 > $n2 && $n1 > $n3) {
    echo "O maior número é: $n1";
} elseif ($n2 > $n1 && $n2 > $n3) {
    echo "O maior número é: $n2";
} else {
    echo "O maior número é: $n3";
}
