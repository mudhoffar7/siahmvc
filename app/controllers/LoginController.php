<?php

class LoginController extends \Phalcon\Mvc\Controller
{
    public function indexAction()
    {

    }

     private function _registerSession(Pengguna $pengguna)
      {
      $this->session->set('auth', array(
              'isLog' => 'Y',
              'id' => $pengguna->id,
              'username' => $pengguna->nama,
              'hp' => $pengguna->hp,
              'rule' => $pengguna->rule
          ));
      }

    public function loginAction()
    {
    	if ($this->request->isPost()) {
	        $nama = $this->request->getPost('nama');
            $hp = $this->request->getPost('hp');
	        $pengguna = Pengguna::findFirst("nama='$nama'");
	        
	        if ($pengguna)
	        {
	          if($hp==$pengguna->hp )
	          {
	            $this->_registerSession($pengguna);
	            $this->response->redirect('pengguna');
	          }
	        }
	        echo "Username atau pass salah";
	        return $this->dispatcher->forward(array("action" => "index"));
	      }
	}    

	public function logoutAction()
	{
	  $this->session->destroy();
      $this->response->redirect('login');
	}
}