<?php
/**
 * Created by PhpStorm.
 * User: kexiangzhang
 * Date: 16/12/27
 * Time: 下午12:01
 */
function union_config($name,$default=''){
    if (function_exists('config')) {
//      laravel环境中可以取union配置
        $result = config($name,$default);
    }else{
//      测试环境获取配置
        $arr = explode('.',$name);
        $conf = require __DIR__.'/../config/'.$arr[0].'.php';// 此处不能用用require_once
        $conf = $conf[$arr[1]];
        if(array_key_exists($arr[2],$conf)){
            $result = $conf[$arr[2]];
        }else{
            $result = $default;
        }
    }
    return $result;
}
