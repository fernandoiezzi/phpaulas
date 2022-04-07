<?php
session_start();

if(isset($_SESSION['icone_dados']))
{
    $registro = $_SESSION['icone_dados'];
} else{
    header ('location: icones.list.page.php');
    exit;
}
?>



<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Heroic Features - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="icones.form.php">Registrar</a></li>
                        <li class="nav-item"><a class="nav-link" href="icones.list.page.php">Lista</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
   
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
        
        <fieldset>
        <div class="row align-items-center mb-5 offset-4">
        <div class="col-md-6">
        
        <legend class="text-center"><strong>Atualizando os Itens</strong></legend>
        </div>
        </div>
        <form id="iconeform" method="POST" action="php/icone.editar.php">
        <div class="row align-items-center mb-5 offset-4">
        <div class="col-md-6">
            <div class="text-center">
                <input type="text" value="<?= $registro->icone ?>" name="inputIcone" id="icone" placeholder="Informe o ícone" required>
            </div>
            <div class="text-center">
                <input type="text" value="<?= $registro->titulo ?>" name="inputTitulo" id="titulo" placeholder="Informe o título" required>
            </div>
            <div class="text-center">
                <input type="text" value="<?= $registro->descricao ?>" name="inputDescricao" id="descricao" placeholder="Informe a descrição" required>
            </div>
            <br>
            <div class="text-center"><button name="inputId" id="id" value="<?= $registro->id ?>" type="submit">ATUALIZAR</button></div>
        </form>
    </fieldset>
</div>
</div>
    <br> 
        <!-- Footer-->
        <footer class="py-8 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>