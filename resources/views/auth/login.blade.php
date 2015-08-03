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

    <link rel="stylesheet" href= "{{asset('css/animate.css')}}">
    {{--<link href="css/animate.css" rel="stylesheet">--}}
    <link rel="stylesheet" href= "{{asset('css/style.css')}}">
    {{--<link href="css/style.css" rel="stylesheet">--}}


</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">SP+</h1>

        </div>
        <h3>Bienvenido al Sistemas Policial +</h3>
        <p>Diseñado para la administración operativa de la Seguridad Pública.
            <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
        </p>
        <p>Proporciona tu datos</p>
        <form class="m-t" role="form" action="index.html">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Usuario" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Contraseña" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Entrar al sistema</button>

            <a href="#"><small>Olvidaste tu contraseña?</small></a>
            <p class="text-muted text-center"><small>No tienes una cuenta?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="auth/register.blade.php">Crea una cuenta</a>
        </form>
        <p class="m-t"> <small>Derechos reservados elijav &copy; 2015</small> </p>
    </div>
</div>

<!-- Mainly scripts -->
<script src="{{asset('js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>

</html>