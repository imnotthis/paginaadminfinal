<!DOCTYPE html>
<html lang="pt-br">
  
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Página Login</title>
</head>
  
<body>
    <form action="validate.php" method="post">
        <div class="login-box">
            <h1>Login</h1>
  
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Nome"
                         name="nome" value="">
            </div>
  
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Senha"
                         name="senha" value="">
            </div>
  
            <input class="button" type="submit"
                     name="login" value="Entrar como Adm">
        </div>
    </form>
</body>
  
</html>
