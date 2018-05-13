
<!DOCTYPE html>
<!--[if IE 8]> <html lang="es" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title>Area Administrativa - H y D Limitada</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="{{ asset('backend/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('backend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('backend/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('backend/css/animate.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('backend/css/style.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('backend/css/style-responsive.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('backend/css/theme/red.css')}}" rel="stylesheet" id="theme" />
        <link href="{{ asset('backend/plugins/select2/dist/css/select2.min.css')}}" rel="stylesheet" id="theme" />
        <link href="{{ asset('backend/plugins/comentario/editor.css')}}" rel="stylesheet" id="theme" />
        
       
        
        <!-- ================== END BASE CSS STYLE ================== -->
        
   

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="{{ asset('backend/plugins/pace/pace.min.js')}}"></script>
        <!-- ================== END BASE JS ================== -->
    </head>
    <body>
        <!-- begin #page-loader -->
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <!-- end #page-loader -->

        <!-- begin #page-container -->
        
         
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
            <!-- begin #header -->
          

            <!-- end #header -->
            @include('Administracion.backend.includes.navba')
            <!-- begin #sidebar -->
      
             @include('Administracion.backend.includes.sideba')
            <!-- end #sidebar -->

            <!-- begin #content -->
            
           
            <div id="content" class="content">
                 @yield('contentAdm')
            </div>
            <!-- end #content -->


            <!-- end theme-panel -->

            <!-- begin scroll to top btn -->
            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
            <!-- end scroll to top btn -->
        </div>
        <!-- end page container -->

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="{{ asset('backend/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
        <script src="{{ asset('backend/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
        <script src="{{ asset('backend/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
        <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <!--[if lt IE 9]>
                <script src="{{ asset('backend/crossbrowserjs/html5shiv.js')}}"></script>
                <script src="{{ asset('backend/crossbrowserjs/respond.min.js')}}"></script>
                <script src="{{ asset('backend/crossbrowserjs/excanvas.min.js')}}"></script>
        <![endif]-->
        <script src="{{ asset('backend/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{ asset('backend/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
        <!-- ================== END BASE JS ================== -->

        <!-- ================== BEGIN PAGE LEVEL JS ================== -->
         
        <script src="{{ asset('backend/js/apps.js')}}"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->
        
 

            <script>
                $(document).ready(function () {
                    App.init();
                });
            </script>
    
    </body>
</html>
