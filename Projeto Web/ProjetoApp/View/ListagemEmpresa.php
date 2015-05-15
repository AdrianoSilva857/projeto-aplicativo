<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Empresa</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>



</head>

<body>

<html>
<body>

<div class="row">
    <?php include 'menu_base.html'; ?>
</div>

<div class="corpo">

    <div class="container-fluid">
        <div class="container-fluid col-md-9">
            <h2>Lista de Empresas</h2>
            <hr />
        </div>
    </div>

    <div class="container-fluid">
        <form action="../Control/controleListaEmpresa.php" method="GET">

          <?php
              include '..\Model\Empresa\repositoryEmpresa.php';
              include '..\Model\Empresa\empresa.php';

            $db = new PDO('sqlite:..\BD\ProjetoApp.db');

            $connect = new ConnectEmpresaDataBase($db);
            $empresas = $connect->loadEmpresaDataBase();

            echo '
            <table class="table">
                <thead>
                    <tr>
                        <th><b>#</b></th>
                        <th><b>Nome</b></td>
                        <th><b>Endereço</b></td>
                        <th><b>Telefone</b></td>
                        <th><b>Email</b></td>
                    </tr>
                </thead>
                <tbody>';

                foreach($empresas as $result){
                    echo '<tr>';
                    echo '<th scope="row">'.$result['id'].'</th>';
                    echo '<td>'.$result['nome'].'</td>';
                    echo '<td>'.$result['logradouro'].'</td>';
                    echo '<td>'.$result['telefone'].'</td>';
                    echo '<td>'.$result['email'].'</td>';
                    echo '</tr>';
                }

                echo '

                </tbody>

            </table>
          ';
         ?>

        </form>
    </div>

</div>

</body>
</html>


<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>



</div>
</div>

</body>
</html>

	
    
