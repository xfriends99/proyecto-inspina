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
                                    <a data-toggle="dropdown" class="btn btn-white btn-sm dropdown-toggle"><i class="fa fa-edit"></i> Acciones <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href=""><i class="fa fa-link"></i> Unificar con otro contacto</a></li>
                                        <li><a href=""><i class="fa fa-trash"></i> Eliminar contacto</a></li>
                                    </ul> 
                                </div>
                                <a class="btn btn-blue btn-sm" href="#"><i class="fa fa-save"></i> Guardar</a>
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
                                                        <div class="form-group">
                                                            <label>Primer nombre</label>
                                                            <input type="text" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Segundo nombre</label>
                                                            <input type="text" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Apellido</label>
                                                            <input type="text" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Género</label>
                                                            <select data-placeholder="" placeholder="" class="form-control">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Fecha de nacimiento</label>
                                                            <input type="date" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>DNI</label>
                                                            <input type="number" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>CUIT</label>
                                                            <input type="number" id="" value="" name="" data-placeholder="" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Idioma</label>
                                                            <select data-placeholder="" placeholder="" class="form-control">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
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
                                                            <select data-placeholder="" placeholder="" class="form-control">
                                                                <option value="">Cuenta</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Estado</label>
                                                            <select data-placeholder="" placeholder="" class="form-control">
                                                                <option value="">Cuenta</option>
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
                                                                <select class="form-control dual_select" multiple="" style="display:none;">
                                                                    <option value="A">A</option>
                                                                    <option value="B">B</option>
                                                                    <option value="C">C</option>
                                                                    <option selected="" value="D">D</option>
                                                                    <option selected="" value="F">F</option>
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
                                                                <select class="form-control dual_select" multiple="" style="display:none;">
                                                                    <option value="A">A</option>
                                                                    <option value="B">B</option>
                                                                    <option value="C">C</option>
                                                                    <option selected="" value="D">D</option>
                                                                    <option selected="" value="F">F</option>
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
            </div>
       
        </div>
     





@endsection