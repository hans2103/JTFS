<?php
defined('_JEXEC') or die;

// Load This Template Helper
include_once JPATH_THEMES.'/'.$this->template.'/helper.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<jdoc:include type="head" />
	</head>
	<body>
		<header>
			<jdoc:include type="modules" name="nav" style="no" />
		</header>

		<main>
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
						<?php if(count(JFactory::getApplication()->getMessageQueue())):?>
							<jdoc:include type="message" />
						<?php endif; ?>
						<jdoc:include type="component" />
					</div>
					<div class="col-sm-4 col-sm-pull-8 col-md-3 col-md-pull-9">
						<jdoc:include type="modules" name="sidebar-a" style="none" />
					</div>
				</div>
			</div>
		</main>

		<footer>
			<?php if ($this->countModules('footer')): ?>
			<section class="footer-nav">
				<div class="container">
					<div class="row">
						<jdoc:include type="modules" name="footer" style="no" />
					</div>
				</div>
			</section>
			<?php endif; ?>

			<?php if ($this->countModules('copyright')): ?>
			<section class="footer-copyright">
				<div class="container">
					<div class="row">
						<jdoc:include type="modules" name="copyright" style="no" />
					</div>
				</div>
			</section>
			<?php endif; ?>
		</footer>
	</body>
</html>
