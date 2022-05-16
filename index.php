<?php
    if(isset($_POST['submit'])){
        print_r($_POST['txtDisciplina']);
        print_r($_POST['numNota1']);
        print_r($_POST['numNota2']);
        print_r($_POST['numNota3']);

        include_once('config.php');

        $disciplina = $_POST['txtDisciplina'];
        $nota1 = $_POST['numNota1'];
        $nota2 = $_POST['numNota2'];
        $nota3 = $_POST['numNota3'];

        $result = mysqli_query($conexao, "INSERT INTO consulta(disciplina, nota1, nota2, nota3) 
        VALUES('$disciplina', '$nota1', '$nota2', '$nota3')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>Prova LTP</title>

</head>
<body>
    <div id="notas">
        <form id="form" action="index.php" method="POST">
            <h1>Consulta de Notas</h1>
            <label for="txtDisciplina"> <p>Disciplina:</p> </label>
            <input type="text" name="txtDisciplina" placeholder="Informe a Disciplina">
            <br> <br>
            <label for="numNota1"> <p>Nota 1:</p> </label>
            <input type="number" name="numNota1" id="nota1" required placeholder="Informe a nota número 1">
            <br> <br>
            <label for="numNota2"><p>Nota 2:</p> </label>
            <input type="number" name="numNota2" id="nota1" required placeholder="Informe a nota número 2">
            <br> <br>
            <label for="numNota3"><p>Nota 3:</p> </label>
            <input type="number" name="numNota3" id="nota1" required placeholder="Informe a nota número 3">
            <br> <br>
            <input type="submit" value="Enviar" id="button" name="submit">
            <input type="reset" value="Apagar" id="button" name="reset">
        </form>
    </div>

</body>
</html>