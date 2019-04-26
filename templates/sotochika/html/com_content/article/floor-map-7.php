<div class="single-page-wraper">
	<div class="content-wraper">
		<div class="container">
			<h2 class="title-style-1">オフィスB - 間取り図</h2>
			<div class="office-maps-wraper">
				<h4>*詳細を見たい部屋をクリック。</h4>
				<div class="office-maps-box">
					<img src="images/floor7-layoutmap.jpg" alt="maps">
					<div class="office-1 office-popup" value="1"></div>
					<div class="office-2 office-popup" value="2"></div>
					<div class="office-3 office-popup" value="3"></div>
					<div class="office-4 office-popup" value="4"></div>
					<div class="office-5 office-popup" value="5"></div>
					<div class="office-6 office-popup" value="6"></div>
					<div class="office-7 office-popup" value="7"></div>
					<div class="office-8 office-popup" value="8"></div>
					<div class="office-9 office-popup" value="9"></div>
					<div class="office-10 office-popup" value="10"></div>
					<div class="office-11 office-popup" value="11"></div>
					<div class="office-12 office-popup" value="12"></div>
					<div class="office-13 office-popup" value="13"></div>
					<div class="office-14 office-popup" value="14"></div>
					<div class="office-15 office-popup" value="15"></div>
					<div class="office-16 office-popup" value="16"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	if ($_REQUEST['service']) {
		$service = $_REQUEST['service'];
	}
	if (isset($_REQUEST['floor'])) {
		$floor = $_REQUEST['floor'];
	}
?>
<!-- popup 1-->
<div class="popup-main popup-main-1">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-1-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-1-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-1-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-1-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 2-->
<div class="popup-main popup-main-2">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-2-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-2-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-2-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-2-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 3-->
<div class="popup-main popup-main-3">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-3-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-3-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-3-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-3-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 4-->
<div class="popup-main popup-main-4">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-4-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-4-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-4-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-4-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 5-->
<div class="popup-main popup-main-5">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-5-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-5-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-5-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-5-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 6-->
<div class="popup-main popup-main-6">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-6-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-6-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-6-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-6-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 7-->
<div class="popup-main popup-main-7">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-7-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-7-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-7-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-7-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 8-->
<div class="popup-main popup-main-8">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-8-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-8-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-8-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-8-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 9-->
<div class="popup-main popup-main-9">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-9-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-9-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-9-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-9-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 10-->
<div class="popup-main popup-main-10">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-10-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-10-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-10-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-10-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 11-->
<div class="popup-main popup-main-11">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-11-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-11-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-11-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-11-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 12-->
<div class="popup-main popup-main-12">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-12-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-12-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-12-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-12-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 13-->
<div class="popup-main popup-main-13">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-13-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-13-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-13-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-13-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 14-->
<div class="popup-main popup-main-14">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-14-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-14-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-14-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-14-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 15-->
<div class="popup-main popup-main-15">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-15-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-15-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-15-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-15-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 16-->
<div class="popup-main popup-main-16">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-16-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-16-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-16-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-16-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		// popup
        $('.office-popup').click(function(){
        	var num = $(this).attr('value');
        	$('.popup-main-'+num).show();
        });
        $('.pp-close').click(function(){
        	$('.popup-main').hide();
        });
	});
</script>