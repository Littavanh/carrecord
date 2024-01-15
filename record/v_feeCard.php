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
                    <h1>ຄ່າບຳລຸງຮັກສາບັດໃນເດືອນ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item active">ບັນທຶກຂໍ້ມູນ</li>
                        <li class="breadcrumb-item active">ຄ່າບຳລຸງຮັກສາບັດໃນເດືອນ</li>
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
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg-New">
                            ເພີ່ມ
                    </div>
                    <!-- /.card-header -->
                    <div class="modal fade" id="modal-lg-New">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">ຄ່າບຳລຸງຮັກສາບັດໃນເດືອນ</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="?d=record/feeCard" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="row">
                                        <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>ເລກບັດ</label>
                                                    <input type="input" Name="txtCardNo" class="form-control">
                                                </div>
                                            </div>
                                           
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>ປີ</label>
                                                    <select class="form-control" id="year" name="year">
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                        <option value="2030">2030</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>ເດືອນ</label>
                                                    <select class="form-control" id="month" name="month">

                                                        <option value="01">ມັງກອນ</option>
                                                        <option value="02">ກຸມພາ</option>
                                                        <option value="03">ມີນາ</option>
                                                        <option value="04">ເດືອນເມສາ</option>
                                                        <option value="05">ພຶດສະພາ</option>
                                                        <option value="06">ມິຖຸນາ</option>
                                                        <option value="07">ເດືອນກໍລະກົດ</option>
                                                        <option value="08">ສິງຫາ</option>
                                                        <option value="09">ກັນຍາ</option>
                                                        <option value="10">ເດືອນຕຸລາ</option>
                                                        <option value="11">ພະຈິກ</option>
                                                        <option value="12">ທັນວາ</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>ພາກສ່ວນ</label>
                                                    <select class="form-control" name="cb_depart">
                                                        <option value="0">---ເລືອກ---</option>
                                                        <?php
                                                        $depart = "SELECT * FROM tb_business $where";
                                                        if ($resultc = $mysqli->query($depart)) {
                                                            while ($rowc = $resultc->fetch_assoc()) {

                                                        ?>
                                                                <option value="<?= $rowc['id'] ?>"> <?= $rowc['name'] ?></option>
                                                        <?php }
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                           
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>ມູນຄ່າ</label>
                                                    <input type="input" Name="txtAmount" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>ພາສີມູນຄ່າເພີ່ມ</label>
                                                    <input type="input" Name="txtTax" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>ຄ່າປັບໃໝ</label>
                                                    <input type="input" Name="txtAdjust" class="form-control">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">ປິດ</button>
                                        <button type="submit" name="btnSaveNew" class="btn btn-primary">ບັນທືກ</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                    <!-- /.modal -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered beautified_report">

                                        <thead class="table-info">
                                            <tr>
                                                <th>ລ/ດ</th>
                                                <th>ປີ</th>
                                                <th>ເດືອນ</th>
                                                <th>ເລກບັດ</th>
                                                <th>ພາກສ່ວນ</th>
                                                <th>ມູນຄ່າ</th>
                                                <th>ພາສີມູນຄ່າເພີ່ມ</th>
                                                <th>ຄ່າປັບໃໝ</th>
                                                <th>ລົບ</th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $i = 1;

                                            if ($result = $mysqli->query($fetch)) {
                                                while ($row = $result->fetch_assoc()) {

                                            ?>
                                                    <tr>
                                                        <td><?= $i ?></td>
                                                        <td><?= $row['year'] ?></td>
                                                        <td><?= $row['month'] ?></td>
                                                        <td><?= $row['card_no'] ?></td>
                                                        <td><?= $row['department'] ?></td>

                                                        <td><?= number_format($row['amount']) ?></td>
                                                        <td><?= number_format($row['tax']) ?></td>
                                                        <td><?= number_format($row['adjust']) ?></td>

                                                        <td align="center">
                                                            <a href="?d=record/feeCard&del=<?= $row['id'] ?>" onclick="return confirm('ທ່ານຕ້ອງການລຶບແທ້ບໍ...?')"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>

                                            <?php
                                                    $i++;
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