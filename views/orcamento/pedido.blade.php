<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <!-- <meta name='google-site-verification' content='KHUl0qkYx8LwLuGso51D_fpNaXiiC-1RRu9uAMSLGRg' /> -->
        <script type='text/javascript'>
            // var _gaq = _gaq || [];
            // _gaq.push(['_setAccount', 'UA-4733448-2']);
            // _gaq.push(['_trackPageview']);

            // (function() {
            //     var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            //     ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            //     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            // })();

            function encode(text) {
                text = encodeURIComponent(text).replace(/'/g,"%27").replace(/"/g,"%22");
                return text;
            }

            function sendMail() {
                var novaLinha = '%0D%0A';
                var subject = encode('Orçamento {{ date('ymdHis', strtotime($pedido->created_at)) }}');
                var body = encode('Olá {{ $pedido->clifor->nome }}')
                    + novaLinha
                    + novaLinha
                    + encode('Segue o link para visualizar os dados referente ao orçamento {{ date('ymdHis', strtotime($pedido->created_at)) }} de {{ date('d/m/Y', strtotime($pedido->created_at)) }}.')
                    + novaLinha
                    + novaLinha
                    + encode('http://www.smallmobile.com.br/eventos/exibirhtmlpedido.php?p={{ base64_encode( $pedido->usuarios->emitente."/".date('ymdHis', strtotime($pedido->created_at))."/".$pedido->id ) }}')
                    + novaLinha
                    + novaLinha
                    + '*** OBS.: O link ficará disponível até {{ date('d/m/Y', strtotime('4 days')) }}'
                    + novaLinha
                    + novaLinha
                    + 'Bom trabalho, '
                    + novaLinha
                    + novaLinha
                    + encode('{{ $pedido->usuarios->nome }}');

                var link = 'mailto:' + escape('{{ $pedido->clifor->email }}')
                    + '?subject=' + subject
                    + '&body=' + body;

                window.location.href = link;
                //window.open(link);
            }
        </script>
        <style>
            td {
                padding-left: 3px;
                padding-right: 3px;
                padding-top: 3px;
                padding-bottom: 3px;
                font-family: Arial;
                font-size: 8pt;
            }
            .btn   {
                font-family: Arial;
                color: #000000;
                font-weight: none;
                font-size: 70%;
            }
        </style>
    </head>
    <body>
        <form id='form' name='form' method='post' action='' onSubmit='return false;'>
            <br />

            <table align='center' border='1' cellpadding='0' cellspacing='0' style='width: 628px;'>
                <tr>
                    <td style='width: 100%; padding-left: 5px; padding-right: 5px;'>
                        <table align='center' border='0' cellpadding='0' cellspacing='0' style='width: 100%;'>
                            <tr>
                                <td>

                                    <table border='0' cellpadding='0' cellspacing='0' style='width: 100%;'>
                                        <tr>
                                            <td width='70%'>
                                                <img id='logotipoempresa' alt='' src='/usuarios/07426598000124/logo.jpg' style='float: left;'/>
                                            </td>
                                            <td width='30%'>

                                                <table align='left' border='0' cellpadding='0' cellspacing='0' style='width: 100%;'>
                                                    <tr>
                                                        <td>
                                                            <font>Data: <strong>{{ date('d/m/Y H:i:s', strtotime($pedido->created_at)) }}</font></strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <font>Vendedor: <strong>{{ $pedido->usuarios->nome }}</strong></font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <font>Telefone: <strong></strong></font>
                                                        </td>
                                                    </tr>
                                                </table>

                                            </td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <center>DOCUMENTO AUXILIAR DE VENDA - ORÇAMENTO</center>
                                        <center>NÃO É DOCUMENTO FISCAL - É VÁLIDO COMO RECIBO E COMO GARANTIA DE</center>
                                        <center>MERCADORIA - NÃO COMPROVA PAGAMENTO</center>
                                    </strong>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <table align='center' border='1' cellpadding='0' cellspacing='0' style='width: 100%;'>
                                        <tr>
                                            <td align='center' colspan='2'>
                                                <font>Identificacação do Estabelecimento Emitente</font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign='top' align='left' width='50%'>
                                                <font>Denominação: <strong></strong><br /><br /><br /><br />Telefone: </font>
                                            </td>
                                            <td valign='top' align='left' width='50%'>
                                                <font>CNPJ/CPF: <strong>{{ $pedido->usuarios->emitenteMask() }}</strong></font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align='center' colspan='2'>
                                                <font>Identificação do Estabelecimento Destinatário</font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign='top' align='left' width='50%'>
                                                <font>
                                                    Denominação: 
                                                    <strong>{{ $pedido->clifor->nome }}</strong><br />
                                                    {{ $pedido->clifor->endere }}<br />
                                                    {{ $pedido->clifor->cep }} - {{ $pedido->clifor->cidade }} - {{ $pedido->clifor->estado }}<br />
                                                    {{ $pedido->clifor->comple }}<br />
                                                    Telefone: {{ $pedido->clifor->fone }}
                                                </font>
                                            </td>
                                            <td valign='top' align='left' width='50%'>
                                                <font>CNPJ/CPF: <strong>{{ $pedido->clifor->cgcMask() }}</strong></font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign='top' align='left' width='50%'>
                                                <font>Número do Orçamento: <strong>{{ date('ymdHis', strtotime($pedido->created_at)) }}</strong></font>
                                            </td>
                                            <td valign='top' align='left' width='50%'>
                                                <font>Número do Documento Fiscal:</font>
                                            </td>
                                        </tr>
                                    </table>

                                    <table align='center' border='0' cellpadding='2' cellspacing='2' style='width: 100%;'>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </table>

                                    <table align='center' border='1' cellpadding='0' cellspacing='0' style='width: 100%;'>
                                        <tr>
                                            <td with='14%'>
                                                <font>Código</font>
                                            </td>
                                            <td with='42%'>
                                                <font>Descrição</font>
                                            </td>
                                            <td with='10%'>
                                                <font>Quantidade</font>
                                            </td>
                                            <td with='8%'>
                                                <font>Und</font>
                                            </td>
                                            <td with='13%'>
                                                <font>Unitário</font>
                                            </td>
                                            <td with='13%'>
                                                <font>Total</font>
                                            </td>
                                        </tr>
                                        @foreach ( $pedido->itens as $item )
                                            <tr>
                                                <td align='center'>
                                                    <font>{{ $item->estoque_codigo }}</font>
                                                </td>
                                                <td align='left'>
                                                    <font>{{ $item->estoque->descricao }}</font>
                                                </td>
                                                <td align='right'>
                                                    <font>{{ $item->qtd }}</font>
                                                </td>
                                                <td align='center'>
                                                    <font>{{ $item->estoque->medida }}</font>
                                                </td>
                                                <td align='right'>
                                                    <font>{{ number_format($item->valor_unitario, 2, ',', '') }}</font>
                                                </td>
                                                <td align='right'>
                                                    <font>{{ number_format($item->valor_total, 2, ',', '') }}</font>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>

                                    <table align='center' border='0' cellpadding='0' cellspacing='0' style='width: 100%;'>
                                        <tr>
                                            <td align='right'>
                                                <font>
                                                    @if( $pedido->valor_frete == 0 )
                                                        <strong>Frete Emitente R$: {{ number_format($pedido->valor_frete, 2, ',', '') }}</strong>
                                                    @else
                                                        <strong>Frete Destinatário R$: {{ number_format($pedido->valor_frete, 2, ',', '') }}</strong>
                                                    @endif
                                                </font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align='right'>
                                                <font>
                                                    <strong>Total R$: {{ number_format($pedido->somaTotal(), 2, ',' ,'') }}</strong>
                                                </font>
                                            </td>
                                        </tr>
                                    </table>

                                    @if( $pedido->parcelas->count() > 0 )
                                        <table align='center' border='0' cellpadding='2' cellspacing='2' style='width: 100%;'>
                                            <tr>
                                                <td>
                                                    @if( $pedido->forma_pagamento == 2)
                                                        <font>Parcelamento boleto</font>
                                                    @else
                                                        <font>Parcelamento cartão</font>
                                                    @endif
                                                </td>
                                            </tr>
                                        </table>

                                        <table align='center' border='1' cellpadding='0' cellspacing='0' style='width: 100%;'>
                                            @foreach( $pedido->parcelas as $chave => $parcela )
                                                @if( $chave % 2 == 0 )
                                                    <tr>
                                                @endif
                                                    <td width='50' align='center'>
                                                        <font>{{ date('d/m/Y', strtotime($parcela->vencimento)) }}</font>
                                                    </td>
                                                    <td width='50' align='right'>
                                                        <font>{{ number_format($parcela->valor, 2, ',', '') }}</font>
                                                    </td>
                                            @endforeach
                                        </table>                        

                                        <table align='center' border='0' cellpadding='2' cellspacing='2' style='width: 100%;'>
                                            <tr>
                                                <td align='center'>
                                                    <center>
                                                        <font style='font-family: Arial; font-size: 8pt;'>É vedada a autenticação deste documento</font>
                                                    </center>
                                                </td>
                                            </tr>
                                        </table>
                                    @endif

                                </td>
                            </tr>
                        </table>

                        <center>
                            <a href='http://www.smallsoft.com.br' target='_blank'>
                                <font style='font-family: Arial; font-size: 7pt;'>www.smallsoft.com.br</font>
                            </a>
                        </center>
                    </td>
                </tr>
            </table>

            <div align='center' style='margin-top: 3px;'>
                @if ( $view == 'no' )
                    <input type='button' value='  Imprimir ' class='btn' align='left' onclick='window.print();return false'>
                @else
                     <input id='btnImprimir' type='button' value='  Imprimir ' class='btn' align='left' onclick='window.print(); return false'>
                     <input type='button' value='   E-Mail  ' class='btn' align='left' onclick='sendMail();'>
                     <input type='button' value=' Finalizar ' class='btn' align='left' onclick="window.location.href='{{ route('dashboard') }}';">
                @endif
            </div>

        </form>

        <script>
            var url = window.location.href;
            var n = url.toLowerCase().search('orcamentohtml');
            if (n >= 0){            
                document.getElementById('logotipoempresa').src = '../logo.jpg';
            }
        </script>

    </body>
</html>
