<?php

require_once "../vendor/autoload.php";
require_once "../routes/web.php";

use core\Route;
\core\Database::connect();
use app\QueryBuilder\QueryBuilder;

Route::resolve();
