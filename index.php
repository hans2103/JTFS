<?php
	defined( '_JEXEC' ) or die( 'Restricted access' );
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
			<jdoc:include type="modules" name="footer" style="no" />
		</footer>
	</body>
</html>
