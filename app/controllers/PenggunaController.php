<?php

class PenggunaController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$data_pengguna = Pengguna::find();
    	$this->view->data_pengguna = $data_pengguna;
    }

    public function createAction()
    {
    	$pengguna = new pengguna();

    	$pengguna->nama = $this->request->getPost("nama");
    	$pengguna->alamat = $this->request->getPost("alamat");
		$pengguna->hp = $this->request->getPost("hp");	

		$pengguna->save();

		  if (!$pengguna->save()) {
		    echo "Gagal Disimpan";
		  }
		  else
		  {
		  	return $this->response->redirect('pengguna/index');
		  }
    }

    public function deleteAction($id)
    { 
    	$pengguna = Pengguna::findFirst($id);
   		$pengguna->delete();
   		return $this->response->redirect('pengguna/index');
	}

	public function editAction($id)
	{
		$pengguna = Pengguna::findFirst($id);
    	$pengguna->nama = $this->request->getPost("nama");
    	$pengguna->alamat = $this->request->getPost("alamat");
		$pengguna->hp = $this->request->getPost("hp");	

		$pengguna->save();

		  if (!$pengguna->save()) {
		    echo "Gagal Diupdate";
		  }
		  else
		  {
		  	return $this->response->redirect('pengguna/index');
		  }
	}
}
