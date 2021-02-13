<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Marcar Consulta');

use \Classes\identidade\consultas;

/** validação do ID */
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: gerenciamento.php?status=error');
    exit;
}

$obConsulta = Consultas::getConsulta($_GET['id']);

/** Validação da consulta */
if(!$obConsulta instanceof Consultas){
    header('location: gerenciamento.php?status=error');
    exit;
}



 if(isset($_POST['nome'], $_POST['email'],  $_POST['data'],  $_POST['hora'],  $_POST['telefone'])){

     $obconsulta->nome = $_POST['nome'];
     $obconsulta->email = $_POST['email'];
     $obconsulta->data = $_POST['data'];
     $obconsulta->hora = $_POST['hora'];
     $obconsulta->telefone = $_POST['telefone'];
     $obconsulta->cadastrar();

     header('location: gerenciamento.php?status=success');
     exit;
     
 }

include __DIR__.'/páginas/agendamento.php';
?>


