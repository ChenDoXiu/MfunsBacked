<?php
/*
 * @Author: your name
 * @Date: 2021-02-23 19:28:11
 * @LastEditTime: 2021-03-25 20:28:29
 * @LastEditors: ChenDoXiu
 * @Description: In User Settings Edit
 * @FilePath: \MfunsBacked\route\app.php
 */
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::rule('v1/youku/[:vid]', 'index/youku');
Route::rule('v1/weibo/[:vid]', 'index/weibo');
Route::rule('v1/bilibiliav/[:vid]/[:p]', 'index/bilibiliav');
Route::miss(function() {
  return '404 Not Found!';
});
