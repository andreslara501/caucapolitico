	<ul class="example-orbit" data-orbit>
		<!-- principal -->
		<?php
			$result = $this -> db
							-> order_by("id", "desc")
							-> limit(10)
							-> get('articulos');


			$results = $result -> result_array();

			foreach($results as $articulo){
				switch ($articulo["tipo_articulo"]) {
					case 1:
						$tipo_articulo = "noticias";
						break;
					case 2:
						$tipo_articulo = "reportajes";
						break;
					case 3:
						$tipo_articulo = "analisis";
						break;
				}
			?>
				<li>
					<a href="/<?php echo $tipo_articulo;?>/articulo/<?php echo $articulo["id"];?>">
						<div class="content-orbit-img">
							<img src="/uploads/<?php echo $articulo["id"];?>.jpg" class="img" style="position: absolute; top: -100px;">
						</div>

					    <div class="orbit-caption">
					    	<?php echo $articulo["titulo"];?>
					    </div>
					</a>
			  	</li>
			<?php
			}
		?>
	</ul>

	<div id="content">
		<div class="news">
			<!-- Ultimas noticias -->
			<div class="column small-12 large-5 content">
				<h1>Ultimas noticias</h1>

				<?php
					$result = $this -> db
			                        -> order_by("id", "desc")
			                        -> where('tipo_articulo', "1")
									-> limit(3)
			                        -> get('articulos');


					$results = $result -> result_array();

					foreach($results as $articulo){
					?>
						<a href="/noticias/articulo/<?php echo $articulo["id"];?>" class="new column small-12 medium-12">
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
									<img src="http://localhost/cauca/theme/img/<?php echo $play_next;?>.png">
								</div>
							</div>
						</a>
					<?php
					}
				?>

				<a href="/noticias/" class="button expand">Ver más noticias</a>
			</div>

			<!-- Análisis -->
			<div class="column small-12 large-5 content">
				<h1>Reportajes</h1>

				<?php
					$result = $this -> db
			                        -> order_by("id", "desc")
			                        -> where('tipo_articulo', "2")
									-> limit(3)
			                        -> get('articulos');


					$results = $result -> result_array();

					foreach($results as $articulo){
					?>
						<a href="/noticias/articulo/<?php echo $articulo["id"];?>" class="new column small-12 medium-12">
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
									<img src="http://localhost/cauca/theme/img/<?php echo $play_next;?>.png">
								</div>
							</div>
						</a>
					<?php
					}
				?>

				<a href="/reportajes/" class="button expand">Ver más reportajes</a>
			</div>

			<div class="column large-2 banner">
				<div id="pub2" class="show-for-large-up">Publicidad
				</div>
			</div>
		</div>

		<div class="news">
			<!-- Ultimas noticias -->
			<div class="column small-12 large-5 content">
				<h1>Análisis</h1>
				<?php
					$result = $this -> db
			                        -> order_by("id", "desc")
			                        -> where('tipo_articulo', "3")
									-> limit(3)
			                        -> get('articulos');


					$results = $result -> result_array();

					foreach($results as $articulo){
					?>
						<a href="/noticias/articulo/<?php echo $articulo["id"];?>" class="new column small-12 medium-12">
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
									<img src="http://localhost/cauca/theme/img/<?php echo $play_next;?>.png">
								</div>
							</div>
						</a>
					<?php
					}
				?>

				<a href="/analisis/" class="button expand">Análisis</a>
			</div>

			<!-- Recomendados -->
			<div class="column small-12 large-5 content">
				<h1>Recomendados</h1>

				<?php
					$result = $this -> db
			                        -> order_by("id", "desc")
									-> limit(6)
			                        -> get('articulos');


					$results = $result -> result_array();

					foreach($results as $articulo){
					?>
						<a href="/noticias/articulo/<?php echo $articulo["id"];?>" class="new column small-12 medium-6">
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
									<img src="http://localhost/cauca/theme/img/<?php echo $play_next;?>.png">
								</div>
							</div>
						</a>
					<?php
					}
				?>
			</div>

			<div class="column large-2 banner">
				<div id="pub2" class="show-for-large-up">Publicidad
				</div>
			</div>
		</div>

	</div>
