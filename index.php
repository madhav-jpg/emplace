<?php
    require "assets/include/connect.php";
    if(isset($_POST['Subscribe']))
    {
      $sql = "insert into subscribers values('".$_POST['email']."')";
      mysqli_query($c,$sql);
      // {
      //   echo "<div class='container-fluid'>
      //             <div class='alert alert-success alert-dismissible'>
      //                 <button type='button' class='close' data-dismiss='alert'> &times; </button>
      //                 <strong>Subscribed successfully !</strong>
      //             </div>
      //         </div>";
      // }
    }
        $sql  = 'SELECT `blog_id`, `blog_title`, `blog_date`, `blog_image` FROM `blogs`';
        $blogs = mysqli_query($c, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Emplace - Simplified way of placement drive</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="../../../fonts.googleapis.com/css5e25.css?family=Nunito+Sans:200,300,400,600,700,800,900"
    rel="stylesheet">
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
  <script
    nonce = "a2bc4993-44b7-4bf6-ba7c-2836eae7442e" > (function(w, d) {
    ! function(e, f, g, h) {
        e.zarazData = e.zarazData || {};
        e.zarazData.executed = [];
        e.zaraz = {
            deferred: [],
            listeners: []
        };
        e.zaraz.q = [];
        e.zaraz._f = function(i) {
            return function() {
                var j = Array.prototype.slice.call(arguments);
                e.zaraz.q.push({
                    m: i,
                    a: j
                })
            }
        };
        for (const k of ["track", "set", "debug"]) e.zaraz[k] = e.zaraz._f(k);
        e.zaraz.init = () => {
            var l = f.getElementsByTagName(h)[0],
                m = f.createElement(h),
                n = f.getElementsByTagName("title")[0];
            n && (e.zarazData.t = f.getElementsByTagName("title")[0].text);
            e.zarazData.x = Math.random();
            e.zarazData.w = e.screen.width;
            e.zarazData.h = e.screen.height;
            e.zarazData.j = e.innerHeight;
            e.zarazData.e = e.innerWidth;
            e.zarazData.l = e.location.href;
            e.zarazData.r = f.referrer;
            e.zarazData.k = e.screen.colorDepth;
            e.zarazData.n = f.characterSet;
            e.zarazData.o = (new Date).getTimezoneOffset();
            if (e.dataLayer)
                for (const r of Object.entries(Object.entries(dataLayer).reduce(((s, t) => ({
                        ...s[1],
                        ...t[1]
                    }))))) zaraz.set(r[0], r[1], {
                    scope: "page"
                });
            e.zarazData.q = [];
            for (; e.zaraz.q.length;) {
                const u = e.zaraz.q.shift();
                e.zarazData.q.push(u)
            }
            m.defer = !0;
            for (const v of [localStorage, sessionStorage]) Object.keys(v || {}).filter((x => x.startsWith("_zaraz_"))).forEach((w => {
                try {
                    e.zarazData["z_" + w.slice(7)] = JSON.parse(v.getItem(w))
                } catch {
                    e.zarazData["z_" + w.slice(7)] = v.getItem(w)
                }
            }));
            m.referrerPolicy = "origin";
            m.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(e.zarazData)));
            l.parentNode.insertBefore(m, l)
        };
        ["complete", "interactive"].includes(f.readyState) ? zaraz.init() : e.addEventListener("DOMContentLoaded", zaraz.init)
    }(w, d, 0, "script");
})(window, document);</script>
    <link rel="icon" href="images/icon.png" type="image/x-icon">
</head>

<body>
  <?php
            require "assets/include/header.php";
  ?>

  <div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container-fluid px-0">
      <div class="row d-md-flex no-gutters slider-text align-items-end js-fullheight justify-content-end">
        <img class="one-third align-self-end order-md-last img-fluid" src="images/undraw_work_time_lhoj.svg" alt="">
        <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
          <div class="text mt-5">
            <p class="mb-4 mt-5 pt-5">We have <span class="number" data-number="200000">0</span> great job offers you
              deserve!</p>
            <h2 class="mb-5"><b>Kickstart your career with great opportunities</b></h2>
            <div class="ftco-search">
              <div class="row">
                <div class="col-md-12 nav-link-wrap">
                  <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                      role="tab" aria-controls="v-pills-1" aria-selected="true">Find a Job</a>
                    <!-- <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                      aria-controls="v-pills-2" aria-selected="false">Find a Candidate</a> -->
                  </div>
                </div>
                <div class="col-md-12 tab-wrap">
                  <div class="tab-content p-4" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                      aria-labelledby="v-pills-nextgen-tab">
                      <form action="available-jobs.php" method="POST" class="search-job">
                        <div class="row no-gutters">
                          <div class="col-md mr-md-2">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-briefcase"></span></div>
                                <input type="text" name="role" class="form-control" placeholder="Role">
                              </div>
                            </div>
                          </div>
                          <div class="col-md mr-md-2">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-layers"></span></div>
                                <input type="text" name="company" class="form-control" placeholder="Company">
                              </div>
                            </div>
                          </div>
                          <!-- <div class="col-md mr-md-2">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="select-wrap">
                                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                  <select name="" id="" class="form-control">
                                    <option value="">Category</option>
                                    <option value="">Full Time</option>
                                    <option value="">Part Time</option>
                                    <option value="">Freelance</option>
                                    <option value="">Internship</option>
                                    <option value="">Temporary</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div> -->
                          <!-- <div class="col-md mr-md-2">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-map-marker"></span></div>
                                <input type="text" class="form-control" placeholder="Location">
                              </div>
                            </div>
                          </div> -->
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <button type="submit" name="search" class="form-control btn btn-secondary">Search</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!--<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                      <form action="#" class="search-job">
                        <div class="row">
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-user"></span></div>
                                <input type="text" class="form-control" placeholder="eg. Madhav">
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="select-wrap">
                                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                  <select name="" id="" class="form-control">
                                    <option value="">Category</option>
                                    <option value="">Full Time</option>
                                    <option value="">Part Time</option>
                                    <option value="">Freelance</option>
                                    <option value="">Internship</option>
                                    <option value="">Temporary</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-map-marker"></span></div>
                                <input type="text" class="form-control" placeholder="Location">
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <button type="submit" class="form-control btn btn-secondary">Search</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section services-section bg-primary">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block">
            <div class="icon"><span class="flaticon-resume"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Search Millions of Jobs</h3>
              <p>Search job that best suits your profile</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block">
            <div class="icon"><span class="flaticon-collaboration"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Easy To Manage Jobs</h3>
              <p>You can apply for multiple job and accept job offer that is the best for you.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block">
            <div class="icon"><span class="flaticon-promotions"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Top Careers</h3>
              <p>Get recommends of top growing job in engineering.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block">
            <div class="icon"><span class="flaticon-employee"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Search Expert Candidates</h3>
              <p>Recruiters can analyse applicants to hire the best out of it.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Job Categories</span>
          <h2 class="mb-4">Top Categories</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 ftco-animate">
          <ul class="category">
            <li><a href="#">Web Development <br><span class="number">354</span> <span>Open position</span><i
                  class="ion-ios-arrow-forward"></i></a></li>
            <li><a href="#">Graphic Designer <br><span class="number">143</span> <span>Open position</span><i
                  class="ion-ios-arrow-forward"></i></a></li>
            <li><a href="#">Multimedia <br><span class="number">100</span> <span>Open position</span><i
                  class="ion-ios-arrow-forward"></i></a></li>
            <li><a href="#">Advertising <br><span class="number">90</span> <span>Open position</span><i
                  class="ion-ios-arrow-forward"></i></a></li>
          </ul>
        </div>
        <div class="col-md-3 ftco-animate">
          <ul class="category">
            <li><a href="#">Education &amp; Training <br><span class="number">100</span> <span>Open position</span><i
                  class="ion-ios-arrow-forward"></i></a></li>
            <li><a href="#">English <br><span class="number">200</span> <span>Open position</span><i
                  class="ion-ios-arrow-forward"></i></a></li>
            <li><a href="#">Social Media <br><span class="number">300</span> <span>Open position</span><i
                  class="ion-ios-arrow-forward"></i></a></li>
            <li><a href="#">Writing <br><span class="number">150</span> <span>Open position</span><i
                  class="ion-ios-arrow-forward"></i></a></li>
          </ul>
        </div>
        <div class="col-md-3 ftco-animate">
          <ul class="category">
            <li><a href="#">PHP Programming <br><span class="number">400</span> <span>Open position</span><i
                  class="ion-ios-arrow-forward"></i></a></li>
            <li><a href="#">Project Management <br><span class="number">100</span> <span>Open position</span><i
                  class="ion-ios-arrow-forward"></i></a></li>
            <li><a href="#">Finance Management <br><span class="number">222</span> <span>Open position</span><i
                  class="ion-ios-arrow-forward"></i></a></li>
            <li><a href="#">Office &amp; Admin <br><span class="number">123</span> <span>Open position</span><i
                  class="ion-ios-arrow-forward"></i></a></li>
          </ul>
        </div>
        <div class="col-md-3 ftco-animate">
          <ul class="category">
            <li><a href="#">Web Designer <br><span class="number">324</span> <span>Open position</span></span><i
                  class="ion-ios-arrow-forward"></i></a></li>
            <li><a href="#">Customer Service <br><span class="number">564</span> <span>Open position</span><i
                  class="ion-ios-arrow-forward"></i></a></li>
            <li><a href="#">Marketing &amp; Sales <br><span class="number">234</span> <span>Open position</span><i
                  class="ion-ios-arrow-forward"></i></a></li>
            <li><a href="#">Software Development <br><span class="number">425</span> <span>Open position</span><i
                  class="ion-ios-arrow-forward"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section img" style="background-image: url(images/bg_1.jpg); background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="browse-job p-5">
            <span class="icon-search2 icon"></span>
            <span class="subheading">Search Job</span>
            <h2>Browse Job by Specialism</h2>
            <p>With Emplace, you can get tips to make resume, can give mock interviews, search jobs that best suits for
              your profile and apply to get hired.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 pr-lg-5">
          <div class="row justify-content-center pb-3">
            <div class="col-md-12 heading-section ftco-animate">
              <span class="subheading">Recently Added Jobs</span>
              <h2 class="mb-4">Hot Jobs</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 ftco-animate">
              <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                <div class="one-third mb-4 mb-md-0">
                  <div class="job-post-item-header d-flex align-items-center">
                    <h2 class="mr-3 text-black"><a href="#">Frontend Development</a></h2>
                    <div class="badge-wrap">
                      <span class="bg-primary text-white badge py-2 px-3">Partime</span>
                    </div>
                  </div>
                  <div class="job-post-item-body d-block d-md-flex">
                    <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
                    <div><span class="icon-my_location"></span> <span>Hyderabad, India</span></div>
                  </div>
                </div>
                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                  <div>
                    <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                      <span class="icon-heart"></span>
                    </a>
                  </div>
                  <a href="job-single.php" class="btn btn-primary py-2">Apply Job</a>
                </div>
              </div>
            </div>
            <div class="col-md-12 ftco-animate">
              <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                <div class="one-third mb-4 mb-md-0">
                  <div class="job-post-item-header d-flex align-items-center">
                    <h2 class="mr-3 text-black"><a href="#">Full Stack Developer</a></h2>
                    <div class="badge-wrap">
                      <span class="bg-warning text-white badge py-2 px-3">Fulltime</span>
                    </div>
                  </div>
                  <div class="job-post-item-body d-block d-md-flex">
                    <div class="mr-3"><span class="icon-layers"></span> <a href="#">Google, Inc.</a></div>
                    <div><span class="icon-my_location"></span> <span>Bangalore, India</span></div>
                  </div>
                </div>
                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                  <div>
                    <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                      <span class="icon-heart"></span>
                    </a>
                  </div>
                  <a href="job-single.php" class="btn btn-primary py-2">Apply Job</a>
                </div>
              </div>
            </div>
            <div class="col-md-12 ftco-animate">
              <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                <div class="one-third mb-4 mb-md-0">
                  <div class="job-post-item-header d-flex align-items-center">
                    <h2 class="mr-3 text-black"><a href="#">Open Source Interactive Developer</a></h2>
                    <div class="badge-wrap">
                      <span class="bg-info text-white badge py-2 px-3">Freelance</span>
                    </div>
                  </div>
                  <div class="job-post-item-body d-block d-md-flex">
                    <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
                    <div><span class="icon-my_location"></span> <span>Remote</span></div>
                  </div>
                </div>
                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                  <div>
                    <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                      <span class="icon-heart"></span>
                    </a>
                  </div>
                  <a href="job-single.php" class="btn btn-primary py-2">Apply Job</a>
                </div>
              </div>
            </div>
            <div class="col-md-12 ftco-animate">
              <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                <div class="one-third mb-4 mb-md-0">
                  <div class="job-post-item-header d-flex align-items-center">
                    <h2 class="mr-3 text-black"><a href="#">Frontend Development</a></h2>
                    <div class="badge-wrap">
                      <span class="bg-secondary text-white badge py-2 px-3">Internship</span>
                    </div>
                  </div>
                  <div class="job-post-item-body d-block d-md-flex">
                    <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
                    <div><span class="icon-my_location"></span> <span>Hyderabad, India</span></div>
                  </div>
                </div>
                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                  <div>
                    <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                      <span class="icon-heart"></span>
                    </a>
                  </div>
                  <a href="job-single.php" class="btn btn-primary py-2">Apply Job</a>
                </div>
              </div>
            </div>
            <div class="col-md-12 ftco-animate">
              <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                <div class="one-third mb-4 mb-md-0">
                  <div class="job-post-item-header d-flex align-items-center">
                    <h2 class="mr-3 text-black"><a href="#">Open Source Interactive Developer</a></h2>
                    <div class="badge-wrap">
                      <span class="bg-danger text-white badge py-2 px-3">Temporary</span>
                    </div>
                  </div>
                  <div class="job-post-item-body d-block d-md-flex">
                    <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
                    <div><span class="icon-my_location"></span> <span>Remote</span></div>
                  </div>
                </div>
                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                  <div>
                    <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                      <span class="icon-heart"></span>
                    </a>
                  </div>
                  <a href="job-single.php" class="btn btn-primary py-2">Apply Job</a>
                </div>
              </div>
            </div>
            <div class="col-md-12 ftco-animate">
              <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                <div class="one-third mb-4 mb-md-0">
                  <div class="job-post-item-header d-flex align-items-center">
                    <h2 class="mr-3 text-black"><a href="#">Full Stack Developer</a></h2>
                    <div class="badge-wrap">
                      <span class="bg-warning text-white badge py-2 px-3">Fulltime</span>
                    </div>
                  </div>
                  <div class="job-post-item-body d-block d-md-flex">
                    <div class="mr-3"><span class="icon-layers"></span> <a href="#">Google, Inc.</a></div>
                    <div><span class="icon-my_location"></span> <span>Mumbai, India</span></div>
                  </div>
                </div>
                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                  <div>
                    <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                      <span class="icon-heart"></span>
                    </a>
                  </div>
                  <a href="job-single.php" class="btn btn-primary py-2">Apply Job</a>
                </div>
              </div>
            </div>
            <div class="col-md-12 ftco-animate">
              <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                <div class="one-third mb-4 mb-md-0">
                  <div class="job-post-item-header d-flex align-items-center">
                    <h2 class="mr-3 text-black"><a href="#">Open Source Interactive Developer</a></h2>
                    <div class="badge-wrap">
                      <span class="bg-info text-white badge py-2 px-3">Freelance</span>
                    </div>
                  </div>
                  <div class="job-post-item-body d-block d-md-flex">
                    <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
                    <div><span class="icon-my_location"></span> <span>Remote</span></div>
                  </div>
                </div>
                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                  <div>
                    <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                      <span class="icon-heart"></span>
                    </a>
                  </div>
                  <a href="job-single.php" class="btn btn-primary py-2">Apply Job</a>
                </div>
              </div>
            </div>
            <div class="col-md-12 ftco-animate">
              <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                <div class="one-third mb-4 mb-md-0">
                  <div class="job-post-item-header d-flex align-items-center">
                    <h2 class="mr-3 text-black"><a href="#">Frontend Development</a></h2>
                    <div class="badge-wrap">
                      <span class="bg-secondary text-white badge py-2 px-3">Internship</span>
                    </div>
                  </div>
                  <div class="job-post-item-body d-block d-md-flex">
                    <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
                    <div><span class="icon-my_location"></span> <span>Pune, India</span></div>
                  </div>
                </div>
                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                  <div>
                    <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                      <span class="icon-heart"></span>
                    </a>
                  </div>
                  <a href="job-single.php" class="btn btn-primary py-2">Apply Job</a>
                </div>
              </div>
            </div>
            <div class="col-md-12 ftco-animate">
              <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                <div class="one-third mb-4 mb-md-0">
                  <div class="job-post-item-header d-flex align-items-center">
                    <h2 class="mr-3 text-black"><a href="#">Open Source Interactive Developer</a></h2>
                    <div class="badge-wrap">
                      <span class="bg-danger text-white badge py-2 px-3">Temporary</span>
                    </div>
                  </div>
                  <div class="job-post-item-body d-block d-md-flex">
                    <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
                    <div><span class="icon-my_location"></span> <span>Remote</span></div>
                  </div>
                </div>
                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                  <div>
                    <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                      <span class="icon-heart"></span>
                    </a>
                  </div>
                  <a href="job-single.php" class="btn btn-primary py-2">Apply Job</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 sidebar">
          <div class="row justify-content-center pb-3">
            <div class="col-md-12 heading-section ftco-animate">
              <span class="subheading">Recruitment agencies</span>
              <h2 class="mb-4">Top Recruitments</h2>
            </div>
          </div>
          <div class="sidebar-box ftco-animate">
            <div class="border">
              <a href="#" class="company-wrap"><img src="images/companies/google.jpg" class="img-fluid"></a>
              <div class="text p-3">
                <h3><a href="#">Google Inc.</a></h3>
                <p><span class="number">500</span> <span>Open position</span></p>
              </div>
            </div>
          </div>
          <div class="sidebar-box ftco-animate">
            <div class="border">
              <a href="#" class="company-wrap"><img src="images/companies/meta.jpg" class="img-fluid"></a>
              <div class="text p-3">
                <h3><a href="#">Meta</a></h3>
                <p><span class="number">700</span> <span>Open position</span></p>
              </div>
            </div>
          </div>
          <div class="sidebar-box ftco-animate">
            <div class="border">
              <a href="#" class="company-wrap"><img src="images/companies/amazon.jpg" class="img-fluid"></a>
              <div class="text p-3">
                <h3><a href="#">Amazon</a></h3>
                <p><span class="number">70</span> <span>Open position</span></p>
              </div>
            </div>
          </div>
          <div class="sidebar-box ftco-animate">
            <div class="border">
              <a href="#" class="company-wrap"><img src="images/companies/microsoft.png" class="img-fluid"></a>
              <div class="text p-3">
                <h3><a href="#">Microsoft</a></h3>
                <p><span class="number">450</span> <span>Open position</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <div class="icon">
                    <span class="flaticon-employee"></span>
                  </div>
                  <strong class="number" data-number="435000">0</strong>
                  <span>Jobs</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <div class="icon">
                    <span class="flaticon-collaboration"></span>
                  </div>
                  <strong class="number" data-number="40000">0</strong>
                  <span>Members</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <div class="icon">
                    <span class="flaticon-resume"></span>
                  </div>
                  <strong class="number" data-number="30000">0</strong>
                  <span>Resume</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <div class="icon">
                    <span class="flaticon-promotions"></span>
                  </div>
                  <strong class="number" data-number="10500">0</strong>
                  <span>Company</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Our Blog</span>
          <h2><span>Recent</span> Blog</h2>
        </div>
      </div>
      <div class="row d-flex">
        <?php
        for ($i=0; $i < 4; $i++) { 
        $blog = mysqli_fetch_assoc($blogs);
        extract($blog);
          echo "<div class='col-md-3 d-flex ftco-animate'>
                  <div class='blog-entry align-self-stretch'>
                  <a href='blog-view.php?blog_id=".$blog_id."' class='block-20' style='background-image: url(".$blog_image.");'>
                  </a>
                    <div class='text mt-3'>
                      <div class='meta mb-2'>
                        <div><a href='#'>".$blog_date."</a></div>
                        <div><a href='#'>Admin</a></div>
                        <div><a href='#' class='meta-chat'><span class='icon-chat'></span> 3</a></div>
                      </div>
                      <h3 class='heading'><a href='blog-view.php?blog_id=".$blog_id."'>".$blog_title."</a></h3>
                    </div>
                  </div>
                </div>";
          }
        ?>
        <!-- <div class="col-md-3 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.php" class="block-20" style="background-image: url('images/image_1.jpg');">
            </a>
            <div class="text mt-3">
              <div class="meta mb-2">
                <div><a href="#">October 25, 2022</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">How to ace in group discussion round ?</a>
              </h3>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.php" class="block-20" style="background-image: url('images/image_2.jpg');">
            </a>
            <div class="text mt-3">
              <div class="meta mb-2">
                <div><a href="#">September 30, 2022</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">10 Tips to prepare your resume</a>
              </h3>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.php" class="block-20" style="background-image: url('images/image_3.jpg');">
            </a>
            <div class="text mt-3">
              <div class="meta mb-2">
                <div><a href="#">August 10, 2022</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">How to prepare for Online Assessment round of aptitude and coding</a>
              </h3>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.php" class="block-20" style="background-image: url('images/image_4.jpg');">
            </a>
            <div class="text mt-3">
              <div class="meta mb-2">
                <div><a href="#">July 3, 2022</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">Learn demanded courses and make industry ready skills to get paid
                higher</a>
              </h3>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>
  <section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2>Subscribe to our Newsletter</h2>
            <p>Subscribe to our Newsletter to get all latest job post and bolgs to know trending jobs and skills.</p>
            <div class="row d-flex justify-content-center mt-4 mb-4">
              <div class="col-md-12">
                <form method="POST" class="subscribe-form">
                  <div class="form-group d-flex">
                    <input type="email" name="email" class="form-control" placeholder="Enter email address">
                    <input type="submit" name="Subscribe" value="Subscribe" class="submit px-3">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">About</h2>
            <p>It provides a platform where companies can directly hire freshers.
              Colleges can easily connect with companies which can conduct
              interviews, eligibility tests, and analysis of students caliber through
              Emplace. Students can easily choose their dream company and role,
              prepare their soft resume, interviews, compare and compete.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Employers</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">How it works</a></li>
              <li><a href="#" class="py-2 d-block">Register</a></li>
              <li><a href="#" class="py-2 d-block">Post a Job</a></li>
              <li><a href="#" class="py-2 d-block">Advance Skill Search</a></li>
              <li><a href="#" class="py-2 d-block">Recruiting Service</a></li>
              <li><a href="#" class="py-2 d-block">Blog</a></li>
              <li><a href="#" class="py-2 d-block">Faq</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Workers</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">How it works</a></li>
              <li><a href="#" class="py-2 d-block">Register</a></li>
              <li><a href="#" class="py-2 d-block">Post Your Skills</a></li>
              <li><a href="#" class="py-2 d-block">Job Search</a></li>
              <li><a href="#" class="py-2 d-block">Emploer Search</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Madhav Kotecha, Darshan Institute of
                    Engineering and Technology, Rajkot, Gujarat, India</span></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span
                      class="text">210540107501@darshan.ac.in</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
        </div>
      </div>
    </div>
  </footer>

  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg></div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
    integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
    data-cf-beacon='{"rayId":"76da927e0e0d8aff","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.0","si":100}'
    crossorigin="anonymous"></script>
</body>

</html>