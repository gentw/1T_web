<nav class="navigation">
			<div class="fixed">	
				<div class="navigation__logo-box">
					<img class="navigation__logo" src="<?php echo get_theme_file_uri('/images/logo.png'); ?>" alt="1t-group">
					<span class="navigation__text-logo">1TGroup</span>
				</div>

				<div class="navigation__nav">
					<ul class="navigation__list">
						<li class="navigation__item"><a href="/" class="navigation__link">Fillimi</a></li>

						<li class="navigation__item"><a href="/punet-tona" class="navigation__link">Punet tona <span>&#10095;</span></a>
							<ul class="navigation__dropdown">
								<li class="navigation__dropdown-item"><a class="navigation__dropdown-list" href="#">Home Agency</a></li>
								<li class="navigation__dropdown-item"><a class="navigation__dropdown-list" href="#">Home Agency Call</a></li>
								<li class="navigation__dropdown-item"><a class="navigation__dropdown-list" href="#">Home Photography</a></li>
							</ul>
						</li>

						<li class="navigation__item"><a href="/rreth-nesh" class="navigation__link">Rreth Nesh</a></li>
						<li class="navigation__item"><a href="/sherbimet" class="navigation__link">Sherbimet</a></li>
						<li class="navigation__item"><a href="/kontakti" class="navigation__link">Kontakti</a></li>
					</ul>
				</div>
				<div class="copyright">
					<div class="container-fluid">
						<?php
							$year = date('Y');
						?>
						<p>© <?php echo $year; ?> 1T-Group.
							<br>Te gjitha te drejtat e rezervuar.
							<br>Zhvilluar nga <a href="https://bitemybytes.com">BiteMyBytes</a>
						</p>
					</div>
				</div>
			</div>
		</nav>