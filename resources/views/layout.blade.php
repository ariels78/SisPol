<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema Policial +</title>

    <link rel="stylesheet" href= "{{asset('css/bootstrap.min.css')}}">
    {{--<link href="css/bootstrap.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" href= "{{asset('font-awesome/css/font-awesome.css')}}">
    {{--<link href="font-awesome/css/font-awesome.css" rel="stylesheet">--}}

    <link rel="stylesheet" href= "{{asset('css/animate.css')}}">
    {{--<link href="css/animate.css" rel="stylesheet">--}}
    <link rel="stylesheet" href= "{{asset('css/style.css')}}">
    {{--<link href="css/style.css" rel="stylesheet">--}}

</head>

<body>

<div id="wrapper">

    {{--Panel de Navegacion Principal--}}
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong>
                             </span> <span class="text-muted text-xs block">{{ Auth::user()->type }} <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="{{ url('/auth/logout') }}">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="active">
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Main view</span></a>
                </li>
                <li>
                    <a href="minor.html"><i class="fa fa-th-large"></i> <span class="nav-label">Minor view</span> </a>
                </li>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="#">
                        <div class="form-group">
                            <input type="text" placeholder="Buscar algo..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="{{ url('/auth/logout') }}">
                            <i class="fa fa-sign-out"></i> Cerrar Sesión
                        </a>
                    </li>
                </ul>

            </nav>
        </div>

        {{--Panel de contenido--}}
        <div class="wrapper wrapper-content animated fadeInRight">
            @yield('contenido')
        </div>

        {{--Footer--}}
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Javel Company &copy; 2015-2016
            </div>
        </div>

    </div>
</div>


@yield('scripts')


<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>


</body>

</html>
