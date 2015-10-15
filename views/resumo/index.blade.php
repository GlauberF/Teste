<!-- extendendo a estrututa da pagina master(blade) --> 
@extends('index')


<!-- Abrindo e Fechando(stop) a seção title -->
    @section('title')
    Small Mobile - Resumo
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
            <div class="col-xs-10 bmenuinterno">Resumo</div>

        </div>

        </div>
    </div>
        
            
        <br/><br/><br/>
       
        
        <!-- CAMPO RESULTADOS | view mobile -->

        <div class="hidden-md hidden-lg baseb container-fluidfontarial">
            <div class="row">
                
                        <div class="col-xs-12">
                            <h4 class="left sinc"><strong>&nbsp;&nbsp; Clientes Cadastrados: </strong> {{ $mensagem['total_clientes'] }}</h4>
                        </div> 


                        <div class="col-xs-12">
                            <h4 class="left sinc"><strong>&nbsp;&nbsp; Novos Clientes: </strong>{{ $mensagem['novos_clientes'] }}</h4>
                        </div>

                        <div class="col-xs-12">
                            <h4 class="left sinc"><strong>&nbsp;&nbsp; Produtos Cadastrados: </strong> {{ $mensagem['total_estoque'] }}</h4>
                        </div>


                        <div class="col-xs-12">
                            <h4 class="left sinc"><strong>&nbsp;&nbsp; Orçamentos não sincronizados:</strong> {{ $mensagem['total_orcamentos'] }}</h4>
                        </div>

                        @if( (Auth::user()->uf != "SC") && (Auth::user()->uf != "ES") )
                            <div class="col-xs-12">
                                <h4 class="left sinc"><strong>&nbsp;&nbsp; NFC-e's não sincronizadas:</strong> {{ $mensagem['total_nfce'] }}</h4>
                            </div>
                        @endif
            </div>      
        </div>



        <!-- CAMPO RESULTADOS | view Desktop -->

        <div class="hidden-xs hidden-sm baseb container-fluidfontarial">
            <div class="row">
                
                        <div class="col-xs-12">
                            <h4 class="sinc"><strong>Clientes Cadastrados: </strong> {{ $mensagem['total_clientes'] }}</h4>
                        </div> 


                        <div class="col-xs-12">
                            <h4 class="sinc"><strong> Novos Clientes: </strong>{{ $mensagem['novos_clientes'] }}</h4>
                        </div>

                        <div class="col-xs-12">
                            <h4 class="sinc"><strong>Produtos Cadastrados: </strong> {{ $mensagem['total_estoque'] }}</h4>
                        </div>


                        <div class="col-xs-12">
                            <h4 class="sinc"><strong>Orçamentos não sincronizados:</strong> {{ $mensagem['total_orcamentos'] }}</h4>
                        </div>

                        @if( (Auth::user()->uf != "SC") && (Auth::user()->uf != "ES") )
                            <div class="col-xs-12">
                                <h4 class="sinc"><strong>NFC-e's não sincronizadas:</strong> {{ $mensagem['total_nfce'] }}</h4>
                            </div>
                        @endif
            </div>      
        </div>
    @stop