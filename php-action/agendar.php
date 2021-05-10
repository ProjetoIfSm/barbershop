<?php
//Sessao
session_start();
// Connection

require_once 'db_connect.php';

//Mensagem
include_once 'includes/mensagem.php';
//ADD no banco

if(isset($_POST['btn-agendar'])){

    if(empty($_POST('data')) || $_POST('hora')){
        header('Location : ../agendamento.php');
    }else{

    $data = mysqli_escape_string($connect, $_POST['data']);
    $horas = mysqli_escape_string($connect, $_POST['horas']);
    $servicos = mysqli_escape_string($connect, $_POST['1 , 2, 3']);
    $idUsuario = mysqli_escape_string($connect, $_POST['idUsuario']);


    $sql = "INSERT INTO agendar_servicos (data_solicitacao, data_servico, horas, usuario, servicos, servicos, servicos) VALUES ( now(), '$data', '$horas', '1234', '$servicos')";

    if(mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Cadastrado com sucesso";
        header('Location: ../agendamento.php');
        }  else{
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: ../agendamento.php');
    
         }}
    
}