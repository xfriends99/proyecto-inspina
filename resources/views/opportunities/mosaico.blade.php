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
                        <div class="tabs-container">
                            <div class="side-1">
                                <div class="row">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">Pendientes de contacto</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">En contacto</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false">En negociación</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-4" aria-expanded="false">Ganadas</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-5" aria-expanded="false">Perdidas</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-6" aria-expanded="false">Pendientes de asignar</a></li>
                                    </ul>
                                    <div class="hr-line-dashed"></div>
                                    <form action="">
                                        <h1>Filtros</h1>
                                        <div class="ibox collapsed">
                                            <div class="form-group">
                                                <select data-placeholder="Responsable" placeholder="Responsable" class="form-control" tabindex="2">
                                                    <option value="">Responsable</option>
                                                </select>
                                            </div>
                                            <div class="ibox-content">
                                                <div class="form-group">
                                                    <select data-placeholder="Creador" placeholder="Creador" class="form-control" tabindex="2">
                                                        <option value="">Creador</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select data-placeholder="Origen" placeholder="Origen" class="form-control" tabindex="2">
                                                        <option value="">Origen</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input name="" type="date" data-placeholder="Fecha de creación" placeholder="Fecha de creación"></input>
                                                </div>
                                                <div class="form-group">
                                                    <input name="" type="number" data-placeholder="Precio" placeholder="Precio"></input>
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-search"></i> Buscar</a>
                                            <a href="#" class="collapse-link">Búsqueda avanzada</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="side-2">
                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane active">
                                        <div class="panel-body">
                                            
                                            <!-- OPORTUNIDAD -->
                                            <div class="record">
                                                <div class="record-main">
                                                    <div class="record-pic">
                                                        <a href="oportunidades-view.php"><img src="img/a1.jpg"/></a>
                                                    </div>
                                                    <div class="record-desc">
                                                        <h2>Creada el dd/mm/aaaa</h2>
                                                        <h1><a href="oportunidades-view.php">Nombre Apellido</a></h1>
                                                        <h3>Asignada a <a href="contactos-view.php">Nombre Apellido</a></h3>
                                                    </div>
                                                </div>
                                                <ul class="record-nav">
                                                    <div class="btn-group">
                                                        <a data-toggle="dropdown" class="btn btn-blue-outline btn-sm dropdown-toggle">Editar <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="oportunidades-edit.php">Modificar oportunidad</a></li>
                                                            <li><a href="">Compartir oportunidad</a></li>
                                                        </ul> 
                                                    </div>
                                                    <li>$1.000.000</li>
                                                    <li>Estado</li>
                                                </ul>
                                            </div>
                                            <!-- OPORTUNIDAD -->

                                        </div>
                                    </div>
                                    <div id="tab-2" class="tab-pane">
                                        <div class="panel-body">
                                            
                                            <!-- OPORTUNIDAD -->
                                            <div class="record">
                                                <div class="record-main">
                                                    <div class="record-pic">
                                                        <a href="oportunidades-view.php"><img src="img/a1.jpg"/></a>
                                                    </div>
                                                    <div class="record-desc">
                                                        <h2>Creada el dd/mm/aaaa</h2>
                                                        <h1><a href="oportunidades-view.php">Nombre Apellido</a></h1>
                                                        <h3>Asignada a <a href="contactos-view.php">Nombre Apellido</a></h3>
                                                    </div>
                                                </div>
                                                <ul class="record-nav">
                                                    <div class="btn-group">
                                                        <a data-toggle="dropdown" class="btn btn-blue-outline btn-sm dropdown-toggle">Editar <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="oportunidades-edit.php">Modificar oportunidad</a></li>
                                                            <li><a href="">Compartir oportunidad</a></li>
                                                        </ul> 
                                                    </div>
                                                    <li>$1.000.000</li>
                                                    <li>Estado</li>
                                                </ul>
                                            </div>
                                            <!-- OPORTUNIDAD -->

                                            <!-- OPORTUNIDAD -->
                                            <div class="record">
                                                <div class="record-main">
                                                    <div class="record-pic">
                                                        <a href="oportunidades-view.php"><img src="img/a1.jpg"/></a>
                                                    </div>
                                                    <div class="record-desc">
                                                        <h2>Creada el dd/mm/aaaa</h2>
                                                        <h1><a href="oportunidades-view.php">Nombre Apellido</a></h1>
                                                        <h3>Asignada a <a href="contactos-view.php">Nombre Apellido</a></h3>
                                                    </div>
                                                </div>
                                                <ul class="record-nav">
                                                    <div class="btn-group">
                                                        <a data-toggle="dropdown" class="btn btn-blue-outline btn-sm dropdown-toggle">Editar <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="oportunidades-edit.php">Modificar oportunidad</a></li>
                                                            <li><a href="">Compartir oportunidad</a></li>
                                                        </ul> 
                                                    </div>
                                                    <li>$1.000.000</li>
                                                    <li>Estado</li>
                                                </ul>
                                            </div>
                                            <!-- OPORTUNIDAD -->

                                        </div>
                                    </div>
                                    <div id="tab-3" class="tab-pane">
                                        <div class="panel-body">
                                            
                                            <!-- OPORTUNIDAD -->
                                            <div class="record">
                                                <div class="record-main">
                                                    <div class="record-pic">
                                                        <a href="oportunidades-view.php"><img src="img/a1.jpg"/></a>
                                                    </div>
                                                    <div class="record-desc">
                                                        <h2>Creada el dd/mm/aaaa</h2>
                                                        <h1><a href="oportunidades-view.php">Nombre Apellido</a></h1>
                                                        <h3>Asignada a <a href="contactos-view.php">Nombre Apellido</a></h3>
                                                    </div>
                                                </div>
                                                <ul class="record-nav">
                                                    <div class="btn-group">
                                                        <a data-toggle="dropdown" class="btn btn-blue-outline btn-sm dropdown-toggle">Editar <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="oportunidades-edit.php">Modificar oportunidad</a></li>
                                                            <li><a href="">Compartir oportunidad</a></li>
                                                        </ul> 
                                                    </div>
                                                    <li>$1.000.000</li>
                                                    <li>Estado</li>
                                                </ul>
                                            </div>
                                            <!-- OPORTUNIDAD -->

                                        </div>
                                    </div>
                                    <div id="tab-4" class="tab-pane">
                                        <div class="panel-body">
                                            
                                            <!-- OPORTUNIDAD -->
                                            <div class="record">
                                                <div class="record-main">
                                                    <div class="record-pic">
                                                        <a href="oportunidades-view.php"><img src="img/a1.jpg"/></a>
                                                    </div>
                                                    <div class="record-desc">
                                                        <h2>Creada el dd/mm/aaaa</h2>
                                                        <h1><a href="oportunidades-view.php">Nombre Apellido</a></h1>
                                                        <h3>Asignada a <a href="contactos-view.php">Nombre Apellido</a></h3>
                                                    </div>
                                                </div>
                                                <ul class="record-nav">
                                                    <div class="btn-group">
                                                        <a data-toggle="dropdown" class="btn btn-blue-outline btn-sm dropdown-toggle">Editar <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="oportunidades-edit.php">Modificar oportunidad</a></li>
                                                            <li><a href="">Compartir oportunidad</a></li>
                                                        </ul> 
                                                    </div>
                                                    <li>$1.000.000</li>
                                                    <li>Estado</li>
                                                </ul>
                                            </div>
                                            <!-- OPORTUNIDAD -->

                                            <!-- OPORTUNIDAD -->
                                            <div class="record">
                                                <div class="record-main">
                                                    <div class="record-pic">
                                                        <a href="oportunidades-view.php"><img src="img/a1.jpg"/></a>
                                                    </div>
                                                    <div class="record-desc">
                                                        <h2>Creada el dd/mm/aaaa</h2>
                                                        <h1><a href="oportunidades-view.php">Nombre Apellido</a></h1>
                                                        <h3>Asignada a <a href="contactos-view.php">Nombre Apellido</a></h3>
                                                    </div>
                                                </div>
                                                <ul class="record-nav">
                                                    <div class="btn-group">
                                                        <a data-toggle="dropdown" class="btn btn-blue-outline btn-sm dropdown-toggle">Editar <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="oportunidades-edit.php">Modificar oportunidad</a></li>
                                                            <li><a href="">Compartir oportunidad</a></li>
                                                        </ul> 
                                                    </div>
                                                    <li>$1.000.000</li>
                                                    <li>Estado</li>
                                                </ul>
                                            </div>
                                            <!-- OPORTUNIDAD -->

                                        </div>
                                    </div> 
                                    <div id="tab-5" class="tab-pane">
                                        <div class="panel-body">
                                            
                                            <!-- OPORTUNIDAD -->
                                            <div class="record">
                                                <div class="record-main">
                                                    <div class="record-pic">
                                                        <a href="oportunidades-view.php"><img src="img/a1.jpg"/></a>
                                                    </div>
                                                    <div class="record-desc">
                                                        <h2>Creada el dd/mm/aaaa</h2>
                                                        <h1><a href="oportunidades-view.php">Nombre Apellido</a></h1>
                                                        <h3>Asignada a <a href="contactos-view.php">Nombre Apellido</a></h3>
                                                    </div>
                                                </div>
                                                <ul class="record-nav">
                                                    <div class="btn-group">
                                                        <a data-toggle="dropdown" class="btn btn-blue-outline btn-sm dropdown-toggle">Editar <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="oportunidades-edit.php">Modificar oportunidad</a></li>
                                                            <li><a href="">Compartir oportunidad</a></li>
                                                        </ul> 
                                                    </div>
                                                    <li>$1.000.000</li>
                                                    <li>Estado</li>
                                                </ul>
                                            </div>
                                            <!-- OPORTUNIDAD -->

                                        </div>
                                    </div> 
                                    <div id="tab-6" class="tab-pane">
                                        <div class="panel-body">
                                            
                                            <!-- OPORTUNIDAD -->
                                            <div class="record">
                                                <div class="record-main">
                                                    <div class="record-pic">
                                                        <a href="oportunidades-view.php"><img src="img/a1.jpg"/></a>
                                                    </div>
                                                    <div class="record-desc">
                                                        <h2>Creada el dd/mm/aaaa</h2>
                                                        <h1><a href="oportunidades-view.php">Nombre Apellido</a></h1>
                                                        <h3>Asignada a <a href="contactos-view.php">Nombre Apellido</a></h3>
                                                    </div>
                                                </div>
                                                <ul class="record-nav">
                                                    <div class="btn-group">
                                                        <a data-toggle="dropdown" class="btn btn-blue-outline btn-sm dropdown-toggle">Editar <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="oportunidades-edit.php">Modificar oportunidad</a></li>
                                                            <li><a href="">Compartir oportunidad</a></li>
                                                        </ul> 
                                                    </div>
                                                    <li>$1.000.000</li>
                                                    <li>Estado</li>
                                                </ul>
                                            </div>
                                            <!-- OPORTUNIDAD -->

                                            <!-- OPORTUNIDAD -->
                                            <div class="record">
                                                <div class="record-main">
                                                    <div class="record-pic">
                                                        <a href="oportunidades-view.php"><img src="img/a1.jpg"/></a>
                                                    </div>
                                                    <div class="record-desc">
                                                        <h2>Creada el dd/mm/aaaa</h2>
                                                        <h1><a href="oportunidades-view.php">Nombre Apellido</a></h1>
                                                        <h3>Asignada a <a href="contactos-view.php">Nombre Apellido</a></h3>
                                                    </div>
                                                </div>
                                                <ul class="record-nav">
                                                    <div class="btn-group">
                                                        <a data-toggle="dropdown" class="btn btn-blue-outline btn-sm dropdown-toggle">Editar <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="oportunidades-edit.php">Modificar oportunidad</a></li>
                                                            <li><a href="">Compartir oportunidad</a></li>
                                                        </ul> 
                                                    </div>
                                                    <li>$1.000.000</li>
                                                    <li>Estado</li>
                                                </ul>
                                            </div>
                                            <!-- OPORTUNIDAD -->

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