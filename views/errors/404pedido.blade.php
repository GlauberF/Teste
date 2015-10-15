<!DOCTYPE html>
<html>
    <head>
        <title>Smallmobile - Pedido não encontrado.</title>

        <link href="//fonts.googleapis.com/css?family=Quicksand:400" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                background-color: #35C4EC;
                margin: 0;
                padding: 0;
                width: 100%;
                color: #FFF;
                display: table;
                font-weight: 400;
                font-family: 'Quicksand';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 20px;
                margin-bottom: 25px;
            }
            .back{
                margin-top: 10px;
            }
            .back a{
                color: #FFF;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Pedido não encontrado.</div>
                <div class="back">
                    <a href="{{ route('dashboard') }}">Voltar</a>
            </div>
        </div>
    </body>
</html>
