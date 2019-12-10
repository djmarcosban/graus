<?php
@$url_atual = "http" . (isset($_SERVER[HTTPS]) ? (($_SERVER[HTTPS]=="on") ? "s" : "") : "") . "://" . "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154111482-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-154111482-1');
	</script>
	<title>Graus</title>
	<base href="https://graus.com.br/web/">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="js/jquery.mask.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body <?php if(isset($_GET['anime'])){echo 'onload="anime(\''.$_GET['anime'].'\')"';}?>>
<section class="container-fluid bg-blue1 pt-1 pb-1">
	<div class="container">
		<div class="row d-flex justify-content-between align-items-center">
			<div id="menu-topo" class="col-3 pl-0 d-flex align-items-center justify-content-between">
				<a href="javascript:;" onclick="anime('contato');">Cadastre-se</a>
				<a href="javascript:;" onclick="anime('contato');">Fale conosco</a>
			</div>
			<div id="redes-telefone" class="col-3 d-flex align-items-center justify-content-between pr-0">
				<a href="tel:(62) 3586-5656"><b>(62) 3586-5656</b></a>
				<a href="https://www.facebook.com/graussolucoes/"><img src="img/fb.png" width="20" alt="Facebook"></a>
				<a href="https://instagram.com/graus_refrigeracao"><img src="img/ig.png" width="20" alt="Instagram"></a>

			</div>
		</div>
	</div>
</section>

<section class="container-fluid pt-4 pb-4" id="menu">
	<div class="container">
		<div class="row">
			<div class="col-6 pl-0">
				<img src="img/logo.png" alt="Graus">
			</div>
			<div class="col-6 d-flex align-items-center justify-content-between pr-0 color-blue2">
				<a href="javascript:;" onclick="anime('empresa');">EMPRESA</a>
				<a href="javascript:;" onclick="anime('autorizadas');">PARCERIA</a>
				<a href="javascript:;" onclick="anime('servicos');">SERVIÇOS</a>
				<a href="javascript:;" onclick="anime('contato');">CONTATO</a>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid h-100 p-0">
	<img src="img/slide1.jpg" class="w-100">
</section>

<section class="container-fluid bg-blue2" id="fale">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<img src="img/mulher.png" height="704" alt="">
			</div>
			<div class="col-6 d-flex flex-column justify-content-center">
				<h1 style="font-weight: 900;" class="mb-4 text-uppercase">
					Nós cuidamos tão bem dos refrigeradores <span style="font-weight: 500">quanto você cuida do caixa. </span>
				</h1>
				<p class="mb-4">
					Oferecer o atendimento que você precisa, no prazo que o seu negócio exige é o nosso trabalho há quase duas décadas. Conheça nossa empresa e descubra como manter seus produtos resfriados sem esquentar a cabeça.  
				</p>
				<button class="btn bg-blue1" onclick="anime('contato');" style="font-weight: 900">FALE COM A GENTE</button>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid bg-blue1 pt-5 pb-5" id="empresa">
	<div class="container">
		<div class="row">
			<div class="col-6 d-flex align-items-center">
				<h1 style="font-weight: 500;" class="text-uppercase">
					<span style="font-weight: 900">Uma empresa especialista em refrigeração</span> e em superação de expectativas.
				</h1>
			</div>
			<div class="col-5 d-flex flex-column justify-content-center text-justify">
				<p>A Graus surgiu de um conhecimento profundo do mercado de refrigeração em Goiás. Há 19 anos, somos comprometidos em fazer mais, melhor e em menos tempo. Nossos serviços são realizados no local, sem a necessidadede remover seu equipamento do PDV.</p>

				<p>Outro compromisso que é nossa marca registrada é cuidar da apresentação dos seus equipamentos. Temos peças originais e cuidamos para que seus aparelhos tenham aparência perfeita, o que, para o seu consumidor final, significa cuidado, asseio e confiabilidade.</p>

				<p>Bem, a gente tem muito a dizer, mas prefere que você ligue,  experimente os nossos serviços e descubra por que somos referência no mercado.</p>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid pt-5 pb-5" id="autorizadas">
	<div class="container">
		<div class="row">
			<div class="w-100">
				<h1 style="font-weight: 900;" class="mb-4 color-blue2 text-center text-uppercase">Somos autorizada das principais <br>marcas do mercado</h1>
				<div class="w-100 d-flex justify-content-between">
					<a href="https://www.artico.com.br/" target="_blank"><img src="img/artico.png" height="150" align="Artico"></a>
					<a href="http://fricon.com.br/pt/" target="_blank"><img src="img/fricon.png" height="150" align="Fricon"></a>
					<a href="https://www.imberacooling.com/brasil" target="_blank"><img src="img/imbera.png" height="150" align="Imbera"></a>
					<a href="http://www.aht-brasil.com/" target="_blank"><img src="img/aht.png" height="150" align="AHT"></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid bg-blue2 pt-5 pb-5" id="servicos">
	<div class="container">
		<div class="row">
			<div class="col-12 mx-auto">
				<h1 style="font-weight: 900" class="color-blue1 text-center mb-4">
					NOSSOS SERVIÇOS
				</h1>
				<p class="text-center text-uppercase">Nosso objetivo é que você não tenha problemas, nosso compromisso é resolvê-los rapidamente.</p>
			</div>
		</div>
		<div class="row mt-5">
		  <div class="col-4">
		    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		      <a class="nav-link active" id="a-tab" data-toggle="pill" href="#a" role="tab" aria-controls="a" aria-selected="true">Manutenção Preventiva <i class="fas fa-chevron-right"></i></a>
		      <a class="nav-link" id="b-tab" data-toggle="pill" href="#b" role="tab" aria-controls="b" aria-selected="false">Manutenção Corretiva <i class="fas fa-chevron-right"></i></a>
		      <a class="nav-link" id="c-tab" data-toggle="pill" href="#c" role="tab" aria-controls="c" aria-selected="false">Instalação <i class="fas fa-chevron-right"></i></a>
		      <a class="nav-link" id="d-tab" data-toggle="pill" href="#d" role="tab" aria-controls="d" aria-selected="false">Fast Service <i class="fas fa-chevron-right"></i></a>
		      <a class="nav-link" id="e-tab" data-toggle="pill" href="#e" role="tab" aria-controls="e" aria-selected="false">Movimentação <i class="fas fa-chevron-right"></i></a>
		    </div>
		  </div>
		  <div class="col-8">
		    <div class="tab-content" id="v-pills-tabContent">
		      <div class="tab-pane fade show active" id="a" role="tabpanel" aria-labelledby="a-tab">
		      	<div class="d-flex align-items-center mb-4">
		      		<img src="img/man-preventiva.png" width="50" alt="">
		      		<h4 style="font-weight: 900" class="mb-0 ml-3 text-uppercase">Manutenção Preventiva</h4>
		      	</div>
				<p>Obedece um cronograma estabelecido pelo fabricante. Um profissional com treinamento específico analisa itens críticos em cada fase da vida útil. O objetivo é manter a eficiência, a estética e até preservar o valor do equipamento. Os serviços são feitos no local, diminuindo o tempo de execução e não interferindo no funcionamento do seu negócio. </p>
		      </div>
		      <div class="tab-pane fade" id="b" role="tabpanel" aria-labelledby="b-tab">
		      	<div class="d-flex align-items-center mb-4">
		      		<img src="img/man-corretiva.png" width="50" alt="">
		      		<h4 style="font-weight: 900" class="mb-0 ml-3 text-uppercase">Manutenção Corretiva</h4>
		      	</div>
				<p>Quando seu equipamento para, a gente se movimenta rapidamente para resolver. Nossa manutenção é eficiente e os reparos necessários são feitos no próprio local. Nada de complicação e perda de tempo, nosso objetivo é simples: resolver seu problema o mais rápido possível.</p>
		      </div>
		      <div class="tab-pane fade" id="c" role="tabpanel" aria-labelledby="c-tab">
		      	<div class="d-flex align-items-center mb-4">
		      		<img src="img/instalacao.png" width="50" alt="">
		      		<h4 style="font-weight: 900" class="mb-0 ml-3 text-uppercase">Instalação</h4>
		      	</div>
				<p>O local e a forma de instalar o equipamento influencia o desempenho, a confiabilidade e a durabilidade. Uma equipe treinada da Graus vai até o seu negócio e avalia todos esses pontos, além de fazer a instalação correta, mantendo a garantia e a máxima performance do seu equipamento.</p>
		      </div>
		      <div class="tab-pane fade" id="d" role="tabpanel" aria-labelledby="d-tab">
		      	<div class="d-flex align-items-center mb-4">
		      		<img src="img/fast-service.png" width="50" alt="">
		      		<h4 style="font-weight: 900" class="mb-0 ml-3 text-uppercase">Fast Service</h4>
		      	</div>
				<p>Todo mundo diz que tempo é dinheiro, mas quando o assunto é refrigeração, tempo é muito dinheiro. Por isso, nosso compromisso é equipe no seu negócio em, no máximo, 3 horas nos endereços na região da Grande Goiânia. Pense rápido e escolha o serviço mais ágil e confiável da cidade.</p>
		      </div>
		      <div class="tab-pane fade" id="e" role="tabpanel" aria-labelledby="e-tab">
		      	<div class="d-flex align-items-center mb-4">
		      		<img src="img/movimentacao.png" width="50" alt="">
		      		<h4 style="font-weight: 900" class="mb-0 ml-3 text-uppercase">Movimentação</h4>
		      	</div>
				<p>Equipamentos de refrigeração são sensíveis à movimentação. Sempre que você precisar movê-los, tenha a segurança de uma equipe técnica que conhece profundamente o maquinário e sabe como leva-los para onde você precisa com a segurança que seu patrimônio merece.</p>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
</section>

<section class="container-fluid pt-5 pb-5" id="c-form">
	<div class="container">
		<div class="row">
			<div class="col-9 mx-auto" id="contato">
				<h2 class="color-blue2 text-center mb-5" style="font-weight: 900">FALE CONOSCO</h2>
				<div id="d-form">
					<form action="" method="post" id="form" autocomplete="off">
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<input class="form-control" type="text" name="empresa" required="required" id="fempresa" placeholder="Empresa" />
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="email" required="required" id="email" placeholder="E-mail" />
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-3">
											<input class="form-control" required="required" maxlength="2" type="text" name="ddd" id="ddd" placeholder="DDD" />
										</div>
										<div class="col-9">
											<input class="form-control" required="required" type="text" name="telefone" id="telefone" placeholder="Telefone" />
										</div>
									</div>
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="cidade" required="required" id="cidade" placeholder="Cidade" />
								</div>
							</div>
							<div class="col-6">
								<div class="form-group h-100">
									<textarea class="form-control" style="height: 92%" name="mensagem" required="required" id="mensagem" placeholder="Mensagem"></textarea>
								</div>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-12 d-flex justify-content-center">
								<input type="submit" value="SOLICITAR CONTATO" class="btn bg-blue2" style="font-weight: 900">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid p-0">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15290.473454588657!2d-49.2985591!3d-16.6459119!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbcdfa9625db2e516!2zR1JBVVMgU09MVcOHw5VFUyBFTSBSRUZSSUdFUkHDh8ODTw!5e0!3m2!1spt-BR!2sbr!4v1575475481188!5m2!1spt-BR!2sbr" height="450" frameborder="0" style="border:0; width: 100%" allowfullscreen=""></iframe>
</section>

<section class="container-fluid color-blue2 pt-5 pb-5" id="rodape">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<h2 class="text-uppercase mb-5" style="font-weight: 900">onde <span style="border-bottom: 3px solid #bfdce6">estamos</span></h2>
				<p>
					Graus Comércio e Serviços LTDA – ME<br>
					CNPJ 04.180.940/0001-60
				</p>
				<p>
					Avenida Mato Grosso do Sul, 173<br>
					Setor Perim, Goiânia – GO <br>
					CEP 74580-150<br>
					<span style="font-weight: 900">Fone: (62) 3586-5656</span><br>
					E-mail: atendimento@graus.com.br 
				</p>
			</div>
			<div class="col-6">
				<!-- SnapWidget -->
				<script src="https://snapwidget.com/js/snapwidget.js"></script>
				<iframe src="https://snapwidget.com/embed/767523" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid color-blue2 pt-3 pb-3" id="footer" style="background-color: #ececed">
	<div class="container">
		<div class="row">
			<div class="col-12 d-flex justify-content-between align-items-center">
				<div>2019 © Graus Comércio e Serviços - Desenvolvido por Studio Que</div>
				<a href="http://studioque.com.br" target="_blank"><img src="img/studioque.png" width="150" alt="StudioQUE"></a>
			</div>
		</div>
	</div>
</section>

<p id="aguarde" class="fixed-top hide justify-content-center align-items-center w-100">
	<span></span>
</p>

<script type="text/javascript">
$(document).ready(function () { 
    var telefone = $("#telefone"),
    	ddd = $("#ddd");

    ddd.on("change paste keyup", function() {
    	if(ddd.val().length === 2){
    		telefone.focus();
    	}
    });
    telefone.on("change paste keyup", function() {
    	if(telefone.val()[0] === '9'){
    		telefone.mask('00000-0000');
    	}else{
    		telefone.mask('0000-0000');
    	}
	});
});

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
	var empresa = $('#fempresa').val(),
		email = $('#email').val(),
		telefone = $('#telefone').val(),
		ddd = $('#ddd').val(),
		cidade = $('#cidade').val(),
		mensagem = $('#mensagem').val(),
		ajaxResponse = $("#form"),
		divForm = $("#d-form");

	if(empresa === '' || email === '' || telefone === '' || cidade === '' || mensagem === ''){
		toggleAlerta();
		alert('Por favor, preencha todas as informações.');
		return false;
	}

	$.ajax({
		type: 'post',
		dataType: 'html',
		url: 'func/send.php',
		async: false,
		data: {
			action: "submit",
			empresa:empresa,
			email:email,
			ddd:ddd,
			telefone:telefone,
			cidade:cidade,
			mensagem:mensagem
		},
		success: function(response){
			toggleAlerta();
			if(response === '1'){
				ajaxResponse.html('Obrigado por entrar em contato.');
				alert('Obrigado por entrar em contato.');
				divForm.addClass('d-flex').addClass('justify-content-center').addClass('align-items-center');
			}
		},
		error: function(response){
			toggleAlerta();
			ajaxResponse.html('Houve um erro ao tentar solicitar sua requisição. Por favor, atualize a página.');
			divForm.addClass('d-flex').addClass('justify-content-center').addClass('align-items-center');
		}
	});
});
</script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</body>
</html>