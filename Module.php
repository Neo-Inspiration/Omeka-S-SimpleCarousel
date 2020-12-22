<?php
namespace SimpleCarousel;

use Omeka\Module\AbstractModule;
use Laminas\EventManager\SharedEventManagerInterface;
use Laminas\Mvc\MvcEvent;

class Module extends AbstractModule
{
	public function getConfig()
	{
		return include __DIR__ . '/config/module.config.php';
	}
}