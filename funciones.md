# FUNCIONES-PHP
```php
<?php

function suma ($n1,$n2)
    {
        return $n1 + $n2;
    }
;
echo suma (1,3);

function concatenar ($palabra1,$palabra2)
    {
        return $palabra1 . $palabra2;
    }
;
echo concatenar('luis ','guapo');

#scope
$a = 3;

function foo($a = 3)
{
    global $a; ##defino la variable como global
    $a += 2; #$a = $a + 2;
    echo $a;
};

foo();
echo $a;

?>
```
