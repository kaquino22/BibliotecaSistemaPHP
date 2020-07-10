<?php
    include '../connecting.php';

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $paginas = $_POST['paginas'];
    $selectGenero = $_POST['selectGenero'];
    $exemplares = $_POST['exemplares'];

    $query = $connect->prepare("INSERT INTO livros(titulo,autor,genero,editora,paginas,qtdeExemplares) 
    VALUES ('$titulo','$autor','$selectGenero','$editora','$paginas','$exemplares')");

    $query->execute();

    header('Location:index.php');
?>