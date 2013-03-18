<?php

namespace NajiDev\JavaScriptDataBundle\Templating\Helper;

use \Symfony\Component\Templating\Helper\Helper;

use \NajiDev\Common\JavaScriptData\Container;


class JavaScriptDataHelper extends Helper
{
	protected $data;

	public function __construct(Container $data)
	{
		$this->data = $data;
	}

	/**
	 * A wrapper around \NajiDev\Common\JavaScriptData\Container::set()
	 *
	 * @param $key
	 * @param $value
	 */
	public function set($key, $value)
	{
		$this->data->set($key, $value);
	}

	/**
	 * A wrapper around \NajiDev\Common\JavaScriptData\Container::getTransformedData()
	 */
	public function render()
	{
		return
			'<div id="javascript_data" style="display: none">' . $this->data->getTransformedData() . '</div></body>'
			;
	}

	public function getName()
	{
		return 'javascript_data';
	}
}