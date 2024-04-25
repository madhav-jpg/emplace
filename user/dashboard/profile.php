<?php
        require 'assets/include/connect.php';

        if(isset($_POST["update"]))
        {
            $qry="update student set f_name='".$_POST["f_name"]."', s_name='".$_POST["s_name"]."', email='".$_POST["email"]."', linkedin_link='".$_POST["linkedin_link"]."', github_link='".$_POST["github_link"]."', city='".$_POST["city"]."', pincode=".$_POST["pincode"]." where mob_num=".$_SESSION["user"];
            if(mysqli_query($c,$qry))
            {    echo "<div class='container-fluid'>
                    <div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert'> &times; </button>
                        <strong>Profile Updated !</strong>
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
    <title>Profile - Emplace</title>
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



<div class="col-xl-9 col-lg-12 col-md-12"> 

<form method="post">

<div class="card mb-0"> 

<div class="card-header"> <h3 class="card-title">Edit Profile</h3> 
</div> 

<div class="card-body"> 



<div class="row"> 

<div class="col-sm-6 col-md-6"> 

<div class="form-group"> 
<label class="form-label">First Name
</label> 
<input type="text" name="f_name" class="form-control" placeholder="First Name" <?php echo "value=".$data["f_name"]; ?>> 
</div> 
</div> 

<div class="col-sm-6 col-md-6"> 

<div class="form-group"> 
<label class="form-label">Last Name
</label> 
<input type="text" name="s_name" class="form-control" placeholder="Last Name" <?php echo "value=".$data["s_name"]; ?>> 
</div> 
</div> 

<div class="col-sm-6 col-md-6"> 

<div class="form-group"> 
<label class="form-label">Email address
</label> 
<input type="email" name="email" class="form-control" placeholder="Email" <?php echo "value=".$data["email"]; ?>> 
</div> 
</div> 

<div class="col-sm-6 col-md-6"> 

<div class="form-group"> 
<label class="form-label">Phone Number
</label> 
<input type="number" name="mob_num" class="form-control" placeholder="Number" <?php echo "value=".$_SESSION['user']; ?> disabled> 
</div> 
</div> 


<div class="col-sm-6 col-md-4"> 

<div class="form-group"> 
<label class="form-label">City
</label> 
<select name="city" class="form-control" > 
<?php
        $disp=mysqli_query($c,"select name from city");
        // echo "<datalist id='city'>";
            while($row=mysqli_fetch_array($disp)) 
            {
                echo "<option ";
                if($row['name']==$data['city'])
                    echo "selected";
                echo ">".$row['name']."</option>";
            }
?>
</select>
</div> 
</div> 

<div class="col-sm-6 col-md-4"> 

<div class="form-group"> 
<label class="form-label">Pincode
</label> 
<input type="tel" name="pincode" class="form-control" placeholder="ZIP Code" <?php echo "value=".$data['pincode']; ?>> 
</div> 
</div> 

 <div class="col-sm-6 col-md-4"> 

<div class="form-group"> 
    <br>
<label class="form-label"><a href="change_password.php">Want to Change Password ?</a>
</label> 
</div> 
</div>

<div class="col-sm-6 col-md-6"> 

<div class="form-group"> 
<label class="form-label">LinkedIn URL
</label> 
<input type="url" name="linkedin_link" class="form-control" placeholder="https://www.linkedin.com" <?php echo "value=".$data["linkedin_link"]; ?>> 
</div> 
</div> 

<div class="col-sm-6 col-md-6"> 

<div class="form-group"> 
<label class="form-label">GitHub Link
</label> 
<input type="url" name="github_link" class="form-control" placeholder="https://github.com/" <?php echo "value=".$data["github_link"]; ?>> 
</div> 
</div> 

</div> 

</div> 

<div class="card-footer"> <input type="submit" class="btn btn-success" name="update" value="Update Profile"> 
</div> 
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