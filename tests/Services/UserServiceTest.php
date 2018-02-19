<?php
namespace Services;
use Siaframework\Models\Services\Services;
class UserServiceTest extends \UnitTestCase
{
    public function testEmptyUser()
    {
        $serviceUser = Services::getService('User');
        $this->assertFalse($serviceUser->getLast());
    }
}