<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/AutoCode for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace AutoCode\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {

    }
    
    public function loadTemplateAction(){   
        if($this->request->isXmlHttpRequest()){
           echo "<h1>" . __METHOD__. "</h1>";
           return new JsonModel(array('string' => 'test json'));
        }
        
        echo  'Not permision';
        
        return false;
    }

   
}
