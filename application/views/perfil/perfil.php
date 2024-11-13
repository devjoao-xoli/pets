<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PET's - Meu Perfil</title>
    <link rel="shortcut icon" href="/assets/imagens/icone site icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/styles/perfil.css">
	<script src="/assets/script/jquery.min.js"></script>
	<script src="/assets/script/qrcode.min.js"></script>
	<style>
		#qrcode {
			display: flex;
			justify-content: center;
		}
	</style>
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
                <p class="info-content"><?php echo $pessoa->email; ?></p>
            </div>
            <div class="info-item">
                <p class="info-title">Data de Abertura da Conta:</p>
                <p class="info-content"><?php echo $conta->data_abertura; ?></p>
            </div>
            <div class="info-item">
                <p class="info-title">Tipo de Conta:</p>
                <p class="info-content"><?php echo $pessoa->tipo_conta; ?></p>
            </div>
            <section class="">
                <div class="uuid-container">
                    <p><strong>Código UUID:</strong></p>
                    <p class="uuid"><?php echo $conta->uuid; ?></p>
                </div>
				   <div id="qrcode"></div>
                
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

<script>
	var qrcode = new QRCode("qrcode", {
    text: "<?php echo $conta->uuid; ?>",
    width: 128,
    height: 128,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
});

</script>

</body>
</html>
