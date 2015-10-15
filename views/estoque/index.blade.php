<!-- extendendo a estrututa da pagina master(blade) --> 
    @extends('index')

<!-- Abrindo e Fechando(stop) a seção title -->
    @section('title')
        Small Mobile - Estoque
    @stop

@section('body-class', 'binterna')

<!--Abriu a seção conteudo -->
    @section('content')
    <div class="container-fluid font">
        <div class="row">

        <div class="col-xs-12 bmenuinterno fontpesq">

            <div class="col-xs-2 bmenuinterno btmenu">
                <a href="{{ route('dashboard') }}"><button class="btnmod btnloginsmall"><i class="fa fa-bars"></i></button></a>  
            </div>
            <div class="col-xs-10 bmenuinterno">Estoque</div>

        </div>

        </div>
    </div>

            <!--BUSCAR PRODUTOS-->

            <br/>
             <div class="container-fluid font">
                <div class="row">

                    <div class="col-xs-9">
                    <form id="buscaEstoque" method="POST" action="{{ route('buscar_no_estoque') }}">

                            <div class="form-group fontarial">
                                <label class="sr-only fontarial">pesquisar produto</label>
                                <input type="text" class="formpesqproduto btn-lg" name="palavra" id="palavraEst" placeholder="Produto (código ou descrição)">
                            </div>
                    </div>
                    <div class="col-xs-3">
                                <a href="#"><button class="btn-lg btn btn-block btbusca btbuscadf"><i class="fa fa-search"></i></button></a>
                    </div> 
                    </form>
 
                </div>      
            </div>
        


            <!--MOSTRAR RESULTADOS-->
            <ul class="container-fluid font" id="listaEstoque"></ul>
@stop
