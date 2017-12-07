<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

/*return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];*/

use think\Route;

//    Route::rule('路由表达式', '路由地址', '请求类型', '路由参数(数组)', '变量规则(数组)');

//    Route::get('aaa', 'index/test/aaa');
//    Route::post('admin', 'admin/index/index');
//    Route::rule('add', 'admin/index/add', 'post', ['https'=>false]);

//    Route::rule('aaa', 'index/test/aaa', 'GET|POST');

//    Route::get('aaa/:id', 'index/test/aaa');
//    Route::post('bbb', 'admin/index/index');

//    Route::post('aaa/:id/:name', 'index/test/aaa');

//    Route::post('aaa/:id', 'index/test/aaa');
//    Route::post('bbb/:id/:name/:age', 'index/test/bbb');

//    Route::post('bbb/:id', 'index/test/bbb');
//    Route::post('ccc/:id', 'index/test/ccc');

    Route::get('banner/:id', 'api/v1.Banner/getBanner');