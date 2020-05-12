<?php 

require ('config.php');

$nome = filter_input(INPUT_POST, 'nome' );
$descricao = filter_input(INPUT_POST, 'descricao');
$preco = filter_input(INPUT_POST, 'preco');




if ($nome && $descricao && $preco) {
    $sql = $pdo->prepare("INSERT INTO produtos(nome,descricao,preco) VALUES (:nome, :descricao, :preco,)");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':descricao', $descricao);
    $sql->bindValue(':preco', $preco);
    $sql->execute();

    header('location:indexProduto.php');
    die 'tudo certo';



}else {
    header('location:createProduto.php');
    die;
}
?>