<div class="single-page-wraper">
	<div class="content-wraper">
		<div class="container">
			<h2 class="title-style-1">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'conference-room-title') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</h2>
			<p>
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'conference-room-description') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</p>
		</div>
	</div>
	<div class="content-wraper">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-12">
					<div id="jssor_1" style="height:500px;">
				        <!-- Loading Screen -->
				        <div class="main-slide" data-u="slides">
				            <div>
				            	<!-- office slider -->
								<?php foreach ($this->item->jcfields as $field) : ?>
									<?php if ($field->name == 'conference-room-slider-1') : ?>
										<?php echo $field->value; ?>
									<?php endif ?>
								<?php endforeach; ?>
								<!-- office slider -->

				                <div data-u="thumb">
				                	<!-- office slider -->
									<?php foreach ($this->item->jcfields as $field) : ?>
										<?php if ($field->name == 'conference-room-slider-1') : ?>
											<?php echo $field->value; ?>
										<?php endif ?>
									<?php endforeach; ?>
									<!-- office slider -->
				                </div>
				            </div>
				            <div>
				            	<!-- office slider -->
								<?php foreach ($this->item->jcfields as $field) : ?>
									<?php if ($field->name == 'conference-room-slider-2') : ?>
										<?php echo $field->value; ?>
									<?php endif ?>
								<?php endforeach; ?>
								<!-- office slider -->

				                <div data-u="thumb">
				                	<!-- office slider -->
									<?php foreach ($this->item->jcfields as $field) : ?>
										<?php if ($field->name == 'conference-room-slider-2') : ?>
											<?php echo $field->value; ?>
										<?php endif ?>
									<?php endforeach; ?>
									<!-- office slider -->
				                </div>
				            </div>
				            <div>
				            	<!-- office slider -->
								<?php foreach ($this->item->jcfields as $field) : ?>
									<?php if ($field->name == 'conference-room-slider-3') : ?>
										<?php echo $field->value; ?>
									<?php endif ?>
								<?php endforeach; ?>
								<!-- office slider -->

				                <div data-u="thumb">
				                	<!-- office slider -->
									<?php foreach ($this->item->jcfields as $field) : ?>
										<?php if ($field->name == 'conference-room-slider-3') : ?>
											<?php echo $field->value; ?>
										<?php endif ?>
									<?php endforeach; ?>
									<!-- office slider -->
				                </div>
				            </div>
				        </div>
				        <!-- Thumbnail Navigator -->
				        <div data-u="thumbnavigator" class="jssort11" style="position:absolute;top:0px;font-family:Arial, Helvetica, sans-serif;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none;" data-autocenter="2">
				            <!-- Thumbnail Item Skin Begin -->
				            <div data-u="slides" style="cursor: default;">
				                <div data-u="prototype" class="p">
				                    <div data-u="thumbnailtemplate" class="tp"></div>
				                </div>
				            </div>
				            <!-- Thumbnail Item Skin End -->
				        </div>
				    </div>
				    <!-- #endregion Jssor Slider End -->
				    <div class="ors1-description">
				    	<h4 class="title-style-7">
				    		<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'conference-room-title-2') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
				    	</h4>
					    <?php foreach ($this->item->jcfields as $field) : ?>
							<?php if ($field->name == 'conference-room-description-2') : ?>
								<?php echo $field->value; ?>
							<?php endif ?>
						<?php endforeach; ?>
				    </div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="office-service-wraper">
						<div class="office-service-title">
							<h5>サービス内容</h5>
						</div>
						<div class="office-service-content">
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'conference-room-service-1') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
						</div>
					</div>

					<div class="office-service-wraper">
						<div class="office-service-title">
							<h5>サービス内容</h5>
						</div>
						<div class="office-service-content">
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'conference-room-service-2') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-xs-12 search-office-box">
					<a class="btn-link-style-1" href="index.php/contact">空室状況を確認する</a>
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'conference-room-pdf-file') : ?>
							<a class="btn-link-style-1" href="<?php echo $field->rawvalue; ?>" target="_blank">料金表を確認する</a>
						<?php endif ?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="content-wraper">
		<div class="container">
			<h2 class="title-style-1">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'conference-room-title-3') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</h2>
			<div class="row office-rent-desciption">
				<div class="col-md-12">
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'conference-room-description-3') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 btn-link-box">
					<a class="btn-search-office" href="index.php/contact">ご予約はこちらから</a>
				</div>
			</div>
		</div>
	</div>
</div>