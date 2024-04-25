<?php
        require 'assets/include/connect.php';
        if(isset($_POST['send']))
        {
            $notification = "insert into notifications(title, description) values(?, ?);";
            $stmt = mysqli_prepare($c, $notification);
            mysqli_stmt_bind_param($stmt, "ss", $title, $description);
            extract($_POST);
            if(mysqli_stmt_execute($stmt))
            {
                echo "<div class='container-fluid'>
                    <div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert'> &times; </button>
                        <strong>Notification Sent Successfully !</strong>
                    </div>
                    </div>";
            }
        }
        $background = "/images/transparent.png";
        
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
<link rel="icon" href="assets/images/icon.png" type="image/x-icon">
    <?php
        require 'assets/include/link.php';
    ?>
    
</head>

<body>

    <div class="page-wrapper">

        <div class="preloader">
            <div class="lds-ripple">
                <div></div>
                <div></div>
            </div>
        </div>

        <?php
         require 'assets/include/header_dash.php';
        ?>
        <section class="sptb"> 
            <div class="container"> 
                <div class="row"> 
                <?php
                    require 'assets/include/sidebar.php';
                ?>



     <div class='card mb-0' style="height: 40rem; width: 55rem"> 

<div class='card-header'> <h3 class='card-title'>Send Notification</h3> 
</div> 

<div class='card-body'>     
    <div class="row">



 <div class="ftco-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-1 col-lg-1 mb-5 bg-white"></div>
        <div class="col-md-11 col-lg-11 mb-5">
          <form method="POST" class="p-5 bg-white">
            <div class="row form-group mb-5">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="title">Title</label>
                <input type="text" name="title" class="form-control">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="description">Description</label>
                <textarea name="description" class="form-control" id="" cols="53" rows="8"></textarea>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" name="send" value="Send" class="btn btn-primary  py-2 px-5">
              </div>
            </div>
          </form>
        </div>
       
      </div>
    </div>
  </div>
</div>
</div>
</div>
                </div> 
            </div> 
        </section> 

        <?php
            require 'assets/include/footer_dash.php';
        ?>
    </div>
</body>
</html>