<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SisPol | Login</title>

    <link rel="stylesheet" href= "{{asset('css/bootstrap.min.css')}}">
    {{--<link href="css/bootstrap.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" href= "{{asset('font-awesome/css/font-awesome.css')}}">
    {{--<link href="font-awesome/css/font-awesome.css" rel="stylesheet">--}}

    <link rel="stylesheet" href= "{{asset('css/plugins/iCheck/custom.css')}}">
    {{--<link href="css/plugins/iCheck/custom.css" rel="stylesheet">--}}

    <link rel="stylesheet" href= "{{asset('css/animate.css')}}">
    {{--<link href="css/animate.css" rel="stylesheet">--}}
    <link rel="stylesheet" href= "{{asset('css/style.css')}}">
    {{--<link href="css/style.css" rel="stylesheet">--}}


</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">SP+</h1>

            </div>
            <h3>Registro al Sistemas Policial +</h3>
            <p>Crea una cuenta para acceder</p>

            <form class="m-t" role="form" method="POST" action="{{ url('/auth/register') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="form-group">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Usuario" required="">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Contraseña" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Repite la contraseña" required="">
                </div>
                <div class="form-group">
                    <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Estoy de acuerdo con los terminos y condiciones </label></div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Registrar</button>

                <p class="text-muted text-center"><small>Ya tengo una cuenta</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ url('/auth/login') }}">Logearse</a>
            </form>
            <p class="m-t"> <small>Derechos reservados elijav &copy; 2015</small> </p>
        </div>
    </div>
</div>

<!-- Mainly scripts -->
<script src="{{asset('js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="{{asset('css/plugins/iCheck/custom.css')}}"></script>
<script>
    $(document).ready(function(){
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>

</body>

</html>
