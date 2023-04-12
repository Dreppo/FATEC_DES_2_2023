<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    {
        header("location:login_information.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Livros</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <style type="text/css">
            .wrapper{ width: 350px; padding: 20px; }
        </style>
    </head>
    <body>
        <h2> Todos os livros </h2>
            <?php
                if(file_exists("registrolivros.txt"))
                {
                    $registrolivros = fopen("registrolivros.txt", "r");
                    while(!feof($registrolivros))
                    {
                        echo fgets($registrolivros) . "<br>";
                    }
                    fclose($registrolivros);
                }
            ?>
        <br><br>
        <form>
            <div>
                <a href="registro.php" class="btn btn-danger">Novo livro</a>
            </div>
        </form>

    </body>
</html>