<?php
namespace Siaframework\Backend\Controllers;
use Phalcon\Mvc\Controller;
use Siaframework\Models\Service\Services;

class IndexController extends Controller
{
    public function indexAction()
    {
    	$this->view->posts = "1";
    	$this->view->posts2 = "2";
    	$this->view->posts3 = "3";
    	$this->view->posts4 = "4";
		$data = Services::getService('User')->getAll();
		$this->view->dataa = $data;
    	 // echo '<pre>'; print_r($data); echo '</pre>';
    } 
}