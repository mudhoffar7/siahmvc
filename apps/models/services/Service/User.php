<?php
namespace Siaframework\Models\Services\Service;
use Siaframework\Models\Repositories\Repositories;
class User
{
 	private $repo;
    
    public function __construct() {
        $this->repo = Repositories::getRepository('User');
    }

    public function get($id) {

        $this->repo->findById($id);
        return $this;
    }

    public function getAll() {

        $this->repo->find();
        return $this;
    }

 	public function username() {
    	$username = $this->repo->getUsername();
    }
}