<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">

  <title>Cadastrar</title>

</head>

<body background="code.jpg">

  <div id="cabeca">
	<h2>Cadastre-se para ter acesso ao nossos Cursos</h2>
  </div>
  <div class="login-card">
  <form name="form1" method="post" action="cadastrando.php" onsubmit="return validar()">
	<input type="text" name="nome" placeholder="Nome"></br>
  <input type="text" name="usuario" placeholder="Username"></br>
	<input type="text" name="email" placeholder="email"></br>
  <input type="password" name="senha" placeholder="Password"></br>
  <input id="cadastro" type="submit" name="login" class="login login-submit" value="Cadastrar">
  </form>
</div>


</body>

</html>