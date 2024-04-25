<?php
        require 'assets/include/connect.php';
        if(isset($_POST['apply']))
        {
          if(mysqli_query($c,"insert into applied_jobs values(".$data['stu_id'].", ".$_POST['job_id'].");"))
            {
                echo "<div class='container-fluid'>
                        <div class='alert alert-success alert-dismissible'>
                            <button type='button' class='close' data-dismiss='alert'> &times; </button>
                            <strong>Your application sent successfully !</strong>
                        </div>
                    </div>";
            }
        }
        $background = "/images/transparent.png";
        $jobs = mysqli_query($c,"select upcoming_jobs.id, logo, role, description, ctc, eligibility from registered_companies, upcoming_jobs where registered_companies.company_name=upcoming_jobs.company_name and upcoming_jobs.id not in (SELECT id FROM upcoming_jobs LEFT JOIN applied_jobs ON upcoming_jobs.id = applied_jobs.job_id WHERE applied_jobs.student_id = ".$data['stu_id'].");");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard - Emplace</title>
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



     <div class='card mb-0' style="height: 110rem; width: 55rem"> 

<div class='card-header'> <h3 class='card-title'>Upcoming Jobs</h3> 
</div> 

<div class='card-body'>     
    <div class="row">





<div class="row row-cols-2 row-cols-md-3 g-4">
    <?php
      while($job = mysqli_fetch_assoc($jobs))
      {
        echo "
        <form method = 'post'>
        <div class='col'>
          <div class='card'>
            <img class='sprite-custom-repair' style='background-image:url(".$background.")' src='" . $job['logo'] . "'>
            <div class='card-body'>
            <input type='hidden' name='job_id' value=" . $job['id'] . ">
              <h5 class='card-title'>" . $job["role"] . "</h5>
              <p class='card-text'>" . $job["description"] . "</p>
              <p class='card-text'>CTC : " . $job["ctc"] . "</p>
              <p class='card-text'>Eligibility : " . $job["eligibility"] . "</p>
            </div>
            <div class='card-footer'>
               
                <input type='submit' name='apply' class='btn btn-outline-danger btn-rounded' value='Apply Now'>
              
            </div>
          </div>
        </div>
        </form>";
      }
    ?>
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