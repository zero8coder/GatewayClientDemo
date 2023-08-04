### GatewayClientDemo

### 背景
学习GatewayWorker的使用,搭建聊天系统
### 安装
`.env` 文件 配置数据库
```angular2html 
.
.
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
.
.
```
执行迁移
```shell
php artisan migrate
```
填充用户数据
```shell
php artisan db:seed
```
### 登录账号
```angular2html
账号 123456789@qq.com
密码 password

账号 223456789@qq.com
密码 password
```
### 参考地址
- [GatewayWorker与ThinkPHP等框架结合](https://www.workerman.net/doc/gateway-worker/work-with-other-frameworks.html#%E4%B8%8EThinkPHP%E7%AD%89%E6%A1%86%E6%9E%B6%E7%BB%93%E5%90%88)


