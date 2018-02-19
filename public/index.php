<?php
error_reporting(E_ALL);
use Phalcon\Loader;
use Phalcon\Mvc\Router;
use Phalcon\DI\FactoryDefault;
use Phalcon\Mvc\Application as BaseApplication;
class Application extends BaseApplication
{
    /**
     * Register the services here to make them general or register in the ModuleDefinition to make them module-specific
     */
    protected function registerServices()
    {
        $di = new FactoryDefault();
        $loader = new Loader();
        /**
         * We're a registering a set of directories taken from the configuration file
         */
        $loader
            ->registerDirs([__DIR__ . '/../apps/library/'])
            ->register();
        // Registering a router
        $di->set('router', function () {
            $router = new Router();
            $router->setDefaultModule("backend");

            $router->add("/index/:action", [
                'module'     => 'backend',
                'controller' => 'index',
                'action'     => 'index',
            ])->setName('backend-index');

            $router->add("/login/:action", [
                'module'     => 'backend',
                'controller' => 'login',
                'action'     => 'index',
            ])->setName('backend-login');

             $router->add("/logout/:action", [
                'module'     => 'backend',
                'controller' => 'logout',
                'action'     => 'index',
            ])->setName('backend-logout');

            $router->add("/dash/:action", [
                'module'     => 'dashboard',
                'controller' => 'dash',
                'action'     => 'index',
            ])->setName('dashboard-index');

            return $router;
        });
        $this->setDI($di);
    }
    public function main()
    {
        $this->registerServices();
        // Register the installed modules
        $this->registerModules([
            'backend'  => [
                'className' => 'Siaframework\Backend\Module',
                'path'      => '../apps/modules/backend/module.php'
            ],
            'dashboard'  => [
                'className' => 'Siaframework\Dashboard\Module',
                'path'      => '../apps/modules/dashboard/module.php'
            ]
            // 'services'  => [
            //     'className' => 'Siaframework\Config\Services',
            //     'path'      => '../apps/config/services.php'
            // ]
        ]);
        $response = $this->handle();
        echo $response->getContent();
    }
}
$application = new Application();
$application->main();