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
</style>
<h5>OPCR Target 2024 v1.0</h5>

<div class="card shadow mb-4">
    <div class="card-body">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Customer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Financial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Internal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Learning and Growth</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                <h6 class="my-4 font-weight-bold">Customer Perspective <span class="font-weight-normal"><i>(Enhanced customer satisfaction through strong leadership in STI-based innovation and services)</i></span></h6>
                <table class="table table-sm table-bordered table-hover table-responsive table-fixed">
                    <thead>
                        <tr class="text-center">
                            <th></th>
                            <th colspan="5">Regional Office</th>
                            <th colspan="5">PSTO Bukidnon</th>
                            <th colspan="5">PSTO Camiguin</th>
                            <th colspan="5">PSTO Lanao del Norte</th>
                            <th colspan="5">PSTO Misamis Occidental</th>
                            <th colspan="5">PSTO Misamis Oriental</th>

                        </tr>
                        <tr class="text-center">
                            <th rowspan="2" class="align-middle">Indicator</th>
                            <th>1st Quarter</th>
                            <th>2nd Quarter</th>
                            <th>3rd Quarter</th>
                            <th>4th Quarter</th>
                            <th rowspan="2" class="align-middle">Total Targets</th>
                            <th>1st Quarter</th>
                            <th>2nd Quarter</th>
                            <th>3rd Quarter</th>
                            <th>4th Quarter</th>
                            <th rowspan="2" class="align-middle">Total Targets</th>
                            <th>1st Quarter</th>
                            <th>2nd Quarter</th>
                            <th>3rd Quarter</th>
                            <th>4th Quarter</th>
                            <th rowspan="2" class="align-middle">Total Targets</th>
                            <th>1st Quarter</th>
                            <th>2nd Quarter</th>
                            <th>3rd Quarter</th>
                            <th>4th Quarter</th>
                            <th rowspan="2" class="align-middle">Total Targets</th>
                            <th>1st Quarter</th>
                            <th>2nd Quarter</th>
                            <th>3rd Quarter</th>
                            <th>4th Quarter</th>
                            <th rowspan="2" class="align-middle">Total Targets</th>
                            <th>1st Quarter</th>
                            <th>2nd Quarter</th>
                            <th>3rd Quarter</th>
                            <th>4th Quarter</th>
                            <th rowspan="2" class="align-middle">Total Targets</th>
                        </tr>
                        <tr class="text-center">
                            <th>(Jan - Mar)</th>
                            <th>(Apr - Jun)</th>
                            <th>(Jul - Sep)</th>
                            <th>(Oct - Dec)</th>
                            <th>(Jan - Mar)</th>
                            <th>(Apr - Jun)</th>
                            <th>(Jul - Sep)</th>
                            <th>(Oct - Dec)</th>
                            <th>(Jan - Mar)</th>
                            <th>(Apr - Jun)</th>
                            <th>(Jul - Sep)</th>
                            <th>(Oct - Dec)</th>
                            <th>(Jan - Mar)</th>
                            <th>(Apr - Jun)</th>
                            <th>(Jul - Sep)</th>
                            <th>(Oct - Dec)</th>
                            <th>(Jan - Mar)</th>
                            <th>(Apr - Jun)</th>
                            <th>(Jul - Sep)</th>
                            <th>(Oct - Dec)</th>
                            <th>(Jan - Mar)</th>
                            <th>(Apr - Jun)</th>
                            <th>(Jul - Sep)</th>
                            <th>(Oct - Dec)</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Promote Adoption/Utilization of TECHNOLOGIES FROM PUBLICLY FUNDED R&D</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td>Number of technologies PROMOTED</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td>Number of technologies transfered as public good</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td>Number of Public R&D Product Adopters</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td>Number of R&D Product Adopters (Privately Funded)</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td>Number of Public R&D Product Users</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td>Number of PRODUCTS COMMERCIALIZED by the adoptors</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td><input type="number" class="form-control form-control-sm" name="" id=""></td>
                            <td class="text-center">-</td>

                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>