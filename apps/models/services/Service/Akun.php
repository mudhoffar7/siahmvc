<?php
namespace Siaframework\Models\Services\Service;
use Siaframework\Models\Repositories\Repositories;
class Akun
{
 	private $repo;
    
    public function __construct() {
        $this->repo = Repositories::getRepository('Akun');
    }

    public function insert($data) { 
        $this->repo->add($data);
        return $this;
    }
}