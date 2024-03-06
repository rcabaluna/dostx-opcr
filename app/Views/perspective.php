<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>
    <main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-end">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Projects</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Overview</li>
                </ol>
              </nav>

              <h1 class="page-header-title">Overview</h1>
            </div>

            <div class="col-sm-auto">
              <div id="newProjectPopover" data-toggle="popover" data-placement="left" title="<div class='d-flex align-items-center'> New project <a href='#!' class='close close-light ml-auto'><i id='closeNewProjectPopover' class='tio-clear'></i></a></div>" data-content="Check out this New project modal example." data-html="true">
                <a class="btn btn-primary" href="javascript:;" data-toggle="modal" data-target="#newProjectModal">
                  <i class="tio-add mr-1"></i> New project
                </a>
              </div>
            </div>
          </div>

      
    <!-- New Project Modal -->
    <div class="modal fade" id="newProjectModal" tabindex="-1" role="dialog" aria-labelledby="newProjectModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="newProjectModalTitle" class="modal-title">Add New Perspective</h4>

            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body">
            <!-- Step Form -->
            <form method="post" action="<?=base_url('/add-perspective'); ?>">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="name" class="form-label">Perspective Name</label>
                        <input type="text" class="form-control" id="txtname" name="name">
                    </div>
                    <div class="d-flex justify-content-end ml-auto">
                      <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
                      <button id="createProjectFinishBtn" type="submit" class="btn btn-primary">Create Perspective</button>
                    </div>
                  </div>
                  <!-- End Footer -->
                </div>
              </div>
              <!-- End Content Step Form -->

              <!-- Message Body -->
              <div id="createProjectStepSuccessMessage" style="display:none;">
                <div class="text-center">
                  <img class="img-fluid mb-3" src="assets/svg/illustrations/create.svg" alt="Image Description" style="max-width: 15rem;">

                  <div class="mb-4">
                    <h2>Successful!</h2>
                    <p>New project has been successfully created.</p>
                  </div>

                  <div class="row justify-content-center gy-1 gx-2">
                    <div class="col-auto">
                      <a class="btn btn-white" href="projects.html">
                        <i class="tio-chevron-left ml-1"></i> Back to projects
                      </a>
                    </div>

                    <div class="col-auto">
                      <a class="btn btn-primary" href="javascript:;" data-toggle="modal" data-target="#newProjectModal">
                        <i class="tio-city mr-1"></i> Add new project
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Message Body -->
            </form>
            <!-- End Step Form -->
          </div>
          <!-- End Body -->
        </div>
      </div>
    </div>
    <!-- End New Project Modal -->

 

          <!-- End Row --> 
    </main>

<?= $this->endSection() ?>