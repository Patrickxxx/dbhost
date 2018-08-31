<?php
session_start();
?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- All the files that are required -->
  <form action="validacao.php" method="post">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Description" content="Área Login">
  <meta name="author" content="Patrick Carmon">
  <link rel="icon" href="Imagens/logo.ico">
  
  <link rel="stylesheet" type="text/css" href="TelaLogin.css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
</head>
<!-- Where all the magic happens -->
<!-- LOGIN FORM -->

<body>
<?php 
                    unset($_SESSION['usuarioId'],			
		  $_SESSION['usuarioNome'], 		
		  $_SESSION['usuarioNivelAcesso'], 
		  $_SESSION['usuarioLogin'], 		
		  $_SESSION['usuarioSenha'], 		
		  $_SESSION['usuarioEmail']);
?>
<div class="text-center" style="padding:50px 0">
	<div class="logo">Login</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="login-form" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" class="sr-only">Nome do usuario</label>
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nome do usuario">
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Senha</label>
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
					</div>
					<div class="form-group login-group-checkbox">
						<input type="checkbox" id="relembrar" name="relembrar">
						<label for="relembrar">Relembrar minha senha</label>
					</div>
				</div>
                            <button type="submit" src="Imagens/arrow.png" class="login-button"><img src="Imagens/arrow16x16.png"></button>
			</div>
			<div class="etc-login-form">
                            <p>Esqueceu sua senha? <a href="TelaRecoverPassword.php">Clique Aqui</a></p>
                            <p>Novo usuario? <a href="TelaCadastro.php">Crie uma nova conta</a></p>
			</div>
		</form>
            <p class="text-center text-danger" >
                <?php
                if(isset($_SESSION['loginErro'])){
                    echo $_SESSION['loginErro'];
                   unset ($_SESSION['loginErro']);
                  }
                    ?>
            </p>
	</div>
	<!-- end:Main Form -->
</div>
</body>

</html>