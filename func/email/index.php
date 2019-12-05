<!--

	Gostou deste script?
	
	Então curta a nossa página no Facebook
	https://www.facebook.com/invettorbrasil
	
	Siga-nos no twitter:
	https://twitter.com/invettorbrasil
	
	suporte para clientes invettor: atendimento@invettor.com.br
	
	Time de suporte inVettor 07/03/2017

-->

<html lang="pt-br"> 
<head>
	<meta charset="utf-8">
	<title>inVettor | Hospedagem de sites, Revendas, SSL e Cloud.</title>
	<!--Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
<div class="container">

	<?php 
		if ($_POST) 
		{
			//envia o e-mail para o visitante do site
			$mailDestino = $_POST['txtEmail']; 
			$nome = $_POST['txtNome'];	
			$mensagem = "Obrigado pelo seu contato, responderemos ASAP!";
			$assunto = "Obrigado pelo seu contato!";
			include("./envio.php");
			
			
		}
	?>

	<form method="POST" name="formContato">

	<label>Informe seu nome: </label>
	<input type="text" name="txtNome" placeholder="João" class="form-control" required>


	<label>Informe seu e-mail: </label>
	<input type="email" name="txtEmail" placeholder="a@a.com" class="form-control"  required>


	<label>Deixe sua mensagem: </label>
	<textarea rows="6"  class="form-control" name="txtMensagem"></textarea>
	<br/>

	<div style="text-align:center">
		<button type="submit" class="btn btn-default btn-lg"> Enviar Mensagem </button>
	</div>
	
	</form>	
</div>
</body>
</html>