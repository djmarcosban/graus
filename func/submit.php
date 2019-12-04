<?php
if(isset($_POST['action'])){
	include("../includes/config.php");

	function clear($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$nome = clear($_POST['nome']);
	$email = clear($_POST['email']);
	$telefone = clear($_POST['telefone']);
	$area = clear($_POST['area']);
	$origem = clear($_POST['origem']);
	$cidade = clear($_POST['cidade']);
	$estado = clear($_POST['estado']);
	$status = '1';

	try{
		$s = $sql->prepare("INSERT INTO bit_leads (nome, email, telefone, area, origem, status, data, cidade, estado) VALUES (?, ?, ?, ?, ?,?,?,?,?)");
		$s->bindParam(1, $nome, PDO::PARAM_STR);
		$s->bindParam(2, $email, PDO::PARAM_STR);
		$s->bindParam(3, $telefone, PDO::PARAM_STR);
		$s->bindParam(4, $area, PDO::PARAM_STR);
		$s->bindParam(5, $origem, PDO::PARAM_STR);
		$s->bindParam(6, $status, PDO::PARAM_STR);
		$s->bindParam(7, $tempoAtual, PDO::PARAM_STR);
		$s->bindParam(8, $cidade, PDO::PARAM_STR);
		$s->bindParam(9, $estado, PDO::PARAM_STR);
		$s->execute();

		echo '<span class="msg-success color-yellow">Obrigado por fazer o seu cadastro.</span>';

	}catch(PDOException $e){
		echo '<span class="msg-success color-yellow">'.$e->getMessage().'</span>';
	}

}