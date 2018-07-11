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
                                    <a href="cuentas-table.php" class="btn btn-white btn-sm active"><i class="fa fa-table"></i></a>
                                    <a href="cuentas-mosaico.php" class="btn btn-white btn-sm"><i class="fa fa-align-justify"></i></a>
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
                                    <a class="btn btn-blue btn-sm" href="{{route('account.create')}}"><i class="fa fa-plus"></i> Nuevo</a>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tabs-container">
                            <div class="side-5">
                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane active">
                                        <div class="panel-body">
                                            <div class="ibox">
                                                <div class="ibox-content">
                                                    <div class="table-group">
                                                        <div class="row">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover dataTables">
                                                                    <thead>
                                                                        <tr>
                                                                            <th></th>
                                                                            <th>Tipo</th>
                                                                            <th>Cuenta</th>
                                                                            <th>Contacto</th>
                                                                            <th>Posición</th>
                                                                            <th><i class="fa fa-star-o"></i></th>
                                                                            <th>Email</th>
                                                                            <th>Teléfono</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class=""><input type="checkbox" class="i-checks"></td>
                                                                            <td class=""><p>Cliente</p></td>
                                                                            <td class=""><p><a href="">Nombre Cuenta</a></p></td>
                                                                            <td class=""><p><a href="">Nombre Apellido</a></p></td>
                                                                            <td class=""><p>Gerente general</p></td>
                                                                            <td class=""><p><a href="">10</a></p></td>
                                                                            <td class=""><p><a href="">contacto@company.com.ar</a></p></td>
                                                                            <td class=""><p><a href="">+5491151665757</a></p></td>
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
                                    <div id="tab-2" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="ibox">
                                                <div class="ibox-content">
                                                    <div class="table-group">
                                                        <div class="row">
                                                            <h5>Noticias</h5>
                                                        </div>
                                                        <div class="row">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover dataTables">
                                                                    <thead>
                                                                        <tr>
                                                                            <th></th>
                                                                            <th></th>
                                                                            <th></th>
                                                                            <th></th>
                                                                            <th></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class=""><input type="checkbox" class="i-checks"></td>
                                                                            <td class=""><a href=""><img src="img/a1.jpg"/></a></td>
                                                                            <td class="">
                                                                                <p><a href="">Título de posteo Título de posteo Título de posteo Título de posteo Título de posteo</a>
                                                                                </p>
                                                                                <date><i class="fa fa-clock-o"></i> Publicado el miércoles 18 de Marzo a las 10:00am</date>
                                                                            </td>
                                                                            <td class=""><span class="bg-blue">Publicado</span></td>
                                                                            <td class="">
                                                                                <a class="btn btn-xs bg-blue"><i class="fa fa-chrome"></i></a>
                                                                                <a class="btn btn-xs bg-facebook"><i class="fa fa-facebook"></i></a>
                                                                                <a class="btn btn-xs bg-twitter"><i class="fa fa-twitter"></i></a>
                                                                                <a class="btn btn-xs bg-linkedin"><i class="fa fa-linkedin"></i></a>
                                                                                <a class="btn btn-xs bg-instagram"><i class="fa fa-instagram"></i></a>
                                                                                <a class="btn btn-xs bg-pinterest"><i class="fa fa-pinterest"></i></a>
                                                                                <a class="btn btn-xs bg-whatsapp"><i class="fa fa-whatsapp"></i></a>
                                                                            </td>
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
                                    <div id="tab-3" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="ibox">
                                                <div class="ibox-content">
                                                    <div class="table-group">
                                                        <div class="row">
                                                            <h5>Eventos</h5>
                                                        </div>
                                                        <div class="row">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover dataTables">
                                                                    <thead>
                                                                        <tr>
                                                                            <th></th>
                                                                            <th></th>
                                                                            <th></th>
                                                                            <th></th>
                                                                            <th></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class=""><input type="checkbox" class="i-checks"></td>
                                                                            <td class=""><a href=""><img src="img/a1.jpg"/></a></td>
                                                                            <td class="">
                                                                                <p><a href="">Título de posteo Título de posteo Título de posteo Título de posteo Título de posteo</a>
                                                                                </p>
                                                                                <date><i class="fa fa-clock-o"></i> Publicado el miércoles 18 de Marzo a las 10:00am</date>
                                                                            </td>
                                                                            <td class=""><span class="bg-blue">Publicado</span></td>
                                                                            <td class="">
                                                                                <a class="btn btn-xs bg-blue"><i class="fa fa-chrome"></i></a>
                                                                                <a class="btn btn-xs bg-facebook"><i class="fa fa-facebook"></i></a>
                                                                                <a class="btn btn-xs bg-twitter"><i class="fa fa-twitter"></i></a>
                                                                                <a class="btn btn-xs bg-linkedin"><i class="fa fa-linkedin"></i></a>
                                                                                <a class="btn btn-xs bg-instagram"><i class="fa fa-instagram"></i></a>
                                                                                <a class="btn btn-xs bg-pinterest"><i class="fa fa-pinterest"></i></a>
                                                                                <a class="btn btn-xs bg-whatsapp"><i class="fa fa-whatsapp"></i></a>
                                                                            </td>
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
                </main>
            </div>
           
        </div>
  


@endsection