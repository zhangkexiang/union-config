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
        return config($name,$default);
    }else{
//      测试环境获取配置
        $arr = explode('.',$name);

        $path = __DIR__;
        if(strstr(__DIR__,"vendor"))
        {
            $path=$path.'/../../..';
        }
        $path =  $path.'/../config/'.$arr[0].'.php';

        if(!file_exists($path)){
            return $default;
        }
        $conf = require $path ;// 此处不能用用require_once
        if(sizeof($arr)>1){
            for($i=1;$i<sizeof($arr);$i++){
                if(array_key_exists($arr[$i],$conf)){
                    $conf = $conf[$arr[$i]];
                }else{
                    return $default;
                }
            }
        }
        return $conf;

    }
}
