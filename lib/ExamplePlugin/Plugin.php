<?php

namespace ExamplePlugin;

use \Pimcore\API\Plugin;

class Plugin  extends Plugin\AbstractPlugin implements Plugin\PluginInterface {

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
