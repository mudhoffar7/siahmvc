<?php
namespace Siaframework\Models\Service;
use Siaframework\Models\Services\Exceptions;
abstract class Services
{
    public static function getService($name)
    {
        $className = "\\Siaframework\\Models\\Services\\Service\\{$name}";
        
        if (! class_exists($className)) {
            throw new Exceptions\InvalidServiceException("Class {$className} doesn't exists.");
        }       
        return new $className();
    }
}