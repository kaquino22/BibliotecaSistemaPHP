<?php
    include '../connecting.php';

   $ra = $_GET['ra'];


   $query = $connect->prepare("DELETE from emprestimo_devolucao where ra=$ra");

   $query->execute();

  $query = $connect->prepare("DELETE from aluno where ra=$ra");

   $query->execute();

  header('Location:aluno.php');

?>