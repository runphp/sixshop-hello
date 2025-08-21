<?php
declare(strict_types=1);

namespace SixShop\Hello\Controller;

use SixShop\Core\Helper;
use think\Response;


class IndexController
{
    public function index(): Response
    {
        return Helper::success_response('hello world');
    }
}