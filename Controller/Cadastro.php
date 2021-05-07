<html>
<?php
    require("../Model/acessaBD.php");
    if(insereNovoCachorro(
        $_POST['nome'],
        $_POST['senha'],
        $_POST['raca'],
        $_POST['telefone'],
        $_POST['dataDeNascimento'],
        $_POST['descricao'],
        $_POST['foto'],
        $_POST['sexo'])){
        
       
        echo "<form action ='../View/perfil.html' method='post'>";
        echo "<input type = 'submit' class = 'btn btn-light' value='Entrar'>";
        echo "</form>";
    }
    
    else{
        echo "Erro no Cadastro";
        echo "<form action ='../View/perfil.html' method='post'>";
        echo "<input type = 'submit' class = 'btn btn-light' value='Tente novamente!'>";
        echo "</form>";
    }
?>
</html>