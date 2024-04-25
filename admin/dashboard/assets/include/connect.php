<?php
		session_start();
        if(!isset($_SESSION["admin"]))
            header("Location:../login.php");
		$c=mysqli_connect("localhost","root","");
		mysqli_select_db($c,"emplace");

    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    $data=mysqli_query($c,"select f_name, s_name, email, type from admin where mob_num=".$_SESSION["admin"]);
    $data=mysqli_fetch_assoc($data);
    if($data['type'] == "Superuser")
    {
        $list=array(
            array("index.php","zmdi zmdi-case material-icons-name","Upcoming Jobs"),
            array("add-jobs.php","zmdi zmdi-plus material-icons-name","Add Jobs"),
            array("add-admin.php","zmdi zmdi-accounts-add material-icons-name","Create Admin"),
            array("queries.php","zmdi zmdi-alert-circle-o material-icons-name","View Queries"),
            array("send-notification.php","zmdi zmdi-mail-send material-icons-name","Send Notification"),
            array("profile.php","zmdi zmdi-account material-icons-name","Edit Profile"),
            array("notifications.php","zmdi zmdi-notifications material-icons-name","Notifications"),
            array("logout.php","zmdi zmdi-power material-icons-name","Logout")
        );
    }
    else if($data['type'] == "Admin")
    {       
        $list=array(
            array("index.php","zmdi zmdi-case material-icons-name","Upcoming Jobs"),
            array("add-jobs.php","zmdi zmdi-plus material-icons-name","Add Jobs"),
            array("send-notification.php","zmdi zmdi-mail-send material-icons-name","Send Notification"),
            array("profile.php","zmdi zmdi-account material-icons-name","Edit Profile"),
            array("notifications.php","zmdi zmdi-notifications material-icons-name","Notifications"),
            array("logout.php","zmdi zmdi-power material-icons-name","Logout")
        );
    }
    //icon icon-user
?>

<link href="https://dfm8vuuzt40ty.cloudfront.net/css/gzip/bootstrap.min.css.gz" rel="stylesheet prefetch" media="all">
<link href="https://dfm8vuuzt40ty.cloudfront.net/css/gzip/common1.4.min.css.gz" type="text/css" rel="stylesheet prefetch" media="all">
            