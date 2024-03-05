<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/front-dashboard/authentication-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 03:26:24 GMT -->

<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Sign In Page</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/css/vendor.min.css">
  <link rel="stylesheet" href="assets/vendor/icon-set/style.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">
</head>

<body>
  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="main">
    <div class="position-fixed top-0 right-0 left-0 bg-img-hero" style="height: 32rem; background-image: url(assets/svg/components/abstract-bg-4.svg);">
      <!-- SVG Bottom Shape -->
      <figure class="position-absolute right-0 bottom-0 left-0">
        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
          <polygon fill="#fff" points="0,273 1921,273 1921,0 " />
        </svg>
      </figure>
      <!-- End SVG Bottom Shape -->
    </div>

    <!-- Content -->
    <div class="container py-5 py-sm-7">
      <a class="d-flex justify-content-center mb-5" href="index.html">
        <img class="z-index-2" src="logo1.png" alt="Image Description" style="width: 5rem;">
      </a>

      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <!-- Card -->
          <div class="card card-lg mb-5">
            <div class="card-body">
              <!-- Form -->
              <form class="js-validate" action="<?=base_url('/sign-in')?>" method="POST">
                <div class="text-center">
                  <div class="mb-5">
                  <h3 class="display-6" style="font-family: 'Roboto', sans-serif;">Sign in</h3>
                   
                  </div>

                

                  
                </div>

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label" for="username">Username</label>

                  <input type="text" class="form-control form-control-lg" name="username" id="username" tabindex="1" placeholder="username" aria-label="username" required data-msg="Please enter a valid username">
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label" for="password" tabindex="0">
                    <span class="d-flex justify-content-between align-items-center">
                      Password
                      <a class="input-label-secondary" href="authentication-reset-password-basic.html">Forgot Password?</a>
                    </span>
                  </label>

                  <div class="input-group input-group-merge">
                    <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="password" placeholder="8+ characters required" aria-label="8+ characters required" required data-msg="Your password is invalid. Please try again." data-hs-toggle-password-options='{
                                "target": "#changePassTarget",
                                "defaultClass": "tio-hidden-outlined",
                                "showClass": "tio-visible-outlined",
                                "classChangeTarget": "#changePassIcon"
                              }'>
                    <div id="changePassTarget" class="input-group-append">
                      <a class="input-group-text" href="javascript:;">
                        <i id="changePassIcon" class="tio-visible-outlined"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox">
                    <label class="custom-control-label text-muted" for="termsCheckbox"> Remember me</label>
                  </div>
                </div>
                <!-- End Checkbox -->

                <button type="submit" class="btn btn-lg btn-block btn-primary">Sign in</button>
              </form>
              <!-- End Form -->
            </div>
          </div>
          <!-- End Card -->

         <!-- End Footer -->
        </div>
      </div>
    </div>
    <!-- End Content -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->


  <!-- JS Implementing Plugins -->
  <script src="assets/js/vendor.min.js"></script>

  <!-- JS Front -->
  <script src="assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function() {
      // INITIALIZATION OF SHOW PASSWORD
      // =======================================================
      $('.js-toggle-password').each(function() {
        new HSTogglePassword(this).init()
      });


      // INITIALIZATION OF FORM VALIDATION
      // =======================================================
      $('.js-validate').each(function() {
        $.HSCore.components.HSValidation.init($(this));
      });
    });
  </script>

  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
  </script>
</body>

<!-- Mirrored from htmlstream.com/front-dashboard/authentication-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jan 2022 03:26:39 GMT -->

</html>