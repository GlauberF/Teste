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

<!-- CAMPO RESULTADOS -->

    <br/>
    <br/>
    
<div class="container-fluid fontarial">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="sinc"><strong>Aguarde...</strong></h2>
        </div>
    </div>      
</div>

    <br/>
    <br/>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="sinc-refre"><i class="fa fa-spinner fa-pulse fa-lg"></i></h1>
        </div> 
    </div>      
</div>

@stop