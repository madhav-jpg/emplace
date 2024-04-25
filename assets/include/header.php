<?php
    session_start();
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    $menus = array('Home' => 'index.php','About' => 'about.php','Companies' => 'companies.php','Blog' => 'blog.php','Contact' => 'contact.php');
?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="images/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <?php
              foreach($menus as $menu => $link)
              {
                $isActive = ($curPageName == $link) ? "active" : "";
                echo "<li class='nav-item $isActive'><a href='$link' class='nav-link'>$menu</a></li>";
              }
          ?>
          <!-- <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="companies.php" class="nav-link">Companies</a></li>
          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li> -->

          <?php
                if(isset($_SESSION["admin"]))
                {
                  echo "<li class='nav-item cta mr-md-1'><a href='admin/login.php' class='nav-link'> &nbsp Dashboard &nbsp </a></li>";
                  echo "<li class='nav-item cta cta-colored'><a href='admin/logout.php' class='nav-link'> &nbsp Logout &nbsp </a></li>";
                }
                else if(isset($_SESSION["user"]))
                {
                  echo "<li class='nav-item cta mr-md-1'><a href='user/login.php' class='nav-link'> &nbsp Dashboard &nbsp </a></li>";
                  echo "<li class='nav-item cta cta-colored'><a href='user/logout.php' class='nav-link'> &nbsp Logout &nbsp </a></li>";
                }
                else
                {
                  echo "<li class='nav-item cta mr-md-1'><a href='user/login.php' class='nav-link'> &nbsp Login &nbsp </a></li>";
                  echo "<li class='nav-item cta cta-colored'><a href='user/register.php' class='nav-link'> &nbsp Register &nbsp </a></li>";
                }
          ?>
        </ul>
      </div>
    </div>
  </nav>