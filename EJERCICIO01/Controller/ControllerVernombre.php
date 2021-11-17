<?php
require('Model/Conexion.php');
$con=new Conexion();
$id=$con->getUsers();

require('Views/ViewsVernombre.php');


?>