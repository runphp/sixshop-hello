<?php
declare(strict_types=1);

use SixShop\Hello\Controller\IndexController;
use think\facade\Route;

Route::resource('', IndexController::class);