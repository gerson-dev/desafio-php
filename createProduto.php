<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>formulario</title>
</head>
<body>

<h1>Cadastro do Produto</h1>
   <section class="container">
  
    <form action="recebedorProduto.php" method="post" enctype="multipart/form-data">
        <label for="nome">
            <p>Nome</p>
            <input type="text" name="nome">
        </label>
        <br><br>

        <label for="descricao">
            <p>Descrição</p>
            <textarea  name="descricao" value="portatil , 100% cortado a laser , 40 opções de artes do painel, 9800 jogos, bivolt" ></textarea>
        </label>
        <br><br>

        <div class="numeros">
            <label for="preco">
                <p>Preço</p>
                <input class="preco" type="number" name="preco" id="">
            </label>
            <br><br>
        </div>

        <label for="foto">
            <p>Foto do produto</p>
            <input class="foto" type="file"  name="foto">
        </label>
        <br><br>

        <div class="btn">
            <button type="submit">Enviar</button>
        </div>
        <br><br>
    </form>
   </section>
</body>
</html>