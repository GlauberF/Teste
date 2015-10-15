<!-- extendendo a estrututa da pagina master(blade) -->
    @extends('index')

<!-- Abrindo e Fechando(stop) a seção title -->
    @section('title')
        Small Mobile
    @stop


<!--Abriu a seção conteudo -->
    @section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row fontbc"><h2>Small Mobile</h2></div>
                </div>
            </div>
            <br>

            <div class="row">

                @if( (Auth::user()->uf != "SC") && (Auth::user()->uf != "ES") )
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <a href="/nfce">
                            <div class="row  menumod">
                                <div class="col-xs-4 icotm"><span class="icon-nfce"></span></div>
                                @if( Auth::user()->uf == "SP" )
                                    <div class="col-xs-4 menumod1">NFC-e | CF-e SAT</div>
                                @else
                                    <div class="col-xs-4 menumod1">NFC-e</div>
                                @endif
                                <div class="col-xs-4 menumod2 icotm1"><i class="fa fa-chevron-right"></i></div>
                            </div>
                        </a>               
                    </div>
                @endif

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a href="{{ route('orcamento') }}"><div class="row menumod">
                    
                        <div class="col-xs-4 icotm"><span class="icon-orcamento"></span></div>
                        <div class="col-xs-4 menumod1">Orçamento</div>
                        <div class="col-xs-4 menumod2 icotm1"><i class="fa fa-chevron-right"></i></div>
                    
                       </div></a>               
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a href="{{ route('estoque') }}"><div class="row menumod">
                        <div class="col-xs-4 icotm"><span class="icon-estoque"></span></div>
                        <div class="col-xs-4 menumod1">Estoque</div>
                        <div class="col-xs-4 menumod2 icotm1"></i><i class="fa fa-chevron-right"></i></div>
                        </div></a>                
                </div></div>
                
                <!-- INICIO SEGUNDO BLOCO DOS MENU-->
            
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a href="{{ route('clientes') }}"><div class="row  menumod">
                    <div class="col-xs-4 icotm"><span class="icon-clientes"></span></div>
                        <div class="col-xs-4 menumod1">Clientes</div>
                        <div class="col-xs-4 menumod2 icotm1"><i class="fa fa-chevron-right"></i></div>
                    
                        </div></a>                
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a href="{{ route('resumo') }}"><div class="row menumod">
                    <div class="col-xs-4 icotm"><span class="icon-config"></span></div>
                        <div class="col-xs-4 menumod1">Resumo</div>
                        <div class="col-xs-4 menumod2 icotm1"><i class="fa fa-chevron-right"></i></div>
                        </div></a>                
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a href="/relatorios"><div class="row menumod">
                        <div class="col-xs-4 icotm"><span class="icon-imprimir"></span></div>
                        <div class="col-xs-4 menumod1">Relatórios</div>
                        <div class="col-xs-4 menumod2 icotm1"><i class="fa fa-chevron-right"></i></div>
                        </div></a>                
                </div>            
                </div>

                <!-- INICIO TERCEIRO BLOCO DOS MENU-->


            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a href="/sincronizar"><div class="row  menumod">
                        <div class="col-xs-4 icotm"><span class="icon-sincronizar"></span></div>
                        <div class="col-xs-4 menumod1">Sincronizar</div>
                        <div class="col-xs-4 menumod2 icotm1"><i class="fa fa-chevron-right"></i></div>
                        </div></a>                
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a href="{{ route('logout') }}"><div class="row menumod">
                        <div class="col-xs-4 icotm"><span class="icon-proximo"></span></div>
                        <div class="col-xs-4 menumod1">Sair</div>
                        </div></a>                
                </div>                 
            </div>

            <!-- FINAL MENU -->

        </div>

    @stop