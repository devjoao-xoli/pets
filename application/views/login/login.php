<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/imagens/icone site icon.ico" type="image/x-icon">
    <title>PET'S -Login</title>
    <link rel="stylesheet" href="/assets/styles/login.css">
</head>
<body>
    <div class="login-wrapper">
        <div class="login-container">
            <div id="h-login">
            <img src="/assets/imagens/logo nome site.png" alt="Logo PET's" class="logo">
            </div>
            <form action="/login/validate" method="POST">
                <label for="usuario"> 
                    <img src="/assets/imagens/perfil-de-usuario.png" alt="Ícone Usuário" class="icon">Usuário:
                </label>
                <input type="text" id="usuario" name="usuario" required>
                
                <label for="senha">
                    <img src="/assets/imagens/senha.png" alt="Ícone Senha" class="icon">Senha:
                </label>
                <input type="password" id="senha" name="senha" required>
                
                <button type="submit">Fazer Login</button>
            </form>
            <p>Não possui uma conta? <a href="#">Cadastre-se</a></p>
        </div>
    </div>
</body>
</html>
