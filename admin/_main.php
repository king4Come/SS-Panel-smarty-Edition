<?php
require_once '../lib/config.php';
require_once '_check.php';
$smarty->assign('Gravatar_Email_img',\Ss\User\Comm::Gravatar($U->GetEmail())); //获取头像
$smarty->assign('GetUserName',$U->GetUserName()); //获取用户名
$smarty->assign('GetEmail',$U->GetEmail()); //获取邮箱
$smarty->assign('RegDate',$U->RegDate()); //获取加入时间
$smarty->assign('ana',file_get_contents("../ana.php")); //读取统计代码并传至页面
// $smarty->display('admin/main.tpl');
?>