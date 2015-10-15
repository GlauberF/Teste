<!-- extendendo a estrututa da pagina master(blade) -->
	@extends('index')

<!-- Abrindo e Fechando(stop) a seção title -->
	@section('title')
	Small Mobile - Sincronização
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
            <div class="col-xs-10 bmenuinterno">Sincronização</div>

        </div>

        </div>
    </div>
		
		<br/>

        <div class="container-fluid font">
            <div class="row col-xs-12 baseb">
                <div class="col-xs-12 baseb fontarial">

                    <ul>
                    	@foreach ($status as $msg)
                        <li class="menumod1">{{ $msg }}</li>
                        @endforeach
                    </ul>

                </div>
            </div>      
        </div>
	@stop