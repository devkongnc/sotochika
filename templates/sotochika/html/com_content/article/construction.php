<div class="single-page-wraper">
	<!-- title -->
	<div class="container">
		<h2 class="title-style-1 wow fadeInUp" data-wow-duration="1s">
			<?php foreach ($this->item->jcfields as $field) : ?>
				<?php if ($field->name == 'construction-title') : ?>
					<?php echo $field->value; ?>
				<?php endif ?>
			<?php endforeach; ?>
		</h2>
	</div>
	<!-- box 1 -->
	<div class="build-support-mess container wow fadeInUp" data-wow-duration="1s"><!-- Background Image -->
			<h3 class="title-style-2">
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'construction-slogan') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
			</h3>
	</div>
	<!-- box 2 -->
	<div class="content-wraper container wow fadeInUp" data-wow-duration="1s">
		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs row" role="tablist">
		    <li role="presentation" class="active"><a href="#establishment-of-base" aria-controls="establishment-of-base" role="tab" data-toggle="tab">
		    	<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'construction-tab-1') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
		    </a></li>
		    <li role="presentation"><a href="#sales-support" aria-controls="sales-support" role="tab" data-toggle="tab">
		    	<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'construction-tab-2') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
		    </a></li>
		    <li role="presentation"><a href="#labor-costs" aria-controls="labor-costs" role="tab" data-toggle="tab">
		    	<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'construction-tab-3') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
		    </a></li>
		    <li role="presentation"><a href="#various-procedures" aria-controls="various-procedures" role="tab" data-toggle="tab">
		    	<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'construction-tab-4') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
		    </a></li>
		  </ul>
		  <!-- Tab panes -->
		  <div class="tab-content row">
		  <!-- establishment-of-base -->
		    <div role="tabpanel" class="tab-pane active" id="establishment-of-base">
				<h3 class="title-style-5">
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'construction-tab-1-title') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
				</h3>
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'construction-tab-1-content') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
		    </div>
		    <!-- sales-support -->
		    <div role="tabpanel" class="tab-pane" id="sales-support">
		    	<h3 class="title-style-5">
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'construction-tab-2-title') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
				</h3>
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'construction-tab-2-content') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>

		    </div>
		    <!-- labor-costs -->
		    <div role="tabpanel" class="tab-pane" id="labor-costs">
		    	<h3 class="title-style-5">
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'construction-tab-3-title') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
				</h3>
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'construction-tab-3-content') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
		    </div>
		    <!-- various-procedures -->
		    <div role="tabpanel" class="tab-pane" id="various-procedures">
		    	<h3 class="title-style-5">
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'construction-tab-4-title') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
				</h3>
				<?php foreach ($this->item->jcfields as $field) : ?>
					<?php if ($field->name == 'construction-tab-4-content') : ?>
						<?php echo $field->value; ?>
					<?php endif ?>
				<?php endforeach; ?>
		    </div>
		  </div>
	</div>
</div>