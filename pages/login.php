<?php
global $_config;
$curl = curl_init();
curl_setopt_array($curl, array(
   CURLOPT_URL => 'https://v1.hitokoto.cn/',
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => '',
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 0,
   CURLOPT_FOLLOWLOCATION => true,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
));
$response = curl_exec($curl);
curl_close($curl);
$response = json_decode($response,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" href="./assets/images/fav.svg">
  <title>
    登录 - <?php echo $_config['sitename']; ?> - <?php echo $_config['description']; ?>  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.font.im/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link id="pagestyle" href="https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-y/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/wefrp-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body style="background-image:url(https://api.imlazy.ink/img);background-size:cover;background-position:center;background-attachment:fixed;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;">
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
              <!--<ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                  <a href="/bbs" class="btn btn-sm mb-0 me-1 btn-primary">论坛</a>
                </li>
              </ul>-->
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
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card blur">
                <div class="card-body pb-0 text-start">
                  <h4 class="font-weight-bolder">登录</h4>
                  <p class="mb-0">输入您的电子邮箱和密码以进行登录</p>
                  								<?php
									if(isset($data['status']) && isset($data['message'])) {
										$alertType = $data['status'] ? "success" : "danger";
										echo '<div class="alert alert-' . $alertType . ' alert-dismissable">' . $data['message'] . '</div>';
									}
									?>
                </div>
                <div class="card-body">
                  <form role="form" method="POST" action="/login?action=login">
                    <div class="mb-3">
                      <input type="email" class="form-control form-control-lg" placeholder="电子邮箱" aria-label="email"  name="email" id="email" require>
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control form-control-lg" placeholder="密码" aria-label="password" name="password" id="password" require>
                    </div>
                    <!--<div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">记住我</label>
                    </div>-->
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">登录</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    没有账户?
                    <a href="/register" class="text-primary text-gradient font-weight-bold">注册</a><!--&nbsp;&nbsp;<a href="/findpass" class="text-primary text-gradient font-weight-bold">忘记密码</a>-->

                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('/');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative"><?php echo $response['hitokoto'];?></h4>
                <p class="text-white position-relative"><?php echo $response['fron'];?></p>
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
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/wefrp-dashboard.min.js?v=2.0.4"></script>
</body>

</html>