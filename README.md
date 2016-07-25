Message Board
===

一个简单的留言板程序

* [Laravel](http://laravel.com)

## 环境要求

* Apache Web Server
* PHP 5.5.9 or above
* MySQL

## 安装使用

1. 解压文件到你的服务器根目录下
2. 更改服务器根目录为程序的public/目录下，例如根目录设为：'http://localhost/www/Message/public/'
3. 在.env更改数据库连接配置参数为你本地的参数
			DB_HOST=localhost <br />
			DB_DATABASE=message
			DB_USERNAME=root
			DB_PASSWORD=
4. 运行 php artisan migrate 进行数据迁移
5. 运行 php artisan db:seed 进行数据填充

## 运行程序

地址栏输入localhost直接运行


## Documentation
