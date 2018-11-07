<?php
namespace SimpleCarousel;

use Omeka\Module\AbstractModule;
use Zend\EventManager\SharedEventManagerInterface;
use Zend\Mvc\MvcEvent;

class Module extends AbstractModule
{
	public function getConfig()
	{
		return include __DIR__ . '/config/module.config.php';
	}
}