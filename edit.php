<?php
//session_start();
include_once('config.php');

$sql = "SELECT * FROM alunos ORDER BY id DESC";

$result = $conexao->query($sql);

//print_r($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Editar Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <nav class="menu_lateral">
        <div class="btn_expandir">
            <i class="bi bi-list" id="btn-exp"></i>
            <ul>
                <li class="item-menu">
                    <a href="Index.html">
                        <span class="icon"><i class="bi bi-house-fill"></i></span>
                        <span class="txt-link">Início</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href='Cadastro.php'>
                        <span class="icon"><i class="bi bi-person-vcard-fill"></i></span>
                        <span class="txt-link">Cadastro</span>
                    </a>
                </li>
                <li class="item-menu ativo">
                    <a href='edit.php'>
                        <span class="icon"><i class="bi bi-database-fill-gear"></i></span>
                        <span class="txt-link">Dados</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
    <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h2>Banco de Dados</h2>
                    </div>
                </div>
            </form>
        </div>        
        <div class="m-5">
                <table class="table-sm">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Aluno</th>
                        <th scope="col">Responsável</th>
                        <th scope="col">Escola</th>
                        <th scope="col">Série</th>
                        <th scope="col">Período</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Vencimento</th>
                        <th scope="col">...</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($user_data = mysqli_fetch_assoc($result))

                            {
                                echo "<tr>";
                                echo "<td>".$user_data['ID']."</td>";
                                echo "<td>".$user_data['aluno']."</td>";
                                echo "<td>".$user_data['responsavel']."</td>";
                                echo "<td>".$user_data['escola']."</td>";
                                echo "<td>".$user_data['serie']."</td>";
                                echo "<td>".$user_data['periodo']."</td>";
                                echo "<td>".$user_data['telefone']."</td>";
                                echo "<td>".$user_data['vencimento']."</td>";
                                echo "<td>
                                    <a class= 'btn btn-sm btn-primary' href='Resultado.php?id=$user_data[ID]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
                                    </svg>
                                    </a>
                                    <a class= 'btn btn-sm btn-danger' href='delete.php?id=$user_data[ID]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                                    </svg>
                                    </a>
                                </td>";
                            }
                        ?>
                    </tbody>
                </table>
    </div>
    <script src="Script.js"></script>
</body>
</html>

