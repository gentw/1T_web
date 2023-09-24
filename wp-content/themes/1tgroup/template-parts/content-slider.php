<aside class="aside aside--index">
			<div class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators container-fluid">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>


				<div class="slider carousel-inner">
				<div class="overlay"></div>
				<?php 
					$maxId = dealWithSlider()['max_id'];
					$mainArray = dealWithSlider()['slider_info'];
					$index = 1;
					foreach($mainArray as $k => $v) {
						$id = $v['id'];
						$title = $v['title'];
						$excerpt = $v['excerpt'];
						$image = $v['image'];

				?>			
				
				<div class="slide carousel-item <?php if($maxId == $id){echo "active";}?>">
					<div class="slide__image" style="background-image: url(<?php echo $image; ?>);"></div>
					<div class="slide__content container-fluid">
						<div class="slide__text">
							<h1 class="slide__text-header"><?php echo $title; ?></h1>
							<p class="slide__text-paragraph"><?php echo $excerpt; ?></p>
							<a class="btn btn--slider" href="#">Our Work</a>
						</div>
						<div class="slide__number"><?php echo $index++; ?><span class="slide__number-limit">/3</span></div>
					</div><!-- slide-content -->
				</div><!-- slide -->
				
				<?php 
					}
				?>
				

				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
			  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Next</span>
			  	</a>
				<!-- <div class="controls">
					<div class="controls__arrow container-fluid">
						<a class="controls__prev ">&#10094;</a>
						<div class="dots">
							<span class="dot">1</span> 
  							<span class="dot">1</span> 
  							<span class="dot">1</span> 
						</div>
  						<a class="controls__next">&#10095;</a>
					</div>
				</div> -->
			</div><!-- slider -->



			</div>
			
		</aside>