<!-- extendendo a estrututa da pagina master(blade) -->
    @extends('index')

<!-- Abrindo e Fechando(stop) a seção title -->
    @section('title')
        Cliente - Small Mobile
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
        <div class="col-xs-10 bmenuinterno">Editar Cliente</div>

    </div>

    </div>
</div>
<div class="container-fluid font">
                    <div class="row">
                        <div class="col-xs-12"> 
                        @if (count($errors) > 0)
                            <div>
                                <p>&nbsp;<strong>&nbsp;Ooops!</strong></p><p>&nbsp; Houve alguns problemas com os dados inseridos.</p><br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        </br>
                        </div>
                    </div>
                    </br>




                <!--MOSTRAR RESULTADOS-->
                <div class="container-fluid fontarial">
                    <div class="row col-xs-12">
                        <div class="input-group col-xs-12">

                    <form role="form" method="POST" action="{{ route('atualizar_cliente', ['id' => $clifor['id']]) }}">
                        {!! csrf_field() !!}
                        {!! method_field('put') !!}

                        <div class="input-group col-xs-12">
                            <label>Nome</label>
                            <input type="text" class="form-control input-lg" name="nome" value="{{ $clifor['nome'] }}">
                        </div>
                        <div class="input-group col-xs-12">
                            <label>CNPJ/CPF</label>
                            <input type="text" class="form-control input-lg" name="cgc" value="{{ $clifor['cgc'] }}" readonly>
                        </div>
                        <div class="input-group col-xs-12">
                            <label>IE</label>
                            <input type="text" class="form-control input-lg" name="ie" value="{{ $clifor['ie'] }}">
                        </div>
                        <div class="input-group col-xs-12">
                            <label>CEP</label>
                            <input type="text" class="form-control input-lg cep" name="cep" value="{{ $clifor['cep'] }}">
                        </div>
                        <div class="input-group col-xs-12">
                            <label>Estado</label>
                            <select name="estado" class="form-control input-lg" id="selectEstado">
                                @foreach ($estados as $estado)
                                    @if($estado->uf == $clifor['estado'])
                                        <option value="{{ $estado->uf }}" data-id="{{ $estado->id }}" selected>{{ $estado->nome }}</option>
                                    @else
                                        <option value="{{ $estado->uf }}" data-id="{{ $estado->id }}">{{ $estado->nome }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group col-xs-12">
                            <label>Cidade</label>
                            <select name="cidade" class="form-control input-lg" id="selectCidade">
                                 @foreach ($cidades as $cidade)
                                    @if( str_slug($cidade->nome) == str_slug($clifor['cidade']) )
                                        <option value="{{ $cidade->nome }}" selected>{{ $cidade->nome }}</option>
                                    @else
                                        <option value="{{ $cidade->nome }}">{{ $cidade->nome }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group col-xs-12">
                            <label>Endereço</label>
                            <input type="text" class="form-control input-lg" name="endere" value="{{ $clifor['endere'] }}">
                        </div>
                        <div class="input-group col-xs-12">
                            <label>Complemento</label>
                            <input type="text" class="form-control input-lg" name="comple" value="{{ $clifor['comple'] }}">
                        </div>
                        <div class="input-group col-xs-12">
                            <label>Telefone</label>
                            <input type="text" class="form-control input-lg tel" name="fone" value="{{ $clifor['fone'] }}">
                        </div>
                        <div class="input-group col-xs-12">
                            <label>E-mail</label>
                            <input type="text" class="form-control input-lg" name="email" value="{{ $clifor['email'] }}">
                        </div>                        
                        <div>
                            </br>
                            </br>
                            <button class="btn-lg btn btbusca btbuscadf btn-block" type="submit">SALVAR</button>
                        </div>
                    </form>

                </div>
            </div>
    @stop