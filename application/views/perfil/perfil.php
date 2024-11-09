<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PET's - Meu Perfil</title>
    <link rel="shortcut icon" href="/assets/imagens/icone site icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/styles/perfil.css">
</head>
<body>
    <div class="profile-container">
        <header><img src="/assets/imagens/logo nome site.png" width="200" ></header>
        <header>
            <img src="/assets/imagens/icone amarelo.png" class="icon-usu" alt="Ícone Usuário">
            <h1>Meus Dados:</h1>
        </header>
        <div class="profile-info">
            <div class="info-item">
                <p class="info-title">Email:</p>
                <p class="info-content">usuario@exemplo.com</p>
            </div>
            <div class="info-item">
                <p class="info-title">Data de Abertura da Conta:</p>
                <p class="info-content">01/01/2023</p>
            </div>
            <div class="info-item">
                <p class="info-title">Tipo de Conta:</p>
                <p class="info-content">Aluno</p>
            </div>
            <section class="">
                <div class="uuid-container">
                    <p><strong>Código UUID:</strong></p>
                    <p class="uuid">123e4567-e89b-12d3-a456-426614174000</p>
                </div>
                     <!---o antigo não tinha alinhamento central , mas o de antes era esse daqqui!!
                     <div class=".qr-code-container ">  -->
                   <header><img src="/assets/imagens/qr.png" alt="QR Code" width="120"></header>
                
            </section>
        </div>
        <footer>
            <nav>
                <a href="/home"><button> <img src="/assets/imagens/botao-de-inicio.png" class="icon" alt="Home"></button></a>
                <a href="historico.html"><button> <img src="/assets/imagens/calendario.png" class="icon" alt="Agenda"></button></a>
                <a href="/perfil"><button> <img src="/assets/imagens/perfil-de-usuario.png" class="icon" alt="Meu Cadastro"></button></a>
            </nav>
        </footer>
    </div>
</body>
</html>
