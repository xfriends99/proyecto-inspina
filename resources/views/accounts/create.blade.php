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
                                <h1>Nombre Cuenta</h1>
                            </section>
                            <section>
                            <button type="button" id="send-form" class="btn btn-blue btn-sm" ><i class="fa fa-save"></i> Guardar</button>
                          </section>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tabs-container">
                            <div class="side-1">
                                <form action="#" class="dropzone" id="dropzoneForm">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple/>
                                    </div>
                                </form>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">Información</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">Contacto</a></li>
                                </ul>
                            </div>
                            <div class="side-2">
                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane active">
                                        <div class="panel-body">
                                            <div class="ibox">
                                                <div class="ibox-heading">
                                                    <h4>Información de cuenta</h4>
                                                    <div class="ibox-tools">
                                                        <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                                    </div>
                                                </div>
                                                <div class="ibox-content">
                                                    <div class="row">
                                                    <form id="main-form" action="{{route('account.store')}}" method="POST" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label>Nombre de fantasía</label>
                                                            <input type="text" id="fantasy_name" value="{{old('fantasy_name')}}" name="fantasy_name" data-placeholder="" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Razón social</label>
                                                            <input type="text" id="business_name" value="{{old('business_name')}}" name="business_name" data-placeholder="" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tipo de cuenta</label>
                                                            <select data-placeholder="" placeholder="" class="form-control">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Industria</label>
                                                            <select data-placeholder="" placeholder="" class="form-control">
                                                             <ul>
                                                            @foreach($industries as $industry)
                                                  <option value="{{$industry->code}}">"{{$industry->name}}"</option>
                                                    @endforeach
                                                        </ul>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>CUIT</label>
                                                            <input type="number" id="cuit" value="{{old('cuit')}}" name="cuit" data-placeholder="" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Ingresos brutos</label>
                                                            <select data-placeholder="" placeholder="" class="form-control">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group-lg form-group">
                                                            <label>Descripción</label>
                                                            <textarea type="text" id="description" value="{{old('description')}}" name="description" data-placeholder="" placeholder=""></textarea>
                                                        </div>
                                                        {{csrf_field()}}
                                                      </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-2" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="ibox">
                                                <div class="ibox-heading">
                                                    <h4>Contacto principal</h4>
                                                    <div class="ibox-tools">
                                                        <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                                    </div>
                                                </div>
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <a href="" class="btn-plus">
                                                                +
                                                                <span>Agregar contacto</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="row">

                                                        <!-- CONTACTO -->
                                                        <div class="record">
                                                            <div class="record-main">
                                                                <div class="record-pic">
                                                                    <a><img src="img/a1.jpg"/></a>
                                                                </div>
                                                                <div class="record-desc">
                                                                    <h2>Tipo de contacto</h2>
                                                                    <h1><a href="">Nombre Apellido</a></h1>
                                                                    <h3>Gerente general en <a href="#">Cuenta</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- CONTACTO -->

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ibox">
                                                <div class="ibox-heading">
                                                    <h4>Teléfonos</h4>
                                                    <div class="ibox-tools">
                                                        <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                                    </div>
                                                </div>
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label>Teléfono principal</label>
                                                            <input type="number" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Interno</label>
                                                            <input type="number" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ibox collapsed">
                                                <div class="ibox-heading">
                                                    <h4>Domicilios</h4>
                                                    <div class="ibox-tools">
                                                        <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                                    </div>
                                                </div>
                                                <div class="ibox-content">
                                                    <div class="row">
                                                        <h5>
                                                            Domicilio comercial
                                                            <div class="btn-group">
                                                                <a data-toggle="dropdown" class="btn btn-white btn-sm dropdown-toggle">Vincular <span class="caret"></span></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href=""><i class="fa fa-link"></i> Unificar con domicilio laboral</a></li>
                                                                    <li><a href=""><i class="fa fa-link"></i> Unificar con domicilio personal</a></li>
                                                                    <li><a href=""><i class="fa fa-link"></i> Unificar con domicilio de entrega</a></li>
                                                                    <li><a href=""><i class="fa fa-flag"></i> Cambiar domicilio</a></li>
                                                                </ul>
                                                            </div>
                                                        </h5>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label>Dirección</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><input type="radio" name="address-default" checked></span> 
                                                                <input type="text" data-placeholder="" placeholder="" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Número</label>
                                                            <input type="number" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Piso</label>
                                                            <input type="number" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Departamento</label>
                                                            <input type="number" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>CP</label>
                                                            <input type="number" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>País</label>
                                                            <select data-placeholder="" placeholder="" class="form-control">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Provincia</label>
                                                            <select data-placeholder="" placeholder="" class="form-control">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Localidad</label>
                                                            <select data-placeholder="" placeholder="" class="form-control">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Ciudad</label>
                                                            <select data-placeholder="" placeholder="" class="form-control">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Barrio</label>
                                                            <select data-placeholder="" placeholder="" class="form-control">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="row">
                                                        <h5>
                                                            Domicilio fiscal
                                                            <div class="btn-group">
                                                                <a data-toggle="dropdown" class="btn btn-white btn-sm dropdown-toggle">Vincular <span class="caret"></span></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href=""><i class="fa fa-link"></i> Unificar con domicilio laboral</a></li>
                                                                    <li><a href=""><i class="fa fa-link"></i> Unificar con domicilio personal</a></li>
                                                                    <li><a href=""><i class="fa fa-link"></i> Unificar con domicilio de entrega</a></li>
                                                                    <li><a href=""><i class="fa fa-flag"></i> Cambiar domicilio</a></li>
                                                                </ul>
                                                            </div>
                                                        </h5>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label>Dirección</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><input type="radio" name="address-default"></span> 
                                                                <input type="text" data-placeholder="" placeholder="" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Número</label>
                                                            <input type="number" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Piso</label>
                                                            <input type="number" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Departamento</label>
                                                            <input type="number" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>CP</label>
                                                            <input type="number" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>País</label>
                                                            <select data-placeholder="" placeholder="" class="form-control">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Provincia</label>
                                                            <select data-placeholder="" placeholder="" class="form-control">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Localidad</label>
                                                            <select data-placeholder="" placeholder="" class="form-control">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Ciudad</label>
                                                            <select data-placeholder="" placeholder="" class="form-control">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Barrio</label>
                                                            <select data-placeholder="" placeholder="" class="form-control">
                                                                <option value=""></option>
                                                            </select>
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
@section('inline-scripts')
    <script>
        $(document).ready(function(){
            $('#send-form').click(function () {
                $('#main-form').submit();
            })
        });
    </script>
@endsection