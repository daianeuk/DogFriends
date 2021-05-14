<?php
    require("../Model/acessaBD.php");
    session_start();
    $nome = $_SESSION['nome'];
    $senha = $_SESSION['senha'];
  
    $nome2 = $_SESSION['nome2'];
    $senha2 = $_SESSION['senha2'];
    
    if(salvaAmizade($nome,$senha,$nome2,$senha2)){
        echo "<form action='../View/caes.php' method='post'>";
        echo "<input type='submit' class='btn btn-light' value='Voltar para o site'>";
        echo "</form>";
    }
    else{
        echo "Erro no envio da solicitação de amizade";
        echo "<form action='../View/caes.php' method='post'>";
        echo "<input type='submit' class='btn btn-light' value='Tentar novamente'>";
        echo "</form>";
    }
    
?>