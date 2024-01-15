<?php
htmltage("Car Record System");
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ລາຍງານສັງລວມການສ້ອມແປງລົດ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">ລາຍງານ</li>
                        <li class="breadcrumb-item active">ລາຍງານສັງລວມການສ້ອມແປງລົດ</li>
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
                            <input type="hidden" name="d" value="report/rRepair" />
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>ແຕ່ວັນທີ</label>
                                        <input type="date" name="strDate" class="form-control" autocomplete="off" value="<?= $_GET['strDate'] ?>" required="required">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>ເຖິງວັນທີ</label>
                                        <input type="date" name="endDate" class="form-control" autocomplete="off" value="<?= $_GET['endDate'] ?>" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label for="">ເລືອກສະຖານະ</label>
                                        <select class="form-control select2" name="cb_status">
                                            <option value='0'>--All--</option>
                                            <option value='in repair'>in repair</option>
                                            <option value='Done'>Done</option>
                                        </select>

                                    </div>
                                </div>


                            </div>
                            <div class="box-footer">
                                <button type="reset" class="btn btn-default" onclick="document.location='?d=report/rRepair'">ຍົກເລີກ</button>
                                <button type="submit" class="btn btn-primary">ຄົ້ນຫາ</button>
                                <?php if ($_GET['strDate'] != '' && $_GET['endDate'] != '') { ?>
                                    <a href="report/ex_rRepair.php?strDate=<?= $_GET['strDate'] ?>&endDate=<?= $_GET['endDate'] ?>&cb_status=<?= $_GET['cb_status'] ?>" target="_blank">
                                        <input type="button" class="btn btn-success" value="Export To Excel" />
                                    </a>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="example1" class="table table-bordered beautified_report">
                                                        <thead class="table-info">
                                                            <tr>

                                                                <th class="text-center">ເລກທີໃບສະເໜີ</th>
                                                                <th class="text-center">ວັນທີເດືອນປີສະເໜີ</th>
                                                                <th class="text-center">ລາຍການສ້ອມແປງ</th>
                                                                <th class="text-center">ທະບຽນລົດ</th>
                                                                <th class="text-center">ທະບຽນອອກຊື່</th>
                                                                <th class="text-center">ຈຳນວນ</th>
                                                                <th class="text-center">ຫົວໜ່ວຍ</th>

                                                                <th class="text-center">ຈຳນວນເງິນລວມ</th>
                                                                <th class="text-center">ຊື່ຮ້ານ</th>
                                                                <th class="text-center">ທີ່ຢູ່</th>
                                                                <th class="text-center">ເບີໂທ</th>
                                                                <th class="text-center">ໂຊເຟີ້ລົດ</th>
                                                                <th class="text-center">ການຮັບປະກັນ</th>
                                                                <th class="text-center">ໝາຍເຫດ</th>
                                                                <th class="text-center">ສະຖານະ</th>





                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            if ($result = $mysqli->query($sql)) {
                                                                while ($row = $result->fetch_assoc()) {

                                                            ?>
                                                                    <tr>
                                                                        <td><?= $row['rp_id'] ?></td>
                                                                        <td><?= $row['date'] ?></td>
                                                                        <td><?= $row['list_repair'] ?></td>
                                                                        <td><?= $row['car_reg'] ?></td>
                                                                        <td><?= $row['company'] ?></td>
                                                                        <td><?= $row['qty'] ?></td>
                                                                        <td><?= $row['unit'] ?></td>
                                                                        <td><?= $row['total'] ?></td>
                                                                        <td><?= $row['store'] ?></td>
                                                                        <td><?= $row['address'] ?></td>
                                                                        <td><?= $row['tel'] ?></td>
                                                                        <td><?= $row['driver'] ?></td>
                                                                        <td><?= $row['guarantee'] ?></td>
                                                                        <td><?= $row['remark'] ?></td>
                                                                        <td align="center" style="color: #FF6F61;"><?= $row['status'] ?></td>
                                                                    </tr>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </form>

                    </div>



                </div>
            </div>
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>


<script language="javascript" type="text/javascript">




</script>