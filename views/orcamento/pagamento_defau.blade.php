<!-- extendendo a estrututa da pagina master(blade) --> 
@extends('index')

<!-- Abrindo e Fechando(stop) a seção title -->
@section('title')
    Small Mobile - Orçamento - Pagamento
@stop

@section('body-class', 'binterna')

<!--Abriu a seção conteudo -->
    @section('content')
        <div class="container-fluid font">
            <div class="row">
             
            <a href="{{ route('dashboard') }}"><div class="col-xs-2 bmenuinterno btmenu"><button class="btnmod btnloginsmall"><i class="fa fa-bars"></i></button></div></a>
            
            <div class="hidden-xs hidden-sm col-xs-10 bmenuinterno fontpesq">Orçamento - Pagamento</div>
            <div class="hidden-md hidden-lg col-xs-10 bmenuinterno fontpesq">Orçamento</div>
            </div>
        </div>



        @if (Session::has('errors'))
                <ul>
                    @foreach (Session::get('errors') as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            @endif


            <br/>
<!-- INICIO / CONTEUDO | MOBILE & TABLET-->    
        <div class="container-fluid hidden-md hidden-lg">

        <!-- INICIO / BLOCO OPÇÕES DE PAGAMENTOS | MOBILE & TABLET -->
            <div class="row">

                <div clas="baseb col-xs-12 col-sm-12">
                    <h4 class="ortitle">&nbsp;&nbsp;&nbsp;&nbsp;Formas de Pagamento</h4>

                    <ul class="baseb metodoPagamento">
                
                        <li class="{{ $pedido->getPedido()->forma_pagamento == 1 ? 'selecionado' : '' }}">
                        <a href="{{ route('orcamento_addPagamento', ['id' => 1]) }}" data-type="1">Dinheiro</a>
                        </li>

                        <li class="{{ $pedido->getPedido()->forma_pagamento == 2 ? 'selecionado' : '' }}">
                        <a href="{{ route('orcamento_addPagamento', ['id' => 2]) }}" data-type="2">Boleto</a>
                        </li>
                        
                        <li class="{{ $pedido->getPedido()->forma_pagamento == 3 ? 'selecionado' : '' }}">
                        <a href="{{ route('orcamento_addPagamento', ['id' => 3]) }}" data-type="3">Cartão</a>
                        </li>
                    </ul>
                    <br/>
                

                
                        <div class="total baseb">
                        <h4 class="ortitle baseb">&nbsp;&nbsp;&nbsp;&nbsp;Total:</h4>
                        <input class="parcelor" disabled="disabled" type="text" value="&nbsp;&nbsp;&nbsp;&nbsp;R$ {{ $pedido->valorTotal() }}" />
                        </div>
            <!-- FIM / BLOCO OPÇÕES DE PAGAMENTOS -->

                        
                        <br/>
            <!-- INICIO / BLOCO LISTAR CARTÕES | MOBILE & TABLET -->
                <div>
                    <ul class="baseb listaCartoes" style="{{ $pedido->getPedido()->forma_pagamento == 3 ? '' : 'display:none;' }}">
                        @foreach ($cartoes as $cartao)
                            <li class="{{ $pedido->getPedido()->cartoes_id == $cartao->id ? 'selecionado' : '' }}" >
                                <a href="{{ route('orcamento_addPagamento', ['id' => 3]) }}" data-card="{{ $cartao->id }}" data-type="3">{{ $cartao->cartao }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>      
                
            <!-- FIM / BLOCO LISTAR CARTÕES | MOBILE & TABLET -->

            <!-- INICIO / PARCELAR BOLETO | MOBILE & TABLET-->
               
                    <div class="baseb listaParcelas" style="{{ $pedido->getPedido()->forma_pagamento == 2 ? '' : 'display:none;' }}">

                       <div class="btn-lg"><h4 class="ortitle">&nbsp; &nbsp; Número de parcelas</h4>
                       
                       

                            <form method="POST" action="{{ route('orcamento_addPagamento', ['id' => 2]) }}" data-type="2">
                            <input class="parcelor NumParcelas" type="text" value="{{ $pedido->listaParcelas()->count() > 0 ? $pedido->listaParcelas()->count() : '' }}" />

                        <br>

                        <button class=" btn-lg btn-block btbusca btbuscadf">Parcelar</button>
                        </form>
                        
            <!-- FIM     / PARC.BOLETO | MOBILE & TABLET-->

            <!-- INICIO  / BLOCO PARCELAS | MOBILE & TABLET-->
            <div class="baseb fontarial gradeParcelas">
                
                    @foreach ($pedido->listaParcelas() as $parcela)
                        <div class="baseb">
                            <input class="col-xs-6 col-sm-6 mosparcel inputDataBoleto" type="text" value="{{ $parcela->getVencimento() }}" />
                            <input class="col-xs-6 col-sm-6 mosparcel inputValorBoleto" type="text" value="{{ $parcela->getValor() }}" /> 
                        </div>
                    @endforeach
            <!-- FIM  / BLOCO PARCELAS | MOBILE & TABLET-->


                </div>
            </div>


            </div>
        </div></div></div>
<!-- FIM / CONTEUDO-->



<!-- INICIO / CONTEUDO | LAP & DESKTOP-->    
        <div class="hidden-xs hidden-sm vible-md visible-lg container-fluid">
            <div class="row">

                <div class="col-md-6 col-lg-6 btn-lg"><h4 class="ortitle">&nbsp; &nbsp; Formas de Pagamento</h4>
                </div>
            </div>

            <!--  INICIO / BLOCO OPÇÕES DE PAGAMENTOS -->

            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <ul class="basebor font metodoPagamento">
                        <li class="{{ $pedido->getPedido()->forma_pagamento == 1 ? '' : '' }}btn-lg selecpag">
                            <a href="{{ route('orcamento_addPagamento', ['id' => 1]) }}" data-type="1">Dinheiro</a>
                        </li>
                        
                        <li class="{{ $pedido->getPedido()->forma_pagamento == 2 ? '' : '' }}btn-lg selecpag">
                            <a href="{{ route('orcamento_addPagamento', ['id' => 2]) }}" data-type="2">Boleto</a>
                        </li>
                        
                        <li class="{{ $pedido->getPedido()->forma_pagamento == 3 ? '' : '' }}btn-lg selecpag">
                            <a href="{{ route('orcamento_addPagamento', ['id' => 3]) }}" data-type="3">Cartão</a>
                        </li>
                    </ul>   
                </div>

                <div class="basebor col-md-6 col-lg-6 baseb">
                
                    <h4 class="ortitle">TOTAL:</h4>
                    <input class="parcelor" disabled="disabled" type="text" value="R$ {{ $pedido->valorTotal() }}" />
                

<!-- INICIO / PARCELAR BOLETO | LAP & DESKTOP-->

     <div class="hidden-xs hidden-sm container-fluid">
            <div class="row">
      
            <div class="listaParcelas" style="{{ $pedido->getPedido()->forma_pagamento == 2 ? '' : 'display:none;' }}">

                    <h4 class="ortitle">&nbsp; &nbsp; Número de parcelas</h4>
               
               

                    <form method="POST" action="{{ route('orcamento_addPagamento', ['id' => 2]) }}" data-type="2">
                    <input class="parcelor NumParcelas" type="text" value="{{ $pedido->listaParcelas()->count() > 0 ? $pedido->listaParcelas()->count() : '' }}" />

                <br>

                <button class=" btn-lg btn-block btbusca btbuscadf">Parcelar</button>
                </form>
                
<!-- FIM     / PARC.BOLETO | LAP & DESKTOP-->

<!-- INICIO  / BLOCO PARCELAS | LAP & DESKTOP-->

                <ul class="fontarial gradeParcelas">
                    @foreach ($pedido->listaParcelas() as $parcela)
                        <li>
                            <input class="baseb inputDataBoleto" type="text" value="{{ $parcela->getVencimento() }}" />
                            <input class="baseb inputValorBoleto" type="text" value="{{ $parcela->getValor() }}" /> 
                        </li>
                    @endforeach
                </ul>
            </div></div>
<!-- FIM  / BLOCO PARCELAS | LAP & DESKTOP-->

<!-- INICIO  / BLOCO LISTAR CARTÕES | LAP & DESKTOP-->

            
            <ul class="listaCartoes" style="{{ $pedido->getPedido()->forma_pagamento == 3 ? '' : 'display:none;' }}">
                @foreach ($cartoes as $cartao)
                    <li class="{{ $pedido->getPedido()->cartoes_id == $cartao->id ? 'selecionado' : '' }}" >
                        <a href="{{ route('orcamento_addPagamento', ['id' => 3]) }}" data-card="{{ $cartao->id }}" data-type="3">{{ $cartao->cartao }}</a>
                    </li>
                @endforeach
            </ul>


            </div>
        </div>
<!-- FIM  / BLOCO LISTAR CARTÕES | LAP & DESKTOP-->

            <!--  FIM / BLOCO OPÇÕES DE PAGAMENTOS -->

            
<!-- FIM / CONTEUDO | LAP & DESKTOP-->



<br/>
<a href="{{ route('orcamento_finalizar') }}" id="btFinalizar"><button class="btn-lg btn-block btbusca btbuscadf">Finalizar</button></a>

        </div>
    </div>
@stop
