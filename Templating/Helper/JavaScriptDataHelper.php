<?php

namespace NajiDev\JavaScriptDataBundle\Templating\Helper;

use \Symfony\Component\Templating\Helper\Helper;

use \NajiDev\JavaScriptData\JavaScriptData;


class JavaScriptDataHelper extends Helper
{
	protected $javasSriptData;

	/**
	 * @param JavaScriptData $javaScriptData
	 */
	public function __construct(JavaScriptData $javaScriptData)
	{
		$this->javasSriptData = $javaScriptData;
	}

	/**
	 * A wrapper aroung JavaScriptData::set()
	 *
	 * @param $key
	 * @param $value
	 */
	public function set($key, $value)
	{
		$this->javasSriptData->set($key, $value);
	}

	public function getName()
	{
		return 'javascript_data';
	}
}