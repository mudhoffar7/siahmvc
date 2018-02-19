<?php
namespace Siaframework\Dashboard;
use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt;
use Phalcon\Mvc\Dispatcher;
use Phalcon\DiInterface;
use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Db\Adapter\Pdo\Mysql as Database;

class Module implements ModuleDefinitionInterface
{
    /**
     * Registers the module auto-loader
     *
     * @param DiInterface $di
     */
    public function registerAutoloaders(DiInterface $di = null)
    {
        $loader = new Loader();
        $loader->registerNamespaces(
            [
                'Siaframework\Dashboard\Controllers' => '../apps/modules/dashboard/controllers/',
                'Siaframework\Dashboard\Models'      => '../apps/modules/dashboard/models/',
            ]
        );
        $loader->register();
    }
    /**
     * Registers services related to the module
     *
     * @param DiInterface $di
     */
    public function registerServices(DiInterface $di)
    {
        // Registering a dispatcher
        $di->set('dispatcher', function () {
            $dispatcher = new Dispatcher();
            $dispatcher->setDefaultNamespace('Siaframework\Dashboard\Controllers\\');
            return $dispatcher;
        });
        // Registering the view component
        $di->set('view', function () {
            $view = new View();
            $view->setViewsDir(__DIR__ . '/views/');
            return $view;
        });

         // Register Volt as template engine with an anonymous function
        $di->set(
            'view',
            function () {
                $view = new View();
                $view->setViewsDir(__DIR__ . '/views/');
                $view->registerEngines(
                    [
                        '.volt' => function ($view, $di) {
                        $volt = new Volt($view, $di);
                        return $volt;
                        }
                    ]
                );
                return $view;
            }
        );

        // This function will 'divide' parts of the application with the correct url:
        $di->set('url', function() use ($di) {
            $url = new \Phalcon\Mvc\Url();
            $url->setBaseUri("/siahmvc/");
            // For frontend module.php:  $url->setBaseUri("/");
            return $url;
        });

        // // Set a different connection in each module
        // $di->set('db', function () {
        //     return new Database(
        //         [
        //             "host" => "localhost",
        //             "username" => "root",
        //             "password" => "",
        //             "dbname" => "siaframework"
        //         ]
        //     );
        // });
    }
}