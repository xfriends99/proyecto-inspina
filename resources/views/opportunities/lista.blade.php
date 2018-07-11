@extends('layouts.app')
@section('content')

                <main class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <aside>
                            <ol class="breadcrumb">
                                <li><a href="">Home</a></li>
                                <li class="active">Page</li>
                            </ol>
                        </aside>
                        <div class="side-0">
                            <section>
                                <h1>Oportunidades</h1>
                            </section>
                            <section>
                                <div class="btn-group">
                                    <a class="btn btn-white btn-sm" href="oportunidades-table.php"><i class="fa fa-table"></i></a>
                                    <a class="btn btn-white btn-sm active" href="oportunidades-mosaico.php"><i class="fa fa-align-justify"></i></a>
                                </div>
                                <div class="btn-group">
                                    <a data-toggle="dropdown" class="btn btn-white btn-sm dropdown-toggle"><i class="fa fa-edit"></i> Acciones <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="">Compartir oportunidad</a></li>
                                        <li><a href="">Asignar oportunidad</a></li>
                                    </ul> 
                                </div>
                                <a class="btn btn-blue btn-sm" href="oportunidades-edit.php"><i class="fa fa-plus"></i> Nueva</a>
                            </section>
                        </div>
                    </div>
                    <div class="row">
                        <div class="side-0">
                            <div class="side-0-box-xs pendiente">
                                <div class="ibox">
                                    <div class="ibox-heading">
                                        <h4>Pendientes de contacto</h4>
                                        <div class="ibox-tools">
                                            <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                    </div>
                                    <div id="pendiente" class="ibox-content">
                                        <div class="row">
                                            <ul class="sortable-list connectList agile-list" id="todo">
                                                <li id="">
                                                    <p>Nombre de oportunidad.</p>
                                                    <div class="task-nav">
                                                        <small><i class="fa fa-usd"></i> 5.000</small>
                                                        <a href="#">Editar</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="side-0-box-xs contacto">
                                <div class="ibox">
                                    <div class="ibox-heading">
                                        <h4>En contacto</h4>
                                        <div class="ibox-tools">
                                            <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                    </div>
                                    <div id="contacto" class="ibox-content">
                                        <div class="row">
                                            <ul class="sortable-list connectList agile-list" id="todo">
                                                <li id="">
                                                    <p>Nombre de oportunidad.</p>
                                                    <div class="task-nav">
                                                        <small><i class="fa fa-usd"></i> 5.000</small>
                                                        <a href="#">Editar</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="side-0-box-xs negociacion">
                                <div class="ibox">
                                    <div class="ibox-heading">
                                        <h4>En negociación</h4>
                                        <div class="ibox-tools">
                                            <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                    </div>
                                    <div id="negociacion" class="ibox-content">
                                        <div class="row">
                                            <ul class="sortable-list connectList agile-list" id="todo">
                                                <li id="">
                                                    <p>Nombre de oportunidad.</p>
                                                    <div class="task-nav">
                                                        <small><i class="fa fa-usd"></i> 5.000</small>
                                                        <a href="#">Editar</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="side-0-box-xs ganada">
                                <div class="ibox">
                                    <div class="ibox-heading">
                                        <h4>Ganadas</h4>
                                        <div class="ibox-tools">
                                            <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                    </div>
                                    <div id="ganada" class="ibox-content">
                                        <div class="row">
                                            <ul class="sortable-list connectList agile-list" id="todo">
                                                <li id="">
                                                    <p>Nombre de oportunidad.</p>
                                                    <div class="task-nav">
                                                        <small><i class="fa fa-usd"></i> 5.000</small>
                                                        <a href="#">Editar</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="side-0-box-xs perdida">
                                <div class="ibox">
                                    <div class="ibox-heading">
                                        <h4>Perdidas</h4>
                                        <div class="ibox-tools">
                                            <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                    </div>
                                    <div id="perdida" class="ibox-content">
                                        <div class="row">
                                            <ul class="sortable-list connectList agile-list" id="todo">
                                                <li id="">
                                                    <p>Nombre de oportunidad.</p>
                                                    <div class="task-nav">
                                                        <small><i class="fa fa-usd"></i> 5.000</small>
                                                        <a href="#">Editar</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           
        </div>

@endsection