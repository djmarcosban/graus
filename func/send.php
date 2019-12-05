<?php
header("Content-type: text/html; charset=utf-8");
date_default_timezone_set('America/Sao_Paulo');

$contatoId = 0;

if(isset( $_POST['empresa'] ) && !empty( $_POST['empresa']) &&
     isset( $_POST['email'] ) && !empty( $_POST['email'] ) &&
     isset( $_POST['ddd'] ) && !empty( $_POST['ddd'] ) &&
     isset( $_POST['telefone'] ) && !empty( $_POST['telefone'] ) &&
     isset( $_POST['cidade'] ) && !empty( $_POST['cidade'] ) &&
     isset( $_POST['mensagem'] ) && !empty( $_POST['mensagem'] ) ) {
  $empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_MAGIC_QUOTES);
  $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_MAGIC_QUOTES);
  $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_MAGIC_QUOTES);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_MAGIC_QUOTES);
  $ddd = filter_input(INPUT_POST, 'ddd', FILTER_SANITIZE_MAGIC_QUOTES);
  $data = date('d-m-Y H:i:s');
  $csv = $empresa.';'.$email.';('.$ddd.') '.$telefone.';'.$cidade.';'.$mensagem.';'.$data.PHP_EOL;
  $fp = fopen("lista.csv", "a");
  $escreve = fwrite($fp, $csv);
  fclose($fp);
  echo 1;
  exit;
}else{
  echo 0;
  exit;
}
?>