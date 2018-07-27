
   <nav class="navbar navbar-static-top" role="navigation">
                    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-10">
                        <div class="navbar-header">
                            <a href="#" class="navbar-minimalize minimalize-styl-2 btn"><i class="fas fa-bars"></i></a>
                            <input type="text" placeholder="Qué estás buscando..."/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">
                        <ul class="nav navbar-top-links">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Crear</a>
                                <ul class="dropdown-menu-top dropdown-menu-right">
                                    <li><a href=""><i class="fa fa-user"></i>Nuevo contacto</a></li>
                                    <li><a href=""><i class="fas fa-id-card"></i>Nueva cuenta</a></li>
                                    <li><a href=""><i class="fa fa-users"></i>Nuevo grupo</a></li>
                                    <li><a href=""><i class="fa fa-star"></i>Oportunidad</a></li>
                                    <li><a href=""><i class="fa fa-calendar"></i>Tarea</a></li>
                                    <li><a href=""><i class="fa fa-newspaper"></i>Publicación</a></li>
                                    <li><a href=""><i class="fa fa-building"></i>Propiedad</a></li>
                                </ul>
                            </li>
                            <li><a href="calendar-view.php">Calendario</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mensajes
                                    <span class="label bg-orange"></span>
                                </a>
                                <ul class="dropdown-menu-mensajes dropdown-menu-right">
                                    <li>
                                        <small class="">Sin leer (1000)</small>
                                        <a href="">Nuevo mensaje</a>
                                    </li>
                                    <li class="unread">
                                        <a href="#">
                                            <div class="dropdown-menu-mensajes-box">
                                                <div class="media-left">
                                                    <img alt="" src="{{asset('img/a4.jpg')}}">
                                                </div>
                                                <div class="media-body">
                                                    <p>Chris Johnatan escribió un mensaje Johnatan escribió un mensaje.</p>
                                                    <small>DD/MM/AAAA 18:00 por Fuente</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#">
                                            <div class="dropdown-menu-mensajes-box">
                                                <div class="media-left">
                                                    <img alt="" src="{{asset('img/a4.jpg')}}">
                                                </div>
                                                <div class="media-body">
                                                    <p>Chris Johnatan escribió un mensaje Johnatan escribió un mensaje.</p>
                                                    <small>DD/MM/AAAA 18:00 por Fuente</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mensajes-view.php">Ver todos los mensajes</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notificaciones
                                    <span class="label bg-orange"></span>
                                </a>
                                <ul class="dropdown-menu-alertas dropdown-menu-right">
                                    <li>
                                        <small class="">Sin leer (1000)</small>
                                        <a href="">Marcar todas como leídas</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-square fa-fw"></i>222 nuevos comentarios
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter fa-fw"></i>22 nuevos seguidores
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-instagram fa-fw"></i>1000 nuevos seguidores
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-pinterest fa-fw"></i>10 nuevos seguidores
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-youtube-square fa-fw"></i>304 nuevos seguidores
                                        </a>
                                    </li>
                                    <li>
                                        <a href="notificaciones-view.php">Ver todas las notificaciones</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                    <img alt="" class="img-circle" src="{{asset('img/a1.jpg')}}">
                                </a>
                                <ul class="dropdown-menu-top dropdown-menu-right">
                                    <li><a href="contactos-view.php">Ver mi perfil</a></li>
                                    <li><a href="contactos-edit.php">Editar mi perfil</a></li>
                                    <li><a href="config-view.php">Configuración</a></li>
                                    <li><a href="{{route('logout')}}">Salir</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu-mensajes dropdown-menu-right">
                                    <li>
                                        <small class="">Sin leer (1000)</small>
                                        <a href="">Nuevo mensaje</a>
                                    </li>
                                    <li class="unread">
                                        <a href="#">
                                            <div class="dropdown-menu-mensajes-box">
                                                <div class="media-left">
                                                    <img alt="" src="{{asset('img/a4.jpg')}}">
                                                </div>
                                                <div class="media-body">
                                                    <p>Chris Johnatan escribió un mensaje Johnatan escribió un mensaje.</p>
                                                    <small>DD/MM/AAAA 18:00 por Fuente</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#">
                                            <div class="dropdown-menu-mensajes-box">
                                                <div class="media-left">
                                                    <img alt="" src="{{asset('img/a4.jpg')}}">
                                                </div>
                                                <div class="media-body">
                                                    <p>Chris Johnatan escribió un mensaje Johnatan escribió un mensaje.</p>
                                                    <small>DD/MM/AAAA 18:00 por Fuente</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mensajes-view.php">Ver todos los mensajes</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>

