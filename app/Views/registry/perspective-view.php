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

<!-- Edit Modal -->
<form method="post" action="<?=base_url('registry/edit-perspective'); ?>">
    <div class="modal" id="editModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Perspective</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="txtperspectiveid" name="perspectiveid" class="form-control" value="" />
                    <input type="text" id="txtname" name="name" class="form-control" placeholder="Enter new data" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Delete Modal -->

<div class="modal" id="deleteModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this item?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="#" id="delete-confirmation-link"><button class="btn btn-xs btn-danger">Delete</button></a>
            </div>
        </div>
    </div>
</div>

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
                                        <button type="button" class="btn btn-primary" data-toggle="modal" onClick="edit_name(<?=htmlspecialchars(json_encode($perspectiveRow)) ?>)" data-target="#editModal">Edit</button>&nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn btn-danger" data-toggle="modal" onClick="delete_confirmation(<?=$perspectiveRow['perspectiveid']?>)" data-target="#deleteModal">Delete</button>
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
<script>
    function delete_confirmation(perspectiveid) {
        $("#delete-confirmation-link").attr("href", BASE_URL + "registry/delete-perspective/" + perspectiveid);
    }

    function edit_name(perspective) {
        $("#txtperspectiveid").val(perspective.perspectiveid);
        $("#txtname").val(perspective.name);
    }

    function update_data(perspective) {
        $("#update-link").attr("href", BASE_URL + "registry/edit-perspective/" + perspective);
    }
</script>
<?= $this->endSection() ?>
