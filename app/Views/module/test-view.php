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
                        <?php foreach ($indicators as $indicatorRow) {
                            if ($perspectiveRow['perspectiveid'] == $indicatorRow['perspectiveid']) { ?>
                        <tr>
                            <td><?= $indicatorRow['description'] ?></td>
                            <?php foreach ($locations as $locationRow) {
                                foreach ($quarter as $quarterRow) { ?>
                            <td>
                                <?php
                                $inputName = $indicatorRow['indicatorid'] . '-' . $locationRow['locationId'] . '-' . $quarterRow["semid"] . '-' . $quarterRow["quarterid"];
                                $inputId = 'txtval-' . $indicatorRow['indicatorid'] . '-' . $locationRow['locationId'] . '-' . $quarterRow["semid"] . '-' . $quarterRow["quarterid"];
                                ?>
                                <input type="number" class="form-control form-control-sm" name="<?= $inputName ?>" id="<?= $inputId ?>" value="<?= isset($savedData[$inputName]) ? $savedData[$inputName] : '' ?>" onchange="total_number(this)" />
                            </td>
                            <?php } ?>
                            <td id="total-<?= $indicatorRow['indicatorid'] ?>-<?= $locationRow['locationId'] ?>" class="align-middle"></td>
                            <?php
                            } ?>
                        </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
            <?php $first = false; ?>
            <?php } ?>
        </div>
    </div>
</div>

<script>

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

    // Load saved values from local storage when the page loads
    $(document).ready(function () {
        $('input[type="number"]').each(function () {
            var value = localStorage.getItem($(this).attr('id'));
            if (value !== null) {
                $(this).val(value);
            }
        });
    });

    function total_number(input) {
        var indicatorid = $(input).attr("name").split("-")[0];
        var locationid = $(input).attr("name").split("-")[1];
        var quarterid = $(input).attr("name").split("-")[3];
        var targetsummaryid = 2;
        var total = 0;

        $(`input[name^="${indicatorid}-${locationid}"]`).each(function () {
            var value = $(this).val();
            if (!isNaN(value) && value != "") {
                total += parseInt(value);
            }
        });
        $("#total-" + indicatorid + "-" + locationid).text(total);

        // Save the input value in local storage if not empty
        if ($(input).val() !== "") {
            localStorage.setItem($(input).attr('id'), $(input).val());
        } else {
            localStorage.removeItem($(input).attr('id')); // Remove from local storage if empty
        }

        var previousTotal = $(input).data("previousTotal") || 0;
        if (total !== previousTotal) {
            $(input).data("previousTotal", total);

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
                    console.log(response);

                    console.log("Data saved successfully");
                },
                error: function (response) {
                    // console.log(response);
                    // console.log("Failed to save data: " + error);
                },
            });
        }
    }
</script>

<?= $this->endSection() ?>