<div class="single-page-wraper">
	<div class="content-wraper">
		<div class="container">
			<h2 class="title-style-1">オフィスA - 間取り図</h2>
			<div class="office-maps-wraper floor6-layoutmaps">
				<h4>*詳細を見たい部屋をクリック。</h4>
				<div class="office-maps-box">
					<img src="images/floor6-layoutmap.jpg" alt="maps">
					<div class="office-17 office-popup" value="1"></div>
					<div class="office-18 office-popup" value="2"></div>
					<div class="office-19 office-popup" value="3"></div>
					<div class="office-20 office-popup" value="4"></div>
					<div class="office-21 office-popup" value="5"></div>
					<div class="office-22 office-popup" value="6"></div>
					<div class="office-23 office-popup" value="7"></div>
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
<!-- popup 17 -->
<div class="popup-main popup-main-1">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-17-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-17-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-17-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-17-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 18 -->
<div class="popup-main popup-main-2">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-18-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-18-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-18-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-18-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 19 -->
<div class="popup-main popup-main-3">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-19-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-19-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-19-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-19-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 20 -->
<div class="popup-main popup-main-4">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-20-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-20-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-20-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-20-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 21 -->
<div class="popup-main popup-main-5">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-21-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-21-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-21-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-21-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 22 -->
<div class="popup-main popup-main-6">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-22-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-22-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-22-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-22-content') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<div style="text-align: center;">
			<a class="btn-link-style-1" href="index.php/contact?service=<?php if($service) echo $service; ?>&floor=<?php if($floor) echo $floor; ?>">空室状況を問合せする</a>
		</div>
	</div>
</div>
<!-- popup 23 -->
<div class="popup-main popup-main-7">
	<div class="popup-wraper">
		<div class="pp-close">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<div class="pp-images-box">
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-23-image-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
			<div class="pp-img-box">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'office-23-image-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
		<h3>
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-23-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="pp-description">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'office-23-content') : ?>
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