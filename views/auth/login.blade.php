<!-- extendendo a estrututa da pagina master(blade) -->
    @extends('index')

<!-- Abrindo e Fechando(stop) a seção title -->
    @section ('title')
        Bem Vindo - Login Small Mobile
    @stop


    @section('body-class', 'bg-mobile')

<!--Abriu a seção conteudo -->
    @section ('content')
        <div class="container-fluid font">
            <div class="row-fluid">
                <div class="col-xs-12 fontquick">

                    <p class="logo-ico"><span class="icon-logo"></span></p>

                    @if (count($errors) > 0)
                        <div class="rodapesobre list-group">
                            <div class="row">
                            <div>
                            <strong>Oops!</strong> Houve alguns problemas com seu login.<br><br>
                            </div>
                            <div class="row">
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                            <br/>
                        </div>
                    @endif





                    <div class="floginentrar">                    
                    <form role="form" method="POST" action="/login">
                            {!! csrf_field() !!}
                            
                                <label class="sr-only" for="inputUser">CNPJ</label>
                                <input type="text" name="emitente" class="form-control input-lg cnpj" placeholder="CNPJ" required value="{{ old('emitente') }}">
                            
                            
                                <label class="sr-only" for="inputUser">Usuario</label>
                                <input type="text" name="nome" class="form-control input-lg" placeholder="Usúario" required value="{{ old('nome') }}">
                            
                            
                                <label class="sr-only" for="inputPass">Senha</label>
                                <input type="password" name="senha" class="form-control input-lg" placeholder="Senha" required />
                            </div>
                            <div class="formlogbtn">
                                <button type="submit" class="btnmod btnloginsmall btn-lg btn-block">Entrar</button>
                            </div>
                        </form>
                    

                    
                    <p align="center"><a href="{{ route('sobre_nos') }}" class="rodapesobre btn btn-link1 btn-lg">Sobre o Small Mobile</a></p>

                </div>
            </div>
        </div>
     @stop