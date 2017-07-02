<?php
	$dns = "mysql:dbname=u602296227_newda;host=localhost";
	$user = "Nome do banco de dados";
	$pass = "Senha do Banco de dados";

	try {
		$pdo = new PDO($dns, $user, $pass);
	}catch (PDOException $e){
		echo "Falha: ". $e->getMessage();
	}
	$h = $_GET['h'];
	if (!empty($h) ) {
		$pdo->query("UPDATE tabela3 SET status='1' WHERE MD5(id) = '$h'");
		echo "<script>alert('Cadastro confirmado com Sucesso!!!)</script>";
		$sql = $pdo->query("SELECT * FROM tabela3");
		echo "<script>location.href='index2.php'</script>";
		session_start();
		$_SESSION['usuario'] = true;


}

?>
