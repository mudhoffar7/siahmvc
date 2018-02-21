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

            $router->add("/index/index", [
                'module'     => 'backend',
                'controller' => 'index',
                'action'     => 'index',
            ])->setName('backend-index');

            $router->add("/login/index", [
                'module'     => 'backend',
                'controller' => 'login',
                'action'     => 'index',
            ])->setName('backend-login');

            $router->add("/login/login", [
                'module'     => 'backend',
                'controller' => 'login',
                'action'     => 'login',
            ])->setName('backend-login');

             $router->add("/logout/index", [
                'module'     => 'backend',
                'controller' => 'logout',
                'action'     => 'index',
            ])->setName('backend-logout');

            $router->add("/dash/index", [
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
                'path'      => '../apps/modules/backend/Module.php'
            ],
            'dashboard'  => [
                'className' => 'Siaframework\Dashboard\Module',
                'path'      => '../apps/modules/dashboard/Module.php'
            ],
            'ekivalensi'  => [
                'className' => 'Siaframework\Ekivalensi\Module',
                'path'      => '../apps/modules/ekivalensi/Module.php'
            ],
            'ipd'  => [
                'className' => 'Siaframework\Ipd\Module',
                'path'      => '../apps/modules/ipd/Module.php'
            ],
            'kurikulum'  => [
                'className' => 'Siaframework\Kurikulum\Module',
                'path'      => '../apps/modules/kurikulum/Module.php'
            ],
            'pembelajaran'  => [
                'className' => 'Siaframework\Pembelajaran\Module',
                'path'      => '../apps/modules/pembelajaran/Module.php'
            ],
            'penilaian'  => [
                'className' => 'Siaframework\Penilaian\Module',
                'path'      => '../apps/modules/penilaian/Module.php'
            ],
            'penjadwalan'  => [
                'className' => 'Siaframework\Penjadwalan\Module',
                'path'      => '../apps/modules/penjadwalan/Module.php'
            ],
            'sar'  => [
                'className' => 'Siaframework\Sar\Module',
                'path'      => '../apps/modules/sar/Module.php'
            ],
            'skem'  => [
                'className' => 'Siaframework\Skem\Module',
                'path'      => '../apps/modules/skem/Module.php'
            ],
            'skpi'  => [
                'className' => 'Siaframework\Skpi\Module',
                'path'      => '../apps/modules/skpi/Module.php'
            ],
            'wisuda'  => [
                'className' => 'Siaframework\Wisuda\Module',
                'path'      => '../apps/modules/wisuda/Module.php'
            ],
            'yudisium'  => [
                'className' => 'Siaframework\Yudisium\Module',
                'path'      => '../apps/modules/yudisium/Module.php'
            ]
        ]);        
        $response = $this->handle();
        echo $response->getContent();
    }
}
$application = new Application();
$application->main();