<?php

$operacion = $_POST["operacion"];

$n1 = $_POST["numero1"];
$n2 = $_POST["numero2"];

if ($operacion = "suma")
    {
        $total = $n1 + $n2;
    }

if ($operacion = "multiplicacion")
    {
        $total = $n1 * $n2;
    }
    
if ($operacion = "resta")
    {
        $total = $n1 -  $n2;
    }

if ($operacion = "division")
    {
        $total = $n1 / $n2;
    }

echo "resultado: $total";

?>