<!-- extendendo a estrututa da pagina master(blade) -->
    @extends('index')

<!-- Abrindo e Fechando(stop) a seção title -->
    @section('title')
        Small Mobile - Cliente
    @stop

    @section('body-class', 'binterna')

<!--Abriu a seção conteudo -->
    @section('content')

    <!-- CABEÇALHO-->
<div class="container-fluid font">
    <div class="row">

    <div class="col-xs-12 bmenuinterno fontpesq">

        <div class="col-xs-2 bmenuinterno btmenu">
            <a href="{{ route('dashboard') }}"><button class="btnmod btnloginsmall"><i class="fa fa-bars"></i></button></a>  
        </div>
        <div class="col-xs-10 bmenuinterno">Clientes</div>

    </div>

    </div>
</div>




<!--BUSCAR CLIENTE -->
    <br/>
    <div class="container-fluid font">
        <div class="row">

            @if (Session::has('message'))
                        <div>{{ Session::get('message') }}</div>
                    @endif

                <div class="col-xs-9 ">
                    <form id="buscaCliente" method="POST" action="{{ route('buscar_clientes') }}">

                        <div class="form-group fontarial">
                                <label class="sr-only fontarial">pesquisar produto</label>
                                <input type="text" class="formpesqproduto btn-lg" name="palavra" id="palavraCli" placeholder="Cliente (Nome, CNPJ ou CPF)">
                        </div>
                </div>
                <div class="col-xs-3">
                                    <a href="#"><button class="btn btn-block btn-xl btbusca btbuscadf"><i class="fa fa-search"></i></button></a>
                    </form>
                </div>
            
        </div>      
    </div>



    <!--MOSTRAR RESULTADOS-->
    <ul class="container-fluid fontarial" id="listaCliente"></ul>


    <!-- BOTÃO NOVO CLIENTE -->
    <div class="btn footerclinv remlink">
        <label class="sr-only fontarial remlink">Cadastrar cliente</label>
                    
        <a href="{{ route('criar_cliente') }}"><button type="button" class="btn btn-circle btn-xl btbusca btbuscadf remlink"><span class="icon-novo icotm1"></span></button></a>
    </div> 
    @stop
