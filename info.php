<?php
declare(strict_types=1);


return [
    'id' => 'hello',
    'name' => 'Hello Extension',
    'category' => 'other', # 扩展的分类 core:核心扩展，other:其他扩展
    'description' => '这是一个示例扩展，用于展示如何创建和使用扩展。',
    'version' => '1.0.0',
    'core_version' => '^1.0',
    'author' => 'runphp', # 作者
    'email' => 'runphp@qq.com', # 作者的邮箱
    'website' => '', # 扩展的地址，可以是扩展的仓库地址，帮助用户寻找扩展，安装扩展等网络地址
    'image' => '', # 扩展的图片，用于展示扩展的图标，或者是扩展的截图等图片地址
    'license' => 'MIT', # 扩展的开源协议
];