<?php
namespace WeFrp;

use WeFrp;

WeFrp\Utils::checkCsrf();

unset($_SESSION['user']);
unset($_SESSION['mail']);
unset($_SESSION['token']);
?>
<script>location='/login';</script>