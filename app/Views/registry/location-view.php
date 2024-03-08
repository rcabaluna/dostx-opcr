<?= $this->extend('templates/main') ?>
<?= $this->section('content');

$counter = 0;
?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Locations</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Overview</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($locations as $locationRow) {
                                    ?>
                                <tr>
                                    <td><?=$counter += 1;?></td>
                                    <td><?=$locationRow['code']?></td>
                                    <td><?=$locationRow['name']?></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
