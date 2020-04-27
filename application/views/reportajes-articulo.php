<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog" class="reveal-modal-bg">
   <h2 id="modalTitle">Awesome. I have it.</h2>
   <p class="lead">Your couch.  It is mine.</p>
   <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
   <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<?php
    $result = $this -> db
                    -> order_by("id", "desc")
                    -> where("id=".$id)
                    -> get('articulos');

    $articulo = $result -> row_array();
?>

	<div id="content">

		<nav class="breadcrumbs">
		  <a href="/">Inicio</a>
          <a href="/reportajes/">Reportajes</a>
		  <a class="current" href="#"><?php echo $articulo["titulo"];?></a>
		</nav>

		<div class="articulo">
			<!-- Ultimas noticias -->
			<div class="column small-12 large-10 content">
                <h1><?php echo $articulo["titulo"];?></h1>
                <?php
                    if($articulo["youtube"]==""){
                        ?>
                        <img src="/uploads/<?php echo $articulo["id"];?>.jpg">
                        <?php
                    }else{
                        $youtube_array = explode("=",$articulo["youtube"]);
                        ?>
                        <div class="container">
                            <iframe src="https://www.youtube.com/embed/<?php echo $youtube_array[1];?>" frameborder="0" allowfullscreen class="video"></iframe>
                        </div>
                        <?php
                    }
                ?>
                <div>
                    <?php echo $articulo["texto"];?>
                </div>
			</div>

			<div class="column large-2 banner" style="padding-top:5px; padding-bottom:10px;">
				<div id="pub2" class="show-for-large-up">Publicidad
				</div>
			</div>
		</div>
	</div>

    <div id="disqus_thread"></div>
    <script>
        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
         */
        /*
        var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() {  // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');

            s.src = '//caucapoliticocom.disqus.com/embed.js';

            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

    <br>
