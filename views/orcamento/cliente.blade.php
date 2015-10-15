<!-- extendendo a estrututa da pagina master(blade) --> 
@extends('index')

<!-- Abrindo e Fechando(stop) a seção title -->
@section('title')
    Small Mobile - Orçamento - Cliente
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
            <div class="col-xs-10 bmenuinterno">Orçamento</div>

        </div>

        </div>
    </div>
    



<!--BUSCAR CLIENTE-->
            <br/>
            <div class="container-fluid font">
                <div class="row">

                    <div class="col-xs-9">
                    <form id="buscaOrcamentoCli" method="POST" action="{{ route('buscar_clientes') }}">

                    <div class="form-group fontarial">
                                <label class="sr-only fontarial">cliente</label>
                                <input type="text" class="formpesqproduto btn-lg" name="palavra" id="palavraCliOrc" placeholder="Cliente (Nome, CNPJ ou CPF)">
                    </div>
                    </div>
                    <div class="col-xs-3">
                                <a href="#"><button class="btn-lg btn btn-block btbusca btbuscadf"><i class="fa fa-search"></i></button></a>
                    </div> 
                    </form>
                </div>      
            </div>
            

<!--MOSTRAR RESULTADOS-->
            <ul class="container-fluid fontarial" id="selectCliente"></ul>
            </div><br/><br/><br/><br/><br/><br/>


<!--BTN CANCELAR & AVANÇAR -->
<!-- footerclinv-->
<div class="container-fluid col-md-12 col-sm-12 col-xs-12 col-lg-12 baseORB footerclinv hidden-print">
            
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

@stop
