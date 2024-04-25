<?php
        require 'assets/include/connect.php';
        // if(!in_array($curPageName, $sites))
        //     header("Location:404.php");
        extract($_POST);

        $students = mysqli_query($c,"select mob_num, f_name, s_name, email, city, linkedin_link, github_link from student where stu_id in (select student_id from applied_jobs where job_id = ".$job_id.")");
        $sql = mysqli_query($c,"select company_name, role from upcoming_jobs where id = ".$job_id);
        $company_info = mysqli_fetch_assoc($sql);        
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard - Emplace</title>
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
            <div class="container" style="margin-left: auto;"> 
                <div class="row"> 
                <?php
                    // require 'assets/include/sidebar.php';
                ?>

                 <div class='col-xl-15 col-lg-15 col-md-15' > 
<div class="card mb-18" > 

<div class="card-header"> <h3 class="card-title">Applicants</h3> 
</div> 

<div class="card-body"> 

<div class="container">
    <!-- <form method="post"> -->
        <!-- <div class="btn btn-group"> -->
            <!-- <input type="submit" name="view" class="btn btn-info" value="Today's Appointments">
            <input type="submit" name="view" class="btn btn-info" value="Upcoming Appointments"> -->
            <strong>
            <?php
                echo $company_info['company_name'] ." - ". $company_info['role'];
            ?>
            </strong>
        <!-- </div> -->
    <!-- </form> -->
    
</div>
<div class="tab-content">
<div class="table-responsive border-top"> 
<?php

    if(mysqli_num_rows($students)>0)
    {
        echo "<table class='table table-bordered table-hover text-nowrap'> 
        <caption style='caption-side:top; text-align:center'>Applicants</caption>
            <thead>
                <tr>
                    <th>Sr No
                    </th>
                    <th>Name
                    </th>
                    <th>City
                    </th>
                    <th>Mobile
                    </th>
                    <th>Email
                    </th>
                    <th>linkedin_link
                    </th>
                    <th>github_link
                    </th>
                </tr> 
            </thead>";

            echo "<tbody>";

            $count = 1;
            while($student=mysqli_fetch_assoc($students))
            {

                extract($student);
                echo "<tr>
                    <th>".$count."
                    </th>
                    <th>".$f_name." ".$s_name."
                    </th>
                    <th>".$city."
                    </th>
                    <th>".$mob_num."
                    </th>
                    <th>".$email."
                    </th>
                    <th>".$linkedin_link."
                    </th>
                    <th>".$github_link."
                    </th>";
                    $count ++;
            }
            echo "</tbody>";
        echo "</table>";
    }
    else
        echo "<br><div align='center'>No applicants found</div>";
    
?>
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