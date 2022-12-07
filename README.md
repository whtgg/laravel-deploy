#### 官方sail方式安装失败问题
* curl -sL https://deb.nodesource.com/setup_xx.x | bash - \ 总是太慢 
* ./vendor/bin/sail up  node安装失败 
### 解决方式 
* 脚本larvel-app.sh 解决setup 慢的问题
* node 安装失败问题 在docker-compose文件中有修改
