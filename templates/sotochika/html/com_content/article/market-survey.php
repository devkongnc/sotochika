<div class="content-wraper single-page-wraper">
	<div class="container">
		<h2 class="title-style-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
		<!-- market survey title -->
		<?php foreach ($this->item->jcfields as $field) : ?>
			<?php if ($field->name == 'market-survey-title') : ?>
				<?php echo $field->value; ?>
			<?php endif ?>
		<?php endforeach; ?>
		<!-- market survey title -->
		</h2>
		<h3 class="title-style-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
		<!-- market survey search title -->
		<?php foreach ($this->item->jcfields as $field) : ?>
			<?php if ($field->name == 'market-survey-search-title') : ?>
				<?php echo $field->value; ?>
			<?php endif ?>
		<?php endforeach; ?>
		<!-- market survey search title -->
		</h3>
	</div>
	<div class="section-full-color">
		<div class="container">
			<div class="market-survey-box-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
				<img class="market-survey-maps" src="images/market-survey.jpg" alt="maps">
				<div class="maps-1"></div>
				<div class="maps-2"></div>
				<div class="maps-3"></div>
				<div class="maps-4"></div>
				<div class="maps-5"></div>
				<div class="col-md-4 col-sm-6 col-xs-12 ms-search">
					<a href="<?php echo JUri::base(); ?>index.php/market-survey/ho-chi-minh">
						<div class="ms-search-box-1">
							<!-- btn 1 -->
							<h5>
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'ms-button-title-1') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
							</h5>
							<p>
								<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'ms-button-sub-title-1') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
							</p>
						</div>
					</a>

					<a href="<?php echo JUri::base(); ?>index.php/market-survey/vung-tau">
						<div class="ms-search-box-1">
							<!-- btn 2 -->
							<h5>
								<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'ms-button-title-2') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
							</h5>
							<p>
								<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'ms-button-sub-title-2') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
							</p>
						</div>
					</a>

					<a href="<?php echo JUri::base(); ?>index.php/market-survey/tay-ninh">
						<div class="ms-search-box-1">
							<!-- btn 3 -->
							<h5>
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'ms-button-title-3') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
							</h5>
							<p>
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'ms-button-sub-title-3') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
							</p>
						</div>
					</a>

					<a href="<?php echo JUri::base(); ?>index.php/market-survey/can-tho">
						<div class="ms-search-box-1">
							<!-- btn 4 -->
							<h5>
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'ms-button-title-4') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
							</h5>
							<p>
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'ms-button-sub-title-4') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
							</p>
						</div>
					</a>

					<a href="<?php echo JUri::base(); ?>index.php/market-survey/around-ho-chi-minh">
						<div class="ms-search-box-1">
							<!-- btn 5 -->
							<h5>
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'ms-button-title-5') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
							</h5>
							<p>
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'ms-button-sub-title-5') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
							</p>
						</div>
					</a>

					<a href="<?php echo JUri::base(); ?>index.php/market-survey/city-other">
						<div class="ms-search-box-1">
							<!-- btn 6 -->
							<h5>
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'ms-button-title-6') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
							</h5>
							<p>
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'ms-button-sub-title-6') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
							</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="margin-wraper">
		<!-- red -->
		<div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
			<div class="list-maps-wraper">
				<div class="list-col-4">
					<div class="maps-pp-imgbox">
						<img src="images/market-survey/maps-red.png" alt="maps-red">
					</div>
				</div>
				<div class="list-col-8">
					<h3><a style="color: red" href="<?php echo JUri::base(); ?>index.php/market-survey/ho-chi-minh">
					<!-- ホーチミン：言わずと知れたベトナム最大の商業都市 -->
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'ms-tour-title-1') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
					</a></h3>
					<p>
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'ms-tour-description-1') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
						<!-- 首都はハノイですが、ハノイの人口約750万人に対しホーチミンの人口は約820万人となります。飲食業、教育業等のサービス業への投資が盛んで成長が進んでおり、不動産開発も盛んに行われ、町並みや町の雰囲気は日々変化しています。 -->
					</p>
				</div>
			</div>
		</div>
		<!-- green -->
		<div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
			<div class="list-maps-wraper">
				<div class="list-col-4">
					<div class="maps-pp-imgbox">
						<img src="images/market-survey/maps-green.png" alt="maps-green">
					</div>
				</div>
				<div class="list-col-8">
					<h3><a style="color: green" href="<?php echo JUri::base(); ?>index.php/market-survey/vung-tau">
					<!-- バリアブンタウ：ベトナム南部最大の工業区 -->
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'ms-tour-title-2') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
					</a></h3>
					<p>
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'ms-tour-description-2') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
						<!-- ベトナム南部最大の工業区であり、豊富な天然資源（石油、天然ガス、建材）と海の玄関口で あるカイメップ港を有しています。省人民委員会に日本人も在籍するジャパンデスクを構え、 教育機関による日本語教育にも力を入れる等し、省を挙げて日本企業の誘致に力を入れていま す。 -->
					</p>
				</div>
			</div>
		</div>
		<!-- orange -->
		<div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
			<div class="list-maps-wraper">
				<div class="list-col-4">
					<div class="maps-pp-imgbox">
						<img src="images/market-survey/maps-orange.png" alt="maps-orange">
					</div>
				</div>
				<div class="list-col-8">
					<h3><a style="color: orange" href="<?php echo JUri::base(); ?>index.php/market-survey/tay-ninh">
						<!-- タイニン：カンボジアとの国境都市 -->
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'ms-tour-title-3') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
					</a></h3>
					<p>
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'ms-tour-description-3') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
						<!-- カンボジアとの国境都市であり、片側はホーチミンに隣接しています。</br> -->
						<!-- 陸路でホーチミン、カンボジア・プノンペンを通ってタイ・ バンコクへと続く南部経済回廊の経由地となります。タイニン省の工業団地の中にはホーチミン市内から1時間30分程度とビンズン省の工業団地と同程度の移動時間となるところもあります。 -->
					</p>
				</div>
			</div>
		</div>
		<!-- violet -->
		<div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
			<div class="list-maps-wraper">
				<div class="list-col-4">
					<div class="maps-pp-imgbox">
						<img src="images/market-survey/maps-violet.png" alt="maps-violet">
					</div>
				</div>
				<div class="list-col-8">
					<h3><a style="color: purple" href="<?php echo JUri::base(); ?>index.php/market-survey/can-tho">
					<!-- メコンデルタ：肥沃な大地と豊富な水資源 -->
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'ms-tour-title-4') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
					</a></h3>
					<p>
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'ms-tour-description-4') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
						<!-- カントー市は「メコンデルタ」の中での最大の都市です。日系企業の進出も少しずつ、増加しています。メコンデルタは恵まれた肥沃な大地と豊富な水資源の影響で、米やココナッツ、その他農産物の生産量が多い地域です。また海老養殖などの水産業も盛んです。海外からの投資誘致に力を入れています。 -->
					</p>
				</div>
			</div>
		</div>
		<!-- blue -->
		<div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
			<div class="list-maps-wraper">
				<div class="list-col-4">
					<div class="maps-pp-imgbox" style="min-height: 350px;line-height: 350px;">
						<img src="images/market-survey/maps-blue.png" alt="maps-blue">
					</div>
				</div>
				<div class="list-col-8">
					<h3><a style="color: blue" href="<?php echo JUri::base(); ?>index.php/market-survey/around-ho-chi-minh">
					<!-- ホーチミン周辺：ドンナイ省、ビンズン省、ロンアン省 -->
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'ms-tour-title-5') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
					</a></h3>
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'ms-tour-description-5') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
					<!-- <p>
						ホーチミンからの距離が比較的近く、製造業を中心に発展しています。進出済み日系企業も多く、レンタル工場も豊富です。
					</p>
					<table>
						<tr>
							<td>ドンナイ省：</td>
							<td>
								人口約280万人、ロンタン新国際空港建設が計画中です。省都ビエンホアは100万人以上の人口を有し、ホーチミン市に次ぐ都市です。
							</td>
						</tr>
						<tr>
							<td>ビンズン省：</td>
							<td>
								人口約190万人、将来中央直轄市予定のビンズン新都市の開発が進んでおり、ビンズン省内及びベトナム南部においても新たに政治、社会、経済、文化面で充実してくる場所になると思われます。
							</td>
						</tr>
						<tr>
							<td>ロンアン省：</td>
							<td>
								人口約187万人、ホーチミン市からも比較的近く、またメコンデルタ各省との中継地点となり、カンボジアにも接し、立地条件が良いです。土壌及び水質がよく、稲作等の農業も盛んです。
							</td>
						</tr>
					</table> -->
				</div>
			</div>
		</div>

		<!-- <div class="container">
			<h3 class="title-style-5">業種から探す</h3>
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<a href="<?php echo JUri::base(); ?>index.php/food">
						<div class="ms-search-box-2">
							<h6>飲食関連から探す</h6>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<a href="<?php echo JUri::base(); ?>index.php/agriculture">
						<div class="ms-search-box-2">
							<h6>農業関連から探す</h6>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<a href="<?php echo JUri::base(); ?>index.php/education">
						<div class="ms-search-box-2">
							<h6>教育関連から探す</h6>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<a href="<?php echo JUri::base(); ?>index.php/logistics">
						<div class="ms-search-box-2">
							<h6>物流関連から探す</h6>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<a href="index.php/market-survey-list">
						<div class="ms-search-box-2">
							<h6>工業・産業関連から探す</h6>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<a href="index.php/market-survey-list">
						<div class="ms-search-box-2">
							<h6>不動産関連から探す</h6>
						</div>
					</a>
				</div>
			</div>
		</div> -->
	</div>
</div>