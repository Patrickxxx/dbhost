<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- All the files that are required -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="Imagens/logo.ico">
  <link rel="stylesheet" type="text/css" href="TelaLogin.css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<form method="post" action="Inserir_cadastro.php">
</head>
<!-- Where all the magic happens -->


<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">Cadastro</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="register-form" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="reg_username" class="sr-only">Nome do Usuario</label>
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nome do Usuario">
					</div>
					<div class="form-group">
						<label for="reg_password" class="sr-only">Senha</label>
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
					</div>
					<div class="form-group">
						<label for="reg_password_confirm" class="sr-only">Confirmar senha</label>
						<input type="password" class="form-control" id="confirmar_senha" name="confirmar_senha" placeholder="Confirmar senha">
					</div>
					
					<div class="form-group">
						<label for="reg_email" class="sr-only">Email</label>
						<input type="text" class="form-control" id="email" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="reg_fullname" class="sr-only">Nome Completo</label>
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo">
					</div>
					
					<div class="form-group login-group-checkbox">
						<input type="radio" class="" name="sexo" id="male" placeholder="username" value="masculino">
						<label for="male">masculino</label>
						
						<input type="radio" class="" name="sexo" id="female" placeholder="username" value="feminino">
						<label for="female">feminino</label>
					</div>
					
					<div class="form-group login-group-checkbox">
						<input type="checkbox" id="termos" name="termos" value="1">
						<label for="termos">Eu concordo com os <a href="#">termos.</a></label>
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i><img src="Imagens/arrow16x16.png"></button>
			</div>
			<div class="etc-login-form">
                            <p>Já possui uma conta? <a href="TelaLogin.php">Clique Aqui!</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>


	
