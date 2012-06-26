<?php // no direct access
defined('_JEXEC') or die('Restricted access');
?>
<div class="whosonline">
	<span class="counter"><?php echo $count['guest']?></span>
	<span class="text">	
<?php
if ($showmode == 0 || $showmode == 2) :
    if ($count['guest'] != 0 || $count['user'] != 0) :
		if ($count['guest'] == 1) :
	    echo JText::sprintf('guest', '');
		else :
		    if ($count['guest'] > 1) :
		    	echo JText::sprintf('guests', '');
			endif;
		endif;
		
		echo '<br/>' . JText::_('online');
    endif;
endif;
?>
	</span>
</div>