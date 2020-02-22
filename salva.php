<!doctype html>
<html lang="pt-br"> 
	<head>
		<meta charset="utf-8" />
		<title>Listar dados</title>
		
		<link rel="stylesheet" href="cadastroCSS.css">		
	</head> 
<body>
<?php
include "conexao.php";
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$fixo = $_POST['fixo'];

include "ifzao.php";


?>
</body>
</html>
