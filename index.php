<?php
@$url_atual = "http" . (isset($_SERVER[HTTPS]) ? (($_SERVER[HTTPS]=="on") ? "s" : "") : "") . "://" . "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<!DOCTYPE html>
<html>
<head>
	<title>BITPRO Conexão & Didática</title>
	<base href="https://bitproedu.com.br/professor/">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
</head>
<body <?php if(isset($_GET['anime'])){echo 'onload="anime(\''.$_GET['anime'].'\')"';}?>>

	<section class="container-fluid mx-auto p-0">
		<div class="row m-0 h-100">
			<div class="col-md-6">
				<div class="row offset-md-5 mt-3" id="logo">
					<a href="https://bitproedu.com.br/"><img src="img/logo.png" alt="Bitpro" width="280"></a>
				</div>
			</div>
			<div class="col-md-6 p-0">
				<div class="row m-0 bg-blue p-3 font-weight-bold" id="bg-menu">
					<ul class="d-flex justify-content-between col-8 mt-3" id="menu">
						<li><a href="https://bitproedu.com.br/?anime=comofunciona">Como funciona</a></li>
						<li><a href="https://bitproedu.com.br/professor/">Professor</a></li>
						<li><a href="https://bitproedu.com.br/escola/">Escola</a></li>
						<li><a href="https://bitproedu.com.br/blog/">Blog</a></li>
						<li><a href="javascript:;" onclick="anime('contato');">Contato</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="container-fluid mx-auto p-0 mt-5" id="principal">
		<div class="container">
			<div class="row mt-5">
				<div class="col-6 offset-md-5 mt-5 pt-5">
					<h1 class="mt-5 pt-5"><span class="bg-yellow color-blue" style="background-clip: content-box;">A plataforma que conecta você às melhores oportunidades.</span></h1>
				</div>
			</div>
		</div>
	</section>
	
	<section class="container-fluid mx-auto p-0" id="alavancar">
		<div class="row m-0">
			<div class="col-6 d-flex flex-column align-items-center justify-content-center">
				<div class="col-5 offset-md-5">
					<h1 class="color-blue">A Bitpro vai alavancar sua carreira.</h1>
					<h5 class="color-blue mt-5 font-weight-normal text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Temos vagas em todo o Brasil e encaminharemos você para elas. Com o processo seletivo, traçamos o seu perfil e conectamos você as melhores escolas.</h5>
				</div>
			</div>
			<div class="col-6" style="background-image: url('img/estampa.png'); background-size: cover">

			</div>
		</div>
	</section>

	<!-- VANTAGENS INICIO -->
	<section class="container-fluid mx-auto p-0 pt-5 pb-5 bg-yellow color-blue" id="vantagens">
		<div class="container pt-4 pb-4">
			<div class="row mx-auto mb-4">
				<div class="col-9 mx-auto">
					<h1 style="font-size: 4rem; text-align: center;">
						<span style="background-clip: content-box; background-color: white">Vantagens</span> de ser Bitpro.
					</h1>
				</div>
			</div>
			<div class="row mx-auto mt-5">
				<div class="col-10 mx-auto">
					<div class="row">
						<div class="col-6">
							<div class="d-flex align-items-center">
								<div class="pr-2">
									<img src="img/v1.png"  width="80px" alt="">
								</div>
								<div>
									<p class="mb-0">Acesso a vagas exclusivas.</p>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="d-flex  align-items-center">
								<div class="pr-2">
									<img src="img/v3.png"  width="80px" alt="">
								</div>
								<div>
									<p class="mb-0">Processo seletivo<br> simples.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mx-auto">
				<div class="col-10 mx-auto mt-3">
					<div class="row">
						<div class="col-6">
							<div class="d-flex align-items-center">
								<div class="pr-2">
									<img src="img/v2.png"  width="80px" alt="">
								</div>
								<div>
									<p class="mb-0">Oportunidades em todo o Brasil.</p>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="d-flex align-items-center">
								<div class="pr-2">
									<img src="img/v4.png"  width="80px" alt="">
								</div>
								<div>
									<p class="mb-0">Melhores oportunidades de trabalho, sem necessidade de indicação.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- VANTAGENS FIM -->

	<section class="container-fluid p-0 pt-5 pb-5 color-white" id="processo">
		<div class="container pt-2 pb-2">
			<div class="row">
				<div class="col-8 mx-auto">
					<h1>
						Entenda nosso <span style="border-bottom: 2px solid #fdd000">processo</span> seletivo.
					</h1>
					<h5 class="mt-4 mb-4 font-weight-normal">A Bitpro entende que, além do seu domínio da disciplina, importa também a sua capacidade de conquistar a turma, de se comunicar com ela e de explicar a matéria com simplicidade e eficiência, além, logicamente, de ter uma ótima postura profissional.</h5>
				</div>
			</div>


			<div class="row mt-4" id="processomobile">
				<div class="col-12 mx-auto">
					<div id="carouselExampleControls1" class="carousel slide" data-ride="carousel" data-interval="false">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					    	<div class="col-10 mx-auto">
						    	<div class="row">
						    		<div class="col-11 mx-auto">
								    	<h5>
								    		<span class="color-yellow">01.</span>
								    		<br>
								    		Faça seus cadastro.
								    	</h5>
							    	</div>
						    	</div>
					    	</div>
					    </div>
					    <div class="carousel-item">
					    	<div class="col-10 mx-auto">
						    	<div class="row">
						    		<div class="col-11 mx-auto">
								    	<h5>
								    		<span class="color-yellow">02.</span>
								    		<br>
								    		Realize o pagamento da sua inscrição.
								    	</h5>
							    	</div>
						    	</div>
					    	</div>
					    </div>
					    <div class="carousel-item">
					    	<div class="col-10 mx-auto">
						    	<div class="row">
						    		<div class="col-11 mx-auto">
								    	<h5>
								    		<span class="color-yellow">03.</span>
								    		<br>
								    		Envie seu currículo com informações básicas.
								    	</h5>
							    	</div>
						    	</div>
					    	</div>
					    </div>
					    <div class="carousel-item">
					    	<div class="col-10 mx-auto">
						    	<div class="row">
						    		<div class="col-11 mx-auto">
								    	<h5>
								    		<span class="color-yellow">04.</span>
								    		<br>
								    		Faça as provas teórica, socioemocional e psicotécnica.
								    	</h5>
							    	</div>
						    	</div>
					    	</div>
					    </div>
					    <div class="carousel-item">
					    	<div class="col-10 mx-auto">
						    	<div class="row">
						    		<div class="col-11 mx-auto">
								    	<h5>
								    		<span class="color-yellow">05.</span>
								    		<br>
								    		Grave uma aula por disciplina.
								    	</h5>
							    	</div>
						    	</div>
					    	</div>
					    </div>
					    <div class="carousel-item">
					    	<div class="col-10 mx-auto">
						    	<div class="row">
						    		<div class="col-11 mx-auto">
								    	<h5>
								    		<span class="color-yellow">06.</span>
								    		<br>
								    		Recebe a classificação e feedback.
								    	</h5>
							    	</div>
						    	</div>
					    	</div>
					    </div>
					    <div class="carousel-item">
					    	<div class="col-10 mx-auto">
						    	<div class="row">
						    		<div class="col-11 mx-auto">
								    	<h5>
								    		<span class="color-yellow">07.</span>
								    		<br>
								    		Recebe a classificação e feedback.
								    	</h5>
							    	</div>
						    	</div>
					    	</div>
					    </div>
					    <div class="carousel-item">
					    	<div class="col-10 mx-auto">
						    	<div class="row">
						    		<div class="col-11 mx-auto">
								    	<h5>
								    		<span class="color-yellow">08.</span>
								    		<br>
								    		Se você for selecionado, faz o curso presencial.
								    	</h5>
							    	</div>
						    	</div>
					    	</div>
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Anterior</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Próximo</span>
					  </a>
					</div>
				</div>
			</div>

			<div class="row mt-4" id="processoweb">
				<div class="col-12 mx-auto">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					    	<div class="col-10 mx-auto">
						    	<div class="row">
						    		<div class="col-3 mx-auto">
								    	<h5>
								    		<span class="color-yellow">01.</span>
								    		<br>
								    		Faça seus cadastro.
								    	</h5>
							    	</div>
						    		<div class="col-3 mx-auto">
								    	<h5>
								    		<span class="color-yellow">02.</span>
								    		<br>
								    		Realize o pagamento da sua inscrição.
								    	</h5>
							    	</div>
						    		<div class="col-3 mx-auto">
								    	<h5>
								    		<span class="color-yellow">03.</span>
								    		<br>
								    		Envie seu currículo com informações básicas.
								    	</h5>
							    	</div>
						    		<div class="col-3 mx-auto">
								    	<h5>
								    		<span class="color-yellow">04.</span>
								    		<br>
								    		Faça as provas teórica, socioemocional e psicotécnica.
								    	</h5>
							    	</div>
						    	</div>
					    	</div>
					    </div>
					    <div class="carousel-item">
					    	<div class="col-10 mx-auto">
						    	<div class="row">
						    		<div class="col-3 mx-auto">
								    	<h5>
								    		<span class="color-yellow">05.</span>
								    		<br>
								    		Grave uma aula por disciplina.
								    	</h5>
							    	</div>
						    		<div class="col-3 mx-auto">
								    	<h5>
								    		<span class="color-yellow">06.</span>
								    		<br>
								    		Recebe a classificação e feedback.
								    	</h5>
							    	</div>
						    		<div class="col-3 mx-auto">
								    	<h5>
								    		<span class="color-yellow">07.</span>
								    		<br>
								    		Recebe a classificação e feedback.
								    	</h5>
							    	</div>
						    		<div class="col-3 mx-auto">
								    	<h5>
								    		<span class="color-yellow">08.</span>
								    		<br>
								    		Se você for selecionado, faz o curso presencial.
								    	</h5>
							    	</div>
						    	</div>
					    	</div>
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Anterior</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Próximo</span>
					  </a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- valores INICIO -->
	<section class="container-fluid mx-auto p-0" id="valores">
		<div class="row m-0">
			<div class="col-10 pt-5 pb-5 bg-blue2 color-white">
				<div class="row offset-md-2 pt-2 pb-2 pl-5">
					<div class="col-8">
						<h1 class="mb-3">Valores da Inscrição</h1>
						<h3><ul><li>Escolha seu pacote:</li></ul></h3>
						<div class="row ml-1">
							<div class="col-5">
								<div class="bg-yellow color-blue p-2 pl-3 plano" onclick="location.href='https://app.bitproedu.com.br/criarconta/professor/1';">
									<h1 class="mb-1">R$ 160,00</h1>
									<h5 class="mb-0">1 DISCIPLINA</h5>
								</div>
							</div>
							<div class="col-5">
								<div class="bg-yellow color-blue p-2 pl-3 plano" onclick="location.href='https://app.bitproedu.com.br/criarconta/professor/1';">
									<h1 class="mb-1">R$ 240,00</h1>
									<h5 class="mb-0">2 DISCIPLINAS</h5>
								</div>
							</div>
						</div>

						<h3 class="mt-4"><ul><li>Aguarde o e-mail de comprovação para acessar a plataforma.</li></ul></h3>
						<h3 class="mt-4"><ul><li>Acesse a plataforma e participe do processo seletivo.</li></ul></h3>

						<p class="color-blue text-justify mt-5">O pagamento pode ser feito direto no cartão de crédito, que libera a inscrição na hora, ou pelo boleto enviado no seu e-mail. Nessa opção, a sua inscrição só será efetivada quando o banco confirmar o pagamento, o que pode levar alguns dias úteis.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- valores FIM -->


	<style type="text/css">
		label{color: inherit;}
		input[type=submit]{
			background-color: #fdd000;
			border-color: #fdd000;
			color: #001e6a;
			border-radius: 25px
		}
		.form-control{color:white;}
	</style>

	<!-- COMO FORMULARIO INICIO -->
	<section class="container-fluid mx-auto p-0 bg-blue pt-5 pb-5" id="contato">
		<div class="row m-0 pt-3 pb-3">
			<div class="col-6 mx-auto">
				<div class="row mx-auto d-flex align-items-center">
					<div class="col-6">
						<h1>
							<span class="font-weight-normal">Agora que você entendeu como funciona,</span> inscreva-se e faça parte da Bitpro.
						</h1>
					</div>
					<div class="col-6 pl-5">
						<form action="" id="form" method="post" autocomplete="off">
							<div class="form-group">
								<label>Nome</label>
								<input type="text" class="form-control" name="nome" id="nome">
							</div>
							
							<div class="form-group">
								<label>E-mail</label>
								<input type="text" class="form-control" name="email" id="email">
							</div>
							
							<div class="form-group">
								<label>Telefone</label>
								<input type="text" class="form-control" name="telefone" id="telefone">
							</div>
							
							<div class="form-group">
								<label for="">Estado:</label>
								<select class="form-control" name="estado" id="estado">
									<option value="0">Selecione</option>
									<option value="AC">Acre</option>
									<option value="AL">Alagoas</option>
									<option value="AP">Amapá</option>
									<option value="AM">Amazonas</option>
									<option value="BA">Bahia</option>
									<option value="CE">Ceará</option>
									<option value="DF">Distrito Federal</option>
									<option value="ES">Espírito Santo</option>
									<option value="GO">Goiás</option>
									<option value="MA">Maranhão</option>
									<option value="MT">Mato Grosso</option>
									<option value="MS">Mato Grosso do Sul</option>
									<option value="MG">Minas Gerais</option>
									<option value="PA">Pará</option>
									<option value="PB">Paraíba</option>
									<option value="PR">Paraná</option>
									<option value="PE">Pernambuco</option>
									<option value="PI">Piauí</option>
									<option value="RJ">Rio de Janeiro</option>
									<option value="RN">Rio Grande do Norte</option>
									<option value="RS">Rio Grande do Sul</option>
									<option value="RO">Rondônia</option>
									<option value="RR">Roraima</option>
									<option value="SC">Santa Catarina</option>
									<option value="SP">São Paulo</option>
									<option value="SE">Sergipe</option>
									<option value="TO">Tocantins</option>
								</select>
							</div>
							
							<div class="form-group">
								<label>Cidade</label>
								<input type="text" class="form-control" name="cidade" id="cidade">
							</div>
							<input type="submit" value="ENVIAR" class="btn btn-primary btn-lg">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- COMO FORMULARIO FIM -->

	<section class="container-fluid p-0 mx-auto" style="background-color:#ededee; color: #455a90">
		<div class="container pl-5 pr-5 pt-4 pb-4 d-flex justify-content-between" id="rodape">
			<span>2019 © BITPRO - Desenvolvido por Studio Que</span>
			<a href="http://studioque.com.br" target="_blank"><img src="img/studioque.png" width="100" alt="StudioQUE"></a>
		</div>
	</section>

	<p id="aguarde" class="fixed-top hide justify-content-center align-items-center w-100">
		<span></span>
	</p>

<script type="text/javascript">

function anime($id){
    $('html,body').animate({
        scrollTop: $("#"+$id).offset().top - 90
    },'slow');
}

function toggleAlerta(){
	alerta = $('#aguarde');
	if(alerta.hasClass('hide')){
		alerta.removeClass('hide')
		.addClass('d-flex');
	}else{
		alerta.addClass('hide')
		.removeClass('d-flex');
	}
}

$('#form').on('submit', function(e){
	e.preventDefault();
	toggleAlerta();
	var nome = $('#nome').val(),
		email = $('#email').val(),
		telefone = $('#telefone').val(),
		cidade = $('#cidade').val(),
		estado = $('#estado').val(),
		area = 'professor',
		origem = '<?php echo $url_atual;?>',
		ajaxResponse = $("#form"),
		divForm = $("#div-form");

	if(nome === '' || email === '' || telefone === '' || area === '' || cidade === '' || estado === ''){
		toggleAlerta();
		alert('Por favor, preencha todas as informações.');
		return false;
	}

	$.ajax({
		type: 'post',
		dataType: 'html',
		url: 'func/submit.php',
		async: false,
		data: {
			action: "submit",
			nome: nome,
			email: email,
			telefone: telefone,
			origem: origem,
			area: area,
			cidade: cidade,
			estado: estado
		},
		success: function(response){
			toggleAlerta();
			ajaxResponse.html(response);
			divForm.addClass('d-flex').addClass('justify-content-center').addClass('align-items-center');
		},
		error: function(response){
			toggleAlerta();
			ajaxResponse.html('Houve um erro ao tentar solicitar sua requisição. Por favor, atualize a página.');
			divForm.addClass('d-flex').addClass('justify-content-center').addClass('align-items-center');
		}
	});
});
</script>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet"> 
</body>
</html>