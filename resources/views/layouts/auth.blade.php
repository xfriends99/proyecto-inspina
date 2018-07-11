<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

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
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/dev.auth.css')}}" rel="stylesheet">
</head>

<body class="login">
<div id="wrapper">
    @yield('content')
    @include('partial.footer')
</div>

<!-- Mainly scripts -->
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>
</html>
