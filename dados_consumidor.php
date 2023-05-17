<?php
    require_once('01-conexao.php');

    function inserir_dadosUsuario(){
        if(isset($_POST['CadastrarUsuario'])){
                $nome = $_POST['nome'];
                $sobrenome = $_POST['sobrenome'];
                $cpf = $_POST['cpf'];
                $email = $_POST['email'];
                $rua = $_POST['rua'];
                $numero = $_POST['numero'];
                $bairro = $_POST['bairro'];
                $cep = $_POST['cep'];
                $cidade = $_POST['cidade'];
                $uf = $_POST['uf'];
                $telefone = $_POST['telefone'];
            }

        $erros = [];
        if (count($_POST) > 0) {
            if (!filter_var($nome)) {               
                $erros['nome'] = "Nome é obrigatório";
            }
            if (!filter_var($sobrenome)) {               
                $erros['sobrenome'] = "sobrenome é obrigatório";
            }
            if (!filter_var($cpf)) {                
                $erros['cpf'] = "O cpf é obrigatório";
            }
            if (!filter_var($email)) {                
                $erros['email'] = "email é obrigatório";
            }
            if (!filter_var($rua)) {                
                $erros['rua'] = "rua é obrigatório";
            }
            if (!filter_var($numero)) {                
                $erros['numero'] = "o numero é obrigatório";
            }
            if (!filter_var($bairro)) {                
                $erros['bairro'] = "o bairro é obrigatório";
            }
            if (!filter_var($cep)) {               
                $erros['cep'] = "cep é obrigatório";
            }
            if (!filter_var($cidade)) {                
                $erros['cidade'] = "o cidade é obrigatório";
            }
            if (!filter_var($uf)) {               
                $erros['uf'] = "uf é obrigatório";
            }
            if (!filter_var($telefone)) {                
                $erros['telefone'] = "o telefone é obrigatório";
            }

            if(count($erros)==0){
            if(isset($_POST['CadastrarUsuario'])){

                $sql="INSERT INTO consumidores (nomeConsumidor, sobrenome, cpf, email, rua, numero, bairro, cep, cidade, uf, telefone) 
                values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                $conexao = novaConexao();
                $insert = $conexao->prepare($sql);

                $params = [
                    $_POST['nome'],
                    $_POST['sobrenome'],
                    $_POST['cpf'],
                    $_POST['email'],
                    $_POST['rua'],
                    $_POST['numero'],
                    $_POST['bairro'],
                    $_POST['cep'],
                    $_POST['cidade'],
                    $_POST['uf'],
                    $_POST['telefone'],                    
                ];

                $insert->bind_param("sssssisssss", ...$params);
                
                if ($insert->execute()){
                    unset($_POST); 
                    }
                    
                }
            }
        }
    }

?>

<?php

    if (isset($_GET['excluirConsumidor'])){     
                    
        $excluirSQL = "DELETE FROM consumidores WHERE idEmpresa = ?"; 
            $stmt = $conexao->prepare($excluirSQL);  
            $stmt->bind_param("i", $_GET['excluirConsumidor']); 
            $stmt->execute();
            
            header("Location: index.php");
            exit();
    } 

    function listar_consumidor(){
        $conexao = novaConexao();
        $sql = "SELECT * FROM consumidores";
        $resultado = $conexao->query($sql);

        if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $registros[] = $row;
        }
    } elseif ($conexao->error) {
        echo ":( Erro: " . $conexao->error;
    }

    return $registros ?? [];
    }

    $registrosC = listar_consumidor();

?>


