<?php

echo "Mayor número entero ". PHP_INT_MAX.'<br>';
echo "Menor número entero ". PHP_INT_MIN.'<br>';

if (PHP_INT_SIZE==4)
  echo "32 bits";

if (PHP_INT_SIZE==8)
  echo "64 bits";

?>