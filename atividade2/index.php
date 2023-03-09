<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <input type="text" onclick="mudarCorInput()" placeholder="Mude a Cor" name="name" id="nomeID">
    <script>
    function mudarCorInput() {
        alert("Seu background mudou");
        document.getElementById("nomeID").style.background = '#87CEFA';
    }

    function procurarCidade() {
        document.getElementById("formCadastroDeAluno").submit();
    }
    </script>
    <div>

        <h1>Digite os seus filmes favoritos</h1>
        <table>
            <tr>
                <td>Filmes</td>
                <td>Categoria</td>
            </tr>
            <tr>
                <td>De volta Para o Futuro</td>
                <td>Acao</td>
            </tr>
            <tr>
                <td>As Aventuras de Fulano</td>
                <td>Aventura</td>
            </tr>
            <tr>
                <td>Filme Fulano</td>
                <td>Comedia</td>
            </tr>
        </table></br>
        <div><input type="text" placeholder="Preferencia Cat. Acao"></div>
        <div><input type="text" placeholder="Preferencia Cat. Aventura"></div>
        <div><input type="text" placeholder="Preferencia Cat. Comedia"></div>
    </div>

    <select onchange="procurarCidade()" name="estado">
        <option value="0" selected>Escolher</option>
        <option value="sp">São Paulo</option>
        <option value="ms">Mato Grosso do Sul</option>
    </select>
    <select id="cidadeID" name="cidade" class="form-control">
        <?php
        if ($_POST) {
            if ($_POST["estado"] == "ms") {
                echo "<option value=\"corumba\">Corumbá</option>";
                echo "<option value=\"ladario\">Ladário</option>";
            } else if ($_POST["estado"] == "sp") {
                echo "<option value=\"andradina\">Andradina</option>";
                echo "<option value=\"ilhaSolteira\">Ilha Solteira</option>";
                echo "<option value=\"lorena\">Lorena</option>";
            }
        } else {
            echo "<option value=\"0\">Escolha o estado</option>";
        }
        ?>
    </select>
</body>

</html>