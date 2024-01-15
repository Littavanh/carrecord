<?php
htmltage("Car Record System");

session_start();
$bu_id = $_SESSION['bu_id'];
$where = 'where id = '.$bu_id.'';

if($bu_id == 0){
    $where = '';
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ລາຍງານການນຳໃຊ້ລົດ (ພະແນກ)</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ລາຍງານ</li>
                        <li class="breadcrumb-item active">ລາຍງານການນຳໃຊ້ລົດ (ພະແນກ)</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <form method="get">
                            <input type="hidden" name="d" value="report/rRecordCar" />
                            <div class="row">

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>ເລືອກພາກສ່ວນ</label>

                                        <select class="form-control select2" name="dept_id" required="required">

                                            <?php
                                            $com = "select * from tb_business $where";
                                            if ($result_com = $mysqli->query($com)) {
                                                while ($rowCOM = $result_com->fetch_row()) {
                                                    //  $selected = $rowCOM[0] == $row[1] ? "selected" : "gfefs";                
                                            ?>
                                                    <option value="<?= $rowCOM[0] ?>"><?= $rowCOM[1] ?></option>
                                            <?php }
                                            } ?>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>ປີ</label>
                                        <input type="number" min="1900" max="2099" step="1" name="year" class="form-control" autocomplete="off" value="2023" required="required">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>ເດືອນ</label>
                                        <input type="number" name="month" min="1" max="12" step="1" class="form-control" autocomplete="off" value="1" required="required">
                                    </div>
                                </div>



                            </div>
                            <div class="box-footer">
                                <button type="reset" class="btn btn-default" onclick="document.location='?d=report/rRecordCar'">ຍົກເລີກ</button>
                                <button type="submit" class="btn btn-primary">ຄົ້ນຫາ</button>
                                <?php if ($_GET['dept_id'] != '' && $_GET['year'] != '' && $_GET['month'] != '') { ?>
                                    <a href="report/ex_rRecordCar.php?dept_id=<?= $_GET['dept_id'] ?>&year=<?= $_GET['year'] ?>&month=<?= $_GET['month'] ?>" target="_blank">
                                        <input type="button" class="btn btn-success" value="Export To Excel" />
                                    </a>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="example3" class="table table-bordered beautified_report">
                                                        <thead class="table-info">
                                                            <tr>
                                                                <th>ລ/ດ</th>
                                                                <th>ທະບຽນລົດ</th>
                                                                <th>ໄລຍະທາງ</th>
                                                                <th>ພາກສ່ວນ</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php

                                                            $i = 1;
                                                            if ($result = $mysqli->query($report)) {
                                                                while ($row = $result->fetch_assoc()) {
                                                            ?>
                                                                    <tr>
                                                                        <td><?= $i ?> </td>
                                                                        <td><?= $row['car_reg'] ?></td>
                                                                        <td><?= $row['km_use'] ?> km</td>
                                                                        <td><?= $row['nameDep'] ?></td>

                                                                    </tr>
                                                            <?php $i++;
                                                                }
                                                                $result->close();
                                                            }
                                                            ?>




                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                ປະຈຳປີ: <?= $year ?>
                                                ເດືອນ: <?= $month ?>

                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>



                    </div>



                </div>
            </div>
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>