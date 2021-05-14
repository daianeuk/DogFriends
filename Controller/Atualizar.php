<html>
<?php
    require("../Model/acessaBD.php");
    session_start();
    $nomeAntigo = $_SESSION['nome'];
    $senhaAntiga = $_SESSION['senha'];
    if(atualizaPerfil(
        $nomeAntigo, $senhaAntiga,
        $_POST['nome'],
        $_POST['senha'],
        $_POST['raca'],
        $_POST['telefone'],
        $_POST['dataDeNascimento'],
        $_POST['descricao'],
        $_POST['foto'],
        $_POST['sexo'])){
        $_SESSION['nome'] = $_POST['nome'];
        $_SESSION['senha'] = $_POST['senha'];
        echo "<form action ='../View/perfil.html' method='post'>";
        echo "<input type = 'submit' class = 'btn btn-light' value='Voltar para o Site'>";
        echo "</form>";
    }
    
    else{
        echo "Erro no Cadastro";
        echo "<form action ='../View/perfil.html' method='post'>";
        echo "<input type = 'submit' class = 'btn btn-light' value='Tentar novamente!'>";
        echo "</form>";
    }
?>
</html>