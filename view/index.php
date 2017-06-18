<?php include_once("header.php");?>

<section>


	<div class="container" id="destaque-noticias-container">

<div class="col-md-3 col-doacao">
		<div class="form-group">
			<h3>Colabore com o café de Rua, faça sua doação!</h3>
			<h4> Participe com roupas e alimentos, nós buscamos em sua casa.</h3>
			<label for="exampleInputEmail1">Email</label>
			<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Senha</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>

		<button type="Doar" class="btn btn-default">Doar</button>
</div>

<div class="col-md-9">

		<div id="destaque-noticias">

			<div class="item">

				<div class="col-sm-6 col-imagem">
					<img src="img/fotoCafe.jpg" height = "300px" width = "100%"  alt="Nome do Produto">
				</div>
				<div class="col-sm-6 col-descricao">
					<h2>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.

</h2>

				</div>

			</div>


			<div class="item">

				<div class="col-sm-6 col-imagem">
					<img src="img/doacao1.png" height = "300px" width = "100%" alt="Nome do Produto">
				</div>
				<div class="col-sm-6 col-descricao">
					<h2>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</h2>

				</div>

			</div>

			<div class="item">

				<div class="col-sm-6 col-imagem">
					<img src="img/doar-agasalho.jpg" height = "300px" width = "100%" alt="Nome do Produto">
				</div>
				<div class="col-sm-6 col-descricao">
					<h2>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</h2>

				</div>

			</div>

		</div>


		<button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
		<button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>

	</div>
</div>
					</div>
				</div>

			</div>
		</div>

	</div>

	<div id="mais-buscados" class="container">

	</div>

		<div class="row text-center title-default-roxo">

			<hr>
			<h2>Mais informações</h2>

		</div>

		<div class="row">

			<div class="col-md-4">
				<div class="box-more_information-info">
					<a href="#">
						<img src="img/coletivando.jpg" height = "250px" width = "90%" alt="Coletivando" class="more_information-img">
						<h2>Projeto Coletivando</h2>
					</a>
				</div>

			</div>

			<div class="col-md-4">
				<div class="box-more_information-info">
					<a href="#">
						<img src="img/especial.jpg" height = "250px" width = "90%" alt="fotos" class="more_information-img">
						<h2>Participe do nosso bazar</h2>
					</a>
				</div>

			</div>

			<div class="col-md-4">
				<div class="box-more_information-info">
					<a href="#">
						<img src="img/agasalho.jpg" height = "250px" width = "90%" alt="Eventos" class="more_information-img">
						<h2>Próximas campanhas</h2>
					</a>
				</div>

			</div>
		</div>

</section>

<?php include_once("footer.php");?>

<script>
$(function(){

	$("#destaque-noticias").owlCarousel({

      autoPlay: 5000,
      items : 1,
      singleItem: true

  	});

  	var owlDestaque = $("#destaque-noticias").data('owlCarousel');

  	$('#btn-destaque-prev').on("click", function(){

  		owlDestaque.prev();

  	});

  	$('#btn-destaque-next').on("click", function(){

  		owlDestaque.next();

  	});

  	$('.estrelas').each(function(){

  		$(this).raty({
	  		starHalf    : 'lib/raty/lib/images/star-half.png',                                // The name of the half star image.
			starOff     : 'lib/raty/lib/images/star-off.png',                                 // Name of the star image off.
			starOn      : 'lib/raty/lib/images/star-on.png',
			score		: parseFloat($(this).data("score"))
	  	});

  	});

});
</script>
