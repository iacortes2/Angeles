<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Angeles Shoes-Ivonne Cortes
    </title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Bienvenido</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#inicio">Ingresa</a>
                    </li>
                    <li>
                        <a href="#myModal" class="page-scroll" data-toggle="modal">Registro</a>
                    </li>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner  col-xs-12 col-sm-6 col-md-8 col-lg-8 ">
                <h1 id="homeHeading">Angeles Shoes</h1>
                <hr>
                <p>Somos una empresa de familiar que piensa en la comodidad y la moda femenina a sus pies!</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
                
            </div>
            <div class = "inicio col-xs-12 col-sm-6 col-md-4 col-lg-4 panel-primary">
                     <h4 class="title">Login </h4> 
                    <div class="clearfix"></div>
                    <form name="loginform" id="loginform"  onsubmit="inicio.registro(event)" >
                        <div class="form-group">
                        <label for="usuacorr" class=" control-label">Correo</label>
                         <input type="text" placeholder="correo electronico" id="usuacorr" name="usuacorr" class="form-control" onfocus="checkNullProf();">
                        </div>
                        <div class="form-group">
                        <label for="usuacont" class="col-lg-6 control-label">Contraseña </label>
                        <input type="password" placeholder="Contraseña" id="usuacont" name="usuacont" class="form-control" onfocus="checkNullProf();"> 
                        </div>                                              
                        <div class=" center-aling">
                            <button type="submit" class="WARNING btn center-align">Ingresar</button>
                        </div>
                        
                    </form>                      
                            
                </div>
        </div>
    </header>
 
            </div>
            </div>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                </div>
            </div>
        </div>
    </section>
        <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"> Register</h4>
                </div>               
                
                <div class="modal-body">                                       
                    <div class="col-md-12 col-sm-12 no-padng">
                        <div class="model-r">
                        <div class="o-r">
                        </div>
                        <form  id="forminicio" class="log-frm" name="forminicio" onsubmit="inicio.registro(this)">  
                             <div class="form-group">
                                <label for="usuadocu" class=" control-label">Documento</label>
                                <input type="text" placeholder="Número de documento" id="usuadocu" name="usuadocu" class="form-control" onfocus="checkNullProf();">
                             </div>
                             <div class="form-group">
                                <label for="usuanomb" class=" control-label">Nombre</label>
                                <input type="text" placeholder="Número de documento" id="usuanomb" name="usuanomb" class="form-control" onfocus="checkNullProf();">
                             </div>
                             <div class="form-group">
                                <label for="usuacorr" class=" control-label">Correo electronico</label>
                                <input type="text" placeholder="Correo" id="usuacorr1" name="usuacorr" class="form-control" onfocus="checkNullProf();">
                             </div>
                             <div class="form-group">
                                <label for="usuacont" class=" control-label">Contraseña</label>
                                <input type="password" placeholder="Contraseña" id="usuacont1" name="usuacont" class="form-control" onfocus="checkNullProf();">
                             </div>
                         </form>
                        </div>
                        </div>
                        
                        <div class="clearfix"></div>
                    </div>
                <div class="modal-footer">
                      <button type="submit" name="userRegBtn" class="btn btn-default">Registrarse</button></li>
                </div>
            </div>          
        </div>
    </div>   
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
    <script src="gulpfile.js"></script>
    <script src="pagina.js"></script>


</body>

</html>
