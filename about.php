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

  <div class="hero-wrap hero-wrap-2"
    style="background-image: url('images/about.jpg'); background-size: auto; background-position: center; background-attachment: fixed;"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-start">
        <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
          <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Home <i
                  class="ion-ios-arrow-forward"></i></a></span> <span>About</span></p>
          <h1 class="mb-3 bread">About Us</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="intro row text-center justify-content-center">
            <div class="col-md-9">
              <img class="img-fluid" src="images/undraw_work_time_lhoj.svg" alt="">
            </div>
            <h2 class="mb-4">Welcome to Emplace</h2>
            <p>It provides a platform where companies can directly hire freshers.
              Colleges can easily connect with companies which can conduct
              interviews, eligibility tests, and analysis of students caliber through
              Emplace. Students can easily choose their dream company and role,
              prepare their soft resume, interviews, compare and compete.</p>
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
  
  <section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2>Subscribe to our Newsletter</h2>
            <p>Subscribe to our Newsletter to get all latest job post and bolgs to know trending jobs and skills.</p>
            <div class="row d-flex justify-content-center mt-4 mb-4">
              <div class="col-md-12">
                <form action="#" class="subscribe-form">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Enter email address">
                    <input type="submit" value="Subscribe" class="submit px-3">
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
    data-cf-beacon='{"rayId":"76da92e1da198aff","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.0","si":100}'
    crossorigin="anonymous"></script>
</body>

</html>