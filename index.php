<?php

session_start();

require_once __DIR__ . "/vendor/autoload.php";

use App\Services\App;

App::start();

require_once __DIR__ . "/router/routes.php";