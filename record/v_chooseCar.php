<?php
htmltage("Car Record System");
session_start();
$bu_id = $_SESSION['bu_id'];
$where = 'where bu_id = '.$bu_id.'';

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
                    <h1>ເລືອກພາຫະນະທີ່ຕ້ອງການບັນທຶກ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item active">ຈັດການຂໍ້ມູນ</li>
                        <li class="breadcrumb-item active">ຂໍ້ມູນ ພາຫະນະ</li>
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

                    <!-- /.card-header -->

                    <!-- /.modal -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="table table-bordered beautified_report">

                                        <thead class="table-info">
                                            <tr>
                                                <th class="text-center"></th>
                                                <th>ທະບຽນລົດ</th>
                                                <th>ລາຍລະອຽດ</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $fetch = "SELECT * FROM v_car $where";
                                            if ($result = $mysqli->query($fetch)) {
                                                while ($row = $result->fetch_assoc()) {

                                            ?>




                                                    <tr>
                                                        <td align="center">

                                                            <a href="index.php?d=record/recordCar&getCarId=<?= $row['id'] ?>&getCarReg=<?= $row['car_reg'] ?>&getType=<?= $row['type'] ?>&getBrand=<?= $row['brand'] ?>&getModel=<?= $row['model'] ?>"><i class="fas fa-plus"></i></a>
                                                        </td>
                                                        <td>
                                                            <?= $row['car_reg'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $row['type'] ?> <?= $row['brand'] ?> <?= $row['model'] ?>
                                                        </td>




                                                    </tr>
                                            <?php

                                                }
                                            } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- /.row -->

    </section>
</div>
<!-- /.content -->
<style>
    table td {
        cursor: pointer;
        transition: all .25s ease-in-out;
    }

    table tbody tr:hover {
        background-color: #46BCD6;
    }
</style>