<?php
htmltage("Car Record System");
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ສຳເລັດການສ້ອມແປງ ແລະ ບຳລຸງຮັກສາ ພາຫະນະ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item active">ສຳເລັດການສ້ອມແປງ</li>
                        <li class="breadcrumb-item active">ສຳເລັດການສ້ອມແປງ ແລະ ບຳລຸງຮັກສາ ພາຫະນະ</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" style="background-color: #bee5eb;">
                        <form method="post">
                            <div class="row">

                                <div class="col-sm-2">
                                    <div class="form-group">


                                        <select class="form-control select2" name="cb_id">
                                            <option value="0">---ເລືອກເລກທີໃບສະເໜີ---</option>
                                            <?php
                                            $id = "SELECT * FROM tb_repair where status = 'in repair'";
                                            if ($resultc = $mysqli->query($id)) {
                                                while ($rowc = $resultc->fetch_assoc()) {
                                            ?>
                                                    <option value="<?= $rowc['rp_id'] ?>"><?= $rowc['rp_id'] ?></option>
                                            <?php }
                                            } ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <button type="submit" name="btnSearch" class="btn btn-primary">ຄົ້ນຫາ</button>
                                </div>



                            </div>
                        </form>
                    </div>


    </section>
    <!-- Main content -->



    <section class="content">

        <div class="row">
            <!-- left column -->

            <div class="col-md-12">
                <div class="card">

                    <!-- /.modal -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered beautified_report">
                                        <thead class="table-info">
                                            <tr>
                                                <!-- <th class="text-center"><input type="checkbox" onclick="toggle(this);" /></th> -->
                                                <th>ເລກທີໃບສະເໜີ</th>
                                                <th>ເລກທະບຽນລົດ</th>
                                                <th>ສີລົດ</th>
                                                <th>ເລກຈັກ</th>
                                                <th>ເລກຖັງ</th>
                                                <th>ລົງຊື່ບໍລິສັດ</th>
                                                <th>ຈຳນວນເງິນລວມ</th>

                                                <th class="text-center">ສະຖານະ</th>
                                                <th class="text-center">ລາຍລະອຽດ</th>





                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($result = $mysqli->query($sql)) {
                                                while ($row = $result->fetch_assoc()) {
                                                    $_SESSION['rp_id'] =   $row['rp_id'];
                                            ?>

                                                    <tr>
                                                        <!-- <td align="center"><input type="checkbox" /></td> -->
                                                        <td><?= $row['rp_id'] ?></td>
                                                        <td><?= $row['car_reg'] ?></td>
                                                        <td><?= $row['color'] ?></td>
                                                        <td><?= $row['machineNo'] ?></td>
                                                        <td><?= $row['machineNo1'] ?></td>
                                                        <td><?= $row['company'] ?></td>
                                                        <td><?= number_format($row['total']) ?></td>
                                                        <td align="center" style="color: #FF6F61;"><?= $row['status'] ?></td>
                                                        <td align="center"> <button class="btn btn-primary" name="btnHistory" data-toggle="modal" data-target="#myModal"><i class="fas fa-eye"></i></button></td>
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

                </div>

                <form method="post">
                    <div class="card-footer">
                        <button class="btn btn-success" type="submit" name="btnSubmit">ສຳເລັດ</button>
                    </div>
            </div>

        </div>
</div>
<!-- /.row -->
</form>
</section>
</div>
<!-- /.content -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <input type="text" hidden name="txtId" class="form-control" required="" value="<?= $_SESSION['rp_id'] ?>">

                <div class="table-responsive">
                    <table id="exampleModal" class="table table-bordered beautified_report">
                        <thead class="table-info">
                            <tr>

                                <th class="text-center">ເລກທີໃບສະເໜີ</th>
                                <th class="text-center">ວັນທີເດືອນປີສະເໜີ</th>
                                <th class="text-center">ລາຍການສ້ອມແປງ</th>

                                <th class="text-center">ຈຳນວນ</th>
                                <th class="text-center">ຫົວໜ່ວຍ</th>


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
                            $rp_id = $row['rp_id'];
                            $detail = "SELECT * FROM v_repair where status = 'in repair' AND rp_id = '" . $_SESSION['rp_id'] . "'";
                            if ($resultc = $mysqli->query($detail)) {
                                while ($rowc = $resultc->fetch_assoc()) {
                            ?>
                                    <tr>
                                        <td><?= $rowc['rp_id'] ?></td>
                                        <td><?= $rowc['date'] ?></td>
                                        <td><?= $rowc['list_repair'] ?></td>

                                        <td><?= $rowc['qty'] ?></td>
                                        <td><?= $rowc['unit'] ?></td>

                                        <td><?= $rowc['store'] ?></td>
                                        <td><?= $rowc['address'] ?></td>
                                        <td><?= $rowc['tel'] ?></td>
                                        <td><?= $rowc['driver'] ?></td>
                                        <td><?= $rowc['guarantee'] ?></td>
                                        <td><?= $rowc['remark'] ?></td>
                                        <td align="center" style="color: #FF6F61;"><?= $rowc['status'] ?></td>
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
</div>
<script>
    function toggle(source) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i] != source)
                checkboxes[i].checked = source.checked;
        }
    }
</script>