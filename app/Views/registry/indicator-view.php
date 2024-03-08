<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>

<!-- Page Heading -->
<h2 class="h3 mb-2 text-gray-800">Indicators</h2>
<!-- Button trigger modal -->
<form method="post" action="<?=base_url('registry/add-indicator'); ?>">
    <div class="bs-example">
        <div class="container">
            <div class="row">
                <div class="col-md-12 bg-light text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add New</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New Indicator</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name" style="text-align: left; display: block;">Perspective</label>
                                        <select class="form-control" id="txtperspectiveid" placeholder="Input Description" name="perspectiveid">
                                            <?php  
                                          foreach ($perspectives as $perspectiveRow) 
                                          { 
                                            ?>
                                            <option value="<?=$perspectiveRow['perspectiveid']?>"><?=$perspectiveRow['name']?></option>
                                            <?php
                                          }
                                          ?>
                                        </select>
                                        <label for="name" style="text-align: left; display: block;">Description</label>
                                        <input type="text" class="form-control" id="txtdescription" placeholder="Input Description" name="description" />
                                        <label for="name" style="text-align: left; display: block;">Order</label>
                                        <input type="text" class="form-control" id="txtorder" placeholder="Input Order" name="order" />
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Create New Indicator</button>
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
<form method="post" action="<?=base_url('registry/edit-indicator'); ?>">
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
                    <label for="name" style="text-align: left; display: block;">Perspective</label>
                    <input type="hidden" id="txtindicatorid" name="indicatorid" class="form-control" value="txtindicatorid" />
                    <select class="form-control" id="txtperspectiveid" placeholder="Input Description" name="perspectiveid">
                        <?php  
                          foreach ($perspectives as $perspectiveRow) 
                            { 
                        ?>
                        <option value="<?=$perspectiveRow['perspectiveid']?>"><?=$perspectiveRow['name']?></option>
                        <?php
                        }
                        ?>
                    </select>&nbsp;
                    <label for="name" style="text-align: left; display: block;">Description</label>
                    <input type="text" class="form-control" id="txtdescription" name="description" />&nbsp;
                    <label for="name" style="text-align: left; display: block;">Order</label>
                    <input type="text" id="txtorder" name="order" class="form-control"/>
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
                                    <th>Description</th>
                                    <th>Order</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($indicator as $indicatorRow) {
                                    ?>
                                <tr>
                                    <td><?=$indicatorRow['indicatorid']?></td>
                                    <td><?=$indicatorRow['description']?></td>
                                    <td><?=$indicatorRow['order']?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" onClick="edit_indicator(<?=htmlspecialchars
                                        (json_encode($indicatorRow)) ?>)" data-target="#editModal">Edit</button>&nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn btn-danger" data-toggle="modal" onClick="delete_confirmation(<?=
                                        $indicatorRow['indicatorid']?>)" data-target="#deleteModal">Delete</button>
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
    function delete_confirmation(indicatorid) {
        $("#delete-confirmation-link").attr("href", BASE_URL + "registry/delete-indicator/" + indicatorid);
    }

    function edit_indicator(indicators) {
        $("#txtindicatorid").val(indicators.indicatorid);
        $("#txtperspectiveid").val(indicators.perspectiveid);
        $("#txtdescription").val(indicators.description);
        $("#txtorder").val(indicators.order);
    }
</script>
<?= $this->endSection() ?>