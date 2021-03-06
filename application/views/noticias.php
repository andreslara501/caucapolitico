<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog" class="reveal-modal-bg">
   <h2 id="modalTitle">Awesome. I have it.</h2>
   <p class="lead">Your couch.  It is mine.</p>
   <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
   <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

	<div id="content">

		<nav class="breadcrumbs">
		  <a href="/">Inicio</a>
		  <a class="current" href="#">Noticias</a>
		</nav>

		<div class="news">
			<!-- Ultimas noticias -->
			<h1>Ultimas noticias</h1>
			<div class="column small-12 large-10 content">
				<?php
					$result = $this -> db
			                        -> order_by("id", "desc")
			                        -> where('tipo_articulo', "1")
			                        -> get('articulos');

					$results = $result -> result_array();

					foreach($results as $articulo){
					?>
						<a href="/noticias/articulo/<?php echo $articulo["id"];?>" class="new column small-12 medium-6" style="padding: 4px;">
							<div class="photo">
								<div class="img" style="background:url(/uploads/<?php echo $articulo["id"];?>.jpg); background-size: auto 100%"></div>
								<div class="info-img">
									<?php echo $articulo["titulo"];?>
								</div>
							</div>
							<div class="info-text clearfix">
								<p class="new column small-10">
									<?php echo strip_tags($articulo["descripcion"]);?>
								</p>
								<div class="info-text-img column small-2">
                                    <?php
                                        if($articulo["youtube"]==""){
                                            $play_next = "next";
                                        }else{
                                            $play_next = "play";
                                        }
                                    ?>
									<img src="/theme/img/<?php echo $play_next;?>.png">
								</div>
							</div>
						</a>
					<?php
					}
				?>
			</div>

			<div class="column large-2 banner" style="padding-top:5px; padding-bottom:10px;">
				<div id="pub2" class="show-for-large-up">Publicidad
				</div>
			</div>
		</div>
	</div>
