<?php
        require 'assets/include/connect.php';
        if(isset($_POST['add']))
        {
            $insert_jobs = "insert into upcoming_jobs(company_name, role, description, ctc, eligibility) values(?, ?, ?, ?, ?);";
            $stmt = mysqli_prepare($c, $insert_jobs);
            mysqli_stmt_bind_param($stmt, "sssis", $company_name, $role, $description, $ctc, $eligibility);
            extract($_POST);
            mysqli_stmt_execute($stmt);
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



     <div class='card mb-0' style="height: 55rem; width: 55rem"> 

<div class='card-header'> <h3 class='card-title'>Add Jobs</h3> 
</div> 

<div class='card-body'>     
    <div class="row">



 <div class="ftco-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-1 col-lg-1 mb-5 bg-white"></div>
        <div class="col-md-11 col-lg-11 mb-5">
          <form method="POST" class="p-5 bg-white">
            <!--<div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label for="option-price-1">
                  <input type="checkbox" id="option-price-1"> <span class="text-success">$500</span> For 30 days
                </label>
              </div>
              <div class="col-md-12 mb-3 mb-md-0">
                <label for="option-price-2">
                  <input type="checkbox" id="option-price-2"> <span class="text-success">$300</span> / Monthly Recurring
                </label>
              </div>
            </div>-->
            <div class="row form-group mb-5">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Company Name</label>
                <input type="text" name="company_name" class="form-control" placeholder="eg. Google">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Job Title</label>
                <input type="text" name="role" class="form-control" placeholder="eg. Professional UI/UX Designer">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Job Description</label>
                <textarea name="description" class="form-control" id="" cols="53" rows="5"></textarea>
              </div>
            </div>
            
            <!-- <div class="row form-group">
              <div class="col-md-12">
                <h3>Job Type</h3>
              </div>
              <div class="col-md-12 mb-3 mb-md-0">
                <label for="option-job-type-1">
                  <input type="radio" id="option-job-type-1" name="job-type"> Full Time
                </label>
              </div>
              <div class="col-md-12 mb-3 mb-md-0">
                <label for="option-job-type-2">
                  <input type="radio" id="option-job-type-2" name="job-type"> Part Time
                </label>
              </div>
              <div class="col-md-12 mb-3 mb-md-0">
                <label for="option-job-type-3">
                  <input type="radio" id="option-job-type-3" name="job-type"> Freelance
              </div>
              <div class="col-md-12 mb-3 mb-md-0">
                <label for="option-job-type-4">
                  <input type="radio" id="option-job-type-4" name="job-type"> Internship
                </label>
              </div>
              <div class="col-md-12 mb-3 mb-md-0">
                <label for="option-job-type-4">
                  <input type="radio" id="option-job-type-4" name="job-type"> Termporary
                </label>
              </div>
            </div> -->
            <!-- <div class="row form-group mb-4">
              <div class="col-md-12">
                <h3>Location</h3>
              </div>
              <div class="col-md-12 mb-3 mb-md-0">
                <input type="text" class="form-control" placeholder="Western City, UK">
              </div>
            </div> -->
            <!-- <div class="row form-group">
              <div class="col-md-12">
                <h3>Job Description</h3>
              </div>
              <div class="col-md-12 mb-3 mb-md-0">
                <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
              </div>
            </div>
 -->
            <div class="row form-group mb-5">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">CTC</label>
                <input type="text" name="ctc" class="form-control">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Eligibility</label>
                <input type="text" name="eligibility" class="form-control">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" name="add" value="Post" class="btn btn-primary  py-2 px-5">
              </div>
            </div>
          </form>
        </div>
        <!-- <div class="col-lg-4">
          <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">Contact Info</h3>
            <p class="mb-0 font-weight-bold">Address</p>
            <p class="mb-4">Madhav Kotecha, Darshan Institute of Engineering and Technology, Rajkot, Gujarat, India</p>
            <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4"><a href="#">+91 70169 62649</a></p>
            <p class="mb-0 font-weight-bold">Email Address</p>
            <p class="mb-0"><a href="#"><span>210540107501@darshan.ac.in</span></a></p>
          </div>
          <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">More Info</h3>
            <p>It provides a platform where companies can directly hire freshers.
              Colleges can easily connect with companies which can conduct
              interviews, eligibility tests, and analysis of students caliber through
              Emplace. Students can easily choose their dream company and role,
              prepare their soft resume, interviews, compare and compete.</p>
            <p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>
          </div>
        </div> -->
      </div>
    </div>
  </div>


<!-- <div class="row row-cols-2 row-cols-md-3 g-4">
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
            </div>
            <div class='card-footer'>
               
                <input type='submit' name='apply' class='btn btn-outline-danger btn-rounded' value='Apply Now'>
              
            </div>
          </div>
        </div>
        </form>";
      }
    ?>
</div> -->
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