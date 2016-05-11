<?php

namespace ExamplePlugin;

use \Pimcore\API\Plugin as PimcorePlugin;

class Plugin  extends PimcorePlugin\AbstractPlugin implements PimcorePlugin\PluginInterface {

	public static function install (){
        // implement your own logic here
        return true;
	}

	public static function uninstall (){
        // implement your own logic here
        return true;
	}

	public static function isInstalled () {
        // implement your own logic here
        return true;
	}
}
