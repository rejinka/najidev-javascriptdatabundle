# NajiDevJavaScriptDataBundle

This bundle integrates \NajiDev\Common\JavaScriptData\Container into your project in a nice way, for having a bridge to
get php variables to javascript. Take a look on the documentation of najidev/common.

## Installation

### Add bundle to composer.json

As composer is the standard way of Symfony to handle libraries and bundles, i'll only show the installation with
composer. In your composer.json add following:

	"require" : {
		"najidev/javascript-data-bundle" : "@dev"
	}

You should consider taking one of the releases instead of "@dev".

### Load the bundle in your Kernel

	$bundles = array(
		// your current bundles

		new \NajiDev\JavaScriptDataBundle\NajiDevJavaScriptDataBundle(),
	);

## Usage

The bundle creates the
service

	najidev.common.javascriptdata.container

in your DIC, which is an instance of

	\NajiDev\Common\JavaScriptData\Container

You just need to grab it by the DIC in your controller and use it:

	$this->get('najidev.common.javascriptdata.container')->set('my.key', 'value');

Another way to interact with the data-container is the templating
helper:

	$view['javascript_data']->set('my.key', 'value');

When it comes to display the data, the helper has another method:

	<?php echo $view['javascript_data']->render(); ?>

Just use that simple line in a layout and your data can everywhere be grabbed by the helper.js. Be sure to use the
helper.js, when the body was completely rendered. Jquerys ready-event is just perfect for that:

	<script>
		$(document).ready(function()
		{
			var value = jsd.get('my.key', 'a default value, which will be returned if such key does not exist');

			console.log(value);
		});
	</script>
