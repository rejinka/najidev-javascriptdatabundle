<?php

namespace NajiDev\JavaScriptDataBundle\DependencyInjection;

use
	\Symfony\Component\Config\FileLocator,
	\Symfony\Component\DependencyInjection\ContainerBuilder,
	\Symfony\Component\DependencyInjection\Loader\XmlFileLoader,
	\Symfony\Component\HttpKernel\DependencyInjection\Extension
;


class NajiDevJavaScriptDataExtension extends Extension
{
	public function load(array $configs, ContainerBuilder $container)
	{
		$loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));

		$loader->load('service.xml');
		$loader->load('templating.xml');
	}
}
