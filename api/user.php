<?php
namespace WeFrp;
use WeFrp;
define("ROOT", realpath(__DIR__ . "/../"));
include(ROOT . "/configuration.php");
include(ROOT . "/core/Database.php");
$db = new WeFrp\Database();
$ts = Database::querySingleLine("tokens", Array("token" => $_GET['token']));
$rs = Database::querySingleLine("proxies", Array("id" => $_GET['id']));
if($ts['username'] == $rs['username']){
$ns = Database::querySingleLine("nodes", Array("id" => $rs['node']));
			$domains = json_decode($rs['domain'], true);
			if($domains && !empty($domains)) {
				for($i = 0;$i < count($domains);$i++) {
					$domain .= $domains[$i];
					if($i < count($domains) - 1) { $domain .= ", "; }
				}
			}
$command = "{$rs['proxy_type']} -i {$rs['local_ip']} -l {$rs['local_port']} -n {$rs['proxy_name']}";
if($rs['proxy_type'] == 'http' || $rs['proxy_type'] == 'https'){
$command.= ' -d '.$domain;
$links = $rs['proxy_type'].'://'.$domain;
}else{
$command.= ' -r '.$rs['remote_port'];
$links = $ns['hostname'].':'.$rs['remote_port'];
}
$command.= " -s {$ns['hostname']}:{$ns['port']} -t {$ns['token']} -u {$_GET['token']}";
$command.= $rs['use_encryption'] == "true" ? " --ue" : "";
$command.= $rs['use_compression'] == "true" ? " --uc" : "";
$result = array(
    'code' => 1,
    'command' => $command,
    'links' => $links
    );
}else{
$result = array(
    'code' => 0,
    'command' => NULL
    );
}
header('Content-Type: application/json');
echo json_encode($result);
?>
<?php /* -s <?php echo $ns['hostname'];?>:<?php echo $ns['port'];?> -t <?php echo $ns['token'];?> -u <?php echo $um->getUserToken($_SESSION['user']);?> <?php echo $rs['use_encryption'] == "true" ? "--ue" : ""; ?><?php echo $rs['use_compression'] == "true" ? " --uc" : ""; */ ?>