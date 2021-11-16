<?php

    //usa o if para saber se o formulario ocorreu um submit
    //se houver um submit vai salvar no banco de dados
    if (isset($_POST['submit'])) {

        /*
        print_r($_POST['nome']);
        echo "<br>";
        print_r($_POST['email']);
        echo "<br>";
        print_r($_POST['telefone']);
        echo "<br>";
        print_r($_POST['genero']);
        echo "<br>";
        print_r($_POST['data_nascimento']);
        echo "<br>";
        print_r($_POST['cep']);
        echo "<br>";
        print_r($_POST['estado']);
        echo "<br>";
        print_r($_POST['cidade']);
        echo "<br>";
        print_r($_POST['endereço']);
        echo "<br>";
        */

         //incluir a conexão
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $data_nascimento = $_POST['data_nascimento'];
        $cep = $_POST['cep'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereço'];

        $resultado = mysqli_query($conexao_BD, "INSERT INTO usuarios_tabela(
        Nome_Tabela_Usuarios,
        Email_Tabela_Usuarios,
        Telefone_Tabela_Usuarios,
        Sexo_Tebela_Usuarios,
        Data_Nascimento_tabela_Usuarios,
        Cep_Tabela_Usuarios,
        Estado_Tabela_Usuarios,
        Cidade_Tabela_Usuarios,
        Endereco_Tabela_Usuarios) VALUES (
        '$nome',
        '$email',
        '$telefone',
        '$genero',
        '$data_nascimento',
        '$cep',
        '$estado',
        '$cidade',
        '$endereco')");

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" class="inputUser" name="nome" id="nome" required>
                    <label class="labelinput" for="nome">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" class="inputUser" name="email" id="email" required>
                    <label class="labelinput" for="email">E-mail</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" class="inputUser" name="telefone" id="telefone" required>
                    <label class="labelinput" for="telefone">Telefone</label>
                </div> 
                <br> 
                <div class="inputBox">
                    <p>Sexo:</p>
                    <input type="radio"  id="masculino" name="genero" value="Masculino" required >
                    <label for="masculino">Masculino</label>
                    <input type="radio"  id="feminino" name="genero" value="Feminino" required >
                    <label for="feminino">Feminino</label>
                    <input type="radio"  id="outros" name="genero" value="Outros" required>
                    <label for="outros">Outros</label>
                </div>
                <br>

                <div class="inputBox">
                    <label class="labelinput" for="data_nascimento"><b>Data de nascimento:</b></label><br>
                    <input type="date" class="inputUser" name="data_nascimento" id="data_nascimento" required >
                   
                </div>
                <br>
                
                <div class="inputBox">
                    <input type="number" class="inputUser" name="cep" id="cep" required>
                    <label class="labelinput" for="cep">CEP</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" class="inputUser" name="estado" id="estado" required>
                    <label class="labelinput" for="estado">Estado</label>
                
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" class="inputUser" name="cidade" id="cidade" required>
                    <label class="labelinput" for="cidade">Cidade</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" class="inputUser" name="endereço" id="endereço" required>
                    <label class="labelinput" for="endereço">Endereço</label>
                </div>
                <br>
                <input type="submit" name="submit" class="inputUser" value="Enviar">
            </fieldset>
        </form>
    </div>
    
</body>
</html>