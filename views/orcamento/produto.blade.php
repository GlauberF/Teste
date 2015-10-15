<!-- extendendo a estrututa da pagina master(blade) --> 
    @extends('index')

<!-- Abrindo e Fechando(stop) a seção title -->
    @section('title')
        Small Mobile - Orçamento - Produtos
    @stop

    @section('body-class', 'binterna')

<!--Abriu a seção conteudo -->
@section('content')
<!--INICIO / CABEÇALHO (MENU/ ADD PRODUTO) | VISIVEL EM TODOS OS DISPOSITIVOS-->
    <div class="container-fluid font">
        <div class="row">

        <div class="col-xs-12 bmenuinterno fontpesq">

            <div class="col-xs-2 col-md-2 col-lg-2 bmenuinterno btmenu">
                <a href="{{ route('dashboard') }}"><button class="btnmod btnloginsmall"><i class="fa fa-bars"></i></button></a>  
            </div>
            <div class="col-xs-10 col-md-5 col-lg-5 bmenuinterno">Adicionar Produtos</div>
<!--FIM / CABEÇALHO (MENU/ ADD PRODUTO) | VISIVEL EM TODOS OS DISPOSITIVOS-->

<!--INICIO / CABEÇALHO PRODUTOS ADICIONADOS | VISIVEL LAPTOP E DESKTOP-->            
            <div class="hidden-xs hidden-sm col-md-5 col-lg-5 bmenuinterno fontpesq">Produtos adicionados</div>
<!--FIM / CABEÇALHO PRODUTOS ADICIONADOS | VISIVEL LAPTOP E DESKTOP-->

        </div>

        </div>
    </div>


    <br/>

<!--INICIO / BUSCAR PRODUTO-->
    <div class="container-fluid font">
        <div class="row">

                <div class="col-xs-9 col-sm-9 col-md-4 col-lg-4">
                <form id="buscaOrcamentoProd" method="POST" action="{{ route('buscar_no_estoque') }}">

                <div class="form-group fontarial">
                        <label class="sr-only fontarial">Orçamento Produto</label>
                         <input type="text" class="formpesqproduto btn-lg" name="palavra" id="palavraProdOrc" placeholder="Produto (código ou descrição)">
                </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
                        <a href="#"><button class="btn-lg btn btn-block btbusca btbuscadf"><i class="fa fa-search"></i></button></a>
                </div> 
                </form>
            
        </div>
    </div>
<!--FIM / BUSCAR PRODUTO-->
        </div>      
    </div>



<!-- INICIO / EXIBE A LISTA DE PRODUTOS-->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <ul id="selectProduto"></ul>
            </div>
        
<!-- FIM / EXIBE A LISTA DE PRODUTOS-->


<!-- INICIO / EXIBE OS PRODUTOS ADICIONADOS | VISIVEL SOMENTE EM LAPTOP E DESKTOP  -->
            <div class=" row hidden-xs hidden-sm col-md-6 col-lg-6">
                <div class="baddp fontarial optProd hidden">
                    <form class="addProd" method="POST" action="#">
                            <div style="text-transform:uppercase" class=" row ortitle text-center nome_produto"></div>
                            <br/>
                        <div class="row">
                                <label class="col-md-3 col-lg-3 text-right">&nbsp;Quantidade:</label>
                                <input class="col-md-3 col-lg-3 campquant btn-lg" type="text" name="quantidade" />&nbsp;
                                <label class="col-md-3 col-lg-3 text-right">Preço:</label>
                                <input class="col-md-3 col-lg-3 campquant btn-lg" type="text" name="preco" class="dinheiro" />
                        
                        
                            <button class="btn-lg btn btn-block btbusca btbuscadf">ADICIONAR &nbsp;<i class="fa fa-cart-plus"></i></button>
                        
                        </div>
                    </form>
                </div>

        
            <div>
                    <ul class="produtosEscolhidos">
                        @foreach ($itens as $item)
                        <li class="bior fontarial"></i>

                                <a class="edit" href="{{ route('orcamento_altProduto', ['id' => $item->estoque_codigo]) }}" data-preco="{{ $item->valor_total }}" data-nome="{{ $item->estoque->descricao }}" data-qtd="{{ $item->qtd }}">
                                    <i class="fa fa-pencil-square pull-right icremov" title="Editar produto"></i></a>
                            
                                <div>{{ $item->estoque->codigo }}</div>
                                <div><strong>{{ $item->estoque->descricao }}</strong></div>
                                    <a class="del" href="{{ route('orcamento_delProduto', ['id' => $item->estoque_codigo]) }}"><i class="fa fa-trash-o pull-right icremov " title="Remover produto"></i></a>
                                <div>R$ {{ $item->valor_total }}</div>
                                
                            
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>




<!--INICIO / CABEÇALHO PRODUTOS ADICONADOS | MOBILE-->
    <div class="container-fluid font">
        <div class="row">
            <div class="visible-xs-block visible-sm-block container-fluid col-md-push-2 font col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 bmenuinterno fontpesq">Produtos adicionados</div>
                    </div></div>
                    <br/>
        </div>
    </div>
<!--FIM / CABEÇALHO PRODUTOS ADICONADOS | MOBILE-->

                    
<!--INICIO / EXIBE OS ITENS ADICIONADO SOMENTE NO | MOBILE-->
                    <br/>
                    <ul class="produtosEscolhidos hidden-md hidden-lg">
                        @foreach ($itens as $item)
                            <li class="bior fontarial">
                                    
                                    <a class="edit" href="{{ route('orcamento_altProduto', ['id' => $item->estoque_codigo]) }}" data-preco="{{ $item->valor_total }}" data-nome="{{ $item->estoque->descricao }}" data-qtd="{{ $item->qtd }}">
                                        <i class="fa fa-pencil-square pull-right icremov" title="Editar produto"></i></a>
                                    <div>{{ $item->estoque->codigo }}</div>
                                    <div><strong>{{ $item->estoque->descricao }}</strong></div>
                                    <a class="del" href="{{ route('orcamento_delProduto', ['id' => $item->estoque_codigo]) }}">
                                        <i class="fa fa-trash-o pull-right icremov " title="Remover produto"></i>
                                    </a>
                                    <div>R$ {{ $item->valor_total }}</div>                                    
                                
                            </li>
                        @endforeach
                    </ul>
                    <br/><br><br/><br/><br/><br/><br/>
<!--FIM / EXIBE OS ITENS ADICIONADO SOMENTE NO MOBILE-->


 <form class="addProd" method="POST" action="#">
 <!-- o link debaixo pode remover, somente teste-->
 <a class="baseb" href="#openModal">test produto</a>

<div id="openModal" class="modalDialog hidden-md hidden-lg">
    <div>
        <a href="#close" title="Fechar" class="close1 ">X</a>
        <h2 class="btn-block ortitle text-center" style="text-transform:uppercase">Produto XX</h2>
        <p>Quantidade: <input class="col-md-3 col-lg-3 campquant btn-lg" name="quantidade"></input></p>
        <p>Valor: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="col-md-3 col-lg-3 campquant btn-lg" name="preco" class="dinheiro"></input></p>

        <button class="btn-lg btn btn-block btbusca btbuscadf">ADICIONAR &nbsp;<i class="fa fa-cart-plus"></i></button>
    </div>
</div>
</form>       

<!--BTN VOLTAR & AVANÇAR -->
<!-- footerclinv | hidden-print-->
  <div class="hidden-xs hidden-sm container-fluid col-md-12 col-sm-12 col-xs-12 col-lg-12 baseORB footerclinv hidden-print">
            
    <br/>

    <div class="row">
        <div class=" col-md-6 col-lg-6 col-sm-12 col-xs-12">
            <a href="{{ route('orcamento') }}" id="btVoltar" type="button"><button class="btn-lg btn-block btbusca btncancelar"><i class="fa fa-reply pull-left"></i>VOLTAR</button></a>
        </div>
               
        <div class=" col-md-6 col-lg-6 col-sm-12 col-xs-12">
            <a href="{{ route('orcamento_pagamento') }}" id="BtAvancar" class="remlink"><button type="button" class="btn-lg btn-block btbusca btparcelar"><i class="fa fa-share pull-right"></i> AVANÇAR</button></a>
        </div>
    </div>
</div>
<br/>


@stop
