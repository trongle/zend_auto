<?php
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
include_once "define.php";
include_once PATH_LIBRARY."Zend/Loader/AutoloaderFactory.php";
chdir(dirname(__DIR__));

if(!class_exists("Zend\Loader\AutoloaderFactory")){
	die(" server is busy now !");
}

Zend\Loader\AutoLoaderFactory::Factory(array(
	"Zend\Loader\StandardAutoloader" => array(
		"autoregister_zf" => true,
	)
));

// Run the application!
Zend\Mvc\Application::init(require 'config/application.config.php')->run();
