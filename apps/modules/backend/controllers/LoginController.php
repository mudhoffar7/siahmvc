<?php
namespace Siaframework\Backend\Controllers;
use Phalcon\Mvc\Controller;
use Siaframework\Models\Service\Services;
class LoginController extends Controller
{
    public function indexAction()
    {
    }

    public function loginAction()
    {
  //   	if ($this->request->isPost()) {
  //   		// echo "masuk";cek::findFirst("username='$username'");
		//    $username = $this->request->getPost('username');
  //          $password = $this->request->getPost('password');
  //          // echo $password;
		// // Services::getService('User')->getAll();

  //          $cek = Services::getService('User')->get($username);
  //          // echo $cek['username'];
		//    if ($cek)
		//    {
		//    }
		//    echo "Username atau password salah";
		//    // return $this->dispatcher->forward(array("action" => "index"));
	 //  }
    	$data = array(
    		'username' => $this->request->getPost('username'), 
 			'password '=> $this->request->getPost('password')
    	);      
    	//echo '<pre>'; print_r($data); echo '</pre>';

        $cek =  Services::getService('Akun')->insert($data);
        // var_dump($cek);
    }
}