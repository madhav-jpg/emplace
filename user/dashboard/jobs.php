<?php
        require 'assets/include/connect.php';
        $background = "/images/transparent.png";
        $jobs = mysqli_query($c,"select logo, role, description, ctc, eligibility from registered_companies, upcoming_jobs where registered_companies.company_name=upcoming_jobs.company_name and upcoming_jobs.id in (SELECT id FROM upcoming_jobs LEFT JOIN applied_jobs ON upcoming_jobs.id = applied_jobs.job_id WHERE applied_jobs.student_id = ".$data['stu_id'].")");
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

<div class='card-header'> <h3 class='card-title'>Applied Jobs</h3> 
</div> 

<div class='card-body'>     
    <div class="row">





<div class="row row-cols-2 row-cols-md-3 g-4">
    <?php
      while($job = mysqli_fetch_assoc($jobs))
      {
        echo "<div class='col'>
          <div class='card'>
            <img class='sprite-custom-repair' style='background-image:url(".$background.")' src='" . $job['logo'] . "'>
            <div class='card-body'>
              <h5 class='card-title'>" . $job["role"] . "</h5>
              <p class='card-text'>" . $job["description"] . "</p>
              <p class='card-text'>CTC : " . $job["ctc"] . "</p>
              <p class='card-text'>Eligibility : " . $job["eligibility"] . "</p>
            </div>
          </div>
        </div>";
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

