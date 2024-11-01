<?php

include_once('config.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];                      
    $nome = $_POST['nome'];
    $resp = $_POST['responsavel'];
    $escola = $_POST['escola'];
    $serie = $_POST['serie'];
    $periodo = $_POST['periodo'];
    $telefone = $_POST['telefone'];
    $vencimento = $_POST['vencimento'];

    $sqlUpdate = "UPDATE alunos SET aluno='$nome',responsavel='$resp',escola='$escola',serie='$serie',periodo='$periodo',telefone='$telefone',vencimento='$vencimento' WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);

}
header('Location: edit.php');
?>