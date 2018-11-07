<?php
namespace SimpleCarousel\Service\BlockLayout;

use Interop\Container\ContainerInterface;
use SimpleCarousel\Site\BlockLayout\Carousel;
use Zend\ServiceManager\Factory\FactoryInterface;

class CarouselFactory implements FactoryInterface
{
	public function __invoke(ContainerInterface $services, $requestedName, array $options = null)
	{
		return new Carousel(
			$services->get('FormElementManager'),
			$services->get('Config')['DefaultSettings']['CarouselBlockForm']
		);
	}
}
?>