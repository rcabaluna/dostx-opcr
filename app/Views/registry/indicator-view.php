<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
        DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dataTable_length"><label>Show <select
                                        name="dataTable_length" aria-controls="dataTable"
                                        class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">1</option>
                                        <option value="25">5</option>
                                        <option value="50">10</option>
                                        <option value="100">25</option>
                                        <option value="100">50</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="form-control form-control-sm" placeholder=""
                                        aria-controls="dataTable"></label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover">
                                <thead>
                                    <<<<<<< HEAD <tr role="row">
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending" style="width: 167px;">
                                            Indicators</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 256px;">Position</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 119px;">Office</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 100px;">Rate</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 100px;">Remarks</th>
                                        </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td class="sorting_1">Number of Public R&D Product Adopters</td>
                                        <td>Accountant</td>
                                        <td>
                                            <select class="form-control">
                                                <option value="C&T">C&T</option>
                                                <option value="PACD">PACD</option>
                                                <option value="SCCU">SCCU</option>
                                                <option value="TSPAC Secretariat">TSPAC Secretariat</option>
                                                <option value="RDI">RDI</option>
                                                <option value="DRRM">DRRM</option>
                                                <option value="RSTL">RSTL</option>
                                                <option value="PMEQ">PMEQ</option>
                                                <option value="HR">HR</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" placeholder="Remarks"></td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">Number of R&D Product Adopters (Privately Funded)</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>
                                            <select class="form-control">
                                                <option value="C&T">C&T</option>
                                                <option value="PACD">PACD</option>
                                                <option value="SCCU">SCCU</option>
                                                <option value="TSPAC Secretariat">TSPAC Secretariat</option>
                                                <option value="RDI">RDI</option>
                                                <option value="DRRM">DRRM</option>
                                                <option value="RSTL">RSTL</option>
                                                <option value="PMEQ">PMEQ</option>
                                                <option value="HR">HR</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" placeholder="Remarks"></td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">Number of Public R&D Product Users</td>
                                        <td>Junior Technical Author</td>
                                        <td>
                                            <select class="form-control">
                                                <option value="C&T">C&T</option>
                                                <option value="PACD">PACD</option>
                                                <option value="SCCU">SCCU</option>
                                                <option value="TSPAC Secretariat">TSPAC Secretariat</option>
                                                <option value="RDI">RDI</option>
                                                <option value="DRRM">DRRM</option>
                                                <option value="RSTL">RSTL</option>
                                                <option value="PMEQ">PMEQ</option>
                                                <option value="HR">HR</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" placeholder="Remarks"></td>
                                    </tr>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                <tbody>
                                    <?php
                                    foreach ($perspectives as $perspectiveRow) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?= $perspectiveRow['indicatorid'] ?>
                                            </td>
                                            <td>
                                                <?= $perspectiveRow['name'] ?>
                                            </td>
                                            <td><button
                                                    class="btn btn-xs btn-primary">Edit</button>&nbsp;&nbsp;&nbsp;<button
                                                    class="btn btn-xs btn-danger">Delete</button></td>
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