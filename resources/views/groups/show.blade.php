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
                                <h1>Nombre grupo</h1>
                            </section>
                            <section>
                                <div class="btn-group">
                                    <a data-toggle="dropdown" class="btn btn-white btn-sm dropdown-toggle"><i class="fa fa-edit"></i> Acciones <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="grupos-edit.php">Editar grupo</a></li>
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
                                        <img src="https://tbcn.s3-accelerate.amazonaws.com/logos/422_Alem%20Propiedades%20%7C%20Roberto%20Celano/Alemprop_logo(sm).jpg" title="" alt="profile">
                                    </div>
                                    <div class="profile-desc">
                                        <ul>
                                            <li>
                                                <label>Creado por: </label>
                                                <span><a href="">Nombre Apellido</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">Historial</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">Información</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false">Miembros</a></li>
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
                                                    <header>
                                                        <h5>Acerca de este grupo</h5>
                                                        <nav>
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-xs btn-white"><i class="fa fa-window-maximize"></i></a>
                                                            </div>
                                                        </nav>
                                                    </header>
                                                    <div class="row">
                                                        <div class="info-group info-group-lg">
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
                                                    
                                                        <!-- CONTACTO -->
                                                        <div class="record">
                                                            <div class="record-main">
                                                                <div class="label-1">
                                                                    <span class="label">Propietario</span>
                                                                </div>                                                                
                                                                <div class="record-pic">
                                                                    <a href="contactos-view.php"><img src="img/a1.jpg"/></a>
                                                                </div>
                                                                <div class="record-desc">
                                                                    <h2>Tipo de contacto</h2>
                                                                    <h1><a href="contactos-view.php">Nombre Apellido</a></h1>
                                                                    <h3>Gerente general en <a href="cuentas-view.php">Cuenta</a></h3>
                                                                </div>
                                                            </div>
                                                            <ul class="record-nav">
                                                                <div class="btn-group">
                                                                    <a data-toggle="dropdown" class="btn btn-blue-outline btn-sm dropdown-toggle">Editar <span class="caret"></span></a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="contactos-edit.php">Modificar contacto</a></li>
                                                                        <li><a href="">Modificar permisos</a></li>
                                                                    </ul> 
                                                                </div>
                                                                <li><i class="fa fa-lock"></i> <a href="#">Administrador</a></li>
                                                                <li><i class="fa fa-phone"></i> <a href="#">+5491151665757</a></li>
                                                                <li><i class="fa fa-envelope"></i> <a href="#">contacto@company.com.ar</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- CONTACTO -->

                                                        <!-- CONTACTO -->
                                                        <div class="record">
                                                            <div class="record-main">
                                                                <div class="record-pic">
                                                                    <a href="contactos-view.php"><img src="img/a1.jpg"/></a>
                                                                </div>
                                                                <div class="record-desc">
                                                                    <h2>Tipo de contacto</h2>
                                                                    <h1><a href="contactos-view.php">Nombre Apellido</a></h1>
                                                                    <h3>Gerente general en <a href="cuentas-view.php">Cuenta</a></h3>
                                                                </div>
                                                            </div>
                                                            <ul class="record-nav">
                                                                <div class="btn-group">
                                                                    <a data-toggle="dropdown" class="btn btn-blue-outline btn-sm dropdown-toggle">Editar <span class="caret"></span></a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="contactos-edit.php">Modificar contacto</a></li>
                                                                        <li><a href="">Modificar permisos</a></li>
                                                                    </ul> 
                                                                </div>
                                                                <li><i class="fa fa-lock"></i> <a href="#">Editor</a></li>
                                                                <li><i class="fa fa-phone"></i> <a href="#">+5491151665757</a></li>
                                                                <li><i class="fa fa-envelope"></i> <a href="#">contacto@company.com.ar</a></li>
                                                            </ul>
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