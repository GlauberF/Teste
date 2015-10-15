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
        <div class="col-xs-10 bmenuinterno">Novo Cliente</div>

    </div>

    </div>

                    

                    
                    
                        @if (count($errors) > 0)
                            <div class="col-xs-12">
                                <p>&nbsp;<strong>&nbsp;Ooops!</strong></p><p>&nbsp; Houve alguns problemas com os dados inseridos.</p><br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                    </div>
                    </br>
</div>




                <!--MOSTRAR RESULTADOS-->
                <div class="container-fluid fontarial" id="listaCliente">
                    <div class="row col-xs-12">
                        <div class="input-group col-xs-12"> 

                        <form role="form" method="POST" action="{{ route('inserir_cliente') }}">
                            {!! csrf_field() !!}

                            <div class="input-group col-xs-12">
                                <label>Nome</label>
                                <input type="text" class="form-control input-lg" name="nome" value="{{ old('nome') }}">
                            </div>
                            <div class="input-group col-xs-12">
                                <label>CNPJ/CPF</label>
                                <input type="text" class="form-control input-lg" name="cgc" placeholder="00.000.000/0000-00" value="{{ old('cgc') }}">
                            </div>
                            <div class="input-group col-xs-12">
                                <label>IE</label>
                                <input type="text" class="form-control input-lg" name="ie" value="{{ old('ie') }}">
                            </div>
                            <div class="input-group col-xs-12">
                                <label>CEP</label>
                                <input type="text" class="form-control input-lg cep" placeholder="00.000-000" name="cep" value="{{ old('cep') }}">
                            </div>
                            <!--
                                //ADD no CSS
                                
                                option[value=""][disabled] {
                                    display: none;
                                }
                            -->
                            <div>
                                <label>Estado</label>
                                <select name="estado" id="selectEstado" class="form-control discli col-xs-12 input-lg">
                                    <option value="" disabled selected></option>
                                    @foreach ($estados as $estado)
                                        <option value="{{ $estado->uf }}" data-id="{{ $estado->id }}">{{ $estado->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label>Cidade</label>
                                <select name="cidade" id="selectCidade" class="form-control discli col-xs-12 input-lg">
                                    <option value="" disabled selected></option>
                                    <option disabled>Selecione um estado</option>
                                </select>
                            </div>
                            <div>
                                <label>Endereço</label>
                                <input type="text" class="form-control col-xs-12 input-lg" name="endere" value="{{ old('endere') }}">
                            </div>
                            <div>
                                <label>Complemento</label>
                                <input type="text" class="form-control col-xs-12 input-lg" name="comple" value="{{ old('comple') }}">
                            </div>
                            <div>
                                <label>Telefone</label>
                                <input type="text" class="form-control col-xs-12 input-lg tel" placeholder="(00) 0000 - 0000" name="fone" value="{{ old('fone') }}">
                            </div>
                            <div>
                                <label>E-mail</label>
                                <input type="text" class="form-control col-xs-12 input-lg" name="email" value="{{ old('email') }}">
                            </div>

                            </br>                       
                            <div>
                            </br>
                            </br>

                                <button class="btn-lg btn btbusca btbuscadf btn-block" type="submit"> SALVAR </button>
                            </div>
                        </form>

                </div>
            </div>
    @stop