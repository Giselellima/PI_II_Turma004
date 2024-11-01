<?php
    if(isset($_POST['submit']))
{
   // print_r('Nome: ' . $_POST['nome']);
    //print_r('Responsável: ' . $_POST['resp']);
    //print_r('Escola: ' . $_POST['escola']);
    //print_r('Serie: ' . $_POST['serie']);
    //print_r('Periodo: ' . $_POST['periodo']);
    //print_r('Telefone: ' . $_POST['telefone']);
    //print_r('Vencimento: ' . $_POST['vencimento']);
    
    include_once('config.php');

    $nome = $_POST['nome'];
    $resp = $_POST['resp'];
    $escola = $_POST['escola'];
    $serie = $_POST['serie'];
    $periodo = $_POST['periodo'];
    $telefone = $_POST['telefone'];
    $vencimento = $_POST['vencimento'];

    $result = mysqli_query($conexao, "INSERT INTO alunos(aluno,responsavel,escola,serie,periodo,telefone,vencimento)
    VALUES('$nome','$resp','$escola','$serie','$periodo','$telefone','$vencimento')");

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
    
#submit{
    display: flex;
    align-items: center;
}

#submit{
    width: 30%;
    margin: 0.8rem;
    border: none;
    background-color: blue;
    padding: 0.62rem;
    border-radius: 5px;
    cursor: pointer;
}


#submit:hover{
    background-color: #483D8B;
}

#submit a{
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
            <form action="Cadastro.php" method="Post">
                <div class="form-header">
                    <div class="title">
                        <h2>Cadastro</h2>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="label">Nome do Aluno</label>
                        <input type="text" name="nome" ID="Aluno" placeholder="Digite o nome do aluno" required>
                    </div>

                    <div class="input-box">
                        <label for="label">Responsável</label>
                        <input type="text" name="resp" ID="Responsavel" placeholder="Digite o nome do responsável" required>
                    </div>

                    <div class="input-box">
                        <label for="label">Escola</label>
                        <input type="text" name="escola" ID="escola" placeholder="Digite o nome da escola do aluno" required>
                    </div>
                    <div class="input-box">
                        <label for="label">Série</label>
                        <input type="text" name="serie" ID="serie" placeholder="Digite a série do aluno" required>
                    </div>
                    <div class="input-box">
                        <label for="label">Período</label>
                        <input type="text" name="periodo" ID="periodo" placeholder="Digite o período" required>
                    </div>
                    <div class="input-box">
                        <label for="label">Telefone</label>
                        <input type="tel" name="telefone" ID="telefone" placeholder="Digite o telefone" required>
                    </div>
                    <div class="input-box">
                        <label for="label">Vencimento</label>
                        <input type="date" name="vencimento" ID="vencimento" placeholder="Data do vencimeto" required>
                    </div>

                </div>
                <input type="submit" name="submit" id="submit">
        
    </div>
    <script src="Script.js"></script>
</body>
</html>