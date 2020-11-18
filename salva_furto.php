<?php
    include_once("conectar.php");
    
    $denuncia = $_POST ['denuncia'];
    $nome = $_POST ['nome'];
    $dat = $_POST ['dat'];
    $email = $_POST ['email'];
    $bairro = $_POST ['bairro'];
    $cep = $_POST ['cep'];
    $rua = $_POST ['rua'];
    $priority = $_POST ['priority'];
    $mensagem = $_POST ['mensagem'];
    $MSG = "Denúcia Enviada com Sucesso ! ";
    

    
    if($denuncia=="Furto")
    {
    mysqli_query($conn,"INSERT INTO registrofurto(denuncia,nome,dat,email,bairro,cep,rua,priority,mensagem) VALUES ('$denuncia','$nome','$dat','$email','$bairro','$cep','$rua','$priority','$mensagem' )") or die (mysqli_error($conn));
    }

    
    if($denuncia=="Assalto")
    {
        mysqli_query($conn,"INSERT INTO registroassalto(denuncia,nome,dat,email,bairro,cep,rua,priority,mensagem) VALUES ('$denuncia','$nome','$dat','$email','$bairro','$cep','$rua','$priority','$mensagem' )") or die (mysqli_error($conn));
    }
    
    if($denuncia=="Assalto a Mão Armada")
    {
        mysqli_query($conn,"INSERT INTO registroassaltoarmado(denuncia,nome,dat,email,bairro,cep,rua,priority,mensagem) VALUES ('$denuncia','$nome','$dat','$email','$bairro','$cep','$rua','$priority','$mensagem' )") or die (mysqli_error($conn));
    }
    
    if($denuncia=="Roubo de Carro")
    {
        mysqli_query($conn,"INSERT INTO registroroubocarro(denuncia,nome,dat,email,bairro,cep,rua,priority,mensagem) VALUES ('$denuncia','$nome','$dat','$email','$bairro','$cep','$rua','$priority','$mensagem' )") or die (mysqli_error($conn));
    }
            
    
    if($denuncia=="Roubo De Estabelecimento")
    {
        mysqli_query($conn,"INSERT INTO registrorouboestabelecimento(denuncia,nome,dat,email,bairro,cep,rua,priority,mensagem) VALUES ('$denuncia','$nome','$dat','$email','$bairro','$cep','$rua','$priority','$mensagem' )") or die (mysqli_error($conn));
    }
  
    if($denuncia=="Tráfico Intenso")
    {
        mysqli_query($conn,"INSERT INTO registrotraficointenso(denuncia,nome,dat,email,bairro,cep,rua,priority,mensagem) VALUES ('$denuncia','$nome','$dat','$email','$bairro','$cep','$rua','$priority','$mensagem' )") or die (mysqli_error($conn));
    } 



    if(mysqli_insert_id($conn)) {
        header("Location: obrigado.php");
    } else {
        header ("Location: denuncia1.php");
    }

    ?>

 