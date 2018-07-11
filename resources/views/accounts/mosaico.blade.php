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
                                <h1>Cuentas</h1>
                            </section>
                            <section>
                                <div class="btn-group">
                                    <a href="cuentas-table.php" class="btn btn-white btn-sm"><i class="fa fa-table"></i></a>
                                    <a href="cuentas-mosaico.php" class="btn btn-white btn-sm active"><i class="fa fa-align-justify"></i></a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-white btn-sm" href=""><i class="fa fa-sort-alpha-up"></i></a>
                                    <a class="btn btn-white btn-sm" href=""><i class="fa fa-sort-alpha-down"></i></a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-white btn-sm" href=""><i class="fa fa-link"></i></a>
                                    <a class="btn btn-white btn-sm" href=""><i class="fa fa-save"></i></a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-blue btn-sm" href="cuentas-new.php"><i class="fa fa-plus"></i> Nuevo</a>
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
                                            <input type="text" id="" name="" data-placeholder="Nombre de la cuenta" placeholder="Nombre de la cuenta"/>
                                        </div>
                                        <div class="form-group">
                                            <select data-placeholder="Tipo de cuenta" placeholder="Tipo de cuenta" class="form-control" tabindex="2">
                                                <option value="">Tipo de cuenta</option>
                                            </select>
                                        </div>
                                        <div class="ibox-content">
                                            <div class="form-group">
                                                <input type="number" id="" name="" data-placeholder="CUIT" placeholder="CUIT"/>
                                            </div>
                                            <div class="form-group">
                                                <select data-placeholder="Industria" placeholder="Industria" class="form-control" tabindex="2">
                                                    <option value="">Opción</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select data-placeholder="" placeholder="" class="form-control" tabindex="2">
                                                    <option value="">Opción</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select data-placeholder="Fuente de origen" placeholder="Fuente de origen" class="form-control" tabindex="2">
                                                    <option value="">Opción</option>
                                                </select>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-search"></i> Buscar</a>
                                        <a href="#" class="collapse-link">Búsqueda avanzada</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="side-2">
                            <div class="dropdown-panel">
                                <!-- LISTA DE CUENTAS -->
                                <div class="ibox collapsed">
                                    <div class="ibox-title">
                                        <h6>A</h6> <span class="label">141 cuentas</span>
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </div>
                                    <div class="ibox-content">
                                        
                                        <!-- CUENTA -->
                                        <div class="record">
                                            <div class="record-main">
                                                <div class="label-1"><span class="label"><i class="fa fa-users"></i> 1.000</span></div>
                                                <div class="label-2"><span class="label"><i class="fa fa-industry"></i> Consumo masivo</span></div>
                                                <div class="record-pic">
                                                    <a href="cuentas-view.php"><img src="https://tbcn.s3-accelerate.amazonaws.com/logos/422_Alem%20Propiedades%20%7C%20Roberto%20Celano/Alemprop_logo(sm).jpg"/></a>
                                                </div>
                                                <div class="record-desc">
                                                    <h2>Tipo de cuenta</h2>
                                                    <h1><a href="cuentas-view.php">Nombre Cuenta</a></h1>
                                                    <h3>Contacto principal: <a href="contactos-view.php">Nombre Apellido</a></h3>
                                                </div>
                                            </div>
                                            <ul class="record-nav">
                                                <div class="btn-group">
                                                    <a data-toggle="dropdown" class="btn btn-blue-outline btn-sm dropdown-toggle">Editar <span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="cuentas-edit.php">Modificar cuenta</a></li>
                                                        <li><a href="">Agregar miembros</a></li>
                                                    </ul> 
                                                </div>
                                                <li><i class="fa fa-chrome"></i> <a href="#">www.company.com.ar</a></li>
                                                <li><i class="fa fa-phone"></i> <a href="#">+5491151665757</a></li>
                                            </ul>
                                        </div>
                                        <!-- CUENTA -->

                                        <!-- CUENTA -->
                                        <div class="record">
                                            <div class="record-main">
                                                <div class="label-1"><span class="label"><i class="fa fa-users"></i> 1.000</span></div>
                                                <div class="label-2"><span class="label"><i class="fa fa-industry"></i> Consumo masivo</span></div>
                                                <div class="record-pic">
                                                    <a href="cuentas-view.php"><img src="https://tbcn.s3-accelerate.amazonaws.com/logos/422_Alem%20Propiedades%20%7C%20Roberto%20Celano/Alemprop_logo(sm).jpg"/></a>
                                                </div>
                                                <div class="record-desc">
                                                    <h2>Tipo de cuenta</h2>
                                                    <h1><a href="cuentas-view.php">Nombre Cuenta</a></h1>
                                                    <h3>Contacto principal: <a href="contactos-view.php">Nombre Apellido</a></h3>
                                                </div>
                                            </div>
                                            <ul class="record-nav">
                                                <div class="btn-group">
                                                    <a data-toggle="dropdown" class="btn btn-blue-outline btn-sm dropdown-toggle">Editar <span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="cuentas-edit.php">Modificar cuenta</a></li>
                                                        <li><a href="">Agregar miembros</a></li>
                                                    </ul> 
                                                </div>
                                                <li><i class="fa fa-chrome"></i> <a href="#">www.company.com.ar</a></li>
                                                <li><i class="fa fa-phone"></i> <a href="#">+5491151665757</a></li>
                                            </ul>
                                        </div>
                                        <!-- CUENTA -->
                                    </div>
                                </div>
                                <!-- LISTA DE CUENTAS -->
                            </div>                            
                        </div>
                    </div>
                </main>
            </div>
            
        </div>
      


@endsection