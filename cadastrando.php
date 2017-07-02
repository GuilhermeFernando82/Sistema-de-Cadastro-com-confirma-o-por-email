<?php

	try {
		$dns = "mysql:dbname=u602296227_newda;host=localhost";
		$user = "nome do banco de dados";
		$pass = "Senha do banco de dados";
		$pdo = new PDO($dns, $user, $pass);
	}catch (PDOException $e){
		echo "Falha: ". $e->getMessage();
	}

?>
<html>
<head>
<title>Cadastrando</title>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

<?php
	if(empty($_POST['nome'])){
	echo "<script>alert('Você precisa preencher todos os campos');
            location.href='sistema de cadastro.php';
            </script>";
	}
	elseif(empty($_POST['usuario'])){
	echo "<script>alert('Você precisa preencher todos os campos');
            location.href='sistema de cadastro.php';
            </script>";}
	elseif(empty($_POST['email'])){
	echo "<script>alert('Você precisa preencher todos os campos');
            location.href='sistema de cadastro.php';
            </script>";
	}
	elseif(empty($_POST['senha'])){
	echo "<script>alert('Você precisa preencher todos os campos');
            location.href='sistema de cadastro.php';
            </script>";}
    else{   
    		$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$user = addslashes($_POST['usuario']);
			$senha = md5(addslashes($_POST['senha']));
			$ip = $_SERVER["REMOTE_ADDR"];
			
			$pdo->query("INSERT INTO tabela3 SET nome= '$nome', email= '$email', usuario= '$user', senha= '$senha', ip= '$ip'");
			$id = $pdo->lastInsertId();
			$md5 = md5($id);
			$link = "http://newwebcraftprogram.esy.es/confirma.php?h=".$md5;

			$assunto = "Confirme seu cadastro";
			$mensagem = "Clique aqui para confirmar seu cadastro\n\n".$link;
			$headers = "From: guilhermelvr82@gmail.com\n";
			mail($email, $assunto, $mensagem, $headers);
			echo "<script>alert('Confirme seu cadastro no seu email')</script>";
			echo "Confirme o cadastro no seu email";
			
            }

		

?>
</body>

</html>
		