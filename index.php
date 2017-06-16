<?php
/**
 * Created by PhpStorm.
 * User: Jimersy Lee
 * Date: 2017/5/27
 * Time: 14:24
 */

use Framework\Di\FactoryDefault\FactoryDefault;

define('BASE_PATH', __DIR__);

//echo BASE_PATH;

define('APP_PATH', BASE_PATH . '/App');
//echo APP_PATH;

include BASE_PATH . "/Framework/DiInterface.php";
include BASE_PATH . "/Framework/Di.php";
include BASE_PATH . "/Framework/Di/FactoryDefault.php";
include BASE_PATH . "/Framework/Di/Injectable.php";
include BASE_PATH . "/Framework/App.php";

include "vendor/autoload.php";
$whoops = new \Whoops\Run();
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
$whoops->register();


//容器
$di = new FactoryDefault();


//载入路由配置 handle routes

include APP_PATH . "/Config/router.php";

//载入服务配置 read service
include APP_PATH . "/Config/service.php";

//载入自动加载配置
include APP_PATH . "/Config/loader.php";

//应用(组件)
$app = new \Framework\App($di);

/*$writer = $di->get("writer");
$writer->write();
$writer->hello();
exit;*/

include "Framework/Mvc/Controller.php";
include "App/Controllers/ControllerBase.php";
include "App/Controllers/IndexController.php";
$c = new IndexController($di);
$c->index();















