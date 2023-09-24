<aside class="aside">
	<div class="swipe">
		<div class="swipe__arrow">&#10095;</div>
	</div>
	<div class="top-text container-fluid">
		<h1 class="heading-primary">Our Works</h1>
		<p class="paragraph-top">Memory</p>
	</div>
	<div class="line-break"></div>
	<div class="gallery container-fluid">
		<div class="gallery__category">
			<?php 
				$categories = new WP_Query(array(
					'posts_per_page' => -1,
					'post_type'	=> 'company',
					'orderby'	=> 'ID',
					'order'		=> 'DESC'
				));
			?>
			<ul class="gallery__list">
				<li class="gallery__item"><a class="gallery__link active" href="#" data-filter="all">All</a></li>
				<?php
				while($categories->have_posts()) {
					$categories->the_post();
				?>
				<li class="gallery__item">
					<a class="gallery__link" href="#" data-filter="branding"><?php the_title();?></a>
				</li>
				<?php } ?>
			</ul>
		</div>
		<div class="gallery__images">
			<div class="block filter branding">
				<div class="inner" style="background-image: url('./src/images/nat-1.jpg');">
					<div class="inner__info">
						<p class="paragraph-aside">Life, Photography</p>
						<h1 class="heading-secondary"><a href="#">Vestibulum auctor dapibus</a> </h1>
					</div>
				</div>
			</div>
			<div class="block filter branding">
				<div class="inner" style="background-image: url('./src/images/nat-1.jpg');">
					<div class="inner__info">
						<p class="paragraph-aside">Life, Photography</p>
						<h1 class="heading-secondary"><a href="#">Vestibulum auctor dapibus</a> </h1>
					</div>
				</div>
			</div>
			<div class="block filter branding">
				<div class="inner" style="background-image: url('./src/images/nat-1.jpg');">
					<div class="inner__info">
						<p class="paragraph-aside">Life, Photography</p>
						<h1 class="heading-secondary"><a href="#">Vestibulum auctor dapibus</a> </h1>
					</div>
				</div>
			</div>
			<div class="block filter branding">
				<div class="inner" style="background-image: url('./src/images/nat-1.jpg');">
					<div class="inner__info">
						<p class="paragraph-aside">Life, Photography</p>
						<h1 class="heading-secondary"><a href="#">Vestibulum auctor dapibus</a> </h1>
					</div>
				</div>
			</div>
			<div class="block filter branding">
				<div class="inner" style="background-image: url('./src/images/nat-1.jpg');">
					<div class="inner__info">
						<p class="paragraph-aside">Life, Photography</p>
						<h1 class="heading-secondary"><a href="#">Vestibulum auctor dapibus</a> </h1>
					</div>
				</div>
			</div>
			<div class="block filter branding">
				<div class="inner" style="background-image: url('./src/images/nat-1.jpg');">
					<div class="inner__info">
						<p class="paragraph-aside">Life, Photography</p>
						<h1 class="heading-secondary"><a href="#">Vestibulum auctor dapibus</a> </h1>
					</div>
				</div>
			</div>
			<div class="block filter branding">
				<div class="inner" style="background-image: url('./src/images/nat-1.jpg');">
					<div class="inner__info">
						<p class="paragraph-aside">Life, Photography</p>
						<h1 class="heading-secondary"><a href="#">Vestibulum auctor dapibus</a> </h1>
					</div>
				</div>
			</div>
			<div class="block filter branding">
				<div class="inner" style="background-image: url('./src/images/nat-1.jpg');">
					<div class="inner__info">
						<p class="paragraph-aside">Life, Photography</p>
						<h1 class="heading-secondary"><a href="#">Vestibulum auctor dapibus</a> </h1>
					</div>
				</div>
			</div>
		</div>
		<div class="gallery__btn">
			<a class="btn btn--gallery" href="#">Our Work</a>
		</div>
	</div>
</aside>