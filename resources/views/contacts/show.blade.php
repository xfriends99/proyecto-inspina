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
                                    <a data-toggle="dropdown" class="btn btn-white btn-sm dropdown-toggle">Asignar <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="">Proyecto</a></li>
                                        <li><a href="">Tarea</a></li>
                                        <li><a href="">Caso jurídico</a></li>
                                    </ul> 
                                </div>
                                <div class="btn-group">
                                    <a href="" class="btn btn-white btn-sm" title="Enviar correo electrónico"><i class="far fa-envelope"></i></a>
                                    <a href="" class="btn btn-white btn-sm" title="Crear nueva tarea"><i class="far fa-calendar"></i></a>
                                    <a href="" class="btn btn-white btn-sm" title="Crear nueva oportunidad"><i class="far fa-star"></i></a>
                                    <a href="" class="btn btn-white btn-sm" title="Compartir contacto"><i class="fas fa-link"></i></a>
                                </div>
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
                                                <label>Gerente general en</label>
                                                <h3><a href="">Nombre Cuenta</a></h3>
                                            </li>
                                            <li>
                                                <label>Teléfono: </label>
                                                <span><a href="">+5491151665757</a></span>
                                            </li>
                                            <li>
                                                <label>Email: </label>
                                                <span><a href="">email@company.com.ar</a></span>
                                            </li>
                                        </ul>
                                        <div class="btn-group social-btn">
                                            <a href="" class="btn btn-xs bg-blue"><i class="fas fa-laptop"></i></a>
                                            <a href="" class="btn btn-xs bg-facebook"><i class="fab fa-facebook-f"></i></a>
                                            <a href="" class="btn btn-xs bg-instagram"><i class="fab fa-instagram"></i></a>
                                            <a href="" class="btn btn-xs bg-twitter"><i class="fab fa-twitter"></i></a>
                                            <a href="" class="btn btn-xs bg-linkedin"><i class="fab fa-linkedin"></i></a>
                                            <a href="" class="btn btn-xs bg-pinterest"><i class="fab fa-pinterest"></i></a>
                                            <a href="" class="btn btn-xs bg-youtube"><i class="fab fa-youtube"></i></a>
                                            <a href="" class="btn btn-xs bg-whatsapp"><i class="fab fa-whatsapp"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">Historial</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">Información</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false">Contacto</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-4" aria-expanded="false">Asignaciones</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-5" aria-expanded="false">Grupos</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-6" aria-expanded="false">Configuración</a></li>
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
                                                                <div class="feed-element">
                                                                    <div class="media-left">
                                                                        <a href="#" class="pull-left">
                                                                            <img alt="" title="" src="img/a1.jpg">
                                                                        </a>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="#">Usuario</a> le respondió a <a href="#">Nombre</a> vía <a href="#">Web</a>.
                                                                        <small>Martes DD/MM/AAAA a las 16:30 horas</small>
                                                                        <div class="well">
                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.
                                                                            Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                                                        </div>
                                                                        <div class="actions">
                                                                            <a class="btn btn-white btn-sm remover"><i class="fas fa-trash"></i> </a>
                                                                            <a href="#" class="btn btn-sm btn-blue"><i class="fas fa-pencil"></i> Responder</a>
                                                                        </div>
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
                                                        <h5>Laboral</h5>
                                                        <nav>
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-xs btn-white"><i class="fas fa-window-maximize"></i></a>
                                                            </div>
                                                        </nav>
                                                    </header>
                                                    <div class="row">
                                                        <div class="info-group">
                                                            <label>Tipo de contacto:</label>
                                                            <span>Cliente</span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label>Género:</label>
                                                            <span>Masculino</span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label>Fecha de nacimiento:</label>
                                                            <span>dd/mm/aaaa</span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label>Edad:</label>
                                                            <span>25 años</span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label>Fuente de origen:</label>
                                                            <span>Web</span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label>DNI:</label>
                                                            <span>30666555</span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label>CUIT:</label>
                                                            <span>dd/mm/aaaa</span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label>Idioma:</label>
                                                            <span>Español</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ibox">
                                                <div class="ibox-content">
                                                    <header>
                                                        <h5>Laboral</h5>
                                                        <nav>
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-xs btn-white"><i class="fas fa-window-maximize"></i></a>
                                                            </div>
                                                        </nav>
                                                    </header>
                                                    <div class="row">
                                                        <div class="info-group">
                                                            <label>Cuenta:</label>
                                                            <span><a href="#">Nombre cuenta</a></span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label>Posición:</label>
                                                            <span>Gerente comercial</span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label>Área:</label>
                                                            <span>Gerencia General</span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label>Responde a:</label>
                                                            <span><a href="#">Contacto</a></span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label>Dejó la compañía:</label>
                                                            <span>Sí</span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label>Reemplazado por:</label>
                                                            <span><a href="#">Contacto</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ibox">
                                                <div class="ibox-content">
                                                    <header>
                                                        <h5>Intereses</h5>
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
                                                            <span>Email</span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label><i class="fas fa-check"></i></label>
                                                            <span>Email</span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label><i class="fas fa-check"></i></label>
                                                            <span>Email</span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label><i class="fas fa-check"></i></label>
                                                            <span>Email</span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label><i class="fas fa-check"></i></label>
                                                            <span>Email</span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label><i class="fas fa-check"></i></label>
                                                            <span>Email</span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label><i class="fas fa-check"></i></label>
                                                            <span>Email</span>
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
                                                        <h5>Emails</h5>
                                                        <nav>
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-xs btn-white"><i class="fas fa-window-maximize"></i></a>
                                                            </div>
                                                        </nav>
                                                    </header>
                                                    <div class="row">
                                                        <div class="info-group">
                                                            <label>Email laboral:</label>
                                                            <span><a href="#">nombre@compania.com</a></span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label>Email personal:</label>
                                                            <span><a href="#">nombre@compania.com</a></span>
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
                                                        <h5>Domicilios</h5>
                                                        <nav>
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-xs btn-white"><i class="fas fa-window-maximize"></i></a>
                                                            </div>
                                                        </nav>
                                                    </header>
                                                    <div class="row">
                                                        <div class="info-group info-group-lg">
                                                            <label>Dirección laboral:</label>
                                                            <span><a href="">Avenida Córdoba 1200 8ºB (AA1920BB),<br/>Ciudad Autónoma de Buenos Aires, Buenos Aires, Argentina.</a></span>
                                                        </div>
                                                        <div class="info-group info-group-lg">
                                                            <label>Dirección personal:</label>
                                                            <span><a href="">Avenida Córdoba 1200 8ºB (AA1920BB),<br/>Ciudad Autónoma de Buenos Aires, Buenos Aires, Argentina.</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ibox">
                                                <div class="ibox-content">
                                                    <header>
                                                        <h5>Canales digitales</h5>
                                                        <nav>
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-xs btn-white"><i class="fas fa-window-maximize"></i></a>
                                                            </div>
                                                        </nav>
                                                    </header>
                                                    <div class="row">
                                                        <div class="info-group">
                                                            <label>Web:</label>
                                                            <span><a href="#">www.web.com.ar</a></span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label>Facebook:</label>
                                                            <span><a href="#">Usuario</a></span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label>Twitter:</label>
                                                            <span><a href="#">Usuario</a></span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label>Instagram:</label>
                                                            <span><a href="#">Usuario</a></span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label>LinkedIn:</label>
                                                            <span><a href="#">Usuario</a></span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label>Pinterest:</label>
                                                            <span><a href="#">Usuario</a></span>
                                                        </div>
                                                        <div class="info-group">
                                                            <label>Youtube:</label>
                                                            <span><a href="#">Usuario</a></span>
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
                                    <div id="tab-4" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="ibox">
                                                <div class="ibox-content">
                                                    <header>
                                                        <h5>Oportunidades</h5>
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
                                                                                <th>Estado</th>
                                                                                <th>Valor</th>
                                                                                <th>Fecha de creación</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class=""><p><a href="">Nombre de la oportunidad</a></p></td>
                                                                                <td class=""><span class="label bg-blue">Pendiente</span></td>
                                                                                <td class="">$1.000.000</td>
                                                                                <td class=""><date>18/03/2018 10:00am</date></td>
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
                                                        <h5>Proyectos</h5>
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
                                                                                <th>Estado</th>
                                                                                <th>Fecha de creación</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class=""><p><a href="">Nombre de la campaña</a></p></td>
                                                                                <td class=""><span class="label bg-blue">Pendiente</span></td>
                                                                                <td class=""><date>18/03/2018 10:00am</date></td>
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
                                                        <h5>Consultas de propiedades</h5>
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
                                                                                <th>Fuente de origen</th>
                                                                                <th>Fecha de creación</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class=""><p><a href="">Nombre de propiedad</a></p></td>
                                                                                <td class=""><p><a href="">Web</a></p></td>
                                                                                <td class=""><date>18/03/2018 10:00am</date></td>
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
                                                        <h5>Pedidos de ecommerce</h5>
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
                                                                                <th>Carrito</th>
                                                                                <th>Estado</th>
                                                                                <th>Valor</th>
                                                                                <th>Fecha de creación</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class=""><p><a href="">Carrito #10020</a></p></td>
                                                                                <td class=""><span class="label bg-blue">Pendiente</span></td>
                                                                                <td class="">$1.000.000</td>
                                                                                <td class=""><date>18/03/2018 10:00am</date></td>
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
                                    <div id="tab-5" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="ibox">
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <!-- GRUPO -->
                                                        <div class="record">
                                                            <div class="record-main">
                                                                <div class="record-pic">
                                                                    <a href="grupos-view.php"><img src="img/a1.jpg"/></a>
                                                                </div>
                                                                <div class="record-desc">
                                                                    <h2>Creado el dd/mm/aaaa</h2>
                                                                    <h1><a href="grupos-view.php">Nombre Grupo</a></h1>
                                                                    <h3>Creado por <a href="contactos-view.php">Nombre Apellido</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- GRUPO -->
                                                        <!-- GRUPO -->
                                                        <div class="record">
                                                            <div class="record-main">
                                                                <div class="record-pic">
                                                                    <a href="grupos-view.php"><img src="img/a1.jpg"/></a>
                                                                </div>
                                                                <div class="record-desc">
                                                                    <h2>Creado el dd/mm/aaaa</h2>
                                                                    <h1><a href="grupos-view.php">Nombre Grupo</a></h1>
                                                                    <h3>Creado por <a href="contactos-view.php">Nombre Apellido</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- GRUPO -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-6" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="ibox">
                                                <div class="ibox-content">
                                                    <header>
                                                        <h5>Información del usuario</h5>
                                                        <nav>
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-xs btn-white"><i class="fas fa-window-maximize"></i></a>
                                                            </div>
                                                        </nav>
                                                    </header>
                                                    <div class="row">
                                                        <div class="info-group">
                                                            <label>Tipo de usuario:</label>
                                                            <span>Administrador</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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