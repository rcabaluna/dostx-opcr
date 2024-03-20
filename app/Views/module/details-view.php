<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
    .button-group {
        display: flex;
        margin-bottom: 20px;
    }

    .button-group button {
        padding: 10px 20px;
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        cursor: pointer;
    }

    .button-group button.active {
        background-color: #007bff;
        color: white;
    }
</style>

<h5>OPCR Target 2024 v1.0</h5>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="button-group">
            <?php $first = true; ?>
            <?php foreach ($perspectives as $perspectiveRow) { ?>
            <button class="tab-button <?= $first ? 'active' : '' ?>" data-tab="<?= $perspectiveRow['name'] ?>">
                <?= $perspectiveRow['name'] ?>
            </button>
            <?php $first = false; ?>
            <?php } ?>
        </div>

        <div class="tab-content">
            <?php $first = true; ?>
            <?php foreach ($perspectives as $perspectiveRow) { ?>
            <div class="tab-pane <?= $first ? 'show active' : '' ?>" id="pills-<?= $perspectiveRow['name'] ?>">
                <h6 class="my-4 font-weight-bold">
                    <?= $perspectiveRow['name'] ?>
                    <span class="font-weight-normal">
                        <i>(<?= $perspectiveRow['name'] ?>)</i>
                    </span>
                </h6>
                <table class="table table-sm table-bordered table-hover table-responsive table-fixed">
                    <thead>
                        <tr class="text-center">
                            <th></th>
                            <?php foreach ($locations as $locationRow) { ?>
                            <th colspan="5"><?= $locationRow['name'] ?></th>
                            <?php } ?>
                        </tr>
                        <tr class="text-center">
                            <th rowspan="2" class="align-middle">Indicator</th>

                            <?php foreach ($locations as $locationRow) { ?>
                            <?php foreach ($quarter as $quarterRow) { ?>
                            <th><?= $quarterRow['name'] ?></th>
                            <?php } ?>
                            <th rowspan="2" class="align-middle">Total Targets</th>
                            <?php } ?>
                        </tr>

                        <tr>
                            <?php foreach ($locations as $locationRow) { ?>
                            <?php foreach ($quarter as $quarterRow) { ?>
                            <th><?= $quarterRow['months'] ?></th>
                            <?php } ?>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <form>
                            <?php foreach ($indicators as $indicatorRow) {
                                if ($perspectiveRow['perspectiveid'] == $indicatorRow['perspectiveid']) { ?>
                            <tr>
                                <td><?= $indicatorRow['description'] ?></td>

                                <?php foreach ($locations as $locationRow) {
                                    foreach ($quarter as $quarterRow) { ?>
                                <td>
                                <?php
                                $inputName = $indicatorRow['indicatorid'] . '-' . $locationRow['locationId'] . '-' . $targetsummaryid . '-' . $quarterRow["quarterid"];
                                ?>
                                <input type="number" class="form-control form-control-sm" name="<?= $inputName ?>" id="txtval-<?= $indicatorRow['indicatorid'] ?>-<?= $locationRow['locationId'] ?>-<?= $quarterRow["quarterid"] ?>-<?=$targetsummaryid?>"  value="<?= isset($savedData[$inputName]) ? $savedData[$inputName] : '' ?>" onchange="total_number(this)" />
                                </td>
                                <?php } ?>
                                <td id="total-<?= $indicatorRow['indicatorid'] ?>-<?= $locationRow['locationId'] ?>" class="align-middle"></td>
                                <?php
                                } ?>
                            </tr>
                            <?php }} ?>
                        </form>
                    </tbody>
                </table>
            </div>
            <?php $first = false; ?>
            <?php } ?>
        </div>

        <div style="position: absolute; bottom: 0px; right: 10px;">
            <button id="postBtn" onclick="lockPage()" class="btn btn-primary <?= (isset($_SESSION['isLocked']) && $_SESSION['isLocked'] === 'true') ? 'disabled' : '' ?>">Post</button>
            <button id="editBtn" onclick="unlockPage()" class="btn btn-secondary <?= (isset($_SESSION['isLocked']) && $_SESSION['isLocked'] === 'true') ? '' : 'disabled' ?>" style="<?= (isset($_SESSION['isLocked']) && $_SESSION['isLocked'] === 'true') ? 'display: none;' : '' ?>">Edit</button>
        </div>
    </div>
</div>

<script>
    let isLocked = (typeof(Storage) !== "undefined" && localStorage.getItem('isLocked') === 'true');

    function lockPage() {
        isLocked = true;
        if (typeof(Storage) !== "undefined") {
            localStorage.setItem('isLocked', 'true');
        }
        $('input[type="number"]').prop('disabled', true);
        $('#postBtn').addClass('disabled');
        $('#editBtn').removeClass('disabled').show();
    };

    function unlockPage() {
        isLocked = false;
        if (typeof(Storage) !== "undefined") {
            localStorage.setItem('isLocked', 'false');
        }
        $('input[type="number"]').prop('disabled', false);
        $('#editBtn').addClass('disabled').hide();
        $('#postBtn').removeClass('disabled').show();
    };

    if (isLocked) {
        lockPage();
    } else {
        unlockPage();
    };

    $(document).ready(function () {
        var data = JSON.parse('<?=$targetdetails?>');
        console.log(data);
        for (let i = 0; i < data.length; i++) {
            var indicatorid  = data[i].indicatorid;
            var locationid  = data[i].locationid;
            var quarterid  = data[i].quarterid;
            var targetsummaryid  = data[i].targetsummaryid;
            var value = data[i].value;

            $("#txtval-"+indicatorid+"-"+locationid+"-"+quarterid+"-"+targetsummaryid).val(value);
        }

    });

    const tabButtons = document.querySelectorAll(".tab-button");

    tabButtons.forEach((button) => {
        button.addEventListener("click", () => {
            tabButtons.forEach((btn) => {
                btn.classList.remove("active");
            });

            button.classList.add("active");
            const tabName = button.getAttribute("data-tab");
            const tabContent = document.getElementById(`pills-${tabName}`);
            const activeTabContent = document.querySelector(".tab-pane.show.active");
            activeTabContent.classList.remove("show", "active");
            tabContent.classList.add("show", "active");
        });
    });

    window.onload = function(){

        var segments = location.pathname.split('/')[4];
        $.ajax({
        type: "POST",
        url: BASE_URL + "module/target/" + segments,
        data: { segments: segments},
        success: function(response) {
            console.log(segments);
        },
        error: function(xhr, status, error) {
            console.error("Error sending segments 1: " + error);
        }
    });
    };

    function total_number(input) {
        var indicatorid = $(input).attr("name").split("-")[0];
        var locationid = $(input).attr("name").split("-")[1];
        var targetsummaryid = $(input).attr("name").split("-")[2];
        var quarterid = $(input).attr("name").split("-")[3];
        var total = 0;

        $(`input[name^="${indicatorid}-${locationid}"]`).each(function () {
            var value = $(this).val();
            if (!isNaN(value) && value != "") {
                total += parseInt(value);
            }
        });
        $("#total-" + indicatorid + "-" + locationid).text(total);

        var previousTotal = $(input).data("previousTotal") || 0;
        if (total !== previousTotal) {
            $(input).data("previousTotal", input);

            var data = {
                targetsummaryid: targetsummaryid,
                indicatorid: indicatorid,
                locationid: locationid,
                quarterid: quarterid,
                value: $(input).val(),
            };

            $.ajax({    
                type: "POST",
                url: BASE_URL + "module/add-edit-test",
                data: data,
                success: function (response) {
                    console.log(data)                    
                    console.log("Data saved successfully");
                },
                error: function (response) {
                    console.log(response);
                    console.log("Failed to save data: " + error);
                },
            });
        }
    };

</script>

<?= $this->endSection() ?>
