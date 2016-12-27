## union-config

union系列工具 获取配置文件用(开发 和 运用到laravel中)
示例:
开发过程中目录:
config
    union.php
src
    union-*.php
vendor
    *

config/union.php
<?php
return [
    'log'=>[
        'sms'=>'/tmp/laravel.log'
    ],
    'mid'=>[
        'excepturl'=>[
            '3/user/login'
        ]
    ]
];

union-*.php 中调用
 $tmp = union_config('union.log.sms','');
 即可得到'/tmp/laravel.log'
 $tmp = union_config('union.test.test','');
在无配置的情况下得到''