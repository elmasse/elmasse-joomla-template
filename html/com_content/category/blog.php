<?php // @version $Id: default.php 11917 2009-05-29 19:37:05Z ian $
defined('_JEXEC') or die('Restricted access');
$cparams = JComponentHelper::getParams ('com_media');
?>
<div class="section">
<?php if ($this->params->get('show_page_title',1)) : ?>
<h1 class="name<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
	<?php echo $this->escape($this->params->get('page_title')); ?>
</h1>
<?php endif; ?>


<?php 
	$limit = $this->pagination->limit;
	$i = $this->pagination->limitstart;
	for ($y = 0;$y < $limit && $i < $this->total ; $y++, $i++) :?>
		<?php $this->item =& $this->getItem($i, $this->params);
			echo $this->loadTemplate('item'); ?>
	<span class="article-separator<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">&nbsp;</span>
<?php endfor; ?>
<!-- pagination -->
<?php if ($this->params->def('show_pagination', 2) == 1  || ($this->params->get('show_pagination') == 2 && $this->pagination->get('pages.total') > 1)) : ?>
	<div class="pagination">

		<?php if( $this->pagination->get('pages.total') > 1 ) : ?>
			<div class="counter">		
			<?php echo $this->pagination->getPagesCounter(); ?>
			</div>
		<?php endif; ?>
		
		<?php if ($this->params->def('show_pagination_results', 1)) : ?>
			<div class="navigate-to-page">
			<?php echo $this->pagination->getPagesLinks(); ?>
			</div>
		<?php endif; ?>
	</div>
<?php endif; ?>
</div><!-- end section-->