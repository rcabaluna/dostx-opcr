<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>

<!-- Page Heading -->


<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Right Align Bootstrap Buttons</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
    .bs-example{
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
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <label for="nameInput">Name</label>
                                        <input type="text" class="form-control" id="nameInput" placeholder="Enter Name">
                                    </div>
                                    <!-- Add more form elements as needed -->
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="saveChanges()">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Successfully Saved Modal -->
                <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
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

<script>
    function saveChanges() {
        // Close the input modal
        $('#exampleModal').modal('hide');
        
        // Show the success modal
        $('#successModal').modal('show');
    }
</script>


<script>
    function saveChanges() {
        // Close the input modal
        $('#exampleModal').modal('hide');
        
        // Show the success modal
        $('#successModal').modal('show');
    }
</script>


<script>
    function saveChanges() {
        // Close the input modal
        $('#exampleModal').modal('hide');
        
        // Show the success modal
        $('#successModal').modal('show');
    }
</script>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Indicators</h6>
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
                                        <td><?=$indicatorRow['indicatorId']?></td>
                                        <td><?=$indicatorRow['description']?></td>
                                        <td><?=$indicatorRow['order']?></td>
                                      <!-- Edit Modal -->
<div class="modal" id="editModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" id="editDataInput" class="form-control" placeholder="Enter new data">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="editData()">Save changes</button>
      </div>
    </div>
  </div>
</div>

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
        <button type="button" class="btn btn-danger" onclick="deleteData()">Delete</button>
      </div>
    </div>
  </div>
</div>

<!-- Your table cell with buttons -->
<td>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">Edit</button>
  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>
</td>

<script>
  // Variables to store edit/delete data
  var editDataInput = document.getElementById('editDataInput');
  var deleteItemId;

  // Function to set up edit modal
  function setupEditModal(data) {
    editDataInput.value = data;
  }

  // Function to handle edit action
  function editData() {
    var newData = editDataInput.value;
    // Handle edit action here, you can pass newData to your backend for processing
    // For demonstration, let's just log the newData
    console.log("Edited data:", newData);
    // Close the modal
    $('#editModal').modal('hide');
  }

  // Function to set up delete modal
  function setupDeleteModal(itemId) {
    deleteItemId = itemId;
  }

  function deleteData() {
    // Handle delete action here, you can pass deleteItemId to your backend for processing
    // For demonstration, let's just log the deleteItemId
    console.log("Deleted item ID:", deleteItemId);
    // Close the modal
    $('#deleteModal').modal('hide');
  }
</script>


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
        <button type="button" class="btn btn-danger" onclick="deleteData()">Delete</button>
      </div>
    </div>
  </div>
</div>

<!-- Successfully Deleted Modal -->
<div class="modal" id="successDeleteModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Successfully Deleted</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>The item has been successfully deleted.</p>
      </div>
    </div>
  </div>
</div>

<script>
  // Variables to store delete data
  var deleteItemId;

  // Function to set up delete modal
  function setupDeleteModal(itemId) {
    deleteItemId = itemId;
  }

  // Function to handle delete action
  function deleteData() {
    // Handle delete action here, you can pass deleteItemId to your backend for processing
    // For demonstration, let's just log the deleteItemId
    console.log("Deleted item ID:", deleteItemId);
    // Close the delete modal
    $('#deleteModal').modal('hide');
    // Show the success delete modal
    $('#successDeleteModal').modal('show');
  }
</script>
<!-- Edit Modal -->
<div class="modal" id="editModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modify</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editForm">
          <div class="form-group">
            <label for="editDescription">Description</label>
            <input type="text" class="form-control" id="editDescription" placeholder="Enter new description">
          </div>
          <div class="form-group">
            <label for="editOrder">Order</label>
            <input type="number" class="form-control" id="editOrder" placeholder="Enter new order">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="saveChanges()">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Successfully Saved Modal -->
<div class="modal" id="successEditModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Successfully Saved</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Your changes have been successfully saved.</p>
      </div>
    </div>
  </div>
</div>

<script>
  // Variables to store edit data
  var editDescriptionInput = document.getElementById('editDescription');
  var editOrderInput = document.getElementById('editOrder');
  var editedRowId;

  // Function to set up edit modal
  function setupEditModal(rowId, description, order) {
    editedRowId = rowId;
    editDescriptionInput.value = description;
    editOrderInput.value = order;
  }

  // Function to handle edit action
  function saveChanges() {
    var newDescription = editDescriptionInput.value;
    var newOrder = editOrderInput.value;
    // Handle edit action here, you can pass newDescription and newOrder to your backend for processing
    // For demonstration, let's just log the new data
    console.log("New Description:", newDescription);
    console.log("New Order:", newOrder);
    // Close the edit modal
    $('#editModal').modal('hide');
    // Show the success edit modal
    $('#successEditModal').modal('show');
  }
</script>


<?= $this->endSection() ?>
