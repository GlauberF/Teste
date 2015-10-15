<!-- extendendo a estrututa da pagina master(blade) --> 
	@extends('index')


<!-- Abrindo e Fechando(stop) a seção title -->
	@section('title')
	Sobre Small Mobile
	@stop

	@section('body-class', 'binterna')

<!--Abriu a seção conteudo -->
	@section('content')
		<!--MENU INICIO -->
        
        <div class="container-fluid font">
        <div class="row">            
            
        <div class="col-xs-2 bmenuinterno btmenu"><a href="http://192.168.210.4/dashboard"><button class="btnmod btnloginsmall"><i class="fa fa-bars"></i></button></a></div>
            
            
        <div class="col-xs-10 bmenuinterno fontpesq">Sobre O Small Mobile</div>
        </div></div>
        
            
        <br/>
       
        
        <!-- CAMPO RESULTADOS -->
        
        <!-- exemplo 01-->
        <div class="container-fluid font" id="listaEstoque">
            <div class="row col-xs-12 baseb">
                <div class="col-xs-12 baseb fontarial">

                    <h2 class="hidden-xs sinc">Small Mobile</h2>
                    <h3 class="visible-xs-block text-center sinc">Small Mobile</h3>

                  
                    <p class="hidden-xs">Um novo conceito de sistema comercial que vai mudar tudo.
                    Independente de sistema operacional em qualquer lugar, inclusive no seu Smartphone ou outro dispositivo de acesso a internet.</p>

                    <p class="visible-xs-block text-justify">Um novo conceito de sistema comercial que vai mudar tudo.
                    Independente de sistema operacional em qualquer lugar, inclusive no seu Smartphone ou outro dispositivo de acesso a internet.</p>

                    <p><img src="img/smallmobile.png" class="img-responsive"></p>
                    </br>

                    <ul>
                        <li>NFC-e (Nota Fiscal Consumidor Eletrônica)</li>
                        <li>NF-e (Nota Fiscal Eletrônica)</li>
                        <li>Orçamentos</li>
                        <li>Cadastro de clientes</li>
                        <li>Consulta de estoque</li>
                        <li>Consulta de preços</li>
                        <li>Sincronizado com o Small Commerce</li>
                    </ul>


                    </br>
                                       
                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;Teste gratuitamente:</h4>
                    <!--h4 class="hidden-xs">&nbsp;Teste gratuitamente:</h4-->
                    

                    <ul>
                        <li><strong>Acesse</strong> www.smallmobile.com.br</li>
                        <li><strong>CNPJ:</strong> 99.999.999/0001-91</li>
                        <li><strong>Usuário:</strong> Smallsoft</li>
                        <li><strong>Senha:</strong> 123</li>
                    </ul>
                    
                    </br>
                    <a href="http://www.smallsoft.com.br" target="_blank"><h4>&nbsp;&nbsp;&nbsp;&nbsp;www.smallsoft.com.br</h4>

                    <h3 class="hidden-xs">&nbsp;&nbsp;&nbsp;<i class="fa fa-phone-square icotm1"></i>&nbsp;&nbsp;0800.645.2008</h3>

                    <h4 class="visible-xs-block">&nbsp;&nbsp;&nbsp;<i class="fa fa-phone-square icotm1"></i>&nbsp;&nbsp;0800.645.2008</h4>




                </div>
            </div>      
        </div>

	@stop
<!-- fechou a seção conteudo -->