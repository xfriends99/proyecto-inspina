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
                                <h1>Nombre oportunidad</h1>
                            </section>
                            <section>
                                <div class="btn-group">
                                    <a data-toggle="dropdown" class="btn btn-white btn-sm dropdown-toggle"><i class="fa fa-edit"></i> Acciones <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="oportunidades-edit.php">Editar oportunidad</a></li>
                                        <li><a href="">Compartir oportunidad</a></li>
                                    </ul> 
                                </div>
                                <div class="btn-group">
                                    <a data-toggle="dropdown" class="btn btn-blue btn-sm dropdown-toggle"><i class="fa fa-edit"></i> Evolucionar <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="">Pendiente de contacto</a></li>
                                        <li><a href="">En contacto</a></li>
                                        <li><a href="">En negociación</a></li>
                                        <li><a href="">Ganada</a></li>
                                        <li><a href="">Perdida</a></li>
                                    </ul> 
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
                                    </div>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">Historial</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">Información</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false">Propiedades</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-4" aria-expanded="false">Productos</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-5" aria-expanded="false">Servicios</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-6" aria-expanded="false">Calendario</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-7" aria-expanded="false">Responsable</a></li>
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
                                                                                <a data-toggle="dropdown" class="btn btn-white dropdown-toggle"><i class="fa fa-lock"></i> <span class="caret"></span></a>
                                                                                <ul class="dropdown-menu-perfil dropdown-menu-center">
                                                                                    <li>¿Quién debería ver esto?</li>
                                                                                    <li><a href=""><i class="fa fa-users"></i>Mi equipo</a></li>
                                                                                    <li><a href=""><i class="fa fa-globe"></i>Público</a></li>
                                                                                    <li><a href=""><i class="fa fa-user"></i>Solo yo</a></li>
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
                                                                            <a class="btn btn-white btn-sm remover"><i class="fa fa-trash"></i> </a>
                                                                            <a href="#" class="btn btn-sm btn-blue"><i class="fa fa-pencil"></i> Responder</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="feed-more">
                                                                    <a href="#"><i class="fa fa-angle-down"></i></a>
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
                                                    <div class="row">
                                                        <h5>Detalle</h5>
                                                    </div>
                                                    <div class="row">
                                                        <div class="info-group info-group-lg">
                                                            <label>Resumen:</label>
                                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                                        </div>
                                                        <div class="info-group info-group-lg">
                                                            <label>Descripción:</label>
                                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec orci diam, iaculis quis arcu sit amet, euismod cursus ligula. In hac habitasse platea dictumst. Sed non lectus massa. Donec consequat augue id tellus laoreet, ac pulvinar quam mollis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin semper maximus tortor, sed luctus dui dapibus imperdiet. Suspendisse in mi eu risus posuere dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas ullamcorper lectus est, et feugiat risus ultricies non. Morbi nec lectus et eros volutpat euismod quis vel justo. Integer quis felis sit amet lorem scelerisque efficitur. Sed pulvinar rutrum neque, at egestas nunc dictum at. Proin eleifend sit amet nulla id vestibulum. Etiam pretium condimentum est, eget tincidunt lacus blandit eu. In a pharetra lectus, sit amet suscipit leo. Sed.</span>
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
                                                    <div class="row">
                                                        <h5>Propiedades compartidas</h5>
                                                    </div>
                                                    <div class="row">

                                                        <!-- PRODUCTO -->
                                                        <div class="product">
                                                            <div class="product-main">
                                                                <div class="product-pic">
                                                                    <a href=""><img src="https://tbcn.s3-accelerate.amazonaws.com/pictures/46530826247936322584410015753231109225018886055067728896167223705528508369564.jpg"/></a>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <h2>Tipo de operación - Tipo de propiedad</h2>
                                                                    <h1><a href="">Avenida Córdoba 1247 8ºB,
                                                                                Ciudad Autónoma de Buenos Aires,
                                                                                Buenos Aires, Argentina.</a></h1>
                                                                    <div class="product-location">
                                                                        <div class="media">
                                                                            <div class="media-left">
                                                                                <i class="fa fa-map-marker"></i>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                Avenida Córdoba 1247 8ºB,
                                                                                Ciudad Autónoma de Buenos Aires,
                                                                                Buenos Aires, Argentina.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul class="product-nav">
                                                                <div class="btn-group">
                                                                    <a data-toggle="dropdown" class="btn btn-blue-outline btn-sm dropdown-toggle">Editar <span class="caret"></span></a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="">Modificar propiedad</a></li>
                                                                        <li><a href="">Compartir propiedad</a></li>
                                                                        <li><a href="">Asignar propiedad</a></li>
                                                                    </ul> 
                                                                </div>
                                                                <li>5 Ambientes</li>
                                                                <li>2 Plantas</li>
                                                                <li>1000 m<sup>2</sup></li>
                                                                <li>$1.000.000</li>
                                                            </ul>
                                                        </div>
                                                        <!-- PRODUCTO -->

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ibox">
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <h5>Propiedades de interés</h5>
                                                    </div>
                                                    <div class="row">

                                                        <!-- PRODUCTO -->
                                                        <div class="product">
                                                            <div class="product-main">
                                                                <div class="product-pic">
                                                                    <a href=""><img src="https://tbcn.s3-accelerate.amazonaws.com/pictures/46530826247936322584410015753231109225018886055067728896167223705528508369564.jpg"/></a>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <h2>Tipo de operación - Tipo de propiedad</h2>
                                                                    <h1><a href="">Avenida Córdoba 1247 8ºB,
                                                                                Ciudad Autónoma de Buenos Aires,
                                                                                Buenos Aires, Argentina.</a></h1>
                                                                    <div class="product-location">
                                                                        <div class="media">
                                                                            <div class="media-left">
                                                                                <i class="fa fa-map-marker"></i>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                Avenida Córdoba 1247 8ºB,
                                                                                Ciudad Autónoma de Buenos Aires,
                                                                                Buenos Aires, Argentina.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul class="product-nav">
                                                                <div class="btn-group">
                                                                    <a data-toggle="dropdown" class="btn btn-blue-outline btn-sm dropdown-toggle">Editar <span class="caret"></span></a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="">Modificar propiedad</a></li>
                                                                        <li><a href="">Compartir propiedad</a></li>
                                                                        <li><a href="">Asignar propiedad</a></li>
                                                                    </ul> 
                                                                </div>
                                                                <li>5 Ambientes</li>
                                                                <li>2 Plantas</li>
                                                                <li>1000 m<sup>2</sup></li>
                                                                <li>$1.000.000</li>
                                                            </ul>
                                                        </div>
                                                        <!-- PRODUCTO -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-4" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="ibox">
                                                <div class="ibox-heading">
                                                    <h4>Situación laboral</h4>
                                                </div>
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Nombre</p>
                                                            <h4><a href="">Alem Propiedades</a></h4>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Tipo de cuenta</p>
                                                            <h4>Cliente</h4>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Posición</p>
                                                            <h4>Gerente Comercial</h4>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Área</p>
                                                            <h4>Gerencia Comercial</h4>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Responde a</p>
                                                            <h4><a href="">Roberto Celano</a></h4>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Dejó la compañía</p>
                                                            <h4>No</h4>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Reemplazado por</p>
                                                            <h4><a href="">No aplica</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ibox">
                                                <div class="ibox-heading">
                                                    <h4>Información tributaria</h4>
                                                </div>
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Razón social</p>
                                                            <h4><a href="">Alem Propiedades</a></h4>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>CUIT</p>
                                                            <h4>30-30303030-3</h4>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Ingresos Brutos</p>
                                                            <h4>Excento</h4>
                                                        </div>
                                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Domicilio fiscal</p>
                                                            <h4>
                                                                <a href="" target="_blank">
                                                                    José Antonio Cabrera 3446, 8ºB (CP AA1234SD), Capital Federal, Buenos Aires, Argentina
                                                                </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-5" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="ibox">
                                                <div class="ibox-heading">
                                                    <h4>Correo electrónico</h4>
                                                </div>
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Email laboral</p>
                                                            <h4><a href="">eduardo.kirchuk@lebebot.com.ar</a></h4>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Email personal</p>
                                                            <h4>
                                                                <a href="">
                                                                    <span class="btn btn-info btn-circle" title="Contacto predeterminado">
                                                                        <i class="fa fa-check"></i>
                                                                    </span>
                                                                    <span>
                                                                        eduardo.kirchuk@lebebot.com.ar
                                                                    </span>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>   
                                            <div class="ibox">
                                                <div class="ibox-heading">
                                                    <h4>Teléfonos</h4>
                                                </div>
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Móvil</p>
                                                            <h4>
                                                                <a href="">
                                                                    <span class="btn btn-info btn-circle" title="Contacto predeterminado">
                                                                        <i class="fa fa-check"></i>
                                                                    </span>
                                                                    +54911 12341234
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Personal</p>
                                                            <h4>
                                                                <a href="">
                                                                    +54911 12341234
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Laboral</p>
                                                            <h4>
                                                                <a href="">
                                                                    +54911 12341234
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Interno</p>
                                                            <h4>1</h4>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>   
                                            <div class="ibox">
                                                <div class="ibox-heading">
                                                    <h4>Domicilio</h4>
                                                </div>
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Personal</p>
                                                            <h4>
                                                                <a href="" target="_blank">
                                                                    <span class="btn btn-info btn-circle" title="Contacto predeterminado">
                                                                        <i class="fa fa-check"></i>
                                                                    </span> 
                                                                    José Antonio Cabrera 3446, 8ºB (CP AA1234SD), Capital Federal, Buenos Aires, Argentina
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Laboral</p>
                                                            <h4>
                                                                <a href="" target="_blank">
                                                                    José Antonio Cabrera 3446, 8ºB (CP AA1234SD), Capital Federal, Buenos Aires, Argentina
                                                                </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   
                                            <div class="ibox">
                                                <div class="ibox-heading">
                                                    <h4>Redes sociales</h4>
                                                </div>
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-b p-r">
                                                            <p>Sitio web</p>
                                                            <h4><a href="" target="_blank">coffeetalkcoffee.com.ar</a></h4>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Facebook</p>
                                                            <h4><a href="" target="_blank">usuario</a></h4>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Twitter</p>
                                                            <h4><a href="" target="_blank">usuario</a></h4>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Instagram</p>
                                                            <h4><a href="" target="_blank">usuario</a></h4>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Pinterest</p>
                                                            <h4><a href="" target="_blank">usuario</a></h4>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>LinkedIn</p>
                                                            <h4><a href="" target="_blank">usuario</a></h4>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-b p-r">
                                                            <p>Youtube</p>
                                                            <h4><a href="" target="_blank">usuario</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   
                                            <div class="ibox">
                                                <div class="ibox-heading">
                                                    <h4>Preferencias</h4>
                                                </div>
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <div class="col-md-3 col-sm-3 col-xs-6 m-b p-r ellipsis"><p><i class="fa fa-check"></i> Teléfono móvil</p></div>
                                                        <div class="col-md-3 col-sm-3 col-xs-6 m-b p-r ellipsis"><p><i class="fa fa-check"></i> Teléfono laboral</p></div>
                                                        <div class="col-md-3 col-sm-3 col-xs-6 m-b p-r ellipsis"><p><i class="fa fa-check"></i> Email</p></div>
                                                        <div class="col-md-3 col-sm-3 col-xs-6 m-b p-r ellipsis"><p><i class="fa fa-check"></i> Redes sociales</p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div id="tab-6" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="ibox">
                                                <div class="ibox-heading">
                                                    <h4>Oportunidades</h4>
                                                </div>
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <div class="list">
                                                            <table class="footable table table-hover toggle-arrow-tiny" data-page-size="15">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="list-th-id">ID</th>
                                                                        <th class="list-th-main">Detalle</th>
                                                                        <th class="list-th-status">Estado</th>
                                                                        <th class="list-th-completion">Avance</th>
                                                                        <th class="list-th-people">Usuarios</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- OPORTUNIDAD -->
                                                                    <tr>
                                                                        <td class="list-id">
                                                                            <i class="fa fa-chevron-up"></i>
                                                                            <div>22222</div>
                                                                            <i class="fa fa-chevron-down"> </i>
                                                                        </td>
                                                                        <td class="list-main">
                                                                            <a href="#" class="list-title ">
                                                                                Nombre de la oportunidad
                                                                            </a>
                                                                            <div class="list-info">
                                                                                <small><i class="fa fa-clock-o"></i> Asignada el DD/MM/AAAA</a></small>
                                                                                <small><i class="fa fa-user"></i> Creada por <a href="#">Usuario</a></small>
                                                                            </div>
                                                                        </td>
                                                                        <td class="list-status">
                                                                            <span class="label label-primary">Activa</span>
                                                                        </td>
                                                                        <td class="list-completion">
                                                                            <p>Avance: 50%</p>
                                                                            <div class="progress progress-mini">
                                                                                <div style="width: 50%;" class="progress-bar"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="list-people">
                                                                            <div class="team-members">
                                                                                <a href="#"><img alt="member" class="img-circle" src="img/a1.jpg"></a>
                                                                                <a href="#"><img alt="member" class="img-circle" src="img/a2.jpg"></a>
                                                                                <a href="#"><img alt="member" class="img-circle" src="img/a3.jpg"></a>
                                                                                <a href="#"><img alt="member" class="img-circle" src="img/a5.jpg"></a>
                                                                                <a href="#"><img alt="member" class="img-circle" src="img/a1.jpg"></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <!-- OPORTUNIDAD -->
                                                                    <!-- OPORTUNIDAD -->
                                                                    <tr>
                                                                        <td class="list-id">
                                                                            <i class="fa fa-chevron-up"></i>
                                                                            <div>22222</div>
                                                                            <i class="fa fa-chevron-down"> </i>
                                                                        </td>
                                                                        <td class="list-main">
                                                                            <a href="#" class="list-title ">
                                                                                Alberto
                                                                            </a>
                                                                            <div class="list-info">
                                                                                <small><i class="fa fa-clock-o"></i> Asignada el DD/MM/AAAA</a></small>
                                                                                <small><i class="fa fa-user"></i> Creada por <a href="#">Usuario</a></small>
                                                                            </div>
                                                                        </td>
                                                                        <td class="list-status">
                                                                            <span class="label label-primary">Inactiva</span>
                                                                        </td>
                                                                        <td class="list-completion">
                                                                            <p>Avance: 10%</p>
                                                                            <div class="progress progress-mini">
                                                                                <div style="width: 10%;" class="progress-bar"></div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="list-people">
                                                                            <div class="team-members">
                                                                                <a href="#"><img alt="member" class="img-circle" src="img/a1.jpg"></a>
                                                                                <a href="#"><img alt="member" class="img-circle" src="img/a2.jpg"></a>
                                                                                <a href="#"><img alt="member" class="img-circle" src="img/a3.jpg"></a>
                                                                                <a href="#"><img alt="member" class="img-circle" src="img/a5.jpg"></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <!-- OPORTUNIDAD -->
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row ver-mas">
                                                        <a href="#" class="btn btn-xs btn-white"><i class="fa fa-angle-down"></i> Ver más</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ibox">
                                                <div class="ibox-heading">
                                                    <h4>Campañas</h4>
                                                </div>
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <div class="list">
                                                            <table class="footable table table-hover toggle-arrow-tiny" data-page-size="15">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="list-th-id">ID</th>
                                                                        <th class="list-th-main">Detalle</th>
                                                                        <th class="list-th-status">Estado</th>
                                                                        <th class="list-th-people">Usuarios</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- CAMPAÑA -->
                                                                    <tr>
                                                                        <td class="list-id">
                                                                            <i class="fa fa-chevron-up"></i>
                                                                            <div>22222</div>
                                                                            <i class="fa fa-chevron-down"> </i>
                                                                        </td>
                                                                        <td class="list-main">
                                                                            <a href="#" class="list-title ">
                                                                                Nombre de la oportunidad
                                                                            </a>
                                                                            <div class="list-info">
                                                                                <small><i class="fa fa-clock-o"></i> Asignada el DD/MM/AAAA</a></small>
                                                                                <small><i class="fa fa-user"></i> Creada por <a href="#">Usuario</a></small>
                                                                            </div>
                                                                        </td>
                                                                        <td class="list-status">
                                                                            <span class="label label-primary">Activa</span>
                                                                        </td>
                                                                        <td class="list-people">
                                                                            <div class="team-members">
                                                                                <a href="#"><img alt="member" class="img-circle" src="img/a1.jpg"></a>
                                                                                <a href="#"><img alt="member" class="img-circle" src="img/a2.jpg"></a>
                                                                                <a href="#"><img alt="member" class="img-circle" src="img/a3.jpg"></a>
                                                                                <a href="#"><img alt="member" class="img-circle" src="img/a5.jpg"></a>
                                                                                <a href="#"><img alt="member" class="img-circle" src="img/a1.jpg"></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <!-- CAMPAÑA -->
                                                                    <!-- CAMPAÑA -->
                                                                    <tr>
                                                                        <td class="list-id">
                                                                            <i class="fa fa-chevron-up"></i>
                                                                            <div>22222</div>
                                                                            <i class="fa fa-chevron-down"> </i>
                                                                        </td>
                                                                        <td class="list-main">
                                                                            <a href="#" class="list-title ">
                                                                                Alberto
                                                                            </a>
                                                                            <div class="list-info">
                                                                                <small><i class="fa fa-clock-o"></i> Asignada el DD/MM/AAAA</a></small>
                                                                                <small><i class="fa fa-user"></i> Creada por <a href="#">Usuario</a></small>
                                                                            </div>
                                                                        </td>
                                                                        <td class="list-status">
                                                                            <span class="label label-primary">Inactiva</span>
                                                                        </td>
                                                                        <td class="list-people">
                                                                            <div class="team-members">
                                                                                <a href="#"><img alt="member" class="img-circle" src="img/a1.jpg"></a>
                                                                                <a href="#"><img alt="member" class="img-circle" src="img/a2.jpg"></a>
                                                                                <a href="#"><img alt="member" class="img-circle" src="img/a3.jpg"></a>
                                                                                <a href="#"><img alt="member" class="img-circle" src="img/a5.jpg"></a>
                                                                                <a href="#"><img alt="member" class="img-circle" src="img/a1.jpg"></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <!-- CAMPAÑA -->
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row ver-mas">
                                                        <a href="#" class="btn btn-xs btn-white"><i class="fa fa-angle-down"></i> Ver más</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ibox">
                                                <div class="ibox-heading">
                                                    <h4>Grupos</h4>
                                                </div>
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <!-- GRUPO -->
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="group">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-3 col-sm-2 col-xs-12">
                                                                        <div class="group-img">
                                                                            <a href="#"><img src="img/a4.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-9 col-sm-10 col-xs-12">
                                                                        <div class="group-item-title"><h4><a href="#">Nombre del grupo largo hasta largo hasta hasta</a></h4></div>
                                                                        <div class="group-sub-title">Creado por <a href="#">Usuario usuario usuario usuario</a></div>
                                                                        <div class="group-sub-title">1.000 miembros</div>
                                                                        <div class="team-members">
                                                                            <a href="#"><img alt="member" class="img-circle" src="img/a1.jpg"></a>
                                                                            <a href="#"><img alt="member" class="img-circle" src="img/a2.jpg"></a>
                                                                            <a href="#"><img alt="member" class="img-circle" src="img/a3.jpg"></a>
                                                                            <a href="#"><img alt="member" class="img-circle" src="img/a5.jpg"></a>
                                                                            <a href="#"><img alt="member" class="img-circle" src="img/a1.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- GRUPO -->
                                                        <!-- GRUPO -->
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="group">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-3 col-sm-2 col-xs-12">
                                                                        <div class="group-img">
                                                                            <a href="#"><img src="img/a4.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-9 col-sm-10 col-xs-12">
                                                                        <div class="group-item-title"><h4><a href="#">Nombre del grupo largo hasta</a></h4></div>
                                                                        <div class="group-sub-title">Creado por <a href="#">Usuario usuario usuario usuario</a></div>
                                                                        <div class="group-sub-title">1.000 miembros</div>
                                                                        <div class="team-members">
                                                                            <a href="#"><img alt="member" class="img-circle" src="img/a1.jpg"></a>
                                                                            <a href="#"><img alt="member" class="img-circle" src="img/a2.jpg"></a>
                                                                            <a href="#"><img alt="member" class="img-circle" src="img/a3.jpg"></a>
                                                                            <a href="#"><img alt="member" class="img-circle" src="img/a5.jpg"></a>
                                                                            <a href="#"><img alt="member" class="img-circle" src="img/a1.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- GRUPO -->
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="group">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-3 col-sm-2 col-xs-12">
                                                                        <div class="group-img">
                                                                            <a href="#"><img src="img/a4.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-9 col-sm-10 col-xs-12">
                                                                        <div class="group-item-title"><h4><a href="#">Nombre del grupo largo hasta</a></h4></div>
                                                                        <div class="group-sub-title">Creado por <a href="#">Usuario usuario usuario usuario</a></div>
                                                                        <div class="group-sub-title">1.000 miembros</div>
                                                                        <div class="team-members">
                                                                            <a href="#"><img alt="member" class="img-circle" src="img/a1.jpg"></a>
                                                                            <a href="#"><img alt="member" class="img-circle" src="img/a2.jpg"></a>
                                                                            <a href="#"><img alt="member" class="img-circle" src="img/a3.jpg"></a>
                                                                            <a href="#"><img alt="member" class="img-circle" src="img/a5.jpg"></a>
                                                                            <a href="#"><img alt="member" class="img-circle" src="img/a1.jpg"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- GRUPO -->
                                                    </div>
                                                    <div class="row ver-mas">
                                                        <a href="#" class="btn btn-xs btn-white"><i class="fa fa-angle-down"></i> Ver más</a>
                                                    </div>
                                                </div>
                                            </div>                                                
                                        </div>
                                    </div> 
                                    <div id="tab-7" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="ibox">
                                                <div class="ibox-heading">
                                                    <h4>Ecommerce</h4>
                                                </div>
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <div class="list">
                                                            <table class="footable table table-hover toggle-arrow-tiny" data-page-size="15">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="list-th-id">ID</th>
                                                                        <th class="list-th-pricing">Precio</th>
                                                                        <th class="list-th-date">Fecha pedido</th>
                                                                        <th class="list-th-payment">Pagado</th>
                                                                        <th class="list-th-status">Estado</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- PEDIDO ECOMMERCE -->
                                                                    <tr>
                                                                        <td class="list-id">
                                                                            <i class="fa fa-chevron-up"></i>
                                                                            <a href="#">22222</a>
                                                                            <i class="fa fa-chevron-down"> </i>
                                                                        </td>
                                                                        <td class="list-pricing">
                                                                            $ 11.000,00
                                                                        </td>
                                                                        <td class="list-pricing">
                                                                            DD/MM/AAAA
                                                                        </td>
                                                                        <td class="list-payment">
                                                                            DD/MM/AAAA
                                                                        </td>
                                                                        <td class="list-status">
                                                                            <span class="label label-primary">Completado</span>
                                                                        </td>
                                                                    </tr>
                                                                    <!-- PEDIDO ECOMMERCE -->
                                                                    <!-- PEDIDO ECOMMERCE -->
                                                                    <tr>
                                                                        <td class="list-id">
                                                                            <i class="fa fa-chevron-up"></i>
                                                                            <a href="#">22222</a>
                                                                            <i class="fa fa-chevron-down"> </i>
                                                                        </td>
                                                                        <td class="list-pricing">
                                                                            $ 11.000,00
                                                                        </td>
                                                                        <td class="list-pricing">
                                                                            DD/MM/AAAA
                                                                        </td>
                                                                        <td class="list-payment">
                                                                            DD/MM/AAAA
                                                                        </td>
                                                                        <td class="list-status">
                                                                            <span class="label label-primary">Completado</span>
                                                                        </td>
                                                                    </tr>
                                                                    <!-- PEDIDO ECOMMERCE -->
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row ver-mas">
                                                        <a href="#" class="btn btn-xs btn-white"><i class="fa fa-angle-down"></i> Ver más</a>
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