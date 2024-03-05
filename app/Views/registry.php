<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>
<main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-end mb-3">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
              </nav>

            </div>

            <div class="col-sm-auto">
              <a class="btn btn-primary" href="javascript:;" data-toggle="modal" data-target="#shareWithPeopleModal">
                <i class="tio-add mr-1"></i> New User
              </a>
            </div>
          </div>
          <!-- End Row -->

          <!-- Nav -->
          <!-- Nav -->
          <div class="js-nav-scroller hs-nav-scroller-horizontal">
            <span class="hs-nav-scroller-arrow-prev" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="tio-chevron-left"></i>
              </a>
            </span>

            <span class="hs-nav-scroller-arrow-next" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="tio-chevron-right"></i>
              </a>
            </span>

            <ul class="nav nav-tabs page-header-tabs" id="projectsTab" role="tablist">

              
              <li class="nav-item">
                <a class="nav-link active" href="project-teams.html">Teams</a>
              </li>
              
            </ul>
          </div>
          <!-- End Nav -->
        </div>
        <!-- End Page Header -->

        <!-- Card -->
        <div class="card">
          <!-- Header -->
          <div class="card-header">
            <div class="row justify-content-between align-items-center flex-grow-1">
              <div class="col-12 col-md">
                <form>
                  <!-- Search -->
                  <div class="input-group input-group-merge input-group-borderless">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tio-search"></i>
                      </div>
                    </div>
                    <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
                  </div>
                  <!-- End Search -->
                </form>
              </div>

              <div class="col-auto">
                <div class="d-flex align-items-center">
                  <!-- Datatable Info -->
                  <div id="datatableCounterInfo" class="mr-2" style="display: none;">
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-3">
                        <span id="datatableCounter">0</span>
                        Selected
                      </span>

                      <a class="btn btn-sm btn-outline-danger" href="javascript:;">
                        <i class="tio-delete-outlined"></i> Delete
                      </a>
                    </div>
                  </div>
                  <!-- End Datatable Info -->

                  <!-- Filter Collapse Trigger -->
                  <a class="btn btn-white dropdown-toggle" data-toggle="collapse" href="#filterSearchCollapse" role="button" aria-expanded="false" aria-controls="filterSearchCollapse">
                    <i class="tio-filter-outlined mr-1"></i> Filters
                  </a>
                  <!-- End Filter Collapse Trigger -->
                </div>
              </div>
            </div>
          </div>
          <!-- End Header -->

          <!-- Filter Search Collapse -->
          <div class="collapse" id="filterSearchCollapse">
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-sm-12 col-lg-4">
                    <!-- Form Group -->
                    <div class="form-group">
                      <label for="teamsFilterLabel" class="input-label">Teams</label>

                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="tio-group-senior"></i>
                          </div>
                        </div>
                        <input class="js-tagify tagify-form-control form-control" id="teamsFilterLabel" placeholder="Name, role, department" aria-label="Name, role, department">
                      </div>
                    </div>
                    <!-- End Form Group -->
                  </div>

                  <div class="col-sm-12 col-md-6 col-lg-4">
                    <!-- Form Group -->
                    <div class="form-group">
                      <label for="tagsFilterLabel" class="input-label">Tags</label>

                      <!-- Select -->
                      <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="tagsFilterLabel" multiple
                              data-hs-select2-options='{
                                "customClass": "form-control",
                                "placeholder": "Enter top tags"
                              }'>
                        <option value="tagsFilter1" selected>Marketing team</option>
                        <option value="tagsFilter2" selected>Blockchain</option>
                        <option value="tagsFilter3">Customer service</option>
                        <option value="tagsFilter4">Online payment</option>
                        <option value="tagsFilter5">Finance</option>
                        <option value="tagsFilter6">Organizers</option>
                        <option value="tagsFilter7">Software</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Form Group -->
                  </div>

                  <div class="col-sm-12 col-md-6 col-lg-4">
                    <!-- Form Group -->
                    <div class="form-group">
                      <label for="ratingFilterLabel" class="input-label">Rating</label>

                      <!-- Select -->
                      <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="ratingFilterLabel" multiple
                              data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity",
                                "singleMultiple": true,
                                "placeholder": "<span class=\"d-flex align-items-center\"><i class=\"tio-star-outlined mr-2\"></i> Select rating</span>"
                              }'>
                        <option label="empty"></option>
                        <option value="rating1" data-option-template='<div class="d-flex">
                                  <div class="mr-1"><img src="assets/svg/components/star.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star-muted.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star-muted.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star-muted.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star-muted.svg" alt="Review rating" width="12"></div>
                                  <span class="ml-2">1 star</span>
                                </div>'>1 star</option>
                        <option value="rating2" data-option-template='<div class="d-flex">
                                  <div class="mr-1"><img src="assets/svg/components/star.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star-muted.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star-muted.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star-muted.svg" alt="Review rating" width="12"></div>
                                  <span class="ml-2">2 star</span>
                                </div>'>2 star</option>
                        <option value="rating3" selected data-option-template='<div class="d-flex">
                                  <div class="mr-1"><img src="assets/svg/components/star.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star-muted.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star-muted.svg" alt="Review rating" width="12"></div>
                                  <span class="ml-2">3 star</span>
                                </div>'>3 star</option>
                        <option value="rating4" selected data-option-template='<div class="d-flex">
                                  <div class="mr-1"><img src="assets/svg/components/star.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star-muted.svg" alt="Review rating" width="12"></div>
                                  <span class="ml-2">4 star</span>
                                </div>'>4 star</option>
                        <option value="rating5" selected data-option-template='<div class="d-flex">
                                  <div class="mr-1"><img src="assets/svg/components/star.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star.svg" alt="Review rating" width="12"></div>
                                  <div class="mr-1"><img src="assets/svg/components/star.svg" alt="Review rating" width="12"></div>
                                  <span class="ml-2">5 star</span>
                                </div>'>5 star</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Form Group -->
                  </div>
                </div>
                <!-- End Row -->

                <div class="d-flex justify-content-end">
                  <button type="button" class="btn btn-white mr-2">Cancel</button>
                  <button type="button" class="btn btn-primary">Apply</button>
                </div>
              </form>
            </div>
          </div>
          <!-- End Filter Search Collapse -->

          <!-- Table -->
          <div class="table-responsive datatable-custom">
            <table id="datatable" class="table table-borderless table-thead-bordered card-table"
                   data-hs-datatables-options='{
                     "autoWidth": false,
                     "columnDefs": [{
                        "targets": [0, 6],
                        "orderable": false
                      }],
                     "columns": [
                        null,
                        null,
                        { "width": "35%" },
                        null,
                        null,
                        null,
                        null
                      ],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 8,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                      <label class="custom-control-label" for="datatableCheckAll"></label>
                    </div>
                  </th>
                  <th scope="col" class="table-column-pl-0">Users</th>
                  <th scope="col" style="min-width: 20rem;">Email</th>
                  <th scope="col">Birthday</th>
                  <th scope="col">Action</th>
                  <th scope="col"></th>
                </tr>
              </thead>

              <tbody>
                
                    <div class="hs-unfold">
    

                      <div id="teamsDropdown7" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <a class="dropdown-item" href="#"></a>
                        <a class="dropdown-item text-danger" href="#">Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr>

                      <div id="teamsDropdown8" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <a class="dropdown-item" href="#">Rename team</a>
                        <a class="dropdown-item" href="#">Add to favorites</a>
                        <a class="dropdown-item" href="#">Archive team</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="teamDataCheck9">
                      <label class="custom-control-label" for="teamDataCheck9"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0"><a href="#">Totoy Tum</a></td>
                  <td>totoytumalonka@email.com</td>
                  <td><a class="badge badge-soft-primary p-2" href="#">November 1, 2002</a></td>
                
                  <td>
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-sm btn-white" href="javascript:;"
                         data-hs-unfold-options='{
                           "target": "#teamsDropdown9",
                           "type": "css-animation"
                         }'>
                        More <i class="tio-chevron-down ml-1"></i>
                      </a>

                      <div id="teamsDropdown9" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <a class="dropdown-item" href="#">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="teamDataCheck9">
                      <label class="custom-control-label" for="teamDataCheck9"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0"><a href="#">Totoy Tum</a></td>
                  <td>totoytumalonka@email.com</td>
                  <td><a class="badge badge-soft-primary p-2" href="#">November 1, 2002</a></td>
                
                  <td>
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-sm btn-white" href="javascript:;"
                         data-hs-unfold-options='{
                           "target": "#teamsDropdown9",
                           "type": "css-animation"
                         }'>
                        More <i class="tio-chevron-down ml-1"></i>
                      </a>

                      <div id="teamsDropdown9" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <a class="dropdown-item" href="#">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="teamDataCheck9">
                      <label class="custom-control-label" for="teamDataCheck9"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0"><a href="#">Totoy Tum</a></td>
                  <td>totoytumalonka@email.com</td>
                  <td><a class="badge badge-soft-primary p-2" href="#">November 1, 2002</a></td>
                
                  <td>
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-sm btn-white" href="javascript:;"
                         data-hs-unfold-options='{
                           "target": "#teamsDropdown9",
                           "type": "css-animation"
                         }'>
                        More <i class="tio-chevron-down ml-1"></i>
                      </a>

                      <div id="teamsDropdown9" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <a class="dropdown-item" href="#">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>

              

                

              
              </tbody>
            </table>
          </div>
          <!-- End Table -->

          <!-- Footer -->
          <div class="card-footer">
            <!-- Pagination -->
            <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
              <div class="col-sm mb-2 mb-sm-0">
                <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                  <span class="mr-2">Showing:</span>

                  <!-- Select -->
                  <select id="datatableEntries" class="js-select2-custom"
                          data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm custom-select-borderless",
                            "dropdownAutoWidth": true,
                            "width": true
                          }'>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8" selected>8</option>
                    <option value="12">12</option>
                  </select>
                  <!-- End Select -->

                  <span class="text-secondary mr-2">of</span>

                  <!-- Pagination Quantity -->
                  <span id="datatableWithPaginationInfoTotalQty"></span>
                </div>
              </div>

              <div class="col-sm-auto">
                <div class="d-flex justify-content-center justify-content-sm-end">
                  <!-- Pagination -->
                  <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                </div>
              </div>
            </div>
            <!-- End Pagination -->
          </div>
          <!-- End Footer -->
        </div>
        <!-- End Card -->
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