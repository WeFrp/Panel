<?php
namespace WeFrp;

use WeFrp;

include(ROOT . "/core/Parsedown.php");

$markdown = new Parsedown();
$markdown->setSafeMode(true);
$markdown->setBreaksEnabled(true);
$markdown->setUrlsLinked(true);
$page_title = "管理面板";
$rs = Database::querySingleLine("users", Array("username" => $_SESSION['user']));

if(!$rs) {
	exit("<script>location='/login';</script>");
}

$um = new WeFrp\UserManager();
$ls = $um->getLimit($_SESSION['user']);
$inbound = round($ls['inbound'] / 1024 * 8);
$outbound = round($ls['outbound'] / 1024 * 8);
$speed_limit_up = "{$inbound}Mbps 上行";
$speed_limit_down = "{$outbound}Mbps 下行";
$traffic = $rs['traffic'] - round($um->getTodayTraffic($_SESSION['user']) / 1024 / 1024);
if($traffic < 0) {
	$traffic = 0;
}
?>
    
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
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">隧道数量</p>
                                <h5 class="font-weight-bolder">
                                <?php echo htmlspecialchars($rs['proxies']); ?> 条
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                <i class="fa-regular fa-clone text-lg opacity-10"
                                   aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">剩余流量</p>
                                <h5 class="font-weight-bolder">
                                    <?php echo htmlspecialchars(round($traffic / 1024, 2)); ?> GB
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                <i class="fa-solid fa-ethernet text-lg opacity-10"
                                   aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">上行宽带速率</p>
                                <h5 class="font-weight-bolder">
                                <?php echo htmlspecialchars($speed_limit_up); ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                <i class="fa-solid fa-cloud-arrow-up text-lg opacity-10"
                                   aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">下行宽带速率</p>
                                <h5 class="font-weight-bolder">
                                    <?php echo htmlspecialchars($speed_limit_down); ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                <i class="fa-solid fa-cloud-arrow-down text-lg opacity-10"
                                   aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h6 class="text-capitalize">站点公告</h6>
                </div>
                <div class="card-body p-3">
                    						<?php echo $markdown->text(Settings::get("broadcast", "暂时没有公告信息")); ?>
            </div>
        </div>
    </div>