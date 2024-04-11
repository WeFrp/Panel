<?php
namespace WeFrp;

use WeFrp;

$page_title = "软件下载";
$rs = Database::querySingleLine("users", Array("username" => $_SESSION['user']));

if(!$rs) {
	exit("<script>location='/login';</script>");
}
?>
<style type="text/css">
.fix-text p {
	margin-bottom: 4px;
}
.system-img {
	height: 32px;
}
.download tr td {
	vertical-align: middle;
}
</style>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo $page_title; ?></h1></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="?">主页</a></li>
                    <li class="breadcrumb-item active"><?php echo $page_title; ?></li></ol>
            </div>
        </div>
	</div>
</div>
<div class="content">
    <div class="container-fluid">
		<div class="row">
	<div class="col-12">
		<div class="card mb-4">
			<div class="card-header pb-0">
				<h6>客户端下载</h6>
			</div>
			<div class="card-body px-0 pt-0 pb-2">
				<div class="table-responsive p-0">
					<table class="table align-items-center mb-0">
						<thead>
							<tr>
								<th class="text-uppercase text-secondary font-weight-bolder opacity-7">系统类型</th>
								<th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">系统架构</th>
								<th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">版本</th>
								<th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">类型</th>
								<th class="text-secondary opacity-7">下载文件</th>
							</tr>
						</thead>
						<tbody>
						    <tr>
								<td>
									<div class="d-flex px-2 py-1">
										<div>
											<img src="/assets/images/download/windows.png" class="avatar-sm me-3" alt="user1">
										</div>
										<div class="d-flex flex-column justify-content-center">Windows
										</div>
									</div>
								</td>
								<td>
								    <span class="text-secondary font-weight-bold">AMD64</span>

								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>1.0.0</code></span>
								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>桌面启动器</code></span>
								</td>
								<td class="align-middle">
									<a href="https://mirror.ghproxy.com/https://github.com/xjh2009/Software/releases/download/frpc/WeFrpClient1.0.0.exe" target="_blank">
									    <button class="btn btn-sm bg-gradient-success" download="WeFrp客户端1.0.0">点击下载</button>
									    </a>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex px-2 py-1">
										<div>
											<img src="/assets/images/download/windows.png" class="avatar-sm me-3" alt="user1">
										</div>
										<div class="d-flex flex-column justify-content-center">Windows
										</div>
									</div>
								</td>
								<td>
								    <span class="text-secondary font-weight-bold">AMD64</span>

								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>0.53.2</code></span>
								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>控制台</code></span>
								</td>
								<td class="align-middle">
									<a href="https://mirror.ghproxy.com/https://github.com/fatedier/frp/releases/download/v0.53.2/frp_0.53.2_windows_arm64.zip" target="_blank">
									    <button class="btn btn-sm bg-gradient-success">点击下载</button>
									    </a>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex px-2 py-1">
										<div>
											<img src="/assets/images/download/windows.png" class="avatar-sm me-3" alt="user1">
										</div>
										<div class="d-flex flex-column justify-content-center">Windows
										</div>
									</div>
								</td>
								<td>
								    <span class="text-secondary font-weight-bold">Arm64</span>

								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>0.53.2</code></span>
								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>控制台</code></span>
								</td>
								<td class="align-middle">
									<a href="https://mirror.ghproxy.com/https://github.com/fatedier/frp/releases/download/v0.53.2/frp_0.53.2_windows_arm64.zip" target="_blank">
									    <button class="btn btn-sm bg-gradient-success">点击下载</button>
									    </a>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex px-2 py-1">
										<div>
											<img src="/assets/images/download/linux.png" class="avatar-sm me-3" alt="user1">
										</div>
										<div class="d-flex flex-column justify-content-center">Linux
										</div>
									</div>
								</td>
								<td>
								    <span class="text-secondary font-weight-bold">AMD64</span>

								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>0.53.2</code></span>
								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>控制台</code></span>
								</td>
								<td class="align-middle">
									<a href="https://mirror.ghproxy.com/https://github.com/fatedier/frp/releases/download/v0.53.2/frp_0.53.2_linux_amd64.tar.gz" target="_blank">
									    <button class="btn btn-sm bg-gradient-success">点击下载</button>
									    </a>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex px-2 py-1">
										<div>
											<img src="/assets/images/download/linux.png" class="avatar-sm me-3" alt="user1">
										</div>
										<div class="d-flex flex-column justify-content-center">Linux
										</div>
									</div>
								</td>
								<td>
								    <span class="text-secondary font-weight-bold">ARM64</span>

								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>0.53.2</code></span>
								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>控制台</code></span>
								</td>
								<td class="align-middle">
									<a href="https://mirror.ghproxy.com/https://github.com/fatedier/frp/releases/download/v0.53.2/frp_0.53.2_linux_arm64.tar.gz" target="_blank">
									    <button class="btn btn-sm bg-gradient-success">点击下载</button>
									    </a>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex px-2 py-1">
										<div>
											<img src="/assets/images/download/linux.png" class="avatar-sm me-3" alt="user1">
										</div>
										<div class="d-flex flex-column justify-content-center">Linux
										</div>
									</div>
								</td>
								<td>
								    <span class="text-secondary font-weight-bold">Arm</span>

								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>0.53.2</code></span>
								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>控制台</code></span>
								</td>
								<td class="align-middle">
									<a href="https://mirror.ghproxy.com/https://github.com/fatedier/frp/releases/download/v0.53.2/frp_0.53.2_linux_arm.tar.gz" target="_blank">
									    <button class="btn btn-sm bg-gradient-success">点击下载</button>
									    </a>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex px-2 py-1">
										<div>
											<img src="/assets/images/download/linux.png" class="avatar-sm me-3" alt="user1">
										</div>
										<div class="d-flex flex-column justify-content-center">Linux
										</div>
									</div>
								</td>
								<td>
								    <span class="text-secondary font-weight-bold">mips</span>

								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>0.53.2</code></span>
								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>控制台</code></span>
								</td>
								<td class="align-middle">
									<a href="https://mirror.ghproxy.com/https://github.com/fatedier/frp/releases/download/v0.53.2/frp_0.53.2_linux_mips.tar.gz" target="_blank">
									    <button class="btn btn-sm bg-gradient-success">点击下载</button>
									    </a>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex px-2 py-1">
										<div>
											<img src="/assets/images/download/linux.png" class="avatar-sm me-3" alt="user1">
										</div>
										<div class="d-flex flex-column justify-content-center">Linux
										</div>
									</div>
								</td>
								<td>
								    <span class="text-secondary font-weight-bold">mips64</span>

								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>0.53.2</code></span>
								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>控制台</code></span>
								</td>
								<td class="align-middle">
									<a href="https://mirror.ghproxy.com/https://github.com/fatedier/frp/releases/download/v0.53.2/frp_0.53.2_linux_mips64.tar.gz" target="_blank">
									    <button class="btn btn-sm bg-gradient-success">点击下载</button>
									    </a>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex px-2 py-1">
										<div>
											<img src="/assets/images/download/linux.png" class="avatar-sm me-3" alt="user1">
										</div>
										<div class="d-flex flex-column justify-content-center">Linux
										</div>
									</div>
								</td>
								<td>
								    <span class="text-secondary font-weight-bold">mips64le</span>

								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>0.53.2</code></span>
								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>控制台</code></span>
								</td>
								<td class="align-middle">
									<a href="https://mirror.ghproxy.com/https://github.com/fatedier/frp/releases/download/v0.53.2/frp_0.53.2_linux_mips64le.tar.gz" target="_blank">
									    <button class="btn btn-sm bg-gradient-success">点击下载</button>
									    </a>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex px-2 py-1">
										<div>
											<img src="/assets/images/download/linux.png" class="avatar-sm me-3" alt="user1">
										</div>
										<div class="d-flex flex-column justify-content-center">Linux
										</div>
									</div>
								</td>
								<td>
								    <span class="text-secondary font-weight-bold">mipsle</span>

								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>0.53.2</code></span>
								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>控制台</code></span>
								</td>
								<td class="align-middle">
									<a href="https://mirror.ghproxy.com/https://github.com/fatedier/frp/releases/download/v0.53.2/frp_0.53.2_linux_mipsle.tar.gz" target="_blank">
									    <button class="btn btn-sm bg-gradient-success">点击下载</button>
									    </a>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex px-2 py-1">
										<div>
											<img src="/assets/images/download/linux.png" class="avatar-sm me-3" alt="user1">
										</div>
										<div class="d-flex flex-column justify-content-center">Linux
										</div>
									</div>
								</td>
								<td>
								    <span class="text-secondary font-weight-bold">riscv64</span>

								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>0.53.2</code></span>
								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>控制台</code></span>
								</td>
								<td class="align-middle">
									<a href="https://mirror.ghproxy.com/https://github.com/fatedier/frp/releases/download/v0.53.2/frp_0.53.2_linux_riscv64.tar.gz" target="_blank">
									    <button class="btn btn-sm bg-gradient-success">点击下载</button>
									    </a>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex px-2 py-1">
										<div>
											<img src="/assets/images/download/macos.png" class="avatar-sm me-3" alt="user1">
										</div>
										<div class="d-flex flex-column justify-content-center">Macos
										</div>
									</div>
								</td>
								<td>
								    <span class="text-secondary font-weight-bold">AMD64</span>

								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>0.53.2</code></span>
								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>控制台</code></span>
								</td>
								<td class="align-middle">
									<a href="https://mirror.ghproxy.com/https://github.com/fatedier/frp/releases/download/v0.53.2/frp_0.53.2_darwin_amd64.tar.gz" target="_blank">
									    <button class="btn btn-sm bg-gradient-success">点击下载</button>
									    </a>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex px-2 py-1">
										<div>
											<img src="/assets/images/download/macos.png" class="avatar-sm me-3" alt="user1">
										</div>
										<div class="d-flex flex-column justify-content-center">Macos
										</div>
									</div>
								</td>
								<td>
								    <span class="text-secondary font-weight-bold">Arm64</span>

								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>0.53.2</code></span>
								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>控制台</code></span>
								</td>
								<td class="align-middle">
									<a href="https://mirror.ghproxy.com/https://github.com/fatedier/frp/releases/download/v0.53.2/frp_0.53.2_darwin_arm64.tar.gz" target="_blank">
									    <button class="btn btn-sm bg-gradient-success">点击下载</button>
									    </a>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex px-2 py-1">
										<div>
											<img src="/assets/images/download/freebsd.png" class="avatar-sm me-3" alt="user1">
										</div>
										<div class="d-flex flex-column justify-content-center">Freebsd
										</div>
									</div>
								</td>
								<td>
								    <span class="text-secondary font-weight-bold">AMD64</span>

								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>0.53.2</code></span>
								</td>
								<td class="align-middle text-center">
									<span class="text-secondary font-weight-bold"><code>控制台</code></span>
								</td>
								<td class="align-middle">
									<a href="https://mirror.ghproxy.com/https://github.com/fatedier/frp/releases/download/v0.53.2/frp_0.53.2_linux_amd64.tar.gz" target="_blank">
									    <button class="btn btn-sm bg-gradient-success">点击下载</button>
									    </a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
	</div>
</div>