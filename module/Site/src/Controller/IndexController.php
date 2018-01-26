<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 26/01/2018
 * Time: 10:42
 */

namespace Site\Controller;


use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}