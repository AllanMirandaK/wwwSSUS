<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Formulário de Login Unidade</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="../css/loginmedico.css" />
</head>
<body>
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action="loginunidaderota.php"> 
          <h1>Login</h1> 
          <p> 
            <label for="usuario_login">Seu usuario</label>
            <input id="usuario_login" name="usuario_login" required="required" type="text" placeholder="ex. unpedrabranca"/>
          </p>
           
          <p> 
            <label for="senha_login">Sua senha</label>
            <input id="senha_login" name="senha_login" required="required" type="password" placeholder="ex. senha" /> 
          </p>
           
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
        </form>
      </div>
    </div>
  </div>  
</body>
</html>