<?php session_start();
if (!isset($_SESSION['usuario'])){
    header('Location: index.php');
}

include './Template/Template2.php';
?>

<html>

<body>



	

</body>
</html>