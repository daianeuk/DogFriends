<html>
<?php
    require("../Model/acessaBD.php");
    if(confereCadastro($_POST['nome'], $_POST['senha'])){
        echo 'Login realizado com sucesso';
        echo "<form action ='../View/perfil.html' method='post'>";
        echo "<input type = 'submit' class = 'btn btn-light' value='Entrar'>";
        echo "</form>";
        
        session_start();
        $_SESSION['nome'] = $_POST['nome'];
        $_SESSION['senha'] = $_POST['senha'];
    }
    else{
        echo 'Nome e senha não existem!';
        echo "<form action ='../View/perfil.html' method='post'>";
        echo "<input type = 'submit' class = 'btn btn-light' value='Tentar novamente'>";
        echo "</form>";
    }
?>
</html>