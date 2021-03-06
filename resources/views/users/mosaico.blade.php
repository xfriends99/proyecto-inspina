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

                                <h1>Usuarios</h1>

                            </section>

                            <section>

                                <div class="btn-group">

                                    <a class="btn btn-white btn-sm" href="usuarios-table.php" title="Ver en tabla"><i class="fa fa-table"></i></a>

                                    <a class="btn btn-white btn-sm active" href="usuarios-mosaico.php" title="Ver en Fichas"><i class="fa fa-align-justify"></i></a>

                                </div>

                                <div class="btn-group">

                                    <a class="btn btn-blue btn-sm" href="usuarios-edit.php" title="Crear nuevo usuario"><i class="fa fa-plus"></i> Nuevo</a>

                                </div>

                            </section>

                        </div>

                    </div>

                    <div class="row">

                        <div class="side-1">

                            <div class="row">

                                <form action="">

                                    <h1>Filtros</h1>

                                    <div class="ibox collapsed">

                                        <div class="form-group">

                                            <input type="text" id="" value="" name="" placeholder="Usuario"/>

                                        </div>

                                        <div class="form-group">

                                            <select data-placeholder="" class="form-control" tabindex="2">

                                                <option value="">Tipo de usuario</option>

                                            </select>

                                        </div>

                                        <div class="ibox-content">

                                            <div class="form-group">

                                                <input type="text" id="" value="" name="" placeholder="Nombre contacto"/>

                                            </div>

                                            <div class="form-group">

                                                <input type="text" id="" value="" name="" placeholder="Apellido contacto"/>

                                            </div>

                                            <div class="form-group">

                                                <input type="text" id="" value="" name="" placeholder="Cuenta"/>

                                            </div>

                                        </div>

                                        <a href="#" class="btn btn-white btn-sm"><i class="fas fa-search"></i> Buscar</a>

                                        <a href="#" class="collapse-link">Búsqueda avanzada</a>

                                    </div>

                                </form>

                            </div>

                        </div>

                        <div class="side-2">

                            <div class="dropdown-panel">

                                <!-- LISTA DE USUARIOS -->

                                <div class="ibox collapsed">

                                    <div class="ibox-title">

                                        <h6>A</h6> <span class="label">141 usuarios</span>

                                        <a class="collapse-link"><i class="fas fa-chevron-up"></i></a>

                                    </div>

                                    <div class="ibox-content">

                                        

                                        <!-- USUARIO -->

                                        <div class="record">

                                            <div class="record-main">

                                                <div class="record-pic">

                                                    <a href="contactos-view.php"><img src="img/a1.jpg"/></a>

                                                </div>

                                                <div class="record-desc">

                                                    <h2>Tipo de usuario</h2>

                                                    <h1><a href="usuarios-view.php">Nombre Apellido</a></h1>

                                                    <h3>Gerente general en <a href="cuentas-view.php">Cuenta</a></h3>

                                                </div>

                                            </div>

                                            <ul class="record-nav">

                                                <div class="btn-group">

                                                    <a href="usuarios-view.php" class="btn btn-primary btn-sm">Ver</a>

                                                    <a data-toggle="dropdown" class="btn btn-blue-outline btn-sm dropdown-toggle">Editar <span class="caret"></span></a>

                                                    <ul class="dropdown-menu">

                                                        <li><a href="usuarios-edit.php">Modificar usuario</a></li>

                                                        <li><a href="">Eliminar usuario</a></li>

                                                    </ul> 

                                                </div>

                                                <li><i class="fas fa-envelope"></i> <a href="#">contacto@company.com.ar</a></li>

                                            </ul>

                                        </div>

                                        <!-- USUARIO -->



                                    </div>

                                </div>

                                <!-- LISTA DE USUARIOS -->

                            </div>                            

                        </div>

                    </div>

                </main>

            </div>

        </div>

@endsection