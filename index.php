<?php
include 'conexao.php';

$buscar_arquivos = "SELECT * FROM criativos"; // buscar dados
$query_arquivos = mysqli_query($connx, $buscar_arquivos); // ler 

?>

<!doctype html>
<html lang="pt-BR">

<head>
    <title>Upload de Arquivos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Legenda</th>
                <th>Obs</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($receber_arquivos = mysqli_fetch_array($query_arquivos)) {
                $id = $receber_arquivos['id'];
                $legenda = $receber_arquivos['legenda'];
                $obs = $receber_arquivos['obs'];
            ?>

                <tr>
                    <td scope="row"><?php echo $id; ?></td>
                    <td><?php echo $legenda; ?></td>
                    <td><?php echo $obs; ?></td>
                </tr>
            <?php }; ?>
            <!-- parou o while -->

            <tr>
                <form action="adicionar.php" method="POST">
                    <td></td>
                    <td><input type="text" name="legenda"></td>
                    <td><input type="text" name="obs"></td>
                    <td><input type="submit" value="Enviar"></td>
                </form>
            </tr>
        </tbody>
    </table>
</div>

</html>