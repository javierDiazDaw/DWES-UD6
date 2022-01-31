<?php

$password = '1234';
$contraseniaEncriptada=password_hash($password,PASSWORD_DEFAULT);
echo $contraseniaEncriptada;

?>