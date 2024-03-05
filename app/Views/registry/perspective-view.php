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
                    <div id="newProjectPopover" data-toggle="popover" data-placement="left" title="<div class='d-flex align-items-center'>New project <a href='#!' class='close close-light ml-auto'><i id='closeNewProjectPopover' class='tio-clear'></i></a></div>" data-content="Check out this New project modal example." data-html="true">
                        <a class="btn btn-primary" href="javascript:;" data-toggle="modal" data-target="#newProjectModal">
                            <i class="tio-add mr-1"></i> New project
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Row -->
</main>

<?= $this->endSection() ?>