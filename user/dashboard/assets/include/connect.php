<?php
		session_start();
        if(!isset($_SESSION["user"]))
            header("Location:../login.php");
		$c=mysqli_connect("localhost","root","");
		mysqli_select_db($c,"emplace");

		$list=array(
                    array("index.php","zmdi zmdi-case material-icons-name","Upcoming Jobs"),
                    array("jobs.php","zmdi zmdi-case-check material-icons-name","Applied Jobs"),
                    array("profile.php","zmdi zmdi-account material-icons-name","Edit Profile"),
                    array("notifications.php","zmdi zmdi-notifications material-icons-name","Notifications"),
                    array("logout.php","zmdi zmdi-power material-icons-name","Logout")
        );
    
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    $data=mysqli_query($c,"select stu_id, f_name, s_name, email, linkedin_link, github_link, city, pincode from student where mob_num=".$_SESSION["user"]);
    $data=mysqli_fetch_assoc($data);

    //icon icon-user
?>

<link href="https://dfm8vuuzt40ty.cloudfront.net/css/gzip/bootstrap.min.css.gz" rel="stylesheet prefetch" media="all">
                        <link href="https://dfm8vuuzt40ty.cloudfront.net/css/gzip/common1.4.min.css.gz" type="text/css" rel="stylesheet prefetch" media="all">
            