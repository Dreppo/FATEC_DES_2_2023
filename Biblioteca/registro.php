<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    {
        header("location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
 <html lang="pt_BR">
 <head>
     <meta charset="UTF-8">
     <title>Registro</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
     <style type="text/css">
         body{ font: 14px sans-serif; }
         .wrapper{ width: 350px; padding: 20px; }
     </style>
    </head>
    <body>
        <h2 style= "text-align: center";> Registre seus livros AQUI!! </h2>
        <br>
        <form action="save.php" method="post" style="margin: auto; width: 220px";>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="livronome" name="livronome" placeholder="Nome do livro"><br><br>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria"><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="date" class="form-control" id="ano" name="ano" placeholder="Ano de postagem"><br><br>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="autor" name="autor" placeholder="Nome do autor"><br><br>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Registrar">
            <a href="livros.php" class="btn btn-primary">Ver os Livros</a>
            <br><br>
            <a href="logout.php" class="btn btn-danger">Logout</a>
            
        </form>
    </body>
</html>
