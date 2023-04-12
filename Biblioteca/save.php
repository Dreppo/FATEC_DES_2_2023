<?php
    if(isset($_POST['livronome']) and isset($_POST['categoria']) and isset($_POST['ano']) and isset($_POST['autor']))
    {
        $dadoslivros = fopen("registrolivros.txt", "a");
        fwrite($dadoslivros, "\n" . "Nome do livro: " . $_POST['livronome']);
        fwrite($dadoslivros, "\n" . "Categoria: " .  $_POST['categoria']);
        fwrite($dadoslivros, "\n" . "Ano de postagem: " .  $_POST['ano']);
        fwrite($dadoslivros, "\n" . "Nome autor: " .  $_POST['autor']);
        fwrite($dadoslivros, "\n");
        fflush($dadoslivros);
        fclose($dadoslivros);

        header("location: registro.php");
        exit;
    }
?>
