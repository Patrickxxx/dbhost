<!-- Inicio navbar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="#"><img src="Imagens/logo.ico"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="#">Como Usar</a></li>
        <li><a href="#">Contato</a></li>
         <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuário <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                        <li><a href="listar_usuario.php">Listar</a></li>
                        <li><a href="area_cad.php">Cadastrar</a></li>       
                        <li role="separator" class="divider"></li> 
                        <li class="dropdown-header">Outras coisas</li> 
                        <li><a href="#">teste Separated link</a></li> 
                  </ul>
                </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

      </ul>
    </div>
  </div>
</nav>
  <!-- Fim navbar -->