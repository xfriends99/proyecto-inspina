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
                                <h1>Nombre Grupo</h1>
                            </section>
                            <section>
                                <div class="btn-group">
                                    <a data-toggle="dropdown" class="btn btn-white btn-sm dropdown-toggle"><i class="fa fa-edit"></i> Acciones <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href=""><i class="fa fa-trash"></i> Eliminar grupo</a></li>
                                    </ul> 
                                </div>
                                <a class="btn btn-blue btn-sm" href="#"><i class="fa fa-save"></i> Guardar</a>
                            </section>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tabs-container">
                            <div class="side-1">
                                <form action="#" class="dropzone" id="dropzoneForm">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple/>
                                    </div>
                                </form>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">Información</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">Miembros</a></li>
                                </ul>
                            </div>
                            <div class="side-2">
                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane active">
                                        <div class="panel-body">
                                            <div class="ibox">
                                                <div class="ibox-heading">
                                                    <h4>Información del grupo</h4>
                                                    <div class="ibox-tools">
                                                        <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                                    </div>
                                                </div>
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label>Nombre del grupo</label>
                                                            <input type="text" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Visibilidad</label>
                                                            <select data-placeholder="" placeholder="" class="form-control">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group form-group-lg">
                                                            <label>Descripción</label>
                                                            <textarea type="text" id="" value="" name="" data-placeholder="" placeholder=""/></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-2" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="ibox">
                                                <div class="ibox-heading">
                                                    <h4>Miembros</h4>
                                                    <div class="ibox-tools">
                                                        <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                                    </div>
                                                </div>
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <a href="" class="btn-plus">
                                                                +
                                                                <span>Agregar miembros</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="row">

                                                        <!-- CONTACTO -->
                                                        <div class="record">
                                                            <div class="record-main">
                                                                <div class="record-pic">
                                                                    <a><img src="img/a1.jpg"/></a>
                                                                </div>
                                                                <div class="record-desc">
                                                                    <h2>Tipo de contacto</h2>
                                                                    <h1><a href="">Nombre Apellido</a></h1>
                                                                    <h3>Gerente general en <a href="#">Cuenta</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- CONTACTO -->

                                                    </div>
                                                </div>
                                            </div>
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