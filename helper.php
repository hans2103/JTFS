<?php
defined('_JEXEC') or die;

// Include the helper-class
include_once dirname(__FILE__).'/helper.class.php';

// Browser detection
jimport('joomla.environment.browser');

// Variables
$app				= JFactory::getApplication();
$doc				= JFactory::getDocument();
$user				= JFactory::getUser();
$browser			= JBrowser::getInstance();
$config				= JFactory::getConfig();

$input				= $app->input;
$menu				= $app->getMenu()->getActive();

// Detecting Active Variables
$option				= $input->get('option', '');
$view				= $input->get('view', '');
$layout				= $input->get('layout', '');
$task				= $input->get('task', '');
$itemid				= $input->get('Itemid', '');
$sitename			= $app->get('sitename');
$template			= 'templates/' . $this->template;
$pageclass			= $menu->params->get('pageclass_sfx');

// Instantiate the helper class
	$helper = new ThisTemplateHelper();

// Include CSS and JS
	$helper->loadCssJs($this);

// Include adjust meta tags in HEAD
	$helper->adjustHead($this);

// Include Analytics
	$analyticsData = $helper->getAnalytics($this);

// Load SVG Injection
	if ($this->params->get('svginjection',0))
	{
		$helper->getSVGInjector($this);
	}

// Determine home
	if($helper->isHome()) {
		$siteHome = "home";
	} else {
		$siteHome = "sub";
	}

// Check upon the current page layout
	$pagelayout = $this->params->get('pagelayout', '1column');

		$SidebarA = false;
		$SidebarB = false;

		if ($this->countModules('sidebar-a'))
		{
			$SidebarA = true;
		}

		if ($this->countModules('sidebar-b'))
		{
			$SidebarB = true;
		}

		if (!empty($active) && $active->home == true)
		{
			$SidebarA = false;
			$SidebarB = false;
		}

		if($SidebarA == true)
		{
			$pagelayout = '2column-left';
		}

		if($SidebarB == true)
		{
			$pagelayout = '2column-right';
		}

		if($SidebarA == true && $SidebarB == true)
		{
			$pagelayout = '3column';
		}

		if($helper->isHome())
		{
			$pagelayout = 'homepage';
		}





