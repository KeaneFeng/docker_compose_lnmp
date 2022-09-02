# docker-compose_lnmp

#### 介绍
docker-compose搭建PHP7.4（含扩展）+ MySQL5.7 + nginx + redis5.1 + swoole

#### 软件架构
docker-compose搭建LNMP环境映射文件目录，clone到指定composer_lnmp74目录，可以一键安装


### 安装教程

1.  `git clone https://gitee.com/kingslove/docker_compose_lnmp lnmp`
2.  `cd lnmp`
3.  `docker-compose build`
4.  `docker-compose up -d`

#### 如果安装失败了或者配置文件修改导致build失败可以执行以下步骤再进行重新build
1. docker-compose stop

#### 点 y 确认后删除所有containers（环境有其他containers的话谨慎执行）
2. docker-compose rm
#### 删除所有images（环境有其他image的话谨慎执行）
3. docker rmi $(docker images -q)

### 使用说明

1.  `/docker_compose_lnmp/php/extension/dockerfile  是PHP7.4的常用扩展，包括mysqli、gd、mcrypt、zip、redis、swoole等等`

2.  `在/docker_compose_lnmp/ 目录下执行安装命令`


