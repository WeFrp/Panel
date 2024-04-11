<?php
global $_config;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/images/fav.svg">
  <link rel="icon" href="./assets/images/fav.svg">
  <title>
    主页 - <?php echo $_config['sitename']; ?> - <?php echo $_config['description']; ?>  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.font.im/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link id="pagestyle" href="https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-y/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/wefrp-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body style="background-image:url(https://littleskin.cn/background.jpg);">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="/">
              <?php echo $_config['sitename']; ?>
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="/">
                    <i class="fa fa-home opacity-6 text-dark me-1"></i>
                    主页
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="/register">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    注册
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="/login">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                    登录
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                  <a href="/panel" class="btn btn-sm mb-0 me-1 btn-primary">控制台</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-12 d-lg-flex h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('/');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative"><?php echo $_config['sitename']; ?></h4>
                <p class="text-white position-relative">无需公网IP、无需路由器端口映射，让内网应用随时可以，通过域名进行外网访问</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/wefrp-dashboard.min.js?v=2.0.4"></script>
</body>

</html>