<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/** @var JDocumentHtml $this */

$app  = JFactory::getApplication();
$user = JFactory::getUser();

// Output as HTML5
$this->setHtml5(true);

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

if ($task === 'edit' || $layout === 'form')
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

// Add template js
JHtml::_('script', 'template.js', array('version' => 'auto', 'relative' => true));

// Add html5 shiv
JHtml::_('script', 'jui/html5.js', array('version' => 'auto', 'relative' => true, 'conditional' => 'lt IE 9'));

// Add Stylesheets
JHtml::_('stylesheet', 'template.css', array('version' => 'auto', 'relative' => true));

// Use of Google Font
if ($this->params->get('googleFont'))
{
	JHtml::_('stylesheet', '//fonts.googleapis.com/css?family=' . $this->params->get('googleFontName'));
	$this->addStyleDeclaration("
	h1, h2, h3, h4, h5, h6, .site-title {
		font-family: '" . str_replace('+', ' ', $this->params->get('googleFontName')) . "', sans-serif;
	}");
}

// Template color
// if ($this->params->get('templateColor'))
// {
// 	$this->addStyleDeclaration('
// 	body.site {
// 		border-top: 3px solid ' . $this->params->get('templateColor') . ';
// 		background-color: ' . $this->params->get('templateBackgroundColor') . ';
// 	}
// 	a {
// 		color: ' . $this->params->get('templateColor') . ';
// 	}
// 	.nav-list > .active > a,
// 	.nav-list > .active > a:hover,
// 	.dropdown-menu li > a:hover,
// 	.dropdown-menu .active > a,
// 	.dropdown-menu .active > a:hover,
// 	.nav-pills > .active > a,
// 	.nav-pills > .active > a:hover,
// 	.btn-primary {
// 		background: ' . $this->params->get('templateColor') . ';
// 	}');
// }

// Check for a custom CSS file
JHtml::_('stylesheet', 'user.css', array('version' => 'auto', 'relative' => true));

JHtml::_('stylesheet', 'bootstrap.min.css', array('version' => 'auto', 'relative' => true));

JHtml::_('stylesheet', 'font-awesome.min.css', array('version' => 'auto', 'relative' => true));

JHtml::_('stylesheet', 'style.css', array('version' => 'auto', 'relative' => true));

JHtml::_('stylesheet', 'animate.css', array('version' => 'auto', 'relative' => true));

// Check for a custom js file
JHtml::_('script', 'user.js', array('version' => 'auto', 'relative' => true));

JHtml::_('script', 'jquery.min.js', array('version' => 'auto', 'relative' => true));

JHtml::_('script', 'jssor.slider-24.1.5.min.js', array('version' => 'auto', 'relative' => true));

JHtml::_('script', 'customer.js', array('version' => 'auto', 'relative' => true));

JHtml::_('script', 'wow.min.js', array('version' => 'auto', 'relative' => true));

// Load optional RTL Bootstrap CSS
JHtml::_('bootstrap.loadCss', false, $this->direction);

// Adjusting content width
if ($this->countModules('position-7') && $this->countModules('position-8'))
{
	$span = 'span6';
}
elseif ($this->countModules('position-7') && !$this->countModules('position-8'))
{
	$span = 'span9';
}
elseif (!$this->countModules('position-7') && $this->countModules('position-8'))
{
	$span = 'span9';
}
else
{
	$span = 'span12';
}

// Logo file or site title param
if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />';
}
elseif ($this->params->get('sitetitle'))
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle'), ENT_COMPAT, 'UTF-8') . '</span>';
}
else
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
}
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
	<script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
              $AutoPlay: 1,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 4,
                $SpacingX: 4,
                $SpacingY: 4,
                $Orientation: 2,
                $Align: 0,
                $Loop: 0
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 810);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
    <script>
	       new WOW().init();
	</script>
    <script type="text/javascript">
      var verifyCallback = function(response) {
        alert(response);
      };
      var onloadCallback = function() {
        grecaptcha.render('example3', {
          'sitekey' : '6Lf4c0IUAAAAABFko0HjTLFoVya7GiMKvYmTATNy',
          'callback' : verifyCallback,
          'theme' : 'dark'
        });
      };
    </script>

</head>
<body class="site <?php echo $option
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
	. ($params->get('fluidContainer') ? ' fluid' : '');
	echo ($this->direction === 'rtl' ? ' rtl' : '');
?>">
	<!-- Body -->
	<?php
	$app = JFactory::getApplication();
	$menu = $app->getMenu();
	if ($menu->getActive() == $menu->getDefault()) {
		echo '<div class="home">';
	}
	?>
	<!-- Header -->
	<header>
		<div class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<!-- logo -->
						<div class="logo wow flipInX">
							<img src="images/logo.png" alt="logo">
						</div>
					</div>
					<div class="col-md-8 col-sm-8 col-xs-12 top-contact">
						<!-- top contact -->
						<div class="top-address">
							<img src="images/top-contact.png" alt="top-contact">
						</div>
						<div class="top-hotline">
							<img src="images/top-hotline.png" alt="top-hotline">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- nav -->
		<?php if ($this->countModules('position-1')) : ?>
			<div class="mega-menu">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div>
			<div class="mega-menu-close">
				<i class="fa fa-times" aria-hidden="true"></i>
			</div>
			<nav class="navbar navbar-default">
			  <div class="container">
			      <jdoc:include type="modules" name="position-1" style="none" />
			  </div><!-- /.container -->
			</nav>
		<?php endif; ?>
	</header>

	<!-- content -->
	<div class="container breadcrumb-main">
		<jdoc:include type="modules" name="position-2" style="none" />
	</div>
	<!-- Begin Content -->
	<!-- <jdoc:include type="modules" name="position-3" style="xhtml" /> -->
	<!-- <jdoc:include type="message" /> -->
	<jdoc:include type="component" />
	<!-- content -->

	<!-- partner -->
	<div class="content-wraper partner">
		<div class="container wow fadeInUp" data-wow-duration="1s">
			<div class="col-md-3 col-sm-3 col-xs-6 partner-child">
				<a target="_blank" href="http://gagr.co.jp/">
				<img src="images/partner/ga.jpg" alt="partner">
				</a>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6 partner-child">
				<a target="_blank" href="https://www.r-vietnam.com/">
				<img src="images/partner/r-vietnam.jpg" alt="partner">
				</a>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6 partner-child">
				<a target="_blank" href="http://vieclambank.com/">
				<img src="images/partner/viec-lam-bank.jpg" alt="partner">
				</a>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6 partner-child">
				<a target="_blank" href="https://viet-career.com/">
				<img src="images/partner/viet-career.jpg" alt="partner">
				</a>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-12 widget-footer">
					<img src="images/logo-footer.png" alt="logo-footer">
				</div>
				<div class="col-md-4 col-xs-12 widget-footer">
					<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2771.5441498099567!2d106.70003977514064!3d10.768713300996389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f4015a374a3%3A0xfc5bb67ffa7c7651!2sC%C3%B4ng+Ty+Tnhh+Moja!5e0!3m2!1svi!2s!4v1496722761178" width="100%" height="120px" frameborder="0" style="border:0" allowfullscreen></iframe> -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.348252253931!2d106.69688151437023!3d10.784616892315976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f35f2fab8f7%3A0xa99615c83832dab5!2sStar+Building!5e0!3m2!1svi!2s!4v1516787721238" width="100%" height="120px" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-5 col-xs-12 widget-footer">
					<h3>SOTOCHIKA</h3>
					<p>7th Floor, STAR BUILDING, 33Ter-33bis, Mac Dinh Chi Street, Da Kao Ward, District 1, Ho Chi Minh City, Vietnam.</p>
					<p>Tel: (84-28) 6299 5082 / E-mail: info@sotochika.com</p>
				</div>
			</div>
		</div>
	</footer>
	<?php
	$app = JFactory::getApplication();
	$menu = $app->getMenu();
	if ($menu->getActive() == $menu->getDefault()) {
		echo '</div';
	}
	?>
	<jdoc:include type="modules" name="debug" style="none" />

</body>
</html>
