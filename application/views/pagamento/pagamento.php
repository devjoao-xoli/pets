<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PET's - Pagamento</title>
    <link rel="stylesheet" href="/assets/styles/pagamento.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <link rel="shortcut icon" href="/assets/imagens/icone site icon.ico" type="image/x-icon">
</head>
<body>
    <div class="payment-container">
        <header><img src="/assets/imagens/logo nome site.png" class="icon" alt="logo pets"></header>
        <header>
            <img src="/assets/imagens/icone amarelo.png" class="icon-usu" alt="Ícone Usuário">
            <h1>Pagamento:</h1>
        </header>
        <div class="payment-info">
            <div class="info-item">
                <p class="info-title">Saldo Atual:</p>
                <p class="info-content">R$ 500,00</p>
            </div>
            <div class="info-item">
                <p class="info-title">Valor do Pagamento:</p>
                <input type="number" id="payment-value" class="input-value" placeholder="Digite o valor">
            </div>
            <p id="Textkey"> </p>
            <div id="app">
              <div class="preview-container">
                <video id="preview"></video>
              </div>
            </div>
        </div>
        <footer>
            <nav>
                <a href="/home"><button><img src="/assets/imagens/botao-de-inicio.png" class="icon" alt="Home"></button></a>
                <a href="/historico"><button><img src="/assets/imagens/calendario.png" class="icon" alt="Agenda"></button></a>
                <a href="/perfil"><button><img src="/assets/imagens/perfil-de-usuario.png" class="icon" alt="Meu Cadastro"></button></a>
            </nav>
        </footer>
    </div>
    <script type="text/javascript" src="/assets/script/instascan-master/docs/app.js"></script>
    <script src="/assets/script/instascan-master/src/scanner.js"></script>
    <script>
        var vericacao
        let scanner = new Instascan.Scanner(
            {
                video: document.getElementById('preview')
            }
            
        );
        
        scanner.addListener('scan', function(content) {
            
            var chave = content
            document.querySelector("#Textkey"). innerHTML = `a chave de pagamento é: ${chave}`
            vericacao = true
        });
        Instascan.Camera.getCameras().then(cameras => 
        {
            if(cameras.length > 0){
                scanner.start(cameras[0]);
            } else {
                alert("Não existe câmera no dispositivo!");
            }
        });
        if(vericacao){
            console.log("aaaaaaaaa")
        }
    
    </script>
</body>
</html>
