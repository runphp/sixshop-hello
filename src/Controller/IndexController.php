<?php
declare(strict_types=1);

namespace SixShop\hello\Controller;

use SixShop\Core\Helper;
use think\Response;


class IndexController
{
    public function index(): Response
    {
        return Helper::success_response('hello world');
    }
}