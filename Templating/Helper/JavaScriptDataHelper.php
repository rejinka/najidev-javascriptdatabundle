<?php

namespace NajiDev\JavaScriptDataBundle\Templating\Helper;

use \Symfony\Component\Templating\Helper\Helper;

use \NajiDev\JavaScriptData\JavaScriptData;


class JavaScriptDataHelper extends Helper
{
	/** @var JavaScriptData */
	protected $javasSriptData;

	/**
	 * @param JavaScriptData $javaScriptData
	 */
	public function __construct(JavaScriptData $javaScriptData)
	{
		$this->javasSriptData = $javaScriptData;
	}

	/**
	 * Returns a json encoded array
	 *
	 * @return string
	 */
	public function render()
	{
		return $this->javasSriptData->toJson();
	}

	public function getName()
	{
		return 'javascript_data';
	}
}
