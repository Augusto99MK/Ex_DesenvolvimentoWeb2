<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM E Formulários</title>
</head>

<body>
    <div>
        <div>
            <form action="./recebedados.php" method="POST">
                <label for="nome">Seu Primeira Nome:</label><br>
                <input type="text" id="fname" name="fname" placeholder="Digite Aqui"><br>
                <label for="nome">Seu Ultimo Nome:</label><br>
                <input type="text" id="lname" name="lname" placeholder="Digite Aqui"><br><br>


                <h2>Escolha os Seus Gêneros de Filmes Favoritos</h2>
                <input type="radio" value="Acao" id="facao" name="facao">
                <label>Ação</label><br />
                <input type="radio" value="Terror" id="fcomedia" name="facao">
                <label>Terror</label><br />
                <input type="radio" value="Comedia" id="fcomedia" name="facao">
                <label>Comedia</label> <br />
                <input type="reset" name="b2" value="Limpar"> <br />


                <input type="checkbox" value="Acao" id="facao" name="facao">
                <label for="Acao"> Ação</label><br />
                <input type="checkbox">
                <label for="Terror" value="Terror" id="facao" name="facao"> Terror</label><br />
                <input type="checkbox">
                <label for="comedia" value="Comedia" id="facao" name="facao"> Comedia</label> <br />
                <input type="reset" name="b2" value="Limpar">


                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>

</html>