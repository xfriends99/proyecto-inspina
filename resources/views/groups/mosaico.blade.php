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
                                <h1>Grupos</h1>
                            </section>
                            <section>
                                <div class="btn-group">
                                    <a href="grupos-table.php" class="btn btn-white btn-sm"><i class="fa fa-table"></i></a>
                                    <a href="grupos-mosaico.php" class="btn btn-white btn-sm active"><i class="fa fa-align-justify"></i></a>
                                </div>
                                <div class="btn-group">
                                    <a data-toggle="dropdown" class="btn btn-white btn-sm dropdown-toggle"><i class="fa fa-edit"></i> Acciones <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="">Compartir grupos</a></li>
                                    </ul> 
                                </div>
                                <a class="btn btn-blue btn-sm" href="grupos-edit.php"><i class="fa fa-plus"></i> Nuevo</a>
                            </section>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tabs-container">
                            <div class="side-1">
                                <div class="row">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">Mis grupos</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">Grupos donde estoy</a></li>
                                    </ul>
                                    <div class="hr-line-dashed"></div>
                                    <form action="">
                                        <h1>Filtros</h1>
                                        <div class="ibox collapsed">
                                            <div class="form-group">
                                                <select placeholder="" data-placeholder="" class="form-control" tabindex="2">
                                                    <option value="">Propietario</option>
                                                </select>
                                            </div>
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-search"></i> Buscar</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="side-2">
                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane active">
                                        <div class="panel-body">
                                            <div class="row">

                                                <!-- GRUPO -->
                                                <div class="record">
                                                    <div class="record-main">
                                                        <div class="label-1"><span class="label">Público</span></div>
                                                        <div class="record-pic">
                                                            <a href="grupos-view.php"><img src="img/a1.jpg"/></a>
                                                        </div>
                                                        <div class="record-desc">
                                                            <h2>Creado el dd/mm/aaaa</h2>
                                                            <h1><a href="grupos-view.php">Nombre Grupo</a></h1>
                                                            <h3>Creado por <a href="contactos-view.php">Nombre Apellido</a></h3>
                                                        </div>
                                                    </div>
                                                    <ul class="record-nav">
                                                        <div class="btn-group">
                                                            <a data-toggle="dropdown" class="btn btn-blue-outline btn-sm dropdown-toggle">Editar <span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="grupos-edit.php">Modificar grupo</a></li>
                                                                <li><a href="">Agregar miembros</a></li>
                                                            </ul> 
                                                        </div>
                                                        <li>
                                                            <img src="img/a1.jpg"/>
                                                            <img src="img/a1.jpg"/>
                                                            <img src="img/a1.jpg"/>
                                                            <img src="img/a1.jpg"/>
                                                            <img src="img/a1.jpg"/>
                                                            <a href="#">+1000</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- GRUPO -->

                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-2" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="row">
                                                <!-- GRUPO -->
                                                <div class="record">
                                                    <div class="record-main">
                                                        <div class="label-1"><span class="label">Público</span></div>
                                                        <div class="record-pic">
                                                            <a href="grupos-view.php"><img src="img/a1.jpg"/></a>
                                                        </div>
                                                        <div class="record-desc">
                                                            <h2>Creado el dd/mm/aaaa</h2>
                                                            <h1><a href="grupos-view.php">Nombre Grupo</a></h1>
                                                            <h3>Creado por <a href="contactos-view.php">Nombre Apellido</a></h3>
                                                        </div>
                                                    </div>
                                                    <ul class="record-nav">
                                                        <div class="btn-group">
                                                            <a data-toggle="dropdown" class="btn btn-blue-outline btn-sm dropdown-toggle">Editar <span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="grupos-edit.php">Modificar grupo</a></li>
                                                                <li><a href="">Agregar miembros</a></li>
                                                            </ul> 
                                                        </div>
                                                        <li>
                                                            <img src="img/a1.jpg"/>
                                                            <img src="img/a1.jpg"/>
                                                            <img src="img/a1.jpg"/>
                                                            <img src="img/a1.jpg"/>
                                                            <img src="img/a1.jpg"/>
                                                            <a href="#">+1000</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- GRUPO -->
                                                
                                                <!-- GRUPO -->
                                                <div class="record">
                                                    <div class="record-main">
                                                        <div class="label-1"><span class="label">Público</span></div>
                                                        <div class="record-pic">
                                                            <a href="grupos-view.php"><img src="img/a1.jpg"/></a>
                                                        </div>
                                                        <div class="record-desc">
                                                            <h2>Creado el dd/mm/aaaa</h2>
                                                            <h1><a href="grupos-view.php">Nombre Grupo</a></h1>
                                                            <h3>Creado por <a href="contactos-view.php">Nombre Apellido</a></h3>
                                                        </div>
                                                    </div>
                                                    <ul class="record-nav">
                                                        <div class="btn-group">
                                                            <a data-toggle="dropdown" class="btn btn-blue-outline btn-sm dropdown-toggle">Editar <span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="grupos-edit.php">Modificar grupo</a></li>
                                                                <li><a href="">Agregar miembros</a></li>
                                                            </ul> 
                                                        </div>
                                                        <li>
                                                            <img src="img/a1.jpg"/>
                                                            <img src="img/a1.jpg"/>
                                                            <img src="img/a1.jpg"/>
                                                            <img src="img/a1.jpg"/>
                                                            <img src="img/a1.jpg"/>
                                                            <a href="#">+1000</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- GRUPO -->
                                                
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