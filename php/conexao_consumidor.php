<?php

    require_once "conexao.php" ; 

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $password1 = ($_POST['password1']);
    $password2 = ($_POST['password2']);
    $tel_01 = $_POST['tel_01'];
    $tel_02 = $_POST['tel_02'];
    $cep = $_POST['cep'];
    $num = $_POST['num'];
    $comp  = $_POST['comp'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];   

        
    $query = mysqli_query($con , ("INSERT INTO consumidores VALUE
     ('$nome' , '$cpf' , '$email', '$password1' , '$password2', '$tel_01' ,'$tel_02','$cep', '$num' ,'$comp' , '$bairro', '$cidade' , '$estado' )"));  
    echo"cadastro com sucesso";
    header("refresh:1; url=consumidor.html");     
        

?>
