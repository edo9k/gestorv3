@extends('app')
@section('content')
<!-- CABEÇALHO -->
<section class="content-header">
    <h1>
        Gerenciar Projetos
        <small>Marcos</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url('/') !!}"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="{!! url('/projects') !!}"><i class="fa fa-tasks"></i> Gerenciar Projetos</a></li>
        <li class="active"><i class="fa fa-flag"></i> Marcos</li>
    </ol>
</section>
<!-- FIM CABEÇALHO -->

<!--  -->
<section class="content">
    <div class="row artes">
        <div class="col-md-12">
            <div class="box box-ldi">
                <div class="box-header">
                    <h3 class="box-title">Evento de Artes Visuais</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <ul style="list-style:none;padding:0;">
                            <div class="col-md-4">
                                <li><b>Nome do projeto:</b> Evento de Artes Visuais</li>
                                <li><b>Professor:</b> Fabiana Carvalho</li>
                                <li><b>Curso:</b> Artes Visuais</li>
                            </div>
                            <div class="col-md-4">
                                <li><b>Início</b> 12/05/2016</li>
                                <li><b>Prazo:</b> 22/06/2016</li>
                                <li><b>Apoio:</b> Antonio, Mariana, Rayan</li>
                            </div>
                            <div class="col-md-4">
                                <li><b>Tipo do Projeto:</b> Vídeo, Impresso</li>
                                <li><b>Complementares:</b> Ilustração</li>
                            </div>
                        </ul>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <div class="col-md-4">
                            <b>Progresso:</b>
                            <div class="progress progress-sm" style="margin-top:5px;margin-bottom:0;">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    <span class="sr-only">100% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div><b>Situação:</b></div>
                            <div>Entregue</div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top:10px;">
        <div class="col-md-12">
            <div style="border-top:1px solid #ccc;margin-bottom:10px;"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12" style="margin-bottom:15px;"><h4>Tipo do projeto</h4></div>

        <div class="col-md-3">
            <div class="box box-ldi">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a data-toggle="collapse" href="#video">
                            <div class="box-header panel-heading">
                                <h3 class="box-title panel-title"><i class="fa fa-flag"></i>Vídeo</h3>
                                <div style="float:right;color:green;">100% <i class="fa fa-square" ></i></div>
                            </div>
                        </a>
                        <div id="video" class="panel-collapse collapse">
                            <div class="box-body panel-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Roteiro</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Em revisão</option>
                                                    <option>Finalizado</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Decupagem</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Storyboard</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Captura de áudio</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Gravação</label>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <input name="name" type="text" value="" class="form-control" placeholder="Realizada" />
                                                    </div>
                                                    de 30
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Ilustração concluída</label>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <input name="name" type="text" value="" class="form-control" placeholder="Realizada" />
                                                    </div>
                                                    de 20
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Animação</label>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <input name="name" type="text" value="" class="form-control" placeholder="Realizada" />
                                                    </div>
                                                    de 15
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Edição de vídeo</label>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <input name="name" type="text" value="" class="form-control" placeholder="Realizada" />
                                                    </div>
                                                    de 20
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Edição sonora</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Em revisão</option>
                                                    <option>Finalizado</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Animatic</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Legenda</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Créditos</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Render</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Revisão</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Upload</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> DVD</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Data de disponibilidade</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Início da gravação</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Revisado pelo autor</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Conclusão</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div style="text-align:right;">
                                    <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#editVideo" title="Editar atividade">
                                        Editar atividade
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="box box-ldi">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a data-toggle="collapse" href="#livroImpresso">
                            <div class="box-header panel-heading">
                                <h3 class="box-title panel-title"><i class="fa fa-flag"></i>Livro Impresso</h3>
                                <div style="float:right;color:#4a6c82;">50% <i class="fa fa-square" ></i></div>
                            </div>
                        </a>
                        <div id="livroImpresso" class="panel-collapse collapse">
                            <div class="box-body panel-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Formato</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Carta</option>
                                                    <option>Quadrado</option>
                                                    <option>Cartinha</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Papel</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Não definido</option>
                                                    <option>Offset</option>
                                                    <option>Couchê fosco</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Reunião com autor</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Briefing</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Texto de orelha</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Aguardando</option>
                                                    <option>Inserido</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Diagramação de capítulos</label>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <input name="name" type="text" value="" class="form-control" placeholder="Realizada" />
                                                    </div>
                                                    de 20
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Aberturas de capítulo</label>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <input name="name" type="text" value="" class="form-control" placeholder="Realizada" />
                                                    </div>
                                                    de 15
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Número de páginas</label>
                                                <input name="name" type="text" value="" class="form-control" placeholder="Número de páginas" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Finalização da Capa</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Aprovação do Layout</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Boneca</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Impressa</option>
                                                    <option>Com o autor</option>
                                                    <option>Devolvida com alterações</option>
                                                    <option>Aprovada</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Ficha catalográfica</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Não solicitada</option>
                                                    <option>Aguardando</option>
                                                    <option>Inserida</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Aprovação de folha de créditos</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Solicitação do ISBN</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Solicitado</option>
                                                    <option>Inserido</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ISBN</label>
                                                <input name="name" type="text" value="" class="form-control" placeholder="ISBN" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> PDF de visualização</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Revisão pelo Coordenador LDI</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Memorando</label>
                                                <input name="name" type="text" value="" class="form-control" placeholder="Memorando" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Prova de impressão</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Recebida</option>
                                                    <option>Pedido de nova prova</option>
                                                    <option>Aprovada com correções</option>
                                                    <option>Aprovada</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Gráfica</label>
                                                <input name="name" type="text" value="" class="form-control" placeholder="Gráfica" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div style="text-align:right;">
                                    <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#editLivroImpresso" title="Editar atividade">
                                        Editar atividade
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="box box-ldi">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a data-toggle="collapse" href="#livroDigital">
                            <div class="box-header panel-heading">
                                <h3 class="box-title panel-title"><i class="fa fa-flag"></i>Livro Digital</h3>
                                <div style="float:right;color:#4a6c82;">50% <i class="fa fa-square" ></i></div>
                            </div>
                        </a>
                        <div id="livroDigital" class="panel-collapse collapse">
                            <div class="box-body panel-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Reunião com autor</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Capa finalizada</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Número de capítulos</label>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <input name="name" type="text" value="" class="form-control" placeholder="Realizada" />
                                                    </div>
                                                    de 30
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Currículo do autor</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Ficha catalográfica</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Pedida</option>
                                                    <option>Inserida</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Aberturas de capítulo</label>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <input name="name" type="text" value="" class="form-control" placeholder="Realizada" />
                                                    </div>
                                                    de 15
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Aprovação de créditos</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Enviado para o coordenador</option>
                                                    <option>Devolvido com alterações</option>
                                                    <option>Aprovado</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Revisão do autor</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Enviado para o autor</option>
                                                    <option>Devolvido com alterações</option>
                                                    <option>Aprovado</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ISBN</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Solicitado a Biblioteca Nacional</option>
                                                    <option>Inserido</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Revisado pelo supervisor</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Upload</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div style="text-align:right;">
                                    <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#editLivroDigital" title="Editar atividade">
                                        Editar atividade
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="box box-ldi">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a data-toggle="collapse" href="#web">
                            <div class="box-header panel-heading">
                                <h3 class="box-title"><i class="fa fa-flag"></i>Web</h3>
                                <div style="float:right;color:#4a6c82;">80% <i class="fa fa-square" ></i></div>
                            </div>
                        </a>
                        <div id="web" class="panel-collapse collapse">
                            <div class="box-body panel-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>Reunião com professor</h5>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Realizada</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Escopo</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Requisitos funcionais</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Requisitos de conteúdo</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Aprovação do Briefing</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>Arquitetura da Informação</h5>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Realizada</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Quantidade de layouts</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input name="name" type="text" value="" class="form-control" placeholder="Realizados" />
                                                    </div>
                                                    de 20
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Implementação</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>10%</option>
                                                    <option>20%</option>
                                                    <option>30%</option>
                                                    <option>40%</option>
                                                    <option>50%</option>
                                                    <option>60%</option>
                                                    <option>70%</option>
                                                    <option>80%</option>
                                                    <option>90%</option>
                                                    <option>100%</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>Teste</h5>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Realizado</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Aprovação</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Aprovado</option>
                                                    <option>Aprovado com correções</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>Upload</h5>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Realizado</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div style="text-align:right;">
                                    <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#editWeb" title="Editar atividade">
                                        Editar atividade
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="box box-ldi">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a data-toggle="collapse" href="#moodle">
                            <div class="box-header panel-heading">
                                <h3 class="box-title"><i class="fa fa-flag"></i>Moodle</h3>
                                <div style="float:right;color:#4a6c82;">30% <i class="fa fa-square" ></i></div>
                            </div>
                        </a>
                        <div id="moodle" class="panel-collapse collapse">
                            <div class="box-body panel-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>Produção</h5>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Reunião com professor</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Adaptação do tema/CSS</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Cabeçalho</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Apresentação</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Enviado por e-mail</option>
                                                    <option>Aprovado</option>
                                                    <option>Aprovado com correções</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>Finalização</h5>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Envio para o Suporte</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Checagem online</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Organização da pasta</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div style="text-align:right;">
                                    <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#editMoodle" title="Editar atividade">
                                        Editar atividade
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top:10px;">
        <div class="col-md-12">
            <div style="border-top:1px solid #ccc;margin-bottom:10px;"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12" style="margin-bottom:15px;"><h4>Complementares</h4></div>

        <div class="col-md-3">
            <div class="box box-ldi">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a data-toggle="collapse" href="#ilustracao">
                            <div class="box-header panel-heading">
                                <h3 class="box-title"><i class="fa fa-flag"></i>Ilustração</h3>
                                <div style="float:right;color:green;">70% <i class="fa fa-square" ></i></div>
                            </div>
                        </a>
                        <div id="ilustracao" class="panel-collapse collapse">
                            <div class="box-body panel-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tipo</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Capa</option>
                                                    <option>Interna</option>
                                                    <option>Abertura</option>
                                                    <option>Banner</option>
                                                    <option>Mascote</option>
                                                    <option>Marca</option>
                                                    <option>Outro</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Especifique o tipo</label>
                                                <input name="name" type="text" value="" class="form-control" placeholder="Tipo de ilustração"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Quantidade</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input name="name" type="text" value="" class="form-control" placeholder="Realizada"/>
                                                    </div>
                                                    de 10
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Complexidade</label>
                                                <select class="form-control">
                                                    <option>Simples</option>
                                                    <option>Intermediário</option>
                                                    <option>Complexo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Dimensão</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>2D</option>
                                                    <option>3D</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div style="text-align:right;">
                                    <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#editIlustracao" title="Editar atividade">
                                        Editar atividade
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="box box-ldi">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a data-toggle="collapse" href="#tabelas">
                            <div class="box-header panel-heading">
                                <h3 class="box-title"><i class="fa fa-flag"></i>Tabela</h3>
                                <div style="float:right;color:gray;">0% <i class="fa fa-square" ></i></div>
                            </div>
                        </a>
                        <div id="tabelas" class="panel-collapse collapse">
                            <div class="box-body panel-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Quantidade</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input name="name" type="text" value="" class="form-control" placeholder="Realizada"/>
                                                    </div>
                                                    <div class="col-md-1" style="line-height:35px;">de</div>
                                                    <div class="col-md-5">
                                                        <input name="name" type="text" value="" class="form-control" placeholder="Solicitada"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Complexidade</label>
                                                <select class="form-control">
                                                    <option>Simples</option>
                                                    <option>Intermediário</option>
                                                    <option>Complexo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div style="text-align:right;">
                                    <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#editTabela" title="Editar atividade">
                                        Editar atividade
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="box box-ldi">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a data-toggle="collapse" href="#fotografia">
                            <div class="box-header panel-heading">
                                <h3 class="box-title"><i class="fa fa-flag"></i>Fotografia</h3>
                                <div style="float:right;color:gray;">0% <i class="fa fa-square" ></i></div>
                            </div>
                        </a>
                        <div id="fotografia" class="panel-collapse collapse">
                            <div class="box-body panel-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Quantidade</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input name="name" type="text" value="" class="form-control" placeholder="Realizada"/>
                                                    </div>
                                                    <div class="col-md-1" style="line-height:35px;">de</div>
                                                    <div class="col-md-5">
                                                        <input name="name" type="text" value="" class="form-control" placeholder="Solicitada"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Complexidade</label>
                                                <select class="form-control">
                                                    <option>Simples</option>
                                                    <option>Intermediário</option>
                                                    <option>Complexo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div style="text-align:right;">
                                    <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#editFotografia" title="Editar atividade">
                                        Editar atividade
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="box box-ldi">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a data-toggle="collapse" href="#formulas">
                            <div class="box-header panel-heading">
                                <h3 class="box-title"><i class="fa fa-flag"></i>Fórmula</h3>
                                <div style="float:right;color:#4a6c82;">5% <i class="fa fa-square" ></i></div>
                            </div>
                        </a>
                        <div id="formulas" class="panel-collapse collapse">
                            <div class="box-body panel-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Quantidade</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input name="name" type="text" value="" class="form-control" placeholder="Realizada"/>
                                                    </div>
                                                    <div class="col-md-1" style="line-height:35px;">de</div>
                                                    <div class="col-md-5">
                                                        <input name="name" type="text" value="" class="form-control" placeholder="Solicitada"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Complexidade</label>
                                                <select class="form-control">
                                                    <option>Simples</option>
                                                    <option>Intermediário</option>
                                                    <option>Complexo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div style="text-align:right;">
                                    <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#editFormula" title="Editar atividade">
                                        Editar atividade
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="editWeb" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Web</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Reunião com professor</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Escopo</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Requisitos funcionais</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Requisitos de conteúdo</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Aprovação do briefing</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Arquitetura da informação</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group" style="margin-top:-5px;margin-bottom:5px;">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Layout
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade solicitada">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Implementação </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Teste</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Aprovação</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Upload</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Salvar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="editVideo" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Vídeo</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Roteiro</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Decupagem</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Storyboard</label>
                            </div>
                            <div class="checkbox" style="margin-bottom:5px;">
                                <label><input type="checkbox" checked> Captura de áudio</label>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom:5px;">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Gravação
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade solicitada">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:5px;margin-bottom:5px;">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Ilustração concluída
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade solicitada">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:5px;margin-bottom:5px;">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Animação
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade solicitada">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:5px;margin-bottom:5px;">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Edição de vídeo
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade solicitada">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Edição sonora</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Animatic</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Legenda</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Créditos</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Render</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Revisão</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Upload</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> DVD</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Data de disponibilidade</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Início da gravação</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Revisado pelo autor</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Conclusão</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Salvar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="editLivroImpresso" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Livro Impresso</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Formato</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Papel</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Reunião com autor</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Briefing</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Texto de orelha</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group" style="margin-top:-5px;">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Diagramação de capítulos
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade solicitada">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group" style="margin-top:5px;margin-bottom:5px;">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Aberturas de capítulos
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade solicitada">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Número de páginas </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Finalização da capa</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Aprovação do layout</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Boneca</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Ficha catalográfica</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Aprovaçao de folha de créditos</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Solicitação de ISBN</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> ISBN</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> PDF de visualização</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Revisão pelo Coordenador LDI</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Memorando</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Prova de impressão</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Gráfica</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Salvar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="editLivroDigital" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Livro Digital</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Reunião com autor</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Capa finalizada</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group" style="margin-top:-5px;margin-bottom:5px;">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Número de capítulos
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade solicitada">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Currículo do autor</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Ficha catalográfica</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group" style="margin-top:-5px;margin-bottom:5px;">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Aberturas de capítulos
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade solicitada">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Aprovação de créditos </label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Revisão do autor</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> ISBN</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Revisado pelo supervisor</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Upload</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Salvar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="editMoodle" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Moodle</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Reunião com professor</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Adaptação do tema/CSS</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Cabeçalho</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Apresentação</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Envio para o Suporte</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Checagem online</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Organização da pasta</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Salvar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="editIlustracao" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Ilustração</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Tipo</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group" style="margin-top:-5px;margin-bottom:5px;">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Quantidade
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade solicitada">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Complexidade</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Dimensão</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Salvar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="editTabela" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Tabela</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group" style="margin-top:-5px;margin-bottom:5px;">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Quantidade
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade solicitada">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Complexidade</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Salvar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="editFotografia" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Fotografia</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group" style="margin-top:-5px;margin-bottom:5px;">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Quantidade
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade solicitada">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Complexidade</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Salvar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="editFormula" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Fórmula</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group" style="margin-top:-5px;margin-bottom:5px;">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Quantidade
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade solicitada">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Complexidade</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Salvar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection