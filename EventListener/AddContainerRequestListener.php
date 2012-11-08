<?php

namespace NajiDev\JavaScriptDataBundle\EventListener;

use \Symfony\Component\HttpKernel\Event\FilterResponseEvent;

use \NajiDev\JavaScriptData\JavaScriptData;


class AddContainerRequestListener
{
	protected $data;

	public function __construct(JavaScriptData $data)
	{
		$this->data = $data;
	}

	public function onKernelResponse(FilterResponseEvent $event)
	{
		$response = $event->getResponse();

		$response->setContent(str_replace(
			'</body>',
			'<div id="javascript_data" style="display: none">' . $this->data->toJson() . '</div></body>',
			$response->getContent()
		));
	}
}