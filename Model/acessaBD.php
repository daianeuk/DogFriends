<?php
$endereco = "localhost";
$nomeDeUsuario = "root";
$senha = "";
$nomeDoDB = "dogfriends";

try {
    $conexao = new PDO("mysql:host=$endereco; dbname=$nomeDoDB", $nomeDeUsuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexão realizada com sucesso";
}
catch(PDOException $e){
    echo "Conexão falhou: " . $e->getMessage();
}

try{
    function insereNovoCachorro($nome,$senha,$raca,$telefone,$dataDeNascimento, $descricao, $foto, $sexo){
        global $conexao;
        
        $stm = $conexao->prepare("INSERT INTO cachorros(nome,senha,raca,telefone,dataDeNascimento,
                descricao,foto,sexo) VALUES (:nome,:senha,:raca,:telefone,:dataDeNascimento,
                :descricao, :foto, :sexo)");
        
        $stm->bindParam(':nome', $nome);
        $stm->bindParam(':senha', $senha);
        $stm->bindParam(':raca', $raca);
        $stm->bindParam(':telefone', $telefone);
        $stm->bindParam(':dataDeNascimento', $dataDeNascimento);
        $stm->bindParam(':descricao', $descricao);
        $stm->bindParam(':foto', $foto);
        $stm->bindParam(':sexo', $sexo);
        
        $stm->execute();
        
        echo "Cadastro realizado com sucesso!";
        return true;
    }
    function confereCadastro($nome,$senha){
        global $conexao;
        $rs = $conexao->query("SELECT nome, senha FROM cachorros WHERE nome='$nome' AND senha='$senha'");
        if($rs->rowCount()>0){
            return true;
        }
        else{
            return false;
        } 
    }
    function returnaDadosDoPerfil($nome,$senha){
        global $conexao;
        $dadosPerfil = 'SemDados';
        $rs = $conexao->query("SELECT * FROM cachorros WHERE nome='$nome' AND senha='$senha'");
        while ($row = $rs-> fetch(PDO::FETCH_OBJ)){
            $dadosPerfil = array(
                "nome"=>$row->nome,
                "senha"=>$row->senha,
                "raca"=>$row->raca,
                "telefone"=>$row->telefone,
                "dataDeNascimento"=>$row->dataDeNascimento,
                "descricao"=>$row->descricao,
                "foto"=>$row->foto,
                "sexo"=>$row->sexo);
        }
        return $dadosPerfil;
    }
}