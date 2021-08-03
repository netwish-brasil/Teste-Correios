<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CAMARGO | DS Netwish</title>
    <meta name="theme-color" content="#3c8dbc">
    <meta name="msapplication-navbutton-color" content="#3c8dbc">
    <meta name="apple-mobile-web-app-status-bar-style" content="#3c8dbc">
    <script src="https://pedidos.camargociaembalagens.com.br/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="https://pedidos.camargociaembalagens.com.br/bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://pedidos.camargociaembalagens.com.br/plugins/pace/pace.min.css">
    <script src="https://pedidos.camargociaembalagens.com.br/plugins/pace/pace.js"></script>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://pedidos.camargociaembalagens.com.br/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://pedidos.camargociaembalagens.com.br/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://pedidos.camargociaembalagens.com.br/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="https://pedidos.camargociaembalagens.com.br/plugins/iCheck/all.css">

    <link rel="stylesheet" href="https://pedidos.camargociaembalagens.com.br/plugins/morris/morris.css">

    <link rel="stylesheet" href="https://pedidos.camargociaembalagens.com.br/plugins/datepicker/datepicker3.css">

    <link rel="stylesheet" href="https://pedidos.camargociaembalagens.com.br/plugins/daterangepicker/daterangepicker-bs3.css">

    <link rel="stylesheet" href="https://pedidos.camargociaembalagens.com.br/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="https://pedidos.camargociaembalagens.com.br/style.css" teste="63">




</head>

<body class="skin-blue layout-top-nav">

    <div id="geral" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="carregando_iframe"><i class="fa fa-spinner fa-spin"></i></div>
                    <iframe id="meuiframe" frameborder="0" name="consulta"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info btn-sm" onclick="imprimir('consulta');">Imprimir</button>
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">

        <div class="content-wrapper">

            <section class="content">

                <div class="row">
                </div>
                <div class="container">
                    <div></div>

                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/select2/select2.full.min.js"></script>
                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/select2/i18n/pt-BR.js"></script>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/input-mask/jquery.inputmask.js"></script>
                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/input-mask/jquery.inputmask.extensions.js"></script>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/timepicker/bootstrap-timepicker.min.js"></script>

                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/slimScroll/jquery.slimscroll.min.js"></script>

                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/iCheck/icheck.min.js"></script>

                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/fastclick/fastclick.min.js"></script>

                    <script src="https://pedidos.camargociaembalagens.com.br/dist/js/app.min.js"></script>

                    <script src="https://pedidos.camargociaembalagens.com.br/dist/js/demo.js"></script>

                    <script src="dropzone.js"></script>

                    <script src="https://www.netwish.com.br/clientes/sindienergia/dist/js/bootstrap-confirmation.min.js"></script>
                    <script type="text/javascript">
                        $(document).find('[data-toggle="confirmation"]').confirmation();
                    </script>
                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/daterangepicker/daterangepicker.js"></script>
                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/datepicker/bootstrap-datepicker.js"></script>

                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/datatables/jquery.dataTables.min.js"></script>
                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/datatables/dataTables.bootstrap.min.js"></script>
                    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                    <script src="https://pedidos.camargociaembalagens.com.br/dist/js/camargo.js"></script>

                    <link rel="stylesheet" href="plugins/select2/select2.min.css">
                    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
                    <link href="//cdnjs.cloudflare.com/ajax/libs/dropzone/3.8.4/css/dropzone.css" type="text/css" rel="stylesheet" />
                    <style>
                        select[readonly] {
                            background: #eee;
                            /*Simular campo inativo - Sugestão @GabrielRodrigues*/
                            pointer-events: none;
                            touch-action: none;
                        }
                    </style>
                    <form action="formulario-chamado-grava.php" method="post" class="form_principal">
                        <div class="box box-danger collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title" title="">Formulário </h3>
                                <div class="box-tools pull-right">
                                    <button class="btn btn-box-tool" data-widget="collapse" type="button"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <input type="hidden" name="id_pedido" value="">
                                    <div class="col-md-4">
                                        <div class="form-group border_red">
                                            <label>Tipo</label>
                                            <select class="form-control select2 obrigatorio" style="width: 100%;" name="tipo" id="tipo" required>
                                                <option value="">Selecione uma opção</option>
                                                <option value="solicitacao">Solicitação / Desenvolvimento</option>
                                                <option value="erro">Erro</option>
                                                <option value="infra">Infra</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input type="text" class="form-control" placeholder="Título" value="" name="titulo" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group border_red">
                                            <label>Setor</label>
                                            <select class="form-control select2 obrigatorio" style="width: 100%;" name="setor" id="setor" required>
                                                <option value="">Selecione uma opção</option>
                                                <option value="Almoxarifado">Almoxarifado</option>
                                                <option value="Assistência Técnica">Assistência Técnica</option>
                                                <option value="Cancian">Cancian</option>
                                                <option value="Cilindros">Cilindros</option>
                                                <option value="Cilindros/Lavagem de Peças">Cilindros/Lavagem de Peças</option>
                                                <option value="Colorista">Colorista</option>
                                                <option value="Comercial">Comercial</option>
                                                <option value="Compras">Compras</option>
                                                <option value="Contabilidade">Contabilidade</option>
                                                <option value="Controle de Qualidade">Controle de Qualidade</option>
                                                <option value="Custos">Custos</option>
                                                <option value="Desenvolvimento">Desenvolvimento</option>
                                                <option value="Digital">Digital</option>
                                                <option value="Diretoria">Diretoria</option>
                                                <option value="Escritório">Escritório</option>
                                                <option value="Expedição">Expedição</option>
                                                <option value="Fábrica de Tintas">Fábrica de Tintas</option>
                                                <option value="Faturamento">Faturamento</option>
                                                <option value="Financeiro">Financeiro</option>
                                                <option value="Fiscal">Fiscal</option>
                                                <option value="HP">HP</option>
                                                <option value="Diretoria Administrativa Financeira">Diretoria Administrativa Financeira</option>
                                                <option value="Manutenção">Manutenção</option>
                                                <option value="Padrão de Cores">Padrão de Cores</option>
                                                <option value="PCP">PCP</option>
                                                <option value="Portaria">Portaria</option>
                                                <option value="Prepress">Prepress</option>
                                                <option value="Processos">Processos</option>
                                                <option value="Produção">Produção</option>
                                                <option value="Qualidade">Qualidade</option>
                                                <option value="Recepção">Recepção</option>
                                                <option value="Recursos Humanos">Recursos Humanos</option>
                                                <option value="SAC">SAC</option>
                                                <option value="Segurança do Trabalho">Segurança do Trabalho</option>
                                                <option value="TI">TI</option>
                                                <option value="Tintas">Tintas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="box-header">
                                            <h3 class="box-title">Arquivos em Geral</h3>
                                        </div>
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#arquivos-em-geral">Enviar arquivos (Pdf, Jpg, Gif, Xlsx, Docx)</button>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="box-header ">
                                                    <h3 class="box-title"><br>Gravidade</h3>
                                                </div>
                                                <div class="form-group border_red">
                                                    <input type="radio" id="Sem Gravidade" name="gravidade" value="Sem Gravidade">
                                                    <label for="Sem Gravidade	">Sem Gravidade </label><br>
                                                    <input type="radio" id="Pouco Grave" name="gravidade" value="Pouco Grave">
                                                    <label for="Pouco Grave">Pouco Grave</label><br>
                                                    <input type="radio" id="Muito Grave" name="gravidade" value="Muito Grave">
                                                    <label for="Muito Grave">Muito Grave</label><br>
                                                    <input type="radio" id="Extremamente Grave" name="gravidade" value="Extremamente Grave">
                                                    <label for="Extremamente Grave">Extremamente Grave</label>
                                                    </select>
                                                </div>
                                                <button type="submit" id="salvar" class="btn btn-info" value="Salvo" name="status_grava" disabled>SALVAR</button>
                                                <a href="home.php" class="btn btn-danger" data-toggle="confirmation" data-title="Deseja cancelar a inclusão?" data-btn-ok-label="Sim" data-btn-cancel-label="Não">CANCELAR</a>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-header ">
                                                    <h3 class="box-title"><br>Urgência</h3>
                                                </div>
                                                <div class="form-group border_red">
                                                    <input type="radio" id="Pode Esperar" name="urgencia" value="Pode Esperar">
                                                    <label for="Pode Esperar">Pode Esperar </label><br>
                                                    <input type="radio" id="Pouco Urgente" name="urgencia" value="Pouco Urgente">
                                                    <label for="Pouco Urgente">Pouco Urgente</label><br>
                                                    <input type="radio" id="Urgente" name="urgencia" value="Urgente">
                                                    <label for="Urgente">Urgente</label><br>
                                                    <input type="radio" id="Precisa ser resolvido já" name="urgencia" value="Precisa ser resolvido já">
                                                    <label for="Precisa ser resolvido já">Precisa ser resolvido já</label>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="box-header ">
                                                    <h3 class="box-title"><br>Tendência</h3>
                                                </div>
                                                <div class="form-group border_red">
                                                    <input type="radio" id="Não Muda Nada" name="tendencia" value="Não Muda Nada">
                                                    <label for="Não Muda Nada">Não Muda Nada</label><br>
                                                    <input type="radio" id="Piorar em Longo Prazo" name="tendencia" value="Piorar em Longo Prazo">
                                                    <label for="Piorar em Longo Prazo">Piorar em Longo Prazo</label><br>
                                                    <input type="radio" id="Piorar a Curto Prazo" name="tendencia" value="Piorar a Curto Prazo">
                                                    <label for="Piorar a Curto Prazo">Piorar a Curto Prazo</label><br>
                                                    <input type="radio" id="Piorar Rapidamente" name="tendencia" value="Piorar Rapidamente">
                                                    <label for="Piorar Rapidamente">Piorar Rapidamente</label>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class="col-md-12">
                                        <h3 class="box-title">Solicitação</h3>
                                        <div class="form-group">
                                            <label>Sistema: Qual o sistema em que se pretende desenvolver a melhoria?</label>
                                            <input type="textarea" class="form-control" value="" name="sistema-solicitacao" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Local: O caminho onde essa funcionalidade deve ser implementada:</label>
                                            <input type="textarea" class="form-control" value="" name="local-solicitacao" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Motivo: O que o levou a essa necessidade, ou seja, o porquê necessita dessa nova funcionalidade, relatório, campo ou o que quer que esteja sendo solicitado?</label>
                                            <input type="textarea" class="form-control" value="" name="motivo-solicitacao" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Descrição: O que exatamente precisa ser feito, se possível exemplificar com prints de telas.</label>
                                            <input type="textarea" class="form-control" value="" name="descricao-solicitacao" required>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="col-md-12">
                                        <h3 class="box-title">Erro</h3>
                                        <p>Problema de Sistema: Ao relatar um problema encontrado em qualquer sistema (AFX, Protheus, Pedido web, BI), o usuário deve informar:</p>
                                        <div class="form-group">
                                            <label>Sistema: Qual o sistema que apresenta o problema relatado?</label>
                                            <input type="textarea" class="form-control" value="" name="sistema-erro" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Local: O caminho dentro do sistema até a tela ou relatório onde o problema se encontra:</label>
                                            <input type="textarea" class="form-control" value="" name="local-erro" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Descrição: Detalhar exatamente o procedimento feito até que o problema aconteça, dessa forma será possível que o suporte consiga simular o ocorrido.</label>
                                            <input type="textarea" class="form-control" value="" name="descricao-erro" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Exemplos: Enviar exemplos de itens, pedidos, OPs ou qualquer outra informação que seja possível testar, pois muitas vezes o erro acontece somente em um determinado item e o suporte perderá muito mais tempo tentando encontrar algo para simular.</label>
                                            <input type="textarea" class="form-control" value="" name="exemplos-erro" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <h3 class="box-title">Infra</h3>
                                        <p>Chamados relacionados a sistemas operacionais, rede ou infraestrutura: São os problemas ou necessidades encontradas que não são relacionados aos sistemas descritos anteriormente (Windows, Rede, Internet, Acessos), onde o usuário deve informar:</p>
                                        <div class="form-group">
                                            <label>Local: Onde o problema ou o objeto da solicitação se encontra:</label>
                                            <input type="textarea" class="form-control" value="" name="local-infra" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Descrição: Detalhar o problema encontrado ou a necessidade com o maior número de detalhes que for possível, informar o que foi feito até que o problema ocorresse.</label>
                                            <input type="textarea" class="form-control" value="" name="descricao-infra" required>
                                        </div>
                                    </div><br><br>
                    </form>

                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/select2/select2.full.min.js"></script>
                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/select2/i18n/pt-BR.js"></script>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/input-mask/jquery.inputmask.js"></script>
                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/input-mask/jquery.inputmask.extensions.js"></script>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/timepicker/bootstrap-timepicker.min.js"></script>

                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/slimScroll/jquery.slimscroll.min.js"></script>

                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/iCheck/icheck.min.js"></script>

                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/fastclick/fastclick.min.js"></script>

                    <script src="https://pedidos.camargociaembalagens.com.br/dist/js/app.min.js"></script>

                    <script src="https://pedidos.camargociaembalagens.com.br/dist/js/demo.js"></script>

                    <script src="https://pedidos.camargociaembalagens.com.br/dropzone.js"></script>

                    <script src="https://www.netwish.com.br/clientes/sindienergia/dist/js/bootstrap-confirmation.min.js"></script>
                    <script type="text/javascript">
                        $(document).find('[data-toggle="confirmation"]').confirmation();
                    </script>
                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/daterangepicker/daterangepicker.js"></script>
                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/datepicker/bootstrap-datepicker.js"></script>

                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/datatables/jquery.dataTables.min.js"></script>
                    <script src="https://pedidos.camargociaembalagens.com.br/plugins/datatables/dataTables.bootstrap.min.js"></script>
                    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                    <script src="https://pedidos.camargociaembalagens.com.br/dist/js/camargo.js"></script>
                    <script>
                        //////////////////////////////////////////////////////////////////
                        //DropzoneJS snippet - js


                        Dropzone.options.meuDropZone = {
                            accept: function(file, done) {
                                console.log("uploaded");
                                done();
                            },
                            init: function() {
                                this.on("addedfile", function() {
                                    if (this.files[20] != null) {
                                        this.removeFile(this.files[20]);
                                        alert("Limite de 5 arquivos excedido!");
                                    }
                                });


                                this.on('success', function(file, json) {
                                    console.log("teste1");
                                });

                                this.on('addedfile', function(file) {
                                    console.log("teste2");

                                });

                                this.on('drop', function(file) {
                                    alert('file');
                                    console.log("teste3");
                                });
                            }
                        };
                    </script>
            </section>
        </div>
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Versão</b> 2.6.3
        </div>
        <strong>Copyright &copy; 2021 <a href="http://www.netwish.com.br">Netwish</a>.</strong> All rights reserved.
    </footer>
</body>

</html>