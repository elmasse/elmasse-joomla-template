<?php 
defined('_JEXEC') or die('Restricted access');
?>

<div class="article">
	<div class="heading">
		<?php if ($this->params->get('show_title')) : ?>
			<h2 class="title<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
			<?php if ($this->params->get('link_titles') && $this->article->readmore_link != '') : ?>
				<a href="<?php echo $this->article->readmore_link; ?>" class="contentpagetitle<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
				<?php echo $this->escape($this->article->title); ?></a>
			<?php else :
				echo $this->escape($this->article->title);
			endif; ?>
			</h2>
		<?php endif; ?>
			<div class="info">
				<div class="leftcol">
			<?php if (($this->params->get('show_section') && $this->article->sectionid) || ($this->params->get('show_category') && $this->article->catid)) : ?>
	    		<?php if ($this->params->get('show_section') && $this->article->sectionid && isset($this->article->section)) : ?>
					<div class="section">
					<?php if ($this->params->get('link_section')) : ?>
						<?php echo '<a href="'.JRoute::_(ContentHelperRoute::getSectionRoute($this->article->sectionid)).'">'; ?>
					<?php endif; ?>
					<?php echo $this->escape($this->article->section); ?>
					<?php if ($this->params->get('link_section')) : ?>
						<?php echo '</a>'; ?>
					<?php endif; ?>
					</div>
			<?php endif; ?>
			<?php if ($this->params->get('show_category') && $this->article->catid) : ?>
			<div class="category">
				<?php if ($this->params->get('link_category')) : ?>
					<?php echo '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($this->article->catslug, $this->item->sectionid)).'">'; ?>
				<?php endif; ?>
				<?php echo $this->escape($this->article->category); ?>
				<?php if ($this->params->get('link_category')) : ?>
					<?php echo '</a>'; ?>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (($this->params->get('show_author')) && ($this->article->author != "")) : ?>
			<div class="author">
				<?php JText::printf('Written by', ($this->article->created_by_alias ? $this->article->created_by_alias : $this->article->author)); ?>
			</div>
		<?php endif; ?>
			</div>
			<div class="rightcol">
				<?php if ($this->params->get('show_create_date')) : ?>
				<span class="date updated">
					<span class="month">
					<?php echo JHTML::_('date',$this->article->created, JText::_('%b')); ?>
					</span>
					<span class="day">
					<?php echo JHTML::_('date', $this->article->created, JText::_('%d')); ?>
					</span>
					<span class="year">
					<?php echo JHTML::_('date', $this->article->created, JText::_('%Y')); ?>
					</span>
				</span>
				<?php endif; ?>
			</div>
			<div style="float: none; clear: both;"></div>
		</div>
		<div style="float: none; clear: both;"></div>
		
	</div><!-- heading-->	


<?php echo $this->article->event->beforeDisplayContent; ?>

<?php if ($this->params->get('show_url') && $this->article->urls) : ?>
<span class="small">
	<a href="<?php echo $this->escape($this->article->urls); ?>" target="_blank">
		<?php echo $this->escape($this->article->urls); ?></a>
</span>
<?php endif; ?>

<?php if (isset ($this->article->toc)) :
	echo $this->article->toc;
endif; ?>
<div class="article-content">
<?php echo JFilterOutput::ampReplace($this->article->text); ?>
</div>
<?php echo $this->article->event->afterDisplayContent; ?>

</div>
