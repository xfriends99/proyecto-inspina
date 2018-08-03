<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Inspina</title>
        

        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('font-awesome/css/fontawesome-all.min.css')}}" rel="stylesheet">
        
        <link href="{{asset('css/plugins/footable/footable.core.css')}}" rel="stylesheet">

        <link href="{{asset('css/plugins/slick/slick.css')}}" rel="stylesheet">
        <link href="{{asset('css/plugins/slick/slick-theme.css')}}" rel="stylesheet">
        <link href="{{asset('css/plugins/dropzone/basic.css')}}" rel="stylesheet">
        <link href="{{asset('css/plugins/dropzone/dropzone.css')}}" rel="stylesheet">
        <link href="{{asset('css/plugins/jasny/jasny-bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/plugins/codemirror/codemirror.css')}}" rel="stylesheet">
        <link href="{{asset('css/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet">
        <link href="{{asset('css/plugins/switchery/switchery.css')}}" rel="stylesheet">
        <link href="{{asset('css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/plugins/chosen/bootstrap-chosen.css')}}" rel="stylesheet">
        <link href="{{asset('css/plugins/dualListbox/bootstrap-duallistbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>

    <body class="body-small pace-done mini-navbar">
        <div id="wrapper">
            @include('partial.nav-side')
            <div id="page-wrapper">
                <div class="row">
                    @include('partial.nav-top')
                </div>
                @include('shared.alerts')
                @yield('content')
            </div>
            @include('partial.footer')
        </div>

        <!-- OPORTUNIDADES VISTA PREVIA -->
        <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- OPORTUNIDADES VISTA PREVIA -->

        <!-- SCRIPTS BÁSICOS -->
        <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
        <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
        <!-- SCRIPTS BÁSICOS -->

        <!-- Custom and plugin javascript -->
        <script src="{{asset('js/inspinia.js')}}"></script>
        <script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>
        
        <!-- FOO TABLES -->
        <script src="{{asset('js/plugins/footable/footable.all.min.js')}}"></script>

        <!-- DATA TABLES -->
        <script src="{{asset('js/plugins/dataTables/datatables.min.js')}}"></script>
        <script src="{{asset('js/users/create.js')}}"></script>
        <script>
            $(document).ready(function(){
                $('.dataTables').DataTable({
                    pageLength: 5,
                    responsive: true,
                    bPaginate: false,
                    dom: '<"html5buttons"B>lTfgitp',
                    buttons: [
                        { extend: 'copy'},
                        {extend: 'csv'},
                        {extend: 'excel', title: 'ExampleFile'},
                        {extend: 'pdf', title: 'ExampleFile'},

                        {extend: 'print',
                         customize: function (win){
                                $(win.document.body).addClass('white-bg');
                                $(win.document.body).css('font-size', '10px');

                                $(win.document.body).find('table')
                                        .addClass('compact')
                                        .css('font-size', 'inherit');
                        }
                        }
                    ]
                });
            });
        </script>
        <!-- DATA TABLES -->

        <!-- Page-Level Scripts -->
        <script>
            $(document).ready(function() {
                $('.footable').footable();
            });

        </script>
        <!-- FOO TABLES -->

        <!-- MODAL -->
      
        <!-- MODAL -->

        <!-- CHOSEN SELECT -->
        <script src="{{asset('js/plugins/chosen/chosen.jquery.js')}}"></script>
        <script>$('.chosen-select').chosen({width: "100%"});</script>
        <!-- CHOSEN SELECT -->
        @yield('inline-scripts')

        <!-- DROPZONE -->
    </body>
</html>
