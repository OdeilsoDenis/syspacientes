<?php
    $email = $_POST["inputEmail"];
    $senha = $_POST["inputPassword"];
    $validou = true;
    $erro = "";

    //Validar Senha
    if(strlen($senha) < 6)
    {
        $erro = "Senha menor que 6 caracteres";
        $validou = false;
    }else if(strlen($senha) >= 7)
    {
        $erro = echo "Senha maior que 6 caracteres";
        $validou = false;
    } 
    
    //Exibir ou Retornar
    if($validou)
    {
        echo "<hr>";
        echo "E-mail: ".$email."<br>";
        echo "Senha: ".$senha;
    }else{
        header("location:index.php?erro=$erro");
    }
?>