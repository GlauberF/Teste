<!-- extendendo a estrututa da pagina master(blade) --> 
@extends('index')

<!-- Abrindo e Fechando(stop) a seção title -->
@section('title')
    Small Mobile - Relatórios
@stop

@section('body-class', 'binterna')

<!--Abriu a seção conteudo -->
@section('content')

<!--MENU INICIO -->
        
    <div class="container-fluid font">
        <div class="row">

        <div class="col-xs-12 bmenuinterno fontpesq">

            <div class="col-xs-2 bmenuinterno btmenu">
                <a href="{{ route('dashboard') }}"><button class="btnmod btnloginsmall"><i class="fa fa-bars"></i></button></a>  
            </div>
            <div class="col-xs-10 bmenuinterno">Relatórios</div>

        </div>

        </div>
    </div>
        
     <br/>

<!--INICIO RESULTADO-->
    <div class="container-fluid font">
        <div class="row">            
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <a href="{{ route('relatorio_selecionado') }}"><button class="btn btnefeito btn-block"><i class="icon-orcamento icotm1 pull-left"></i>Venda por Vendedor</button></a>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <a href="{{ route('relatorio_selecionado') }}"><button class="btn btnefeito btn-block"><i class="icon-pagar icotm1 pull-left"></i>Contas a Pagar</button></a>
                </div>
        
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <a href="{{ route('relatorio_selecionado') }}"><button class="btn btnefeito btn-block"><i class="icon-receber icotm1 pull-left"></i>Contas a Receber</button></a>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <a href="{{ route('relatorio_selecionado') }}"><button class="btn btnefeito btn-block"><i class="icon-caixa icotm1 pull-left"></i>Fluxo de Caixa</button></a>
                </div>
        </div>
    </div>

 @stop