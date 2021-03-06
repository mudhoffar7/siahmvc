<?php
namespace Siaframework\Models\Repositories\Repository;
use Siaframework\Models\Entities\User as EntityUser;
class User
{
  private $collection = array();
	    private $entity = null;
	    private $status = false;

	    public function __construct() {
	        $this->entity = new EntityUser();
	    }

	    private function buildParams($params = array()) {
	        return array();
	    }

	    public function find() {
	        $this->collection = EntityUser::find();
	        return $this;
	    }

	    public function findById($username) {
	        $this->entity = EntityUser::findFirst($username);
	        return $this;
	    }

	    public function add($data) {
	        $this->status = $this->entity->create($data);
	        return $this;
	    }

	    public function update($data) {
	        $this->status = $this->entity->update($data);
	        return $this;
	    }

	    public function delete() {
	        $this->status = $this->entity->delete();
	        return $this;
	    }

	    public function getUsername() {
	        return $this->entity->username;
	    }
}