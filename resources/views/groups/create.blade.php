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
                    <h1>Nombre Grupo</h1>
                </section>
                <section>
                    <button type="button" id="send-form" class="btn btn-blue btn-sm" ><i class="fa fa-save"></i> Guardar</button>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="tabs-container">
                <div class="side-1">
                    <form action="{{route('api.file.submit')}}" method="POST" enctype="multipart/form-data" class="dropzone" id="dropzoneForm">
                        <div class="fallback">
                            <input name="file" type="file" multiple id="input-file"/>
                        </div>
                        {{csrf_field()}}
                    </form>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">Información</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">Miembros</a></li>
                    </ul>
                </div>
                <div class="side-2">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="ibox-heading">
                                        <h4>Información del grupo</h4>
                                        <div class="ibox-tools">
                                            <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <div class="row">
                                            
                                            <form id="main-form" action="{{route('group.store')}}" method="POST" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Nombre del grupo</label>
                                                    <input type="text" id="name" value="{{old('name')}}" name="name" data-placeholder="" placeholder=""/>
                                                </div>
                                                <div class="form-group">
                                                    <label>Visibilidad</label>
                                                    <select name='privacy_id' data-placeholder="Visibilidad" class="form-control">
                                                        <option value="" selected>Seleccione</option>
                                                        @foreach($privacies as $privacy)
                                                            <option value="{{$privacy->id}}">{{$privacy->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group form-group-lg">
                                                    <label>Descripción</label>
                                                    <textarea type="text" id="description" value="{{old('description')}}" name="description" data-placeholder="Descripción" placeholder="Descripción" ></textarea>
                                                </div>
                                                <input type="hidden" id="files-submit" name="files">
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
                                        <h4>Miembros</h4>
                                        <div class="ibox-tools">
                                            <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <div class="row">
                                            <div class="form-group">
                                                <a href="#" class="btn-plus" data-toggle="modal" data-target="#members-modal" id="addMembers">
                                                    +
                                                    <span>Agregar miembros</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="row">

                                            <!-- CONTACTO -->
                                            <!--<div class="record">
                                                <div class="record-main">
                                                    <div class="record-pic">
                                                        <a><img src="{{asset('img/a1.jpg')}}"/></a>
                                                    </div>
                                                    <div class="record-desc">
                                                        <h2>Tipo de contacto</h2>
                                                        <h1><a href="">Nombre Apellido</a></h1>
                                                        <h3>Gerente general en <a href="#">Cuenta</a></h3>
                                                    </div>
                                                </div>
                                            </div>-->
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
@include('groups.partials.members')
@endsection
@section('inline-scripts')
    <!-- DUAL LIST BOX -->
    <script src="{{asset('js/plugins/dualListbox/jquery.bootstrap-duallistbox.js')}}"></script>

    <script>
        $(document).ready(function(){
            $('.dual_select').bootstrapDualListbox({
                selectorMinimalHeight: 160
            });
        });
    </script>
    <!-- DUAL LIST BOX -->

    <!-- DROPZONE -->
    <script src="{{asset('js/plugins/dropzone/dropzone.js')}}"></script>
    <script>
        Dropzone.options.dropzoneForm = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            dictDefaultMessage: "<strong>Arrastre y suelte la imágen</strong></br><small>Máximo 2MB de tamaño</small>",
            success: function(file, response){
                if(response.data){
                    val = [];
                    if($('#files-submit').val()!=''){
                        val = $('#files-submit').val().split(',');
                    }
                    val.push(response.data);
                    console.log(val.toString());
                    $('#files-submit').val(val.toString());
                }
            }
            /*init: function() {
                this.on("addedfile", function(file) {
                    console.log(file);
                });
            }*/
        };

/*        Dropzone.options.myAwesomeDropzone = {
            init: function() {
                this.on("addedfile", function(file) {
                    console.log(file);
                });
            }
        };
*/
        $(document).ready(function(){
            var editor_one = CodeMirror.fromTextArea(document.getElementById("code1"), {
                lineNumbers: true,
                matchBrackets: true
            });
            var editor_two = CodeMirror.fromTextArea(document.getElementById("code2"), {
                lineNumbers: true,
                matchBrackets: true
            });
            var editor_two = CodeMirror.fromTextArea(document.getElementById("code3"), {
                lineNumbers: true,
                matchBrackets: true
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $('#send-form').click(function () {
                $('#main-form').submit();
            });

            $('#addMembers').click(function(){
                $.ajax({
                    url: "{{route('api.members.search')}}",
                    method: "GET",
                    success: function(response){
                        if(response.data){
                            var html = '';
                            for(var i=0; i<response.data.length; i++){
                                html = '<tr><td></td><td>'+response.data[i].name+'</td><td></td></tr>'
                            }
                        }
                    }
                })
            });
        });
    </script>
@endsection