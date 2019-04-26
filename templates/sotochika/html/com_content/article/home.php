<!-- home video -->
<div class="home-video">
	<video width="100%" autoplay loop muted>
		<source src="images/sotochika.mp4" type="video/mp4" />
		<source src="images/sotochika.mov" type="video/quicktime" />
	</video>
	<div class="home-video-text wow rotateIn">
		<h1>あなたの「ベトナム」を創造するパートナー</h1>
		<h3>ベトナムでビジネスするならまずはソトチカへ</h3>
	</div>
</div>

<!-- home service -->
<div class="content-wraper home-service">
	<div class="container">
		<h3 class="title-style-1 wow pulse">
		<?php foreach ($this->item->jcfields as $field) : ?>
			<?php if ($field->name == 'home-service-title-1') : ?>
				<?php echo $field->value; ?>
			<?php endif ?>
		<?php endforeach; ?>
		</h3>
		<div class="sv-content wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
			<div class="col-md-4 col-xs-12 col-3-child">
				<div class="col-3-child-box">
					<!-- <img src="images/service1.png" alt="service child" /> -->
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'home-service-image-1') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
					<h4 class="title-style-6">
						<?php foreach ($this->item->jcfields as $field) : ?>
							<?php if ($field->name == 'home-service-title-child-1') : ?>
								<?php echo $field->value; ?>
							<?php endif ?>
						<?php endforeach; ?>
					</h4>
					<p class="service-description">
						<?php foreach ($this->item->jcfields as $field) : ?>
							<?php if ($field->name == 'home-service-description-1') : ?>
								<?php echo $field->value; ?>
							<?php endif ?>
						<?php endforeach; ?>
					</p>
					<!-- <a href="" class="btn-link-style-1">サービス詳細へ</a> -->
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'home-service-url-1') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="col-md-4 col-xs-12 col-3-child">
				<div class="col-3-child-box">
					<!-- <img src="images/service2.png" alt="service child" /> -->
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'home-service-image-2') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
					<h4 class="title-style-6">
						<?php foreach ($this->item->jcfields as $field) : ?>
							<?php if ($field->name == 'home-service-title-child-2') : ?>
								<?php echo $field->value; ?>
							<?php endif ?>
						<?php endforeach; ?>
					</h4>
					<p class="service-description">
						<?php foreach ($this->item->jcfields as $field) : ?>
							<?php if ($field->name == 'home-service-description-2') : ?>
								<?php echo $field->value; ?>
							<?php endif ?>
						<?php endforeach; ?>
					</p>
					<!-- <a href="" class="btn-link-style-1">サービス詳細へ</a> -->
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'home-service-url-2') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="col-md-4 col-xs-12 col-3-child">
				<div class="col-3-child-box">
					<!-- <img src="images/service3.png" alt="service child" /> -->
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'home-service-image-3') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
					<h4 class="title-style-6">
						<?php foreach ($this->item->jcfields as $field) : ?>
							<?php if ($field->name == 'home-service-title-child-3') : ?>
								<?php echo $field->value; ?>
							<?php endif ?>
						<?php endforeach; ?>
					</h4>
					<p class="service-description">
						<?php foreach ($this->item->jcfields as $field) : ?>
							<?php if ($field->name == 'home-service-description-3') : ?>
								<?php echo $field->value; ?>
							<?php endif ?>
						<?php endforeach; ?>
					</p>
					<!-- <a href="" class="btn-link-style-1">サービス詳細へ</a> -->
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'home-service-url-3') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- home mess -->
<div class="home-mess">
	<div class="container">
		<h2 class="title-style-2 wow lightSpeedIn" data-wow-duration="1s" data-wow-delay="1s">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'home-mess') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h2>
	</div>
</div>

<!-- home about us -->
<div class="content-wraper home-about-us">
	<div class="container">
		<h3 class="title-style-1 wow pulse" data-wow-duration="1s" data-wow-delay="0.7s">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'home-about-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="au-content wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
			<div class="about-logo-wrap">
				<div class="about-logo">
					<div class="about-item">
						<h3>
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'home-about-item1-title') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
						</h3>
						<p>
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'home-about-item1-content') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
						</p>
					</div>
					<div class="about-item">
						<h3>
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'home-about-item2-title') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
						</h3>
						<p>
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'home-about-item2-content') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
						</p>
					</div>
					<div class="about-item">
						<h3>
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'home-about-item3-title') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
						</h3>
						<p>
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'home-about-item3-content') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
						</p>
					</div>
					<div class="line-gray"></div>
				</div>
			</div>
			<div class="au-text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
				<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'home-about-description') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>