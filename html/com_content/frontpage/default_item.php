<?php 
defined('_JEXEC') or die('Restricted access');
?>
<div class="article<?php echo $this->params->get('pageclass_sfx'); ?>">
	<div class="heading">
		<?php if ($this->item->params->get('show_title')) : ?>
			<h2 class="title<?php echo $this->escape($this->item->params->get('pageclass_sfx')); ?>">
			<?php if ($this->item->params->get('link_titles') && $this->item->readmore_link != '') : ?>
				<a href="<?php echo $this->item->readmore_link; ?>" class="contentpagetitle<?php echo $this->escape($this->item->params->get('pageclass_sfx')); ?>">
				<?php echo $this->escape($this->item->title); ?></a>
			<?php else :
				echo $this->escape($this->item->title);
			endif; ?>
			</h2>
		<?php endif; ?>
		
		<div class="info">
			<div class="leftcol">
		<?php if (($this->item->params->get('show_section') && $this->item->sectionid) || ($this->item->params->get('show_category') && $this->item->catid)) : ?>
    		<?php if ($this->item->params->get('show_section') && $this->item->sectionid && isset($this->item->section)) : ?>
				<div class="section">
				<?php if ($this->item->params->get('link_section')) : ?>
					<?php echo '<a href="'.JRoute::_(ContentHelperRoute::getSectionRoute($this->item->sectionid)).'">'; ?>
				<?php endif; ?>
				<?php echo $this->escape($this->item->section); ?>
				<?php if ($this->item->params->get('link_section')) : ?>
					<?php echo '</a>'; ?>
				<?php endif; ?>
				</div>
		<?php endif; ?>
		<?php if ($this->item->params->get('show_category') && $this->item->catid) : ?>
		<div class="category">
			<?php if ($this->item->params->get('link_category')) : ?>
				<?php echo '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->catslug, $this->item->sectionid)).'">'; ?>
			<?php endif; ?>
			<?php echo $this->escape($this->item->category); ?>
			<?php if ($this->item->params->get('link_category')) : ?>
				<?php echo '</a>'; ?>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	<?php endif; ?>

	<?php if (($this->item->params->get('show_author')) && ($this->item->author != "")) : ?>
		<div class="author">
			<?php JText::printf('Written by', ($this->item->created_by_alias ? $this->item->created_by_alias : $this->item->author)); ?>
		</div>
	<?php endif; ?>
		</div>
		<div class="rightcol">
		<?php if (intval($this->item->created) !=0 && $this->item->params->get('show_create_date')) : ?>
		<span class="date updated">
			<span class="month">
			<?php echo JHTML::_('date', $this->item->created, JText::_('%b')); ?>
			</span>
			<span class="day">
			<?php echo JHTML::_('date', $this->item->created, JText::_('%d')); ?>
			</span>
			<span class="year">
			<?php echo JHTML::_('date', $this->item->created, JText::_('%Y')); ?>
			</span>
		</span>
		<?php endif; ?>
		</div>
		<div style="float: none; clear: both;"></div>
	</div>
	<div style="float: none; clear: both;"></div>
</div>

<?php echo $this->item->event->beforeDisplayContent; ?>

<?php if ($this->item->params->get('show_url') && $this->item->urls) : ?>
<span class="small">
	<a href="<?php echo $this->escape($this->item->urls); ?>" target="_blank">
		<?php echo $this->escape($this->item->urls); ?></a>
</span>
<?php endif; ?>

<?php if (isset ($this->item->toc)) :
	echo $this->item->toc;
endif; ?>
<div class="article-content">
	<?php echo JFilterOutput::ampReplace($this->item->text); ?>

	<?php if ($this->item->params->get('show_readmore') && $this->item->readmore) : ?>
	<p>
		<a href="<?php echo $this->item->readmore_link; ?>" class="readon<?php echo $this->item->params->get('pageclass_sfx'); ?>">
			<?php if ($this->item->readmore_register) :
				echo JText::_('Register to read more...');
			elseif ($readmore = $this->item->params->get('readmore')) :
				echo $readmore;
			else :
				echo JText::sprintf('Read more', $this->escape($this->item->title));
			endif; ?></a>
	</p>
	<?php endif; ?>
</div>
</div>
<?php echo $this->item->event->afterDisplayContent;