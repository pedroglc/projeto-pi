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
            }header("location: index.php");
            exit();
        }
    }

    function inserir_Empresa(){
        if(isset($_POST['CadastrarEmpresa'])){
            $nome = $_POST['nome'];
            $cnpj = $_POST['cnpj'];
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
            if (empty($nome)) {               
                $erros['nome'] = "Nome é obrigatório";
            }
            if (empty($cnpj)) {                
                $erros['cnpj'] = "O cnpj é obrigatório";
            }
            if (empty($email)) {                
                $erros['email'] = "email é obrigatório";
            }
            if (empty($rua)) {                
                $erros['rua'] = "rua é obrigatório";
            }
            if (empty($numero)) {                
                $erros['numero'] = "o numero é obrigatório";
            }
            if (empty($bairro)) {                
                $erros['bairro'] = "o bairro é obrigatório";
            }
            if (empty($cep)) {               
                $erros['cep'] = "cep é obrigatório";
            }
            if (empty($cidade)) {                
                $erros['cidade'] = "o cidade é obrigatório";
            }
            if (empty($uf)) {               
                $erros['uf'] = "uf é obrigatório";
            }
            if (empty($telefone)) {                
                $erros['telefone'] = "o telefone é obrigatório";
            }

            if(count($erros)==0){
            if(isset($_POST['CadastrarEmpresa'])){

                $sql="INSERT INTO empresas (nomeEmpresa, cnpj, email, telefone, rua, numero, bairro, cep, cidade, uf) 
                values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                $conexao = novaConexao();
                $insert = $conexao->prepare($sql);

                $params = [
                    $_POST['nome'],
                    $_POST['cnpj'],
                    $_POST['email'],
                    $_POST['telefone'],
                    $_POST['rua'],
                    $_POST['numero'],
                    $_POST['bairro'],
                    $_POST['cep'],
                    $_POST['cidade'],
                    $_POST['uf'],                    
                ];

                $insert->bind_param("sssssissss", ...$params);
                
                if ($insert->execute()){
                    unset($_POST); 
                    }
                }
            } 
        }       
    }


    function inserir_coletor(){
        if(isset($_POST['CadastrarColetor'])){
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
            if (empty($nome)) {               
                $erros['nome'] = "Nome é obrigatório";
            }
            if (empty($sobrenome)) {                
                $erros['sobrenome'] = "O sobrenome é obrigatório";
            }
            if (empty($cpf)) {                
                $erros['cpf'] = "O cpf é obrigatório";
            }
            if (empty($email)) {                
                $erros['email'] = "email é obrigatório";
            }
            if (empty($rua)) {                
                $erros['rua'] = "rua é obrigatório";
            }
            if (empty($numero)) {                
                $erros['numero'] = "o numero é obrigatório";
            }
            if (empty($bairro)) {                
                $erros['bairro'] = "o bairro é obrigatório";
            }
            if (empty($cep)) {               
                $erros['cep'] = "cep é obrigatório";
            }
            if (empty($cidade)) {                
                $erros['cidade'] = "o cidade é obrigatório";
            }
            if (empty($uf)) {               
                $erros['uf'] = "uf é obrigatório";
            }
            if (empty($telefone)) {                
                $erros['telefone'] = "o telefone é obrigatório";
            }

            if(count($erros)==0){
            if(isset($_POST['CadastrarColetor'])){

                $sql="INSERT INTO coletor (nomeColetor, sobrenome, cpf, email, telefone, rua, numero, bairro, cep, cidade, uf) 
                values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                $conexao = novaConexao();
                $insert = $conexao->prepare($sql);

                $params = [
                    $_POST['nome'],
                    $_POST['sobrenome'],
                    $_POST['cpf'],
                    $_POST['email'],
                    $_POST['telefone'],
                    $_POST['rua'],
                    $_POST['numero'],
                    $_POST['bairro'],
                    $_POST['cep'],
                    $_POST['cidade'],
                    $_POST['uf'],                    
                ];

                $insert->bind_param("ssssssissss", ...$params);
                
                if ($insert->execute()){
                    unset($_POST); 
                    }
                }
            } 
        } header("Location: index.php");
        exit();      
    }

?>
<?php    

    if (isset($_GET['excluirEmpresa'])){     
                
        $excluirSQL = "DELETE FROM empresas WHERE idEmpresa = ?"; 
            $stmt = $conexao->prepare($excluirSQL);  
            $stmt->bind_param("i", $_GET['excluirEmpresa']); 
            $stmt->execute();
            
            header("Location: index.php");
            exit();
        } 

    function listar_empresas(){
        $conexao = novaConexao();

  

        $sql = "SELECT * FROM empresas";
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

    $registrosE = listar_empresas();
         
             


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
<?php

if (isset($_GET['excluirColetor'])){     
                
    $excluirSQL = "DELETE FROM coletor WHERE idColetor = ?"; 
        $stmt = $conexao->prepare($excluirSQL);  
        $stmt->bind_param("i", $_GET['excluirColetor']); 
        $stmt->execute();
        
        header("Location: index.php");
        exit();
} 

function listar_coletor(){
    $conexao = novaConexao();
    $sql = "SELECT * FROM coletor";
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

$registros = listar_coletor();

?>

