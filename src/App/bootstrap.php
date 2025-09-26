<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";
use Framework\App;
use App\Config\Paths;
use function App\Config\{registerRoutes,registerMiddleware};
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(Paths::ROOT);
$dotenv->load();


$app = new App(Paths::SOURCE . "App/container-definition.php");

registerRoutes($app);
registerMiddleware($app);



return $app;
