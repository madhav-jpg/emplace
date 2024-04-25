<?php
        require 'assets/include/connect.php';
       
        if(!($data['type'] == "Superuser"))
            header("Location:404.php");
        
        if(isset($_POST["add"]))
        {   
            $add_admin = "insert into admin values(?, ?, ?, ?, ?, ?);";
            $stmt = mysqli_prepare($c, $add_admin);
            mysqli_stmt_bind_param($stmt, "isssss", $mob_num, $f_name, $s_name, $email, $type, $password);
            $_POST['password']=hash("sha256", $_POST['password']);
            $type = "Admin";
            extract($_POST);
            
            if(mysqli_stmt_execute($stmt))
            {    echo "<div class='container-fluid'>
                    <div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert'> &times; </button>
                        <strong>New Admin Added Successfully !</strong>
                    </div>
                    </div>";
            }
            else
                echo mysqli_error($c);
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Admin - Emplace</title>
    <link rel="icon" href="assets/images/icon.png" type="image/png"/>

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

<div class="col-xl-9 col-lg-12 col-md-12"> 

<form method="post">

<div class="card mb-0"> 

<div class="card-header"> <h3 class="card-title">Add New Admin</h3> 
</div> 

<div class="card-body"> 



<div class="row"> 


<div class="col-sm-6 col-md-6"> 

<div class="form-group"> 
<label class="form-label">First Name
</label> 
<input type="text" name="f_name" class="form-control" required> 
</div> 
</div> 


<div class="col-sm-6 col-md-6"> 

<div class="form-group"> 
<label class="form-label">Last Name
</label> 
<input type="text" name="s_name" class="form-control" required> 
</div> 
</div> 


<div class="col-sm-6 col-md-6"> 

<div class="form-group"> 
<label class="form-label">Email address
</label> 
<input type="email" name="email" class="form-control" required> 
</div> 
</div> 


<div class="col-sm-6 col-md-6"> 

<div class="form-group"> 
<label class="form-label">Phone Number
</label> 
<input type="tel" name="mob_num" class="form-control" required> 
</div> 
</div> 


<div class="col-sm-6 col-md-4"> 

<div class="form-group"> 
<label class="form-label">Create Password
</label> 
<input type="Password" name="password" class="form-control" required> 
</div> 
</div> 




</div>
</div>
<div class="card-footer"> <input type="submit" class="btn btn-success" name="add" value="Add Admin"> </div> 
</div> 
</form>
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