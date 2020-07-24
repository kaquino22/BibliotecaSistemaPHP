<?php

    include '../connecting.php'

?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

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

        <div class="content table-dark mt-3">
     
            <div class="table-dark col-sm-12">
                <div class="table-dark card">
                            <div style="text-align: center;background-color: #212529;" class="card-header">
                                <strong class="table-dark card-title">Empréstimos</strong>
                            </div>
                            <div style="text-align: center;" class="table-responsive table-dark card-body">
                                <table  class="table1 table table-striped table-dark">
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="bg-dark " style="color:white">Código Empréstimo</th>
                                            <th class="bg-dark " style="color:white">Data de Empréstimo</th>
                                            <th class="bg-dark" style="color:white">Data de Devolução</th>
                                            <th class="bg-dark" style="color:white">Aluno</th>
                                            <th class="bg-dark" style="color:white">Funcionário</th>
                                            <th class="bg-dark" style="color:white">Livro</th>
                                            <th class="bg-dark" style="color:white">Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-dark">
                                    <?php
                                        $query = "SELECT 
                                        em.codEmprestimo,
                                        em.data_emprestimo as dataEmprestimo,
                                        em.data_devolucao as dataDevolucao,
                                        a.nome as nomeAluno,
                                        b.nome as nomeBibliotecario,
                                        l.titulo as nomeLivro
                                        FROM emprestimo_devolucao as em 
                                          INNER JOIN aluno AS a on (em.ra = a.ra)
                                          INNER JOIN bibliotecario AS b on (em.codfuncionario = b.codfuncionario)
                                          INNER JOIN livros AS l on (em.codlivro = l.codlivro)";

                                        foreach($connect -> query($query) as $linha){
                                            echo "<tr>";
                                                echo"<td>".$linha['codEmprestimo']."</td>";
                                                echo"<td>".$linha['dataEmprestimo']."</td>";
                                                echo"<td>".$linha['dataDevolucao']."</td>";
                                                echo"<td>".$linha['nomeAluno']."</td>";
                                                echo"<td>".$linha['nomeBibliotecario']."</td>";
                                                echo"<td>".$linha['nomeLivro']."</td>";
                                        ?>
                                                    <td style="text-align:center;">
                                                    <a href="form_upd_aluno.php?ra=<?php echo $linha['codEmprestimo'];?>" ><i class="fa fa-pencil" aria-hidden="true"></i></a> |
                                                    
                                                    <a href="deleteAluno.php?ra=<?php echo $linha['codEmprestimo'];?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                    </td>      
                                                    <?php
                                                    echo"</tr>";
                                        }
                                                    ?>       
                                    </tbody>
                                </table>
                            </div>
                        </div>
            </div>

       
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        $(document).ready(function() {
           
            $('.table1').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"

            }
        });

        $('.table2').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"

            }
        });
} );
    </script>

</body>

</html>
