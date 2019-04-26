<?php
// echo JPATH_BASE;
$mailer = JFactory::getMailer();
$user = JFactory::getUser();
if (isset($_REQUEST['service'])){
	$service = $_REQUEST['service'];
}
if (isset($_REQUEST['floor'])){
	$floor = $_REQUEST['floor'];
}
if (isset($_REQUEST['btn_submit'])){
	$full_name 	= $_REQUEST['fulname'];
	$company 	= $_REQUEST['company'];
	$email 		= $_REQUEST['email'];
	$mess  		= $_REQUEST['mess'];

	$recipient = array('info@sotochika.com');
	// $recipient = array( 'kongnc1992@gmail.com');
	$mailer->addRecipient($recipient);
	$mailer->setSubject('CONTACT FROM '.$full_name.' BY SOTOCHIKA');
	$body = '<div style="width:100%; float:left; min-height:100px; background:#eee">'
				.'<div style="width:40%; float:left;">'
					.'<img src="cid:logo_id" alt="logo"/>'
				.'</div>'
				.'<div style="width:55%; margin-left:45%;">'
					.'<div style="width:50%; float:left;">'
						.'<img width="100%" src="cid:contact_id" alt="contact"/>'
					.'</div>'
					.'<div style="width:50%; float:left;">'
						.'<img width="100%" src="cid:hostline_id" alt="hostline"/>'
					.'</div>'
				.'</div>'
			.'</div>'
			.'<div style="width:100%; float:left; height:2px; background:#D61633"></div>'
			.'<div style="width:100%; float:left; min-height:250px; background:#eee">'
				.'<div style="width:95%; float:left; padding:15px">'
					. '<h2>CUSTOMER CONTACT</h2>'
					. '<p>Service: '.$service.'</p>'
					. '<p>Floor: '.$floor.'</p>'
					. '<p>Fullname: '.$full_name.'</p>'
	    			. '<p>Company: '.$company.'</p>'
	    			. '<p>Email: '.$email.'</p>'
	    			. '<p>Message:</p>'
	    			. '<p>'.$mess.'</p>'
				.'</div>'
    		.'</div>'
    		.'<div style="width:100%; float:left; min-height:70px; background:#D61633; color:#fff; padding:10px">'
    			. '<p>Address: 7th Floor, STAR BUILDING, 33Ter-33bis, Mac Dinh Chi Street, Da Kao Ward, District 1, Ho Chi Minh City, Vietnam.</p>'
    			. '<p>Tel: (84-8) 6299 5082 / E-mail: <a style="color:#fff !important" href="mailto:info@sotochika.com">info@sotochika.com</a></p>'
    		.'</div>'
    		;
	$mailer->isHtml(true);
	$mailer->setBody($body);
	// Optionally add embedded image
	$mailer->AddEmbeddedImage(JPATH_BASE.'/images/logo.png', 'logo_id', 'logo.png', 'base64', 'image/png' );
	$mailer->AddEmbeddedImage(JPATH_BASE.'/images/top-contact.png', 'contact_id', 'top-contact.png', 'base64', 'image/png' );
	$mailer->AddEmbeddedImage(JPATH_BASE.'/images/top-hotline.png', 'hostline_id', 'top-hotline.png', 'base64', 'image/png' );
	$send = $mailer->Send();
	$info = '';
	if ( $send !== true ) {
	    // $info = 'Error sending email: ';
	    $info = 1;
	} else {
	    // $info = 'Mail sent';
	    $info = 2;
	}
}
?>

<div class="content-wraper single-page-wraper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<!-- <p id="disableDiv" style="color: #fff; background: #ec971f; padding: 7px"> Error sending email: </p> -->
				<?php if (isset($info)){ ?>
					<?php if ($info == 1){ ?>
						<p id="disableDiv" style="color: #fff; background: #ec971f; padding: 7px"> Error sending email: </p>
					<?php }else{ ?>
						<p id="disableDiv" style="color: #fff; background: #449d44; padding: 7px"> Mail sent success </p>
					<?php } ?>
				<?php } ?>
			</div>
			<div class="col-md-6 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.7s">
				<h1 class="title-style-3">フォームでのお問合せ <span class="ctf-note">* は必須項目です。</span></h1>
				<form action="?" method="POST">
					<?php if (isset($_REQUEST['service'])){ ?>
					<div class="form-group ctf-style">
				    	<input type="text" name="service" value="<?= $_REQUEST['service'] ?>" class="form-control" disabled>
				  	</div>
					<?php } ?>
					<?php if (isset($_REQUEST['floor'])){ ?>
					<div class="form-group ctf-style">
				    	<input type="text" name="floor" value="<?= $_REQUEST['floor'] ?>" class="form-control" disabled>
				  	</div>
					<?php } ?>
					<div class="form-group ctf-style">
				    	<input type="text" name="fulname" class="form-control" placeholder="氏名*" required>
				  	</div>
				  	<div class="form-group ctf-style">
				    	<input type="text" name="company" class="form-control" placeholder="会社名">
				  	</div>
					<div class="form-group ctf-style">
				    	<input type="email" name="email" class="form-control" placeholder="メール*" required>
				  	</div>
				  	<div class="form-group ctf-style">
				    	<textarea name="mess" placeholder="お問合せ内容*" required></textarea>
				  	</div>
				  	<!-- <div id="example3"></div> -->
				  	<input type="submit" name="btn_submit" class="btn btn-default btn-style-2" value="送信する" />
				</form>
				<!-- <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script> -->

			</div>
			<div class="col-md-6 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.7s">
				<h2 class="title-style-contact">
					<?php foreach ($this->item->jcfields as $field) : ?>
						<?php if ($field->name == 'contact-service-title') : ?>
							<?php echo $field->value; ?>
						<?php endif ?>
					<?php endforeach; ?>
				</h2>
				<div class="customer-contact-box">
					<h4 class="title-style-4">
						<?php foreach ($this->item->jcfields as $field) : ?>
							<?php if ($field->name == 'contact-member-1-title') : ?>
								<?php echo $field->value; ?>
							<?php endif ?>
						<?php endforeach; ?>
					</h4>
					<!-- option 1 -->
					<div class="ccb-child">
						<div class="ccb-child-left hotline-img-wrap">
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'contact-member-1-image') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
						</div>
						<div class="ccb-child-content">
							<div class="ccb-child-content-left">
								<p>
									<?php foreach ($this->item->jcfields as $field) : ?>
										<?php if ($field->name == 'contact-member-1-phone-text') : ?>
											<?php echo $field->value; ?>
										<?php endif ?>
									<?php endforeach; ?>
								</p>
							</div>
							<div class="ccb-child-content-right">
								<?php foreach ($this->item->jcfields as $field) : ?>
									<?php if ($field->name == 'contact-member-1-phone-number') : ?>
										<?php echo $field->value; ?>
									<?php endif ?>
								<?php endforeach; ?>
							</div>
							<div class="ccb-child-content-left line-height-none">
								<p>
									<?php foreach ($this->item->jcfields as $field) : ?>
										<?php if ($field->name == 'contact-member-1-email-text') : ?>
											<?php echo $field->value; ?>
										<?php endif ?>
									<?php endforeach; ?>
								</p>
							</div>
							<div class="ccb-child-content-right">
								<p>
									<?php foreach ($this->item->jcfields as $field) : ?>
										<?php if ($field->name == 'contact-member-1-email-address') : ?>
											<?php echo $field->value; ?>
										<?php endif ?>
									<?php endforeach; ?>
								</p>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<h4 class="title-style-4">
						<?php foreach ($this->item->jcfields as $field) : ?>
							<?php if ($field->name == 'contact-member-2-title') : ?>
								<?php echo $field->value; ?>
							<?php endif ?>
						<?php endforeach; ?>
					</h4>
					<!-- option 2 -->
					<div class="ccb-child">
						<div class="ccb-child-left hotline-img-wrap">
							<?php foreach ($this->item->jcfields as $field) : ?>
								<?php if ($field->name == 'contact-member-2-image') : ?>
									<?php echo $field->value; ?>
								<?php endif ?>
							<?php endforeach; ?>
						</div>
						<div class="ccb-child-content">
							<div class="ccb-child-content-left">
								<p>
									<?php foreach ($this->item->jcfields as $field) : ?>
										<?php if ($field->name == 'contact-member-2-phone-text') : ?>
											<?php echo $field->value; ?>
										<?php endif ?>
									<?php endforeach; ?>
								</p>
							</div>
							<div class="ccb-child-content-right">
								<?php foreach ($this->item->jcfields as $field) : ?>
									<?php if ($field->name == 'contact-member-2-phone-number') : ?>
										<?php echo $field->value; ?>
									<?php endif ?>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<p class="contact-description">
						<?php foreach ($this->item->jcfields as $field) : ?>
							<?php if ($field->name == 'contact-service-description') : ?>
								<?php echo $field->value; ?>
							<?php endif ?>
						<?php endforeach; ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	jQuery(document).ready(function(){
		setTimeout(function(){
			// alert("Image is loaded");
			jQuery('#disableDiv').fadeOut(2000);
		}, 3000);
	});
</script>