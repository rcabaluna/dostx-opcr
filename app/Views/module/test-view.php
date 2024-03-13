<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>

<style>
    /* Custom CSS to freeze the first td in trs */
    .table-fixed th,
    .table-fixed td:first-child {
        position: sticky;
        left: 0;
        z-index: 1;
        /* Ensures the first td is on top of the other cells */
        background-color: #fff;
        /* Adjust background color if necessary */
    }

    .table-fixed th:first-child {
        position: sticky;
        left: 0;
        z-index: 1;
        /* Ensures the first td is on top of the other cells */
        background-color: #cacaca;
        /* Adjust background color if necessary */
    }

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
                                <input type="number" class="form-control form-control-sm" name="<?= $indicatorRow['indicatorid'] ?>-<?= $locationRow['locationId'] ?>-<?= $quarterRow["semid"] ?>-<?= $quarterRow["quarterid"] ?>" id="txtval-<?= $indicatorRow['indicatorid'] ?>-<?= $locationRow['locationId'] ?>-<?= $quarterRow["semid"] ?>-<?= $quarterRow["quarterid"] ?>"
                                oninput=total_number() />
                            </td>
                            <?php } ?>
                            <td id="total-<?= $indicatorRow['indicatorid'] ?>-<?= $locationRow['locationId'] ?>" class="align-middle"></td>
                            <?php } ?>
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

    function total_number() {
        $('input[type="number"]').on("input", function () {
            var sum = 0;
            $(this)
                .closest("tr")
                .find('input[type="number"]')
                .each(function () {
                    var value = $(this).val();
                    if (!isNaN(value) && value != "") {
                        sum += parseInt(value);
                    }
                });
            var indicatorId = $(this).attr("name").split("-")[0];
            var locationId = $(this).attr("name").split("-")[1];
            var total = 0;
            $(`input[name^="${indicatorId}-${locationId}"]`).each(function () {
                var value = $(this).val();
                if (!isNaN(value) && value != "") {
                    total += parseInt(value);
                }
            });
            $("#total-" + indicatorId + "-" + locationId).text(total);
        });
    }
</script>

<?= $this->endSection() ?>
