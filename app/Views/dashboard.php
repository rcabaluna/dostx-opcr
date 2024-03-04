<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>
<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
        <div class="row justify-content-sm-center text-center py-10">
            <div class="col-sm-7 col-md-5">
                <img class="img-fluid mb-5" src="assets/svg/illustrations/graphs.svg" alt="Image Description" style="max-width: 21rem;">

                <h1>Hello, nice to see you!</h1>
                <p>You are now minutes away from creativity than ever before. Enjoy!</p>

                <a class="btn btn-primary" href="index.html">Create my first campaign</a>
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Content -->
</main>
<?= $this->endSection() ?>