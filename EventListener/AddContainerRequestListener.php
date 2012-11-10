<?php

namespace NajiDev\JavaScriptDataBundle\EventListener;

use \Symfony\Component\HttpKernel\Event\FilterResponseEvent;

use \NajiDev\Common\JavaScriptData\Container;


class AddContainerRequestListener
{
	protected $data;

	public function __construct(Container $data)
	{
		$this->data = $data;
	}

	public function onKernelResponse(FilterResponseEvent $event)
	{
		$response = $event->getResponse();

		$response->setContent(str_replace(
			'</body>',
			'<div id="javascript_data" style="display: none">' . $this->data->getTransformedData() . '</div></body>',
			$response->getContent()
		));
	}
}