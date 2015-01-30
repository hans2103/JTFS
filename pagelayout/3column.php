<?php
defined('_JEXEC') or die;
?>

<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-2">
			<jdoc:include type="modules" name="sidebar-a" style="none" />
		</div>
		<div class="col-sm-6 col-md-8">
			<?php if(count(JFactory::getApplication()->getMessageQueue())):?>
				<jdoc:include type="message" />
			<?php endif; ?>
			<jdoc:include type="component" />
		</div>
		<div class="col-sm-3 col-md-2">
			<jdoc:include type="modules" name="sidebar-b" style="none" />
		</div>
	</div>
</div>