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

$smarty->display('login_header.tpl');

$f_submit   = stripslashes(strip_tags($_POST['submit']));
$f_username = stripslashes(strip_tags($_POST['username']));
$f_password = stripslashes(strip_tags($_POST['password']));
$f_password = md5($f_password);


$f_logout       = stripslashes(strip_tags($_GET['l']));


if($f_logout == 1){

    session_destroy();

            $smarty->assign("MESSAGE", "Du ble logget inn et annet sted!");
            $smarty->display('fail.tpl');

}elseif($f_logout == 2){

    session_destroy();

            $smarty->assign("MESSAGE", "Du er n&aring; logget ut!");
            $smarty->display('succsess.tpl');

}elseif($f_submit){
    
    if(empty($f_username) || empty($f_password)){
        $smarty->assign("MESSAGE", "Feil brukernavn eller passord!");
        $smarty->display('fail.tpl');
        
    
    }else{
        
        $query = "SELECT * FROM c_users WHERE c_email = \"$f_username\" AND c_password = \"$f_password\"";
        $result = $mysqli->query($query);
        $count = $result->num_rows;
        
        $obj = $result->fetch_object();
    
        $db_id = $obj->c_id;
        $db_username = $obj->c_email;
    
        if($count == 1){
                
                $query = "UPDATE c_users SET c_session_id = \"$session_id\" WHERE c_id = \"$db_id\"";
                $result = $mysqli->query($query);
    
                $_SESSION['session_id'] = $session_id;
                $_SESSION['user_id'] = $db_id;
    
                session_write_close();
    
                header("Location: ?p=index");
    
            }else{
                $smarty->assign("MESSAGE", "Feil brukernavn eller passord!");
                $smarty->display('fail.tpl');
    
            
        }
    }
}
                       
                
                


$smarty->display('login.tpl');

$smarty->display('footer.tpl');

?>

