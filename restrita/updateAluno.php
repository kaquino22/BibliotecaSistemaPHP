<?php
    include '../connecting.php';

    $ra = $_GET['ra'];
    $nome = $_POST['nome'];  
    $email = $_POST['email']; 
    $dataNascimento = $_POST['nascimento'];   
    $telefone = $_POST['telefone']; 
    $celular = $_POST['celular'];
    
  
    //$turma = $_POST['select'];
   
    $query = $connect->prepare("UPDATE aluno SET nome = '$nome', tel = '$telefone', email='$email',
    celular='$celular', dataNascimento='$dataNascimento' WHERE ra ='$ra'");

    $query->execute();

    header('Location:aluno.php');

?>