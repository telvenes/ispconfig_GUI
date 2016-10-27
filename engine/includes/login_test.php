<?php
/*********************************************************************
*
*			Copyright: Torstein Thorsland Elvenes
*			Email:     torstein@thorsland.net
*
**********************************************************************/

if (!defined('TTE')){
	die("Hacking?");
}





$query = "SELECT * FROM c_users WHERE c_id = \"$s_user_id\" AND c_session_id = \"$session_id\"";
$result = $mysqli->query($query);
$count = $result->num_rows;



if($count == 1){

}elseif($page == "login"){


}elseif(empty($s_user_id) || empty($session_id)){

        session_destroy();
        header("Location: ?p=login");

}else{
        session_destroy();
        header("Location: ?p=login");
}

?>
