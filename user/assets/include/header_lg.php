<?php
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    $menus = array('Home' => 'index.php','About' => 'about.php','Companies' => 'companies.php','Blog' => 'blog.php','Contact' => 'contact.php');
?>
<header id="header" class="site-header header-style-2" style="background-color: white">
            <nav class="navigation navbar navbar-default">
                <div class="centered">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="../index.php"><img src="assets/images/logo.png"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navigation-holder navbar-right">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav">
                            <?php
                                  foreach($menus as $menu => $link)
                                  {
                                    echo "<li><a href='../$link'>$menu</a></li>";
                                  }

                                if(isset($_SESSION["user"]))
                                    echo "<li> <a href='logout.php'>Logout</a> </li>";
                                else
                                {
                                    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
                                    if ($curPageName!='login.php')
                                        echo "<li><a href='login.php'>Login</a></li>";
                                    if($curPageName!='register.php')
                                        echo "<li><a href='register.php'>Register</a></li>";
                                }
                                 
                            ?>

                        </ul>
                    </div><!-- end of nav-collapse -->
                    
                </div><!-- end of container -->
            </nav>
</header>