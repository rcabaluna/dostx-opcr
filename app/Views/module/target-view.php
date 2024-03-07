<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>

<h5>OPCR Target 2024 v1.0</h5>

<style>
    .bs-example {
        margin: 20px;
    }
</style>

<!-- Button trigger modal -->
<div class="bs-example">
    <div class="container">
        <div class="row">
            <div class="col-md-12 bg-light">
                <div class="text-right mb-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        NEW
                    </button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Input new</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="yearDropdown">Year</label>
                                        <select class="form-control" id="yearDropdown">
                                            <option value="">Select Year</option>
                                            <!-- Add options for years starting from 1950 -->
                                            <?php
                                            $startYear = 1950;
                                            $currentYear = date('Y');
                                            for ($year = $currentYear; $year >= $startYear; $year--) {
                                                echo "<option value='$year'>$year</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="versionDropdown">Version</label>
                                        <select class="form-control" id="versionDropdown">
                                            <option value="">Select Version</option>
                                            <option value="1.0">Version 1.0</option>
                                            <option value="1.1">Version 1.1</option>
                                            <option value="2.0">Version 2.0</option>
                                            <!-- Add more versions as needed -->
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="saveChanges()">Save
                                    changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Successfully Saved Modal -->
                <div class="modal fade" id="successModal" tabindex="-1" role="dialog"
                    aria-labelledby="successModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="successModalLabel">Successfully Saved</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Your changes have been successfully saved.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Table-body-->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Targets</h6>
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
                                    <th>Year</th>
                                    <th>Version</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="dataTableBody">
                                <?php foreach ($targets as $target): ?>
                                    <tr>
                                    <td>
                                            <?= $target['targetsummary_id'] ?>
                                        </td>
                                        <td>
                                            <?= $target['year'] ?>
                                        </td>
                                        <td>
                                            <?= $target['version'] ?>
                                        </td>
                                        <td>
                                            <?= $target['status'] ?>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm"
                                                onClick="editRecord(<?= $target['targetsummary_id'] ?>)">Edit</button>
                                            <button type="button" class="btn btn-danger btn-sm"
                                                onClick="deleteRecord(<?= $target['targetsummary_id'] ?>)">Delete</button>
                                            <button type="button" class="btn btn-warning btn-sm"
                                                onClick="disableRecord(<?= $target['targetsummary_id'] ?>)">Disable</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>