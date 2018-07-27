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

                                <h1>Nombre Apellido</h1>

                            </section>

                            <section>

                                <div class="btn-group">

                                    <a href="" class="btn btn-blue btn-sm" title="Editar"><i class="fas fa-edit"></i> Editar</a>

                                </div>

                            </section>

                        </div>

                    </div>

                    <div class="row">

                        <div class="tabs-container">

                            <div class="side-1">

                                <div class="profile">

                                    <div class="profile-pic">

                                        <img src="img/a4.jpg" title="" alt="profile">

                                    </div>

                                    <div class="profile-desc">

                                        <ul>

                                            <li>

                                                <label>Nombre completo</label>

                                                <h3><a href="">Nombre Apellido</a></h3>

                                            </li>

                                            <li>

                                                <label>Cuenta</label>

                                                <h3><a href="">Nombre Cuenta</a></h3>

                                            </li>

                                            <li>

                                                <label>Tipo: </label>

                                                <span><a href="">Tipo de usuario</a></span>

                                            </li>

                                            <li>

                                                <label>Teléfono: </label>

                                                <span><a href="">+5491151665757</a></span>

                                            </li>

                                            <li>

                                                <label>Usuario: </label>

                                                <span><a href="">email@company.com.ar</a></span>

                                            </li>

                                        </ul>

                                    </div>

                                </div>

                                <ul class="nav nav-tabs">

                                    <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">Historial</a></li>

                                    <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">Información</a></li>

                                    <li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false">Cuenta</a></li>

                                    <li class=""><a data-toggle="tab" href="#tab-4" aria-expanded="false">Configuración</a></li>

                                </ul>

                            </div>

                            <div class="side-2">

                                <div class="tab-content">

                                    <div id="tab-1" class="tab-pane active">

                                        <div class="panel-body">

                                            <div class="ibox">

                                                <div class="ibox-content">

                                                    <div class="row">

                                                        <div class="col-md-12 col-sm-12 col-xs-12">

                                                            <div class="feed-activity-list">

                                                                <!-- PUBLICAR EN TIMELINE -->

                                                                <div class="feed-menu">

                                                                    <div class="media-body">

                                                                        <div class="feed-menu-textarea">

                                                                            <textarea class="form-control" placeholder="¿Qué está sucediendo con Nombre?"></textarea>

                                                                        </div>

                                                                        <div class="feed-menu-btn">

                                                                            <div class="btn-group">

                                                                                <a data-toggle="dropdown" class="btn btn-white dropdown-toggle"><i class="fas fa-lock"></i> <span class="caret"></span></a>

                                                                                <ul class="dropdown-menu-perfil dropdown-menu-center">

                                                                                    <li>¿Quién debería ver esto?</li>

                                                                                    <li><a href=""><i class="fas fa-users"></i>Mi equipo</a></li>

                                                                                    <li><a href=""><i class="fas fa-globe"></i>Público</a></li>

                                                                                    <li><a href=""><i class="fas fa-user"></i>Solo yo</a></li>

                                                                                </ul> 

                                                                            </div>

                                                                            <div class="btn-group">

                                                                                <a class="btn btn-blue" type="button">Compartir</a>

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                    <div class="media-left">

                                                                        <a href="#">

                                                                            <img alt="" title="" src="img/a1.jpg">

                                                                        </a>

                                                                    </div>

                                                                </div>

                                                                <!-- PUBLICAR EN TIMELINE -->

                                                                <div class="feed-element">

                                                                    <div class="media-left">

                                                                        <a href="#" class="pull-left">

                                                                            <img alt="" title="" src="img/a1.jpg">

                                                                        </a>

                                                                    </div>

                                                                    <div class="media-body ">

                                                                        <a href="">Nombre</a> fue agregado a la campaña <a href="#">Nombre de Campaña</a> por <a href="#">Usuario</a>.

                                                                        <small>Martes DD/MM/AAAA a las 16:30 horas</small>

                                                                    </div>

                                                                </div>

                                                                <div class="feed-more">

                                                                    <a href="#"><i class="fas fa-angle-down"></i></a>

                                                                </div>

                                                            </div>                                         

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div id="tab-2" class="tab-pane">

                                        <div class="panel-body">

                                            <div class="ibox">

                                                <div class="ibox-content">

                                                    <header>

                                                        <h5>Datos de acceso</h5>

                                                        <nav>

                                                            <div class="btn-group">

                                                                <a href="#" class="btn btn-xs btn-white"><i class="fas fa-window-maximize"></i></a>

                                                            </div>

                                                        </nav>

                                                    </header>

                                                    <div class="row">

                                                        <div class="info-group">

                                                            <label>Usuario:</label>

                                                            <span><a href="#">nombre@compania.com</a></span>

                                                        </div>

                                                        <div class="info-group">

                                                            <label>Contraseña:</label>

                                                            <span><a href="#">********</a></span>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="ibox">

                                                <div class="ibox-content">

                                                    <header>

                                                        <h5>Teléfonos</h5>

                                                        <nav>

                                                            <div class="btn-group">

                                                                <a href="#" class="btn btn-xs btn-white"><i class="fas fa-window-maximize"></i></a>

                                                            </div>

                                                        </nav>

                                                    </header>

                                                    <div class="row">

                                                        <div class="info-group">

                                                            <label>Móvil:</label>

                                                            <span><a href="#">+5491144445555</a></span>

                                                        </div>

                                                        <div class="info-group">

                                                            <label>Teléfono fijo:</label>

                                                            <span><a href="#">+5491144445555</a></span>

                                                        </div>

                                                        <div class="info-group">

                                                            <label>Teléfono laboral:</label>

                                                            <span><a href="#">+5491144445555</a></span>

                                                        </div>

                                                        <div class="info-group">

                                                            <label>Interno:</label>

                                                            <span>1</span>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="ibox">

                                                <div class="ibox-content">

                                                    <header>

                                                        <h5>Preferencias de contacto</h5>

                                                        <nav>

                                                            <div class="btn-group">

                                                                <a href="#" class="btn btn-xs btn-white"><i class="fas fa-window-maximize"></i></a>

                                                            </div>

                                                        </nav>

                                                    </header>

                                                    <div class="row">

                                                        <div class="info-group">

                                                            <label><i class="fas fa-check"></i></label>

                                                            <span>Email</span>

                                                        </div>

                                                        <div class="info-group">

                                                            <label><i class="fas fa-check"></i></label>

                                                            <span>Teléfono móvil</span>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div> 

                                    <div id="tab-3" class="tab-pane">

                                        <div class="panel-body">

                                            <div class="ibox">

                                                <div class="ibox-content">

                                                    <header>

                                                        <h5>Responsable de cuenta</h5>

                                                        <nav>

                                                            <div class="btn-group">

                                                                <a href="#" class="btn btn-xs btn-white"><i class="fas fa-window-maximize"></i></a>

                                                            </div>

                                                        </nav>

                                                    </header>

                                                    <div class="row">

                                                        <div class="table-group">

                                                            <div class="row">

                                                                <div class="table-responsive">

                                                                    <table class="table table-hover dataTables">

                                                                        <thead>

                                                                            <tr>

                                                                                <th>Nombre</th>

                                                                                <th>Usuario</th>

                                                                                <th>Estado</th>

                                                                                <th>Tipo</th>

                                                                            </tr>

                                                                        </thead>

                                                                        <tbody>

                                                                            <tr>

                                                                                <td class=""><p><a href="">Nombre de la oportunidad</a></p></td>

                                                                                <td class=""><p><a href="">nombreapellido@compania.com.ar</a></p></td>

                                                                                <td class="">Administrador</td>

                                                                                <td class=""><span class="label bg-blue">Activo</span></td>

                                                                            </tr>

                                                                        </tbody>

                                                                    </table>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="ibox">

                                                <div class="ibox-content">

                                                    <header>

                                                        <h5>Usuarios de la misma cuenta</h5>

                                                        <nav>

                                                            <div class="btn-group">

                                                                <a href="#" class="btn btn-xs btn-white"><i class="fas fa-window-maximize"></i></a>

                                                            </div>

                                                        </nav>

                                                    </header>

                                                    <div class="row">

                                                        <div class="table-group">

                                                            <div class="row">

                                                                <div class="table-responsive">

                                                                    <table class="table table-hover dataTables">

                                                                        <thead>

                                                                            <tr>

                                                                                <th>Nombre</th>

                                                                                <th>Usuario</th>

                                                                                <th>Estado</th>

                                                                                <th>Tipo</th>

                                                                            </tr>

                                                                        </thead>

                                                                        <tbody>

                                                                            <tr>

                                                                                <td class=""><p><a href="">Nombre de la oportunidad</a></p></td>

                                                                                <td class=""><p><a href="">nombreapellido@compania.com.ar</a></p></td>

                                                                                <td class="">Editor</td>

                                                                                <td class=""><span class="label bg-blue">Activo</span></td>

                                                                            </tr>

                                                                        </tbody>

                                                                    </table>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div> 

                                    <div id="tab-4" class="tab-pane">

                                        <div class="panel-body">

                                            <div class="ibox">

                                                <div class="ibox-content">

                                                    <header>

                                                        <h5>Permisos de acceso</h5>

                                                        <nav>

                                                            <div class="btn-group">

                                                                <a href="#" class="btn btn-xs btn-white"><i class="fas fa-window-maximize"></i></a>

                                                            </div>

                                                        </nav>

                                                    </header>

                                                    <div class="row">

                                                        <div class="table-group">

                                                            <div class="row">

                                                                <div class="table-responsive">

                                                                    <table class="table table-hover dataTables">

                                                                        <thead>

                                                                            <tr>

                                                                                <th>Módulo</th>

                                                                                <th>Descripción</th>

                                                                                <th>Permiso</th>

                                                                            </tr>

                                                                        </thead>

                                                                        <tbody>

                                                                            <tr>

                                                                                <td class=""><p><a>Contactos</a></p></td>

                                                                                <td class="">Puede administrar todos los contactos de la cuenta <a href="">Nombre Cuenta</a></td>

                                                                                <td><span class="btn btn-sm bg-blue">Administrar</span></td>

                                                                            </tr>

                                                                            <tr>

                                                                                <td class=""><p><a>Cuentas</a></p></td>

                                                                                <td class="">Puede ver y editar todas las cuentas de la cuenta <a href="">Nombre Cuenta</a></td>

                                                                                <td><span class="btn btn-sm bg-blue">Editar</span></td>

                                                                            </tr>

                                                                            <tr>

                                                                                <td class=""><p><a>Campañas</a></p></td>

                                                                                <td class="">Puede ver todas las campañas de la cuenta <a href="">Nombre Cuenta</a></td>

                                                                                <td><span class="btn btn-sm bg-blue">Ver</span></td>

                                                                            </tr>

                                                                        </tbody>

                                                                    </table>

                                                                </div>

                                                            </div>

                                                        </div>

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