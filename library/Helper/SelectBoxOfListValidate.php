<?php

namespace Helper;

use Zend\View\Helper\AbstractHelper;

class SelectBoxOfListValidate extends AbstractHelper{
	function __invoke($listValidate,$option){
		foreach($listValidate as $vali){
			echo "<pre>";
			print_r($vali);
			echo "</pre>";
		}
	   	// return sprintf('<a class="btn btn-app" href="%s" data-show="%s" data-type="%s">
	   	// 				 <i class="fa %s"></i>%s</a>',$link,$dataShow,$dataType,$icon,$name);
  	}
}
?>