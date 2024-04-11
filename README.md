# WeFrpPanel
WeFrp网页端源代码，基于樱花面板修改

由于我懒，没有写自动安装程序，所有操作需要手动完成。

__注意:__ 邀请码和谷歌REC部分代码仍然保留你可以自己该回去

## 功能和特性
- 支持多用户
- 支持用户组配置
- 支持每个用户单独限速
- 支持每个用户单独限制流量
- 可配置签到获得流量
- 可配置凭邀请码注册账号
- 实时流量统计
- 美观的界面

__在线预览:__ https://yisule.bf/

用户自行创建

## 安装和配置
首先将项目 clone 到本地
```
git clone https://github.com/WeFrp/Panel/
```
接着移动到网站目录，并设置权限
```
mv Panel/* /data/wwwroot/my.panel.com/
chown -R www:www /data/wwwroot/my.panel.com/
```
然后进入到网站目录，分别编辑以下三个文件，修改数据库信息

| 文件名 | 作用 |
| ------ | ------ |
| __/configuration.php__ | 网站核心配置文件，里面每个配置项都有介绍 |
| __/api/index.php__ | 用于对接 Frps，里面只需配置 Token |
| __/daemon.php__ | 服务器守护进程，需要在命令行下运行，里面只需要配置数据库 |

配置完成后，使用 Navicat、phpMyAdmin 等数据库管理软件创建一个数据库，然后导入 `import.sql`。

数据库编码类型：utf8mb4 / utf8mb4_unicode_ci；数据库引擎：InnoDB Mysql版本：5.7

导入完成后，打开网站，注册一个新账号，然后在数据库中设置这个账号的 __group__ 字段为 `admin` 即可设置为管理员。

## 配套 Frps 服务端
本面板需要专用 Frps 才能兼容，请访问我的另一个项目：https://github.com/WeFrp/Daemon (这个还没传先用原版) https://github.com/ZeroDream-CN/SakuraFrp

请按照另一个项目的介绍在每个服务器节点上进行配置。

Frpc 客户端无特殊需求，只要版本是 0.28.0 都可以兼容使用。

## 交流

- 作者 QQ：2012036686
