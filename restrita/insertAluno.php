<?php
    include '../connecting.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $nascimento = $_POST['nascimento'];
    $selectTurma = $_POST['selectTurma'];
    $exemplares = $_POST['exemplares'];

    $query = $connect->prepare("INSERT INTO aluno (nome,turma,tel,email,celular,dataNascimento) VALUES 
    ('$nome','$selectTurma','$telefone','$email','$celular','$exemplares')");

    $query->execute();

    header('Location:index.php');
?>