# jiahuan/sjunit-laravel

这里是对于框架的介绍

# 对于框架的要求

Laravel >= 5.1 & PHP > 7.2

# 安装的方式

```yml
composer require "jiahuan/sjunit-laravel"
```

# 配置方式

5.5 手动配置laravel对于sjunit服务放到config/app.php 中

5.8 
解释路由
```php 
<?php
Route::get('/','SjunitController@index');
Route::post('/','SjunitController@store')->name('sjunit.store');
?>
```