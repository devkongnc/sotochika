<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

/**
 * Note that this layout opens a div with the page class suffix. If you do not use the category children
 * layout you need to close this div either by overriding this file or in your main layout.
 */
$params    = $displayData->params;
$category  = $displayData->get('category');
$extension = $category->extension;
$canEdit   = $params->get('access-edit');
$className = substr($extension, 4);

$dispatcher = JEventDispatcher::getInstance();

$category->text = $category->description;
$dispatcher->trigger('onContentPrepare', array($extension . '.categories', &$category, &$params, 0));
$category->description = $category->text;

$results = $dispatcher->trigger('onContentAfterTitle', array($extension . '.categories', &$category, &$params, 0));
$afterDisplayTitle = trim(implode("\n", $results));

$results = $dispatcher->trigger('onContentBeforeDisplay', array($extension . '.categories', &$category, &$params, 0));
$beforeDisplayContent = trim(implode("\n", $results));

$results = $dispatcher->trigger('onContentAfterDisplay', array($extension . '.categories', &$category, &$params, 0));
$afterDisplayContent = trim(implode("\n", $results));

/**
 * This will work for the core components but not necessarily for other components
 * that may have different pluralisation rules.
 */
if (substr($className, -1) === 's')
{
	$className = rtrim($className, 's');
}
$tagsData = $category->tags->itemTags;
?>
<div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
	<div class="<?php echo $className .'-category' . $displayData->pageclass_sfx; ?>">
		<?php if ($params->get('show_page_heading')) : ?>
			<h1>
				<?php echo $displayData->escape($params->get('page_heading')); ?>
			</h1>
		<?php endif; ?>

		<h1 class="title-style-1">視察ツアー検索</h1>

		<?php //echo $afterDisplayTitle; ?>

		<?php if ($params->get('show_description', 1) || $params->def('show_description_image', 1)) : ?>
			<div class="category-desc cate-main-wraper">
				<!-- cate img -->
				<?php if ($params->get('show_description_image') && $category->getParams()->get('image')) : ?>
					<img src="<?php echo $category->getParams()->get('image'); ?>" alt="<?php echo htmlspecialchars($category->getParams()->get('image_alt'), ENT_COMPAT, 'UTF-8'); ?>"/>
				<?php endif; ?>
				<!-- cate title -->
				<div class="category-desc-child">
					<?php if ($params->get('show_category_title', 1)) : ?>
						<h2 class="title-style-1">
							<?php echo JHtml::_('content.prepare', $category->title, '', $extension . '.category.title'); ?>
						</h2>
					<?php endif; ?>
					<!-- cate description -->
					<?php if ($params->get('show_description') && $category->description) : ?>
						<?php echo JHtml::_('content.prepare', $category->description, '', $extension . '.category.description'); ?>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>


		<div>
			<?php echo $beforeDisplayContent; ?>
			<h2 class="title-style-1">現在参加可能な視察ツアーのご紹介</h2>
			<?php
			function getCategory() {
				$iId = JRequest::getVar('id',0);
				$database = &JFactory::getDBO();
				if(JRequest::getVar('view', 0) == "section"){
					return (int) JRequest::getVar( 'id', 0);
				}else if(Jrequest::getVar( 'view', 0) == "category"){
					$sql = "SELECT id FROM #__categories WHERE id = '$iId'";
					$database->setQuery( $sql );
					$row=$database->loadResult();
					return (int) $row;
				}else if(Jrequest::getVar('view', 0) == "article"){
					$temp = explode(":",JRequest::getVar('id',0));
					$sql = "SELECT catid FROM #__content WHERE id = ".$temp[0];
					$database->setQuery( $sql );
					$row=$database->loadResult();
					return (int) $row;
				}
			}
			$categoryId = getCategory();

			// list articles full title/images/link
			$db = JFactory::getDbo();
			$query = $db->getQuery(true);
			$query->select('*')->from('#__content')->where('catid = '.$categoryId);
			$db->setQuery($query);
			$rows = $db->loadObjectList();

			foreach ( $rows as $row ) {
				$images = json_decode($row->images);
				$urls = JURI::current().'/'.$row->id.'-'.$row->alias;
				?>
				<div class="col-1-box">
					<div class="col-md-5">
				   		<img class="image_intro" src="<?php echo $images->image_intro; ?>" alt="<?php echo $images->image_intro_alt; ?>"/>
				   	</div> <!-- end col-md-4 -->
				   	<div class="col-md-7">
						<h4 class="title-style-7"><?php echo $row->title; ?></h4>
				    	<div class="col-2-description">
				    		<?php echo $row->introtext; ?>
				    	</div>
				   		<a class="btn-link-style-1" href="<?php echo $urls; ?>">サービス詳細へ</a>
				   	</div> <!--end col-md-6 -->
				</div> <!-- end row -->
			<?php } ?>
			<?php echo $afterDisplayContent; ?>
		</div>

		<?php
			// list articles
			// echo $displayData->loadTemplate($displayData->subtemplatename);
		?>

		<?php if ($displayData->maxLevel != 0 && $displayData->get('children')) : ?>
			<div class="cat-children">
				<?php if ($params->get('show_category_heading_title_text', 1) == 1) : ?>
					<h3>
						<?php echo JText::_('JGLOBAL_SUBCATEGORIES'); ?>
					</h3>
				<?php endif; ?>
				<?php echo $displayData->loadTemplate('children'); ?>
			</div>
		<?php endif; ?>
	</div>
</div>

