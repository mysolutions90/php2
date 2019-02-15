<?php
try {
$conexion = new PDO ('mysql:host=localhost;dbname=php','root','');
} catch (PDOException $e) {
	echo "ERROR".$e->GetMessage();
}
?>