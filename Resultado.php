<?php
    if(!empty($_GET['id']))
{
    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM alunos WHERE ID=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            $aluno = $user_data['aluno'];
            $responsavel = $user_data['responsavel'];
            $escola = $user_data['escola'];
            $serie = $user_data['serie'];
            $periodo = $user_data['periodo'];
            $telefone = $user_data['telefone'];
            $vencimento = $user_data['vencimento'];

        }
     //print_r($nome);
    }

    else{
        header('Location: edit.php');
    }
    //print_r($result);

   
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="Style.css">-->
    <link rel="stylesheet" href="Sty3.css">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style>
    
#update{
    display: flex;
    align-items: center;
}

#update{
    width: 30%;
    margin: 0.8rem;
    border: none;
    background-color: blue;
    padding: 0.62rem;
    border-radius: 5px;
    cursor: pointer;
}


#update:hover{
    background-color: #483D8B;
}

#update a{
    text-decoration: none;
    font-size: 0.93rem;
    font-weight: 500;
    color:#fff;
}
</style>
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
                <li class="item-menu ativo">
                    <a href='Cadastro.php'>
                        <span class="icon"><i class="bi bi-person-vcard-fill"></i></span>
                        <span class="txt-link">Cadastro</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href='edit.php'>
                        <span class="icon"><i class="bi bi-database-fill-gear"></i></span>
                        <span class="txt-link">Dados</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="form-image">
            <img src="img/315260-P9IE8O-678.jpg">
        </div>
        <div class="form">
            <form action="saveEdit.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h2>Resultado da Pesquisa</h2>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="label">Nome do Aluno</label>
                        <input type="text" name="nome" ID="nome" value="<?php echo $aluno ?>">
                    </div>

                    <div class="input-box">
                        <label for="label">Responsável</label>
                        <input type="text" name="responsavel" ID="responsavel" value="<?php echo $responsavel ?>">
                    </div>

                    <div class="input-box">
                        <label for="label">Escola</label>
                        <input type="text" name="escola" ID="escola" value="<?php echo $escola ?>">
                    </div>
                    <div class="input-box">
                        <label for="label">Série</label>
                        <input type="text" name="serie" ID="serie" value="<?php echo $serie ?>">
                    </div>
                    <div class="input-box">
                        <label for="label">Período</label>
                        <input type="text" name="periodo" ID="periodo" value="<?php echo $periodo ?>">
                    </div>
                    <div class="input-box">
                        <label for="label">Telefone</label>
                        <input type="tel" name="telefone" ID="telefone" value="<?php echo $telefone ?>">
                    </div>
                    <div class="input-box">
                        <label for="label">Vencimento</label>
                        <input type="date" name="vencimento" ID="vencimento" value="<?php echo $vencimento ?>">
                    </div>

                </div>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">
            </form>         
    </div>
    <script src="Script.js"></script>
</body>
</html>