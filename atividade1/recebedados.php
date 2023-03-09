<html>

<head>
    <title>Resgate de Conteúdo</title>
</head>

<body>
    <h1>Recebendo os Dados</h1>
    <?php
    if (isset($_POST['fname'])) {
        echo $_POST['fname'] . "</br>";
    }
    if (isset($_POST['lname'])) {
        echo $_POST['lname'] . "</br>";
    }
    if (isset($_POST['facao'])) {
        echo $_POST['facao'] . "</br>";
    }
    ?>
</body>

</html>