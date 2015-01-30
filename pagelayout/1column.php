<?php
defined('_JEXEC') or die;
?>

<?php if(count(JFactory::getApplication()->getMessageQueue())):?>
	<jdoc:include type="message" />
<?php endif; ?>
<jdoc:include type="component" />