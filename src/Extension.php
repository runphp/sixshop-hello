<?php
declare(strict_types=1);

namespace SixShop\Hello;

use SixShop\Core\ExtensionAbstract;

class Extension extends ExtensionAbstract
{

    protected function getBaseDir(): string
    {
        return dirname(__DIR__);
    }
}