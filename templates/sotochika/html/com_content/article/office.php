<div class="single-page-wraper">
	<div class="content-wraper">
		<div class="container">
			<h2 class="title-style-1">
				<!-- office title -->
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-title') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
				<!-- office title -->
			</h2>
			<p>
				<!-- office description -->
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-description') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
				<!-- office description -->
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
									<?php if ($field->name == 'office-slider-1') : ?>
										<?php echo $field->value; ?>
									<?php endif ?>
								<?php endforeach; ?>
								<!-- office slider -->

				                <div data-u="thumb">
				                	<!-- office slider -->
									<?php foreach ($this->item->jcfields as $field) : ?>
										<?php if ($field->name == 'office-slider-1') : ?>
											<?php echo $field->value; ?>
										<?php endif ?>
									<?php endforeach; ?>
									<!-- office slider -->
				                </div>
				            </div>
				            <div>
				            	<!-- office slider -->
								<?php foreach ($this->item->jcfields as $field) : ?>
									<?php if ($field->name == 'office-slider-2') : ?>
										<?php echo $field->value; ?>
									<?php endif ?>
								<?php endforeach; ?>
								<!-- office slider -->

				                <div data-u="thumb">
				                	<!-- office slider -->
									<?php foreach ($this->item->jcfields as $field) : ?>
										<?php if ($field->name == 'office-slider-2') : ?>
											<?php echo $field->value; ?>
										<?php endif ?>
									<?php endforeach; ?>
									<!-- office slider -->
				                </div>
				            </div>
				            <div>
				            	<!-- office slider -->
								<?php foreach ($this->item->jcfields as $field) : ?>
									<?php if ($field->name == 'office-slider-3') : ?>
										<?php echo $field->value; ?>
									<?php endif ?>
								<?php endforeach; ?>
								<!-- office slider -->

				                <div data-u="thumb">
				                	<!-- office slider -->
									<?php foreach ($this->item->jcfields as $field) : ?>
										<?php if ($field->name == 'office-slider-3') : ?>
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
					<?php
					$page_title = JFactory::getDocument()->getTitle();
					?>
				    <a class="link-floo-box" href="index.php/floor-map-6?service=<?php echo $page_title; ?>&floor=6 floor-Type A">
					    <div class="link-floo-box-child">
							<h6>オフィスA [ 6階 ]</h6>
					    	<p>間取り図を表示する</p>
					    </div>
				    </a>
				    <a class="link-floo-box" href="index.php/floor-map-7?service=<?php echo $page_title; ?>&floor=7 floor-Type B">
					    <div class="link-floo-box-child">
							<h6>オフィスB [ 7階 ]</h6>
					    	<p>間取り図を表示する</p>
					    </div>
				    </a>

				    <div class="ors1-description">
				    	<h4 class="title-style-7">
				    		<!-- office title 2 -->
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'office-title-2') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
							<!-- office title 2 -->
				    	</h4>
				    	<div class="">
				    		<!-- office description 2 -->
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'office-description-2') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
							<!-- office description 2 -->
				    	</div>
				    </div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<!-- service 1 -->
					<div class="office-service-wraper">
						<div class="office-service-title">
							<h5>サービス内容</h5>
						</div>
						<div class="office-service-content">
							<!-- office service 1 -->
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'office-service-1') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
						</div>
					</div>

					<!-- service 2 -->
					<div class="office-service-wraper">
						<div class="office-service-title">
							<h5>オプション対応</h5>
						</div>
						<div class="office-service-content">
							<!-- office service 2 -->
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'office-service-2') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-xs-12 search-office-box">
					<a class="btn-link-style-1" href="index.php/contact">空室状況を確認する</a>

					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'pdf-file') : ?>
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
				<!-- office title 3 -->
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-title-3') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
				<!-- office title 3 -->
			</h2>
			<div class="row">
				<div class="col-md-12 office-rent-step">
					<!-- office image -->
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'office-image') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
					<!-- office image -->
				</div>
				<div class="col-md-12">
					<table class="office-rent-desciption">
						<!-- office image -->
						<?php foreach ($this->item->jcfields as $field) : ?>
							<?php if ($field->name == 'office-description-3') : ?>
								<?php echo $field->value; ?>
							<?php endif ?>
						<?php endforeach; ?>
						<!-- office image -->
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="content-wraper">
		<div class="container">
			<h2 class="title-style-1">ご契約に必要なもの</h2>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="ors1-description">
				    	<h4 class="title-style-7">法人のお客様</h4>
					    <!-- office description 4 -->
						<?php foreach ($this->item->jcfields as $field) : ?>
							<?php if ($field->name == 'office-description-4-left') : ?>
								<?php echo $field->value; ?>
							<?php endif ?>
						<?php endforeach; ?>
						<!-- office description 4 -->
				    </div>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="ors1-description">
				    	<h4 class="title-style-7">個人のお客様</h4>
					    <!-- office description 4 -->
						<?php foreach ($this->item->jcfields as $field) : ?>
							<?php if ($field->name == 'office-description-4-right') : ?>
								<?php echo $field->value; ?>
							<?php endif ?>
						<?php endforeach; ?>
						<!-- office description 4 -->
				    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 btn-link-box">
					<a class="btn-search-office" href="index.php/contact">お問合せ・内見の予約をする</a>
				</div>
			</div>
		</div>
	</div>
</div>

