<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>
  


    <main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <div class="row justify-content-lg-center">
          <div class="col-lg-10">
            <!-- Profile Cover -->
            <div class="profile-cover">
              <div class="profile-cover-img-wrapper">
                <img id="profileCoverImg" class="profile-cover-img" src="dost.png" alt="Image Description">

                <!-- Custom File Cover -->
                <div class="profile-cover-content profile-cover-btn">
                  <div class="custom-file-btn">
                    <input type="file" class="js-file-attach custom-file-btn-input" id="profileCoverUplaoder"
                           data-hs-file-attach-options='{
                              "textTarget": "#profileCoverImg",
                              "mode": "image",
                              "targetAttr": "src",
                              "allowTypes": [".png", ".jpeg", ".jpg"]
                           }'>
                    <label class="custom-file-btn-label btn btn-sm btn-white" for="profileCoverUplaoder">
                      <i class="tio-add-photo"></i>
                      <span class="d-none d-sm-inline-block ml-1">Update your header</span>
                    </label>
                  </div>
                </div>
                <!-- End Custom File Cover -->
              </div>
            </div>
            <!-- End Profile Cover -->

            <!-- Profile Header -->
            <div class="text-center mb-5">
              <!-- Avatar -->
              <label class="avatar avatar-xxl avatar-circle avatar-border-lg avatar-uploader profile-cover-avatar" for="avatarUploader">
                <img id="avatarImg" class="avatar-img" src="sir.jpg" alt="Image Description">

                <input type="file" class="js-file-attach avatar-uploader-input" id="avatarUploader"
                       data-hs-file-attach-options='{
                          "textTarget": "#avatarImg",
                          "mode": "image",
                          "targetAttr": "src",
                          "allowTypes": [".png", ".jpeg", ".jpg"]
                       }'>

                <span class="avatar-uploader-trigger">
                  <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                </span>
              </label>
              <!-- End Avatar -->

              <h1 class="page-header-title">Ruel Cabaluna <i class="tio-verified tio-lg text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></h1>

              <!-- List -->
              <ul class="list-inline list-inline-m-1">
                <li class="list-inline-item">
                  <i class="tio-city mr-1"></i>
                  <span>Cagayan De Oro City.</span>
                </li>

                <li class="list-inline-item">
                  <i class="tio-poi-outlined mr-1"></i>
                  <a href="#">Philippines,</a>
                  <a href="#">Misamis Oriental</a>
                </li>

                <li class="list-inline-item">
                  <i class="tio-date-range mr-1"></i>
                  <span>Joined March 2024</span>
                </li>
              </ul>
              <!-- End List -->
            </div>
            <!-- End Profile Header -->

            <!-- Nav -->
            <div class="js-nav-scroller hs-nav-scroller-horizontal mb-5"
                 data-hs-nav-scroller-options='{
                   "type": "horizontal",
                   "delay": 20
                 }'>

              <span class="hs-nav-scroller-arrow-backward" style="display: none;">
                <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                  <i class="tio-chevron-left"></i>
                </a>
              </span>

              <span class="hs-nav-scroller-arrow-forward" style="display: none;">
                <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                  <i class="tio-chevron-right"></i>
                </a>
              </span>

              <ul class="nav nav-tabs align-items-center">
                <li class="nav-item">
                  <a class="nav-link active disabled" href="#">Profile</a>
                </li>
                

                <li class="nav-item ml-auto">
                  <a class="btn btn-sm btn-white mr-2" href="account-settings.html">
                    <i class="tio-edit mr-1"></i> Edit profile
                  </a>

                  <a class="btn btn-icon btn-sm btn-white mr-2" href="#">
                    <i class="tio-format-points mr-1"></i>
                  </a>

                  <!-- Unfold -->
                  <div class="hs-unfold hs-nav-scroller-unfold">
                    <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-white" href="javascript:;"
                       data-hs-unfold-options='{
                         "target": "#profileDropdown",
                         "type": "css-animation"
                       }'>
                      <i class="tio-more-vertical"></i>
                    </a>

                    <div id="profileDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                      <span class="dropdown-header">Settings</span>

                      <a class="dropdown-item" href="#">
                        <i class="tio-share dropdown-item-icon"></i> Share profile
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="tio-blocked dropdown-item-icon"></i> Block page and profile
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="tio-info-outined dropdown-item-icon"></i> Suggest edits
                      </a>

                      <div class="dropdown-divider"></div>

                      <span class="dropdown-header">Feedback</span>

                      <a class="dropdown-item" href="#">
                        <i class="tio-report-outlined dropdown-item-icon"></i> Report
                      </a>
                    </div>
                  </div>
                  <!-- End Unfold -->
                </li>
              </ul>
            </div>
            <!-- End Nav -->

            <div class="row">
              <div class="col-lg-4">
                <!-- Card -->
                <div class="card card-body mb-3 mb-lg-5">
                  <h5>Complete your profile</h5>

                  <!-- Progress -->
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="progress flex-grow-1">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="ml-4">15%</span>
                  </div>
                  <!-- End Progress -->
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                  <!-- Header -->
                  <div class="card-header">
                    <h2 class="card-header-title h5">Profile</h2>

                    <a class="btn btn-sm btn-white" href="account-settings.html">Edit</a>
                  </div>
                  <!-- End Header -->

                  <!-- Body -->
                  <div class="card-body">
                    <ul class="list-unstyled list-unstyled-py-3 text-dark mb-3">
                      <li class="py-0">
                        <small class="card-subtitle">About</small>
                      </li>

                      <li>
                        <i class="tio-user-outlined nav-icon"></i>
                        Ruel Cabaluna
                      </li>
                      <li>
                        <i class="tio-briefcase-outlined nav-icon"></i>
                        Department of Science and Technology
                      </li>
                      <li>
                        <i class="tio-city nav-icon"></i>
                        Cagayan De Oro City
                      </li>

                      <li class="pt-2 pb-0">
                        <small class="card-subtitle">Contacts</small>
                      </li>

                      <li>
                        <i class="tio-online nav-icon"></i>
                        rcabaluna@gmail.com
                      </li>
                      <li>
                        <i class="tio-android-phone-vs nav-icon"></i>
                        +1  (555) 752-01-10
                      </li>

                      <li class="pt-2 pb-0">
                        <small class="card-subtitle">Teams</small>
                      </li>

                      <li class="font-size-sm text-body">
                        <i class="tio-group-equal nav-icon"></i>
                        Team MIS
                      </li>
                      <li class="font-size-sm text-body">
                        <i class="tio-briefcase-outlined nav-icon"></i>
                        DOST Region X
                      </li>
                    </ul>
                  </div>
                  <!-- End Body -->
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card card-lg mb-3 mb-lg-5">
                  <!-- Body -->
                  
                  <!-- End Body -->
                </div>
                <!-- End Card -->
              </div>

              <div class="col-lg-8">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                  <!-- Header -->
                  <div class="card-header">
                    <h2 class="card-header-title h5">Activity stream</h2>

                    <!-- Unfold -->
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;"
                         data-hs-unfold-options='{
                           "target": "#contentActivityStreamDropdown",
                           "type": "css-animation"
                         }'>
                        <i class="tio-more-vertical"></i>
                      </a>

                      <div id="contentActivityStreamDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                        <span class="dropdown-header">Settings</span>

                        <a class="dropdown-item" href="#">
                          <i class="tio-share dropdown-item-icon"></i> Share connections
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-info-outined dropdown-item-icon"></i> Suggest edits
                        </a>

                        <div class="dropdown-divider"></div>

                        <span class="dropdown-header">Feedback</span>

                        <a class="dropdown-item" href="#">
                          <i class="tio-chat-outlined dropdown-item-icon"></i> Report
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                  <!-- End Header -->

                  <!-- Body -->
                  <div class="card-body card-body-height card-body-centered">
                    <img class="avatar avatar-xxl mb-3" src="assets/svg/illustrations/yelling.svg" alt="Image Description">
                    <p class="card-text">No data to show</p>
                    <a class="btn btn-sm btn-white" href="#">Start your Activity</a>
                  </div>
                  <!-- End Body -->
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                  <!-- Header -->
                  <div class="card-header">
                    <h2 class="card-header-title h5">Projects</h2>

                    <!-- Unfold -->
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;"
                         data-hs-unfold-options='{
                           "target": "#projectReportDropdown",
                           "type": "css-animation"
                         }'>
                        <i class="tio-more-vertical"></i>
                      </a>

                      <div id="projectReportDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                        <span class="dropdown-header">Settings</span>

                        <a class="dropdown-item" href="#">
                          <i class="tio-share dropdown-item-icon"></i> Share connections
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="tio-info-outined dropdown-item-icon"></i> Suggest edits
                        </a>

                        <div class="dropdown-divider"></div>

                        <span class="dropdown-header">Feedback</span>

                        <a class="dropdown-item" href="#">
                          <i class="tio-chat-outlined dropdown-item-icon"></i> Report
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                  <!-- End Header -->

                  <!-- Body -->
                  <div class="card-body card-body-height card-body-centered">
                    <img class="avatar avatar-xxl mb-3" src="assets/svg/illustrations/yelling.svg" alt="Image Description">
                    <p class="card-text">No data to show</p>
                    <a class="btn btn-sm btn-white" href="projects.html">Start your Projects</a>
                  </div>
                  <!-- End Body -->
                </div>
                <!-- End Card -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Content -->

      <!-- Footer -->
      
        <div class="footer">
          <div class="row justify-content-between align-items-center">
            <div class="col">
              <p class="font-size-sm mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2020 Htmlstream.</span></p>
            </div>
            <div class="col-auto">
              <div class="d-flex justify-content-end">
                <!-- List Dot -->
                <ul class="list-inline list-separator">
                  <li class="list-inline-item">
                    <a class="list-separator-link" href="#">FAQ</a>
                  </li>

                  <li class="list-inline-item">
                    <a class="list-separator-link" href="#">License</a>
                  </li>

                  <li class="list-inline-item">
                    <!-- Keyboard Shortcuts Toggle -->
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;"
                         data-hs-unfold-options='{
                              "target": "#keyboardShortcutsSidebar",
                              "type": "css-animation",
                              "animationIn": "fadeInRight",
                              "animationOut": "fadeOutRight",
                              "hasOverlay": true,
                              "smartPositionOff": true
                             }'>
                        <i class="tio-command-key"></i>
                      </a>
                    </div>
                    <!-- End Keyboard Shortcuts Toggle -->
                  </li>
                </ul>
                <!-- End List Dot -->
              </div>
            </div>
          </div>
        </div>
      

      
      <!-- End Footer -->
    </main>
<?= $this->endSection() ?>