<?php
$_config = Array(
	
	/* 站点名称 */ 'sitename'      => 'WeFrp',
	// 会显示在标题等地方
	/* 站点地址 */ 'siteurl'      => 'https://yisule.bf',
	/* 站点简介 */ 'description'   => '内网穿透',
	// 会显示在大部分地方
	
	// 数据库相关配置
	/* 地址 */ 'db_host'           => '127.0.0.1',
	/* 端口 */ 'db_port'           => 3306,
	/* 账号 */ 'db_user'           => 'wefrp',
	/* 密码 */ 'db_pass'           => '123',
	/* 名称 */ 'db_name'           => 'wefrp',
	/* 编码 */ 'db_code'           => 'utf8mb4',
	
	// 新注册用户相关设置
	'register' => Array(
		/* 允许注册 */ 'enable'    => true,
		/* 赠送流量 */ 'traffic'   => 1024, // 1GB 流量
		/* 隧道数量 */ 'proxies'   => 5,
		/* 需要邀请 */ 'invite'    => false
	),
	
	// 签到功能相关配置
	// 开启后，允许用户通过签到获得流量
	// 每次签到可以获得随机流量，取值于最小奖励和最大奖励之间，单位 GB
	'sign' => Array(
		/* 是否启用 */ 'enable'    => true,
		/* 最小奖励 */ 'min'       => 1,
		/* 最大奖励 */ 'max'       => 10
	),
	
	// 邮件功能相关设置
	// 如果服务器需要 SSL，请在主机地址前面加 ssl://
	'smtp' => Array(
		/* 是否启用 */ 'enable'    => true,
		/* 主机地址 */ 'host'      => 'ssl://smtp.feishu.cn',
		/* 主机端口 */ 'port'      => 465,
		/* 发信账号 */ 'user'      => 'frp@hxhl.bf',
		/* 发信密码 */ 'pass'      => '123456',
		/* 发信邮箱 */ 'mail'      => 'frp@hxhl.bf'
	),
	
	'proxies' => Array(
		/* 最小端口 */ 'min'       => 10000,
		/* 最大端口 */ 'max'       => 50000,
		/* 保留端口 */ 'protect'   => Array(
			// 保留端口格式：      起始端口 => 结束端口,
			// 起始端口必须大于结束端口，否则会引发意外错误
			// 下面这两个是示例保留端口，可删掉或注释
			25565 => 25656,
			30000 => 31000,
		),
	),
);
