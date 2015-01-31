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
		<header class="navbar navbar-default header-wrapper" id="header">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".mh-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a href="<?php echo $site_url; ?>" class="navbar-brand logo"><img src="/images/logo.svg" alt="<?php echo $sitename; ?>" class="inject-me" /></a>
				</div>
				<nav class="collapse navbar-collapse mh-navbar-collapse navbar-inner" role="navigation">
					<?php if ($this->countModules('nav')): ?>
					<jdoc:include type="modules" name="nav" style="none" />
					<?php endif; ?>
				</nav>
			</div>
		</header>

		<main>
			<?php if ($this->countModules('content-top')): ?>
			<aside>
				<jdoc:include type="modules" name="content-top" style="no" />
			</aside>
			<?php endif; ?>

			<?php
				switch($pagelayout)
				{
					case 'homepage':
						include_once JPATH_THEMES.'/'.$this->template.'/pagelayout/homepage.php';
						break;

					case '1column':
						include_once JPATH_THEMES.'/'.$this->template.'/pagelayout/1column.php';
						break;

					case '2column-left':
						include_once JPATH_THEMES.'/'.$this->template.'/pagelayout/2column-left.php';
						break;

					case '2column-right':
						include_once JPATH_THEMES.'/'.$this->template.'/pagelayout/2column-right.php';
						break;

					case '3column':
						include_once JPATH_THEMES.'/'.$this->template.'/pagelayout/3column.php';
						break;

					default:
						include_once JPATH_THEMES.'/'.$this->template.'/pagelayout/1column.php';
				}
			?>
			<?php if ($this->countModules('content-bottom')): ?>
			<jdoc:include type="modules" name="content-bottom" style="no" />
			<?php endif; ?>
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
