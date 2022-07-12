<?php
include 'conexao.php';

$legenda = mysqli_real_escape_string($connx, $_POST['legenda']);
$obs = mysqli_real_escape_string($connx, $_POST['obs']);


$inserir = $connx->query("INSERT INTO criativos SET legenda='$legenda', obs='$obs'") or die (mysqli_error($connx));;

if($inserir){
    header('location: /criativos');
} else {
    echo 'Deu ruim: ', $inserir->error;//Este erro
}
