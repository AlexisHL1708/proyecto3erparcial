<?php

//variables de sesión
session_start();

extract($_REQUEST); //post-get
//$foto=$_POST['foto'];
$vista='front.php';

require_once('config.php');

if(isset($btnAccionUsr))
    require_once('controlador/usuario_C.php');

elseif(isset($btnAccionBan))
    require_once('controlador/usuario_C copy.php');


elseif(isset($btnAccionEmp))
    require_once('controlador/usuario_C copy 2.php');
require_once('vista/'.$vista);

?>