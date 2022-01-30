<?php

$password = 'developer';
$contraseniaEncriptada=password_hash($password,PASSWORD_DEFAULT);
echo $contraseniaEncriptada;

?>