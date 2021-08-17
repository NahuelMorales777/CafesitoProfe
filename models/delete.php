<?php

include("../config/app.php");
$id_pedido = $_POST['id_pedido']; 

$db->query("DELETE FROM pedido WHERE id_pedido = $id_pedido");

header('Location: ../eliminar.php?success=true');
