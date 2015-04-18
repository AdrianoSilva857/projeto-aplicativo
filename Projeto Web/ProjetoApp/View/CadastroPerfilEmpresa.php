<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro Empresa</title>


    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">


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

    <div class="container-fluid col-md-12">
        <h2>Cadastro de Empresas</h2>
        <hr />
    </div>
    <div class="container-fluid">
        <div class="container-fluid col-md-2">
            <img src="../View/img/Perfil.jpg" class="img-responsive img-circle" alt="Foto Perfil" style="width:130px;height:130px;">
        </div>

        <div class="container-fluid col-md-10">
            <div class="row col-md-8">
                <label for="txtNome">Nome do estabelecimento</label>
                <input type="text"
                       id="txtNomeLocal"
                       name="txtNomeLocal"
                       placeholder="Ex: Academia do Chopp"
                       class="form-control" />
            </div>
            <div class="container-fluid col-md-3">
                <label for="txtFone">Fone</label>
                <input type="text"
                       id="txtFone"
                       name="txttFone"
                       placeholder="Ex: (44)3253-4499"
                       class="form-control" />
            </div>
        </div>
        <div class="container-fluid col-md-3">
            <label for="emlEmail">Email</label>
            <input type="email"
                   id="emlEmail"
                   name="emlEmail"
                   placeholder="teste@gmail.com"
                   class="form-control" />
        </div>
      </div>
      <div class="container-fluid">
        <div class="container-fluid col-md-2">
            <label for="txtCep">CEP</label>
            <input type="text"
                   id="txtCep"
                   name="txtCep"
                   placeholder="Ex: 55555-555"
                   class="form-control" />
        </div>
        <div class="container-fluid col-md-5">
            <label for="txtLog">Logradouro</label>
            <input type="text"
                   id="txtLog"
                   name="txtLog"
                   placeholder="Ex: Av. Brasil"
                   class="form-control" />
        </div>
        <div class="container-fluid col-md-3">
            <label for="txtBairro">Bairro</label>
            <input type="text"
                   id="txtBairro"
                   name="txtBairro"
                   placeholder="Ex: Centro"
                   class="form-control" />
        </div>
        <div class="container-fluid col-md-2">
            <label for="txtNumero">Nº</label>
            <input type="text"
                   id="txtNumero"
                   name="txtNumero"
                   placeholder="Ex: 222"
                   class="form-control" />
        </div>
      </div>
      <div class="container-fluid">
        <div class="container-fluid col-md-3">
            <label for="txtCidade">Cidade</label>
            <input type="text"
                   id="txtCidade"
                   name="txtCidade"
                   placeholder="Ex: Maringá"
                   class="form-control" />
        </div>
      </div>
      </div>
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

	
    
