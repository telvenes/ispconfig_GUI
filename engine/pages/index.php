<?php
/*********************************************************************
*
*			Copyright: Torstein Thorsland Elvenes Elvenes
*			Email:     torstein@thorsland.net
*
**********************************************************************/

if (!defined('TTE')){
	die("Hacking?");
}
include $config_engine_dir."includes/header.php";


$smarty->display('index.tpl');
include $config_engine_dir."includes/footer.php";

?>