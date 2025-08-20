<?php
declare(strict_types=1);

use SixShop\hello\Controller\IndexController;
use think\facade\Route;

Route::resource('', IndexController::class);