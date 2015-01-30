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
			<jdoc:include type="message" />
			<jdoc:include type="component" />
			<jdoc:include type="modules" name="sidebar-a" style="no" />
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
