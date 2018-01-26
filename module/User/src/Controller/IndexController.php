<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 25/01/2018
 * Time: 19:22
 */

namespace User\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
	public function indexAction()
	{
		return new ViewModel();
	}
}