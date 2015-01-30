<?php
defined('_JEXEC') or die;
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<?php if(count(JFactory::getApplication()->getMessageQueue())):?>
			<jdoc:include type="message" />
			<?php endif; ?>
			<jdoc:include type="component" />
		</div>
	</div>
</div>