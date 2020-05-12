<?php 

require ('config.php');

$sql = $pdo->query("SELECT * FROM produtos");
$listas = [];

if($sql->rowCount() > 0){
    $listas = $sql->fetchAll(PDO:: FETCH_ASSOC);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexProduto</title>
</head>
<body>
    <header>
    <table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>DESCRIÇÃO DO PRODUTO</th>
        <th>PREÇO</th>
        <th> <a href="showProduto.php">Ver mais</a></th>
    </tr>


    <?php  foreach ($listas as  $lista) : ?>

<tr>
<th><?= $lista['id'] ?></th>
<th><?= $lista['nome']?></th>
<th><?= $lista['descricao']?></th></th>
<th><?= $lista['preco']?></th>

</tr>


<?php  endforeach;?>
</table>
<br><br>
    </header>

    
</body>
</html>