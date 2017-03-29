<?php require_once 'php/ler_json.php';?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <div id="lista">
                    <div id="pesquisa" class="col-lg-12 text-right">
                        Pesquisa : <input class="search" />
                    </div>

                    <div id="head_lista" class="col-lg-12 text-center">
                        <span>Colocação</span><span>Nome</span><span>Pais</span><span>População</span>
                    </div>
                <ul  class="list">
                    <?php
                        $lista = lerJson();
                        foreach ($lista as $l) { ?>
                          <li class="list-item">
                            <p class="colocacao"><?php echo $l['colocacao'];?></p>
                            <p class="nome"><?php echo $l['nome'];?></p>
                            <p class="pais"><?php echo $l['pais'];?></p>
                            <p class="populacao"><?php echo $l['populacao'];?></p>
                          </li>  
                        <?}
                    ?>
                </ul>
                <ul class="pagination"></ul>
            </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>  

    <!-- List Core JavaScript -->
    <script src="js/list.min.js"></script>    
    <!-- Custom script -->
    <script src="js/util.js"></script>

</body>

</html>
