<?php
 require_once __DIR__ . '/../../model/CategoriaModel.php';

 if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $categoriaModel = new CategoriaModel();

    if (empty($_POST['id'])) {
        $res = $categoriaModel->criar($_POST);

        if ($res) {
            echo "<script>alert('Criou o usuário.')</script>";

            return header('Location: categorias.php');
        } else {
            echo "<script>alert('Erro ao criar o usuário.')</script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="/site-adm/view/css/style.css">

</head>
<body>
    <section class="container">
        <form action="categorias-cadastrar.php" method="POST">
            <input type="hidden" name="id"> 
            <div>
                <p>Nome</p><input type="text" id="nome" name="nome">
            </div>
            <div>
                <p>Descrição</p><input type="text" id="descricao" name="descricao">
            </div>
            <br>
            <button name='salvar_categoria' type="submit">Salvar</button>
        </form>
    </section>
</body>
</html>