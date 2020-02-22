<?php

$val1 = $sql->query("SELECT * FROM cliente WHERE email = '$email'");
$val2 = $sql->query("SELECT * FROM cliente WHERE nome = '$nome'");
$check1 = mysqli_num_rows($val1);
$check2 = mysqli_num_rows($val2);

if (($check1 == 1 and $check2 == 1)){
	echo"<h3>Cliente já registrado</h3><br></br>";
	echo"<a href='login.php'>Login</a><br></br>";
	echo"<a href='cadastro.html'>Tentar Novamente</a>";
} else {
    $sql->query("INSERT INTO cliente (nome
        ".(($email == "") ? "" : ", email")."
        ".(($fixo == "") ? "" : ", telefone_fixo")."
        ".(($celular == "") ? "" : ", telefone_celular")."
        ".(($apelido == "") ? "" : ", apelido").")
    VALUES ('$nome'
        ".(($email == "") ? "" : ", '$email'")."
        ".(($fixo == "") ? "" : ", '$fixo'")."
        ".(($celular == "") ? "" : ", '$celular'")."
        ".(($apelido == "") ? "" : ", '$apelido'").")");
    echo"Cadastro Realizado com sucesso!!!<br></br>";
	echo"<a href='listar.php'>Listar Clientes</a>";
}
?>
