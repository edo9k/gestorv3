@extends('app')
@section('content')

<!-- CABEÇALHO  -->
<section class="content-header">
    <h1>
        Gerenciar Usuários
        <small>Adicionar novo</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="#"><i class="fa fa-group"></i> Gerenciar Usuários</a></li>
        <li class="active"><i class="fa fa-plus-circle"></i> Adicionar Usuário</li>
    </ol>
</section> <!-- FIM CABEÇALHO -->

<!-- ADICIONAR USUÁRIO -->
<section class="content">
    <div class="row">
        <section class="col-md-12">
            <div class="box box-ldi">
                <div class="box-body">
                    @include('errors._errors')

                    <!-- FORMULÁRIO -->
                    <form role="form" action="{{ url('/users') }}" method="POST" id="adicionarUsuario">
                        {!! csrf_field() !!}
                        @include('template.user._form')
                    </form>

                    <div class="row">
                        <div class="col-md-12" style="margin-top:15px;text-align:right;">
                            <!--BOTÕES-->
                            <button class="btn btn-success" type="submit" form="adicionarUsuario" value="Enviar">Enviar</button>
                            <a href="{{ url('/users') }}">
                                <button class="btn btn-default" value="Cancelar" >Cancelar</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section> <!-- FIM ADICIONAR USUÁRIO -->
@endsection
