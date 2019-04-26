<div class="content-wraper box-1">
	<div class="container wow fadeInUp" data-wow-duration="1s">
		<?php foreach ($this->item->jcfields as $field) : ?>
			<?php if ($field->name == 'about-us-history') : ?>
				<?php echo $field->value; ?>
			<?php endif ?>
		<?php endforeach; ?>
	</div>
</div>
<div class="content-wraper">
	<div class="container wow fadeInUp" data-wow-duration="1s">
		<h3 class="title-style-1">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'about-us-ideal-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="col-3-content">
			<ul class="about-list">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'about-us-ideal-description') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
<div class="content-wraper about-us">
	<div class="container wow fadeInUp" data-wow-duration="1s">
		<h3 class="title-style-1">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'about-us-create-system-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="row">
			<div class="col-md-12">
				<div class="au-content">
					<div class="au-text">
						<?php foreach ($this->item->jcfields as $field) : ?>
							<?php if ($field->name == 'about-us-create-system-text') : ?>
								<?php echo $field->value; ?>
							<?php endif ?>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="content-wraper about-us">
	<div class="container wow fadeInUp" data-wow-duration="1s">
		<h3 class="title-style-1">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'about-us-report-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h3>
		<div class="au-content">
			<div class="au-text">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'about-us-report-description') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>