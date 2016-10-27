<?php
/*********************************************************************
*
*			Copyright: Torstein Thorsland Elvenes
*			Email:     torstein@thorsland.net
*
**********************************************************************/

session_start();


define('TTE', true);

include "config.php";

$page 			    = stripslashes(strip_tags($_GET['p']));
$sub_page 	        = stripslashes(strip_tags($_GET['sp']));

$s_user_id          = $_SESSION['user_id'];
$s_username         = $_SESSION['username'];
$s_session_id       = $_SESSION['session_id'];

$session_id         = session_id();

include $config_engine_dir."includes/login_test.php";
include $config_engine_dir."includes/Smarty/Smarty.class.php";


$smarty = new Smarty();
$smarty->caching = false;
$smarty->debugging = false;
$smarty->template_dir = $config_engine_dir.'templates/template';
$smarty->compile_dir  = $config_engine_dir.'templates/templates_c';



if (is_file($config_engine_dir."pages/$page.php")){
    include $config_engine_dir."pages/$page.php";

}elseif(empty($page)){
    include $config_engine_dir."pages/index.php";

}else{
    include $config_engine_dir."pages/index.php";

}



?>

