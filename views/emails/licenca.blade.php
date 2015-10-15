<html>
    <head>
        <title>Acesso Small Mobile {{ $cnpj }}</title>
        <meta charset="utf-8">
    </head>
    <body style="font: normal 13px Tahoma, Verdana, Arial;">
        <div>
            <div>
                <strong>Olá,</strong>
            </div>
            <div>
                <p>
                    A empresa abaixo não possui licença, ou sua licença expirou e tentou acessar o Small Mobile.<br>
                    Localize os dados da empresa no Sistema Interno e faça um contato oferecendo o produto.
                </p>
            </div>
            <div>
                <p>
                    Empresa: <strong>{{ $cnpj }}</strong><br>
                    Data do acesso: <strong>{{ $data }}</strong><br>
                    IP usado para acessar: {{ $_SERVER["REMOTE_ADDR"] }}
                </p>
            </div>
        </div>
    </body>
</html>