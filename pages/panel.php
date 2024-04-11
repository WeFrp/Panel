<?php
namespace WeFrp;

use WeFrp;

global $_config;
$module = $_GET['module'] ?? "";

$rs = Database::querySingleLine("users", Array("username" => $_SESSION['user']));
?>
<!DOCTYPE html>
<html lang="zh">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="/assets/images/fav.svg">
	<title>管理面板 - <?php echo $_config[ 'sitename']; ?> - <?php echo $_config[ 'description']; ?></title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.font.im/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link id="pagestyle" href="https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-y/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="/assets/css/wefrp-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="/" target="_blank">
        <img src="/assets/images/fav.svg" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold"><?php echo $_config[ 'sitename']; ?></span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo $module == "home" ? "active" : ""; ?>" href="/panel/home">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">管理面板</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $module == "profile" ? "active" : ""; ?>" href="/panel/profile">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
             <i class="ni ni-single-02 text-warning text-sm opacity-10"></i>

            </div>
            <span class="nav-link-text ms-1">用户信息</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">内网穿透</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $module == "proxies" ? "active" : ""; ?>" href="/panel/proxies">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-list text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">隧道列表</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $module == "addproxy" ? "active" : ""; ?>" href="/panel/addproxy">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-plus text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">创建隧道</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $module == "sign" ? "active" : ""; ?> " href="/panel/sign">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-check-square text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">每日签到</span>
          </a>
        </li>
                <li class="nav-item">
          <a class="nav-link <?php echo $module == "download" ? "active" : ""; ?>" href="/panel/download">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-download text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">软件下载</span>
          </a>
        </li>
                <li class="nav-item">
          <a class="nav-link <?php echo $module == "configuration" ? "active" : ""; ?>" href="/panel/configuration">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-file text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">配置文件</span>
          </a>
        </li>
        <?php
							if($rs['group'] == "admin") {
								?>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">管理员</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/panel/userlist">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">用户管理</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/panel/nodes">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">节点管理</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/panel/traffic">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">流量统计</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/panel/settings">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">站点设置</span>
          </a>
        </li>	
<?php
							}
							?>
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="/assets/images/icon-documentation.svg" alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <h6 class="mb-0">需要帮助?</h6>
            <p class="text-xs font-weight-bold mb-0">请加入QQ群寻求帮助</p>
          </div>
        </div>
      </div>
      <a href="http://qm.qq.com/cgi-bin/qm/qr?_wv=1027&k=qEX_nE4bxw7FzwcfdCmZsfp6ULNc5piL&authKey=SLcO%2BWORZp0fsK54obufkoWzdgS5R68cz1dMqEqqYR1eEeObuYjjoZPVIWXnQYtC&noverify=0&group_code=271794913" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">加入QQ群</a>
      <a class="btn btn-primary btn-sm mb-0 w-100" href="/logout?csrf=<?php echo $_SESSION['token']; ?>" type="button">退出登录</a>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          
          <ul class="navbar-nav  justify-content-end">
            
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
				<?php
				$page = new WeFrp\Pages();
				if(isset($_GET['module']) && preg_match("/^[A-Za-z0-9\_\-]{1,16}$/", $_GET['module'])) {
					$page->loadModule($_GET['module']);
				} else {
					$page->loadModule("home");
				}
				?>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
				<strong>Copyright &copy; <?php echo date( "Y"); ?> <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>"><?php echo $_config[ 'sitename']; ?></a>.</strong>
				All rights reserved.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="//www.mcsbbs.com/" class="nav-link text-muted" target="_blank">我的世界服务器中文论坛</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="/assets/js/core/popper.min.js"></script>
  <script src="/assets/js/core/bootstrap.min.js"></script>
  <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="/assets/js/plugins/chartjs.min.js"></script>
  <script src="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery/2.1.3/jquery.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script src="/assets/js/wefrp-dashboard.min.js?v=2.0.4"></script>
</body>

</html>