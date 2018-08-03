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

                                <h1>usuario@compania.com.ar</h1>

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

                                    <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">Personal</a></li>

                                    <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">Laboral</a></li>

                                    <li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false">Contacto</a></li>

                                    <li class=""><a data-toggle="tab" href="#tab-4" aria-expanded="false">Configuración</a></li>

                                </ul>

                            </div>

                            <div class="side-2">

                                <div class="tab-content">

                                    <div id="tab-1" class="tab-pane active">

                                        <div class="panel-body">

                                            <div class="ibox">

                                                <div class="ibox-heading">

                                                    <h4>Información principal</h4>

                                                    <div class="ibox-tools">

                                                        <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>

                                                    </div>

                                                </div>

                                                <div class="ibox-content">

                                                    <div class="row">
                                                         <form id="main-form" action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">

                                                        <div class="form-group">

                                                            <label>Primer nombre</label>

                                                            <input type="text" id="first_name" value="{{old('first_name')}}" name="first_name" data-placeholder="" placeholder=""/>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>Segundo nombre</label>

                                                            <input type="text" id="second_name" value="{{old('second_name')}}" name="second_name" data-placeholder="" placeholder=""/>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>Apellido</label>

                                                            <input type="text" id="last_name" value="{{old('last_name')}}" name="last_name" data-placeholder="" placeholder=""/>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>Género</label>

                                                       <select name="genre" id="genre" data-placeholder="" placeholder="" class="form-control">
                                                          <option value="Masculino">Masculino</option> 
                                                          <option value="Femenino">Femenino</option> 
                                                       </select>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>Fecha de nacimiento</label>
                                                              <input type="date" id="date_of_birth" value="{{old('date_of_birth')}}" name="date_of_birth" data-placeholder="" placeholder=""/>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>DNI</label>

                                                            <input type="number" id="dni" value="{{old('dni')}}" name="dni" data-placeholder="" placeholder=""/>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>CUIT</label>

                                                            <input type="number" id="cuit" value="{{old('cuit')}}" name="cuit" data-placeholder="" placeholder=""/>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>Idioma</label>

                                                     <select name='language_id' data-placeholder="" placeholder="" class="form-control">
                                                    <ul>
                                                    @foreach($languages as $language)
                                                    <option value="{{$language->code}}">
                                                        "{{$language->name}}"</option>
                                                    @endforeach
                                                        </ul>
                                                            </select>

                                                        </div>
                                                      {{csrf_field()}}
                                                      </form>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="ibox">

                                                <div class="ibox-heading">

                                                    <h4>Categorías</h4>

                                                    <div class="ibox-tools">

                                                        <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>

                                                    </div>

                                                </div>

                                                <div class="ibox-content">

                                                    <div class="row">


                                                        <div class="form-group">
                                                            <label>Tipo de contacto</label>
                                                    <select id="type_contact" name="type_contact" data-placeholder="" placeholder="" class="form-control">
                                                        <option value="Cliente">Cliente</option> 
                                                        <option value="Potencial">Potencial</option> 
                                                        <option value="Competidor">Competidor</option>
                                                        <option value="Partner">Partner</option> 
                                                        <option value="Proveedor">Proveedor</option>
                                                    </select>
                                                        </div>

                                                       <div class="form-group">
                                                            <label>Estado</label>
                                                            <select name="state" id="state" data-placeholder="" placeholder="" class="form-control">
                                                                <option value="Activo">Activo</option>
                                                                <option value="Inactivo">Inactivo</option>
                                                             </select>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="ibox collapsed">

                                                <div class="ibox-heading">

                                                    <h4>Intereses</h4>

                                                    <div class="ibox-tools">

                                                        <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>

                                                    </div>

                                                </div>

                                                <div class="ibox-content">

                                                    <div class="row">

                                                        <form id="form" action="#" class="wizard-big">

                                                            <div class="bootstrap-duallistbox-container row moveonselect"> 

                                                                <div class="box1 col-md-6"></div> 

                                                                <div class="box2 col-md-6"></div>

                                                                <select id="interest" name="interest" class="form-control dual select" style="">
                                                                   <ul>
                                                             @foreach($interests as $interest)
                                                             <option value="{{$interest->code}}">"{{$interest->name}}"</option>
                                                             @endforeach
                                                             </ul>
                                                                </select>

                                                            </div>

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

                                                    <h4>Situación laboral</h4>

                                                    <div class="ibox-tools">

                                                        <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>

                                                    </div>

                                                </div>

                                                <div class="ibox-content">

                                                    <div class="row">

                                                        <div class="form-group">

                                                            <label>Nombre de cuenta</label>

                                                            <select data-placeholder="" placeholder="" class="form-control">

                                                                <option value=""></option>

                                                            </select>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>Posición</label>

                                                            <select data-placeholder="" placeholder="" class="form-control">

                                                                <option value=""></option>

                                                            </select>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>Área</label>

                                                            <select data-placeholder="" placeholder="" class="form-control">

                                                                <option value=""></option>

                                                            </select>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>Responde a</label>

                                                            <select data-placeholder="" placeholder="" class="form-control">

                                                                <option value=""></option>

                                                            </select>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>Dejó la compañía</label>

                                                            <select data-placeholder="" placeholder="" class="form-control">

                                                                <option value=""></option>

                                                            </select>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>Reemplazado por</label>

                                                            <select data-placeholder="" placeholder="" class="form-control">

                                                                <option value=""></option>

                                                            </select>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div id="tab-3" class="tab-pane">

                                        <div class="panel-body">

                                            <div class="ibox collapsed">

                                                <div class="ibox-heading">

                                                    <h4>Correo electrónico</h4>

                                                    <div class="ibox-tools">

                                                        <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>

                                                    </div>

                                                </div>

                                                <div class="ibox-content">

                                                    <div class="row">

                                                        <div class="form-group">

                                                            <label>Email personal</label>

                                                            <div class="input-group">

                                                                <span class="input-group-addon"><input type="radio" name="email-default" checked></span> 

                                                                <input type="email" data-placeholder="" placeholder="" class="form-control">

                                                            </div>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>Email laboral</label>

                                                            <div class="input-group">

                                                                <span class="input-group-addon"><input type="radio" name="email-default" checked></span> 

                                                                <input type="email" data-placeholder="" placeholder="" class="form-control">

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div> 

                                            </div>   

                                            <div class="ibox collapsed">

                                                <div class="ibox-heading">

                                                    <h4>Teléfonos</h4>

                                                    <div class="ibox-tools">

                                                        <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>

                                                    </div>

                                                </div>

                                                <div class="ibox-content">

                                                    <div class="row">

                                                        <div class="form-group">

                                                            <label>Teléfono móvil</label>

                                                            <div class="input-group">

                                                                <span class="input-group-addon"><input type="radio" name="tel-default" checked></span> 

                                                                <input type="number" data-placeholder="" placeholder="" class="form-control">

                                                            </div>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>Teléfono personal</label>

                                                            <div class="input-group">

                                                                <span class="input-group-addon"><input type="radio" name="tel-default"></span> 

                                                                <input type="number" data-placeholder="" placeholder="" class="form-control">

                                                            </div>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>Teléfono laboral</label>

                                                            <div class="input-group">

                                                                <span class="input-group-addon"><input type="radio" name="tel-default"></span> 

                                                                <input type="number" data-placeholder="" placeholder="" class="form-control">

                                                            </div>

                                                        </div>

                                                        <div class="form-group form-group-sm">

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

                                                            Domicilio laboral

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
                                                            <select name='country' id="country_id" data-target="first" data-placeholder="" placeholder="" class="country" >
                                                                    <option value="default">Seleccione un Pais</option>
                                                                    <ul>
                                                                    @foreach($countries as $country)
                                                                    <option value="{{$country->id}}">
                                                                    "{{$country->name}}"</option>
                                                                    @endforeach 
                                                                    </ul>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Provincia</label>
                                                            <select name='province' id="province_id" data-placeholder="" placeholder="" class="province">
                                                            </select>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label>Ciudad</label>
                                                            <input type="number" id="city_id" value="" name="city_id" data-placeholder="" placeholder=""/>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Localidad</label>
                                                         <input type="number" id="locality_id" value="" name="locality_id" data-placeholder="" placeholder=""/>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Barrio</label>
                                                             <input type="number" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>

                                                    </div>

                                                    <div class="hr-line-dashed"></div>

                                                    <div class="row">

                                                        <h5>

                                                            Domicilio de personal

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
                                                        <select name="country_p" id="country_p" data-target="second"  data-placeholder="" placeholder="" class="country">
                                                            <ul>
                                                              @foreach($countries as $country)
                                                               <option value="{{$country->id}}">
                                                               "{{$country->name}}"</option>
                                                              @endforeach 
                                                            </ul>
                                                        </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Provincia</label>
                                                        <select name="province_p" id="province_p" data-placeholder="" placeholder="" class="province">
                                                        </select>
                                                        </div>

                                                          <div class="form-group">
                                                            <label>Ciudad</label>
                                                            <input type="number" id="city_id" value="" name="city_id" data-placeholder="" placeholder=""/>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Localidad</label>
                                                         <input type="number" id="locality_id" value="" name="locality_id" data-placeholder="" placeholder=""/>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Barrio</label>
                                                             <input type="number" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>

                                                    </div>

                                                    <div class="hr-line-dashed"></div>

                                                    <div class="row">

                                                        <h5>

                                                            Domicilio de entrega

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
                                                            <select name="country_e" id="country_e" data-placeholder="" placeholder="" class="country">
                                                              <ul>
                                                              @foreach($countries as $country)
                                                              <option value="{{$country->id}}">
                                                              "{{$country->name}}"</option>
                                                              @endforeach 
                                                              </ul>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Provincia</label>
                                                      <select name="province_e" id="province_e" data-placeholder="" placeholder="" class="province">
                                                      </select>
                                                        </div>

                                                          <div class="form-group">
                                                            <label>Ciudad</label>
                                                            <input type="number" id="city_id" value="" name="city_id" data-placeholder="" placeholder=""/>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Localidad</label>
                                                         <input type="number" id="locality_id" value="" name="locality_id" data-placeholder="" placeholder=""/>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Barrio</label>
                                                             <input type="number" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>  

                                            <div class="ibox collapsed">

                                                <div class="ibox-heading">

                                                    <h4>Canales digitales</h4>

                                                    <div class="ibox-tools">

                                                        <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>

                                                    </div>

                                                </div>

                                                <div class="ibox-content">

                                                    <div class="row">

                                                        <div class="form-group">

                                                            <label>Sitio web</label>

                                                            <input type="url" id="" value="" name="" data-placeholder="" placeholder=""/>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>Facebook</label>

                                                            <input type="text" id="" value="" name="" data-placeholder="" placeholder=""/>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>Twitter</label>

                                                            <input type="text" id="" value="" name="" data-placeholder="" placeholder=""/>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>LinkedIn</label>

                                                            <input type="text" id="" value="" name="" data-placeholder="" placeholder=""/>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>Instagram</label>

                                                            <input type="text" id="" value="" name="" data-placeholder="" placeholder=""/>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>Pinterest</label>

                                                            <input type="text" id="" value="" name="" data-placeholder="" placeholder=""/>

                                                        </div>

                                                        <div class="form-group">

                                                            <label>Youtube</label>

                                                            <input type="text" id="" value="" name="" data-placeholder="" placeholder=""/>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>   

                                            <div class="ibox collapsed">

                                                <div class="ibox-heading">

                                                    <h4>Preferencias de contacto</h4>

                                                    <div class="ibox-tools">

                                                        <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>

                                                    </div>

                                                </div>

                                                <div class="ibox-content">

                                                    <div class="row">

                                                        <form id="form" action="#" class="wizard-big">

                                                            <div class="bootstrap-duallistbox-container row moveonselect"> 

                                                                <div class="box1 col-md-6"></div> 

                                                                <div class="box2 col-md-6"></div>

                                                                <select id="contact_preference_id" name="contact_preference_id" class="form-control dual select" style="">
                                                                   <ul>
                                                             @foreach($contactpreferences as $contactpreference)
                                                             <option value="{{$contactpreference->code}}">"{{$contactpreference->name}}"</option>
                                                             @endforeach
                                                             </ul>
                                                                </select>

                                                            </div>

                                                        </form>  

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div> 

                                    <div id="tab-4" class="tab-pane">

                                        <div class="panel-body">

                                            <div class="side-2-box-md">

                                                <div class="ibox collapsed">

                                                    <div class="ibox-heading">

                                                        <h4>Accesos</h4>

                                                        <div class="ibox-tools">

                                                            <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>

                                                        </div>

                                                    </div>

                                                    <div class="ibox-content">

                                                        <div class="row">

                                                            <div class="form-group">

                                                                <label>Tipo de usuario</label>

                                                                <select data-placeholder="" placeholder="" class="form-control">

                                                                    <option value="">Cuenta</option>

                                                                </select>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div> 

                                                <div class="ibox collapsed">

                                                    <div class="ibox-heading">

                                                        <h4>Notificaciones</h4>

                                                        <div class="ibox-tools">

                                                            <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>

                                                        </div>

                                                    </div>

                                                    <div class="ibox-content">

                                                        <div class="row">

                                                            <table class="table table-striped table-bordered table-hover dataTable" role="grid">

                                                                <tbody>

                                                                    <tr role="row">

                                                                        <td style="vertical-align:middle;"><h6>Campañas</h6></td>

                                                                        <td class="text-center" style="width:10%;"><input type="checkbox" checked=""></td>

                                                                    </tr>

                                                                    <tr role="row">

                                                                        <td style="vertical-align:middle;"><h6>Oportunidades</h6></td>

                                                                        <td class="text-center" style="width:10%;"><input type="checkbox"></td>

                                                                    </tr>

                                                                    <tr role="row">

                                                                        <td style="vertical-align:middle;"><h6>Campañas</h6></td>

                                                                        <td class="text-center" style="width:10%;"><input type="checkbox" checked=""></td>

                                                                    </tr>

                                                                </tbody>

                                                            </table>

                                                        </div>

                                                    </div>

                                                </div> 

                                            </div>

                                            <div class="side-2-box-md">

                                                <div class="ibox collapsed">

                                                    <div class="ibox-heading">

                                                        <h4>Historial de actividades</h4>

                                                        <div class="ibox-tools">

                                                            <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>

                                                        </div>

                                                    </div>

                                                    <div class="ibox-content">

                                                        <div class="row">

                                                            <div class="table-responsive">

                                                                <table class="table table-striped table-bordered table-hover dataTables">

                                                                    <thead>

                                                                        <tr>

                                                                            <th>Módulo</th>

                                                                            <th>Nombre</th>

                                                                            <th>Vista</th>

                                                                            <th>Edición</th>

                                                                            <th>Admin</th>

                                                                        </tr>

                                                                    </thead>

                                                                    <tbody>

                                                                        <tr>

                                                                            <td>Campaña</td>

                                                                            <td><a href="">Nombre</a></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                        </tr>

                                                                        <tr>

                                                                            <td>Redes sociales</td>

                                                                            <td><a href="">Nombre</a></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                        </tr>

                                                                        <tr>

                                                                            <td>Email marketing</td>

                                                                            <td><a href="">Nombre</a></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                        </tr>

                                                                        <tr>

                                                                            <td>Oportunidad</td>

                                                                            <td><a href="">Nombre</a></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                        </tr>

                                                                        <tr>

                                                                            <td>Campaña</td>

                                                                            <td><a href="">Nombre</a></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                        </tr>

                                                                        <tr>

                                                                            <td>Campaña</td>

                                                                            <td><a href="">Nombre</a></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                        </tr>

                                                                        <tr>

                                                                            <td>Campaña</td>

                                                                            <td><a href="">Nombre</a></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                        </tr>

                                                                        <tr>

                                                                            <td>Campaña</td>

                                                                            <td><a href="">Nombre</a></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

                                                                            <td><input type="radio" name="permiso-campanas" value=""></td>

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

@section('inline-scripts')
    <script>
        $(document).ready(function(){
            $('#send-form').click(function () {
                $('#main-form').submit();
            })
        });
    </script>
@endsection
