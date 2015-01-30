<?php
defined('_JEXEC') or die;
?>

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-md-9">
			<?php if(count(JFactory::getApplication()->getMessageQueue())):?>
				<jdoc:include type="message" />
			<?php endif; ?>
			<jdoc:include type="component" />
		</div>
		<div class="col-sm-4 col-md-3">
			<jdoc:include type="modules" name="sidebar-b" style="none" />
		</div>
	</div>
</div>