<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<?php

    include '../connecting.php'

?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Area Administrativa</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

<?php

    $ra = $_GET['ra'];
    $query = "SELECT * FROM aluno WHERE ra = '$ra'";

      foreach($connect -> query($query) as $dados){
?>

    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo_novo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="index.php"><img src="images/logo2.png" alt="Logo"></a>
            </div>


            
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Painel de Controle </a>
                    </li>
                    <h3 class="menu-title">Menu de Opções</h3><!-- /.menu-title -->

                    <li class="active">
                        <a href="aluno.php"> <i class="menu-icon fa fa-user-o"></i>Alunos</a>
                    </li>
                   
                    <li class="active">
                        <a href="livro.php"> <i class="menu-icon fa fa-book"></i>Livros</a>
                    </li>

                    <li class="active">
                        <a href="emprestimo.php"> <i class="menu-icon fa fa-share-square-o"></i>Empréstimos</a>
                    </li>       
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel"  class="table-dark right-panel">

        <!-- Header-->
        <header style="background-color:#272c33;" id="header" class="header">

            <div  class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="perfil.php"><i class="fa fa-user"></i> Perfil</a>

                            <a class="nav-link" href="sair.php"><i class="fa fa-power-off"></i> Sair</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        <div class="content mt-3">
            <div class="col-sm-12">
                <div class="card-body card-block">
                    <form action="updateAluno?ra=<?php echo $ra;?>"method="POST" enctype="multipart/form-data" class="form-horizontal">
                        
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Nome</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="nome" value="<?php echo $dados['nome'] ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="email-input" class=" form-control-label">Email</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="email" id="email-input" name="email" value="<?php echo $dados['email'] ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Telefone</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="telefone" value="<?php echo $dados['tel'] ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Celular</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="celular" value="<?php echo $dados['celular'] ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Data de Nascimento</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="date" id="text-input" name="nascimento" value="<?php echo $dados['dataNascimento'] ?>" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class=" form-control-label">Turma</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="select" id="select" class="form-control">
                                    <option value="1C">1C</option>
                                    <option value="2C">2C</option>
                                    <option value="3C">3C</option>
                                    <option value="1A">1A</option>
                                    <option value="2A">2A</option>
                                    <option value="3A">3A</option>
                                    <option value="1B">1B</option>
                                    <option value="2B">2B</option>
                                    <option value="3B">3B</option>
                                    <option value="1F">1F</option>
                                    <option value="2F">2F</option>
                                    <option value="3F">3F</option>
                                </select>
                            </div>
                        </div>
      <?php } ?>
                        <div style="justify-content: center;margin-top:5%;" class="row form-group">
                            <div class="col col-md-1">
                                <input type="submit" class="btn btn-primary btn-sm" value="Atualizar">
                                    
                            </div>
                            <div class="col col-md-1">
                                
                                    
                            </div>
                            <div class="col col-md-1">
                                <input type="reset" class="btn btn-danger btn-sm" value="Limpar">
                            </div>
                            
                        </div>
                    </form>
                </div>
                                            
            </div>
            

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
