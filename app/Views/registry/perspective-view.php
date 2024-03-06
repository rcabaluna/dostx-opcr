<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Perspectives</h1>

<!-- Button trigger modal -->
<form method="post" action="<?=base_url('registry/add-perspective'); ?>">
    <div class="bs-example">
        <div class="container">
            <div class="row">
                <div class="col-md-12 bg-light text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">NEW</button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Input new</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name" style="text-align: left; display: block;">Name</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input Name" name="name" />
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Create New Perspective</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
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
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($perspectives as $perspectiveRow) {
                                    ?>
                                <tr>
                                    <td><?=$perspectiveRow['perspectiveid']?></td>
                                    <td><?=$perspectiveRow['name']?></td>

                                    <td>
                                        <button class="btn btn-xs btn-primary">Edit</button>&nbsp;&nbsp;&nbsp;
                                        <a href="<?=base_url('registry/delete-perspective/'.$perspectiveRow['perspectiveid']) ?>" method="POST"><button class="btn btn-xs btn-danger">Delete</button></a>
                                    </td>
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
