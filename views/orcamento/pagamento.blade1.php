<!-- extendendo a estrututa da pagina master(blade) --> 
@extends('index')

<!-- Abrindo e Fechando(stop) a seÃ§Ã£o title -->
@section('title')
    Small Mobile - Orçamento - Pagamento
@stop

<!--Abriu a seÃ§Ã£o conteudo -->
@section('content')

@section('body-class', 'binterna')

<!--INICIO/ ............. VISUALIZAÇÃO P/ LAPTOP & NOTEBOOK................................. -->
 
    <div class="container-fluid font hidden-xs hidden-sm">
        <div class="row">

        <div class="col-xs-12 bmenuinterno fontpesq">

            <div class="col-xs-2 bmenuinterno btmenu">
                <a href="{{ route('dashboard') }}"><button class="btnmod btnloginsmall"><i class="fa fa-bars"></i></button></a>  
            </div>
            <div class="col-xs-10 bmenuinterno">Orçamento</div>

        </div>

        </div>
    </div>


<div class="container-fluid font hidden-xs hidden-sm">
    <div class="row">
            <div class="col-md-6 col-lg-6 btn-lg">
                <h4 class="ortitle">&nbsp; &nbsp; Formas de Pagamento</h4>
            </div>
     </div>
    


        


            @if (Session::has('errors'))
                <ul>
                    @foreach (Session::get('errors') as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            @endif


        <div class="row">
            <div class="col-md-6 col-lg-6">
                <ul class="basepagor metodoPagamento">
                    <li class="{{ $pedido->getPedido()->forma_pagamento == 1 ? 'selecativmob' : '' }} selecpag">
                        <a href="{{ route('orcamento_addPagamento', ['id' => 1]) }}" data-type="1">Dinheiro</a>
                    </li>
                    <li class="{{ $pedido->getPedido()->forma_pagamento == 2 ? 'selecativmob' : '' }} selecpag">
                        <a href="{{ route('orcamento_addPagamento', ['id' => 2]) }}" data-type="2">Boleto</a>
                    </li>
                    <li class="{{ $pedido->getPedido()->forma_pagamento == 3 ? 'selecativmob' : '' }} selecpag">
                        <a href="{{ route('orcamento_addPagamento', ['id' => 3]) }}" data-type="3">Cartão</a>
                    </li>
                </ul>
            </div>


            <div class="baseORB col-md-6 col-lg-6">
                <div class="col-md-6 col-lg-6 ortitle text-center">
                    TOTAL:
                </div>
                <div class="col-md-6 col-lg-6">
                    <input class="parcelor input-lg pedTotal" disabled="disabled" type="text" value="R$ {{ $pedido->valorTotal() }}" />
                </div>
            </div>
            
            
            
            
            </div>
        

                    <div class="row">
                        <div class=" col-md-6 col-lg-6 bftwhite">

                            <form class="setFrete" method="POST" action="{{ route('orcamento_addFrete') }}" >

                            <div class="col-md-5 col-lg-5 btn-lg">
                                <h4 class="frb">Valor do Frete</h4>
                            </div>
                            <br/>
                            <div class="col-md-3 col-lg-3">
                                <input class="fret dinheiro" name="valor" type="text" value="{{ $pedido->getPedido()->getValorFrete() }}" />
                            </div>
                            <div class="col-md-4 col-lg-4">   
                                <button class=" btn btn-block bfret">Adicionar</button>
                            </div>
                            </form>

                        </div>
                    </div>

            <div class="row">
                <div class=" col-md-6 col-lg-6 bcart">        
                 
                <div class="listaParcelas" style="{{ $pedido->getPedido()->forma_pagamento == 2 ? '' : 'display:none;' }}">
                    <form method="POST" action="{{ route('orcamento_addPagamento', ['id' => 2]) }}" data-type="2">
                        <div class="col-md-4 col-lg-4 ortitle text-center">
                            Nº de parcelas
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <input type="text" class="parcelor NumParcelas" value="{{ $pedido->listaParcelas()->count() > 0 ? $pedido->listaParcelas()->count() : '' }}" />
                        </div>

                        <div class="col-md-4 col-lg-4">
                            <button class="btn-lg btn-block btbusca btparcelar">
                                <i class="fa fa-calculator pull-right"></i>PARCELAR
                            </button>
                        </div>
                    </form>
                    <br/>
                    <br/>

                    
                    <div class="bspOR col-md-12 col-lg-12 gradeParcelas">
                        @foreach ($pedido->listaParcelas() as $parcela)
                            <div class="setParcela">
                                <input class="col-xs-6 col-sm-6 mosparcel data" type="text" value="{{ $parcela->getVencimento() }}" data-type="vencimento" data-id="{{ $parcela->id }}" />
                                <input class="col-xs-6 col-sm-6 mosparcel dinheiro" type="text" value="{{ $parcela->getValor() }}" data-type="valor" data-id="{{ $parcela->id }}" />
                            </div>                        
                        @endforeach
                    </div>
                </div>



                    <ul class="baseb listaCartoes" style="{{ $pedido->getPedido()->forma_pagamento == 3 ? '' : 'display:none;' }}">
                        @foreach ($cartoes as $cartao)
                            <li class="{{ $pedido->getPedido()->cartoes_id == $cartao->id ? 'selecativmob' : '' }} seleccarb" >
                                <a href="{{ route('orcamento_addPagamento', ['id' => 3]) }}" data-card="{{ $cartao->id }} " data-type="3">{{ $cartao->cartao }}</a>
                            </li>
                        @endforeach
                        
                        <br/>
                    </ul>



                </div>

            </div>
</div>


<!-- incluir baseORB -->
<div class="hidden-xs hidden-sm container-fluid col-md-12 col-sm-12 col-xs-12 col-lg-12 baseORB footerclinv">
    <br/>
    <div class="row">
        <div class=" col-md-6 col-lg-6">
            <a href="{{ route('orcamento_produto') }}" id="btVoltar"><button class="btn-lg btn-block btbusca btncancelar"><i class="fa fa-reply pull-left"></i>VOLTAR</button></a>
        </div>
        <div class=" col-md-6 col-lg-6">
            <a href="{{ route('orcamento_finalizar') }}" id="btFinalizar"><button class="btn-lg btn-block btbusca btparcelar"><i class="glyphicon glyphicon-chevron-right"></i> CONCLUIR ORÇAMENTO</button></a>
        </div>
    </div>
</div>


<!--FIM/ ............. VISUALIZAÇÃO P/ LAPTOP & NOTEBOOK................................. -->


<!-- :) *-* :) :) *-*:)-*:) :) *-*:):):) Separação div/visualização :) :) *-* :) *-* :) *-* :)  -->


<!--INICIO/ ............. VISUALIZAÇÃO P/ MOBILE & TABLET................................. -->

<div class="container-fluid font hidden-md hidden-lg">
    <div class="content">
        <div class="row">

            <div class="col-xs-12 bmenuinterno fontpesq">

            <div class="col-xs-2 bmenuinterno btmenu">
                <a href="{{ route('dashboard') }}"><button class="btnmod btnloginsmall"><i class="fa fa-bars"></i></button></a>  
            </div>
            <div class="col-xs-10 bmenuinterno">Orçamento</div>

        </div>

        </div>

        <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <h4 class="ortitle">&nbsp; &nbsp;Formas de Pagamento</h4>
                </div>
        </div>

            @if (Session::has('errors'))
                <ul>
                    @foreach (Session::get('errors') as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            @endif

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <ul class="basepagor1 metodoPagamento">
                    
                    <li class="{{ $pedido->getPedido()->forma_pagamento == 1 ? 'selecativmob' : '' }} selecpag ">
                        <a href="{{ route('orcamento_addPagamento', ['id' => 1]) }}" data-type="1">&nbsp;Dinheiro</a>
                    </li>

                    <li class="{{ $pedido->getPedido()->forma_pagamento == 2 ? 'selecativmob' : '' }} selecpag ">
                        <a href="{{ route('orcamento_addPagamento', ['id' => 2]) }}" data-type="2">Boleto</a>
                    </li>
                    
                    <li class="{{ $pedido->getPedido()->forma_pagamento == 3 ? 'selecativmob' : '' }} selecpag ">
                        <a href="{{ route('orcamento_addPagamento', ['id' => 3]) }}" data-type="3">Cartão</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="row basepagor1">
            
                <div class="col-xs-12 col-sm-12 btn-lg">
                    <h4 class="tfrete">Valor do Frete</h4>
                </div>
                <form class="setFrete" method="POST" action="{{ route('orcamento_addFrete') }}" >
                <br/>
                <div class="col-xs-6 col-sm-6">
                    <input class="fret dinheiro" name="valor" type="text" value="{{ $pedido->getPedido()->getValorFrete() }}" />
                </div>
                <div class="col-xs-6 col-sm-6">   
                    <button class=" btn btn-block bfret">Adicionar</button>
                </div>
                </form>            
        </div>


        <div class="row b5">
            <div class="col-xs-6 col-sm-6 ortitle ">TOTAL: 
            </div>
            <div class="col-xs-6 col-sm-6">
                <input class="parcelor input-lg pedTotal" disabled="disabled" type="text" value="R$ {{ $pedido->valorTotal() }}" /> 
            </div>
        </div>

    


            
                <div class="basepagor col-xs-12 col-sm-12 listaParcelas" style="{{ $pedido->getPedido()->forma_pagamento == 2 ? '' : 'display:none;' }}">
                    <form method="POST" action="{{ route('orcamento_addPagamento', ['id' => 2]) }}" data-type="2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 ortitle text-center ">
                            Número de parcelas
                        </div>
                    </div>
                    <br/>

                        <div class="clearfix">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6">
                            <input type="number" class="parcelor NumParcelas text-center" placeholder="Nº" value="{{ $pedido->listaParcelas()->count() > 0 ? $pedido->listaParcelas()->count() : '' }}" />
                        </div>                    

                        <div class="col-xs-6 col-sm-6">
                            <button class="text-center btn-lg btn-block btbusca btparcelar">
                                <i class="fa fa-calculator pull-right"></i>
                                Parcela
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            

                    
                    <div class="bspOR col-md-12 col-lg-12 gradeParcelas">
                        @foreach ($pedido->listaParcelas() as $parcela)
                            <div class="setParcela">
                                <input class="col-xs-6 col-sm-6 mosparcel data" type="text" value="{{ $parcela->getVencimento() }}" data-type="vencimento" data-id="{{ $parcela->id }}" />
                                <input class="col-xs-6 col-sm-6 mosparcel dinheiro" type="text" value="{{ $parcela->getValor() }}" data-type="valor" data-id="{{ $parcela->id }}" />
                            </div>                        
                        @endforeach
                    </div>
                </div>



            <ul class="basepagor listaCartoes" style="{{ $pedido->getPedido()->forma_pagamento == 3 ? '' : 'display:none;' }}">
                @foreach ($cartoes as $cartao)
                    <li class="{{ $pedido->getPedido()->cartoes_id == $cartao->id ? 'selecativmob' : '' }} seleccarb " >
                        <a href="{{ route('orcamento_addPagamento', ['id' => 3]) }}" data-card="{{ $cartao->id }}" data-type="3">{{ $cartao->cartao }}</a>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
</div>



    <!-- incluir baseORB -->
<div class="hidden-md hidden-lg container-fluid col-md-12 col-sm-12 col-xs-12 col-lg-12 baseORB ">
    <br/>
    <div class="row">
        <div class=" col-md-6 col-lg-6">
            <a href="{{ route('orcamento_produto') }}" id="btVoltar"><button class="btn-lg btn-block btbusca btncancelar"><i class="fa fa-reply pull-left"></i>VOLTAR</button></a>
        </div>
        <div class=" col-md-6 col-lg-6">
            <a href="{{ route('orcamento_finalizar') }}" id="btFinalizar"><button class="btn-lg btn-block btbusca btparcelar"><i class="glyphicon glyphicon-chevron-right"></i> CONCLUIR</button></a>
        </div>
    </div>
</div>


<!--FIM/ ............. VISUALIZAÇÃO P/ MOBILE & TABLET................................. -->
@stop