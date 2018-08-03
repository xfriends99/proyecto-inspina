@extends('layouts.app')
@section('content')

    <main class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <aside>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Grupos</li>
                </ol>
            </aside>
            <div class="side-0">
                <section>
                    <h1>Grupos</h1>
                </section>
                <section>
                    <div class="btn-group">
                        <a href="?type=mosaico" class="btn btn-white btn-sm @if($params['type']=='mosaico') active @endif"><i class="fa fa-table"></i></a>
                        <a href="?type=table" class="btn btn-white btn-sm @if($params['type']=='table') active @endif"><i class="fa fa-align-justify"></i></a>
                    </div><!--
                    <div class="btn-group">
                        <a data-toggle="dropdown" class="btn btn-white btn-sm dropdown-toggle"><i class="fa fa-edit"></i> Acciones <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="">Crear nuevo grupo</a></li>
                            <li><a href="">Unir a grupo</a></li>
                            <li><a href="">Eliminar selección</a></li>
                        </ul>
                    </div>-->
                    <a class="btn btn-blue btn-sm" href="{{route('group.create')}}"><i class="fa fa-plus"></i> Nuevo</a>
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
                                                                <th>Nombre</th>
                                                                <th>Propietario</th>
                                                                <th>Miembros</th>
                                                                <th>Creado el</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($groups as $group)
                                                                <tr>
                                                                    <td class=""><input type="checkbox" class="i-checks"></td>
                                                                    <td class=""><p><a href="{{route('group.show', $group->id)}}">{{$group->name}}</a></p></td>
                                                                    <td class=""><p><a href="{{route('user.show', $group->created_by)}}">{{$group->full_name}}</a></p></td>
                                                                    <td class=""><p>{{$group->members_count}}</p></td>
                                                                    <td class=""><date>{{$group->date_format}}</date></td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    {!! $groups->appends($params)->render() !!}
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
@endsection