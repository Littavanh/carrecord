<?php
htmltage("Car Record System");
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ຄ່ານໍ້າມັນລົດປະຈໍາເດືອນ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item active">ບັນທຶກຂໍ້ມູນ</li>
                        <li class="breadcrumb-item active">ຄ່ານໍ້າມັນລົດປະຈໍາເດືອນ</li>
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
                                    <h4 class="modal-title">ຄ່ານໍ້າມັນລົດປະຈໍາເດືອນ</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="?d=record/budget" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-6">
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
                                            <div class="col-sm-6">
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
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>ທະບຽນລົດ</label>
                                                    <select class="form-control" name="cb_carReg" id="cb_carReg" onchange="myFunction()">
                                                        <option value="0">---ເລືອກ---</option>
                                                        <?php
                                                        $carReg = "SELECT * FROM v_car $where";
                                                        if ($resultc = $mysqli->query($carReg)) {
                                                            while ($rowc = $resultc->fetch_assoc()) {

                                                        ?>
                                                                <option value="<?= $rowc['id'] ?>,<?= $rowc['amount_limit'] ?>"> <?= $rowc['car_reg'] ?> <?= $rowc['surname'] ?></option>
                                                        <?php }
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>ວົງເງິນຈຳກັດ</label>
                                                    <input type="input" readonly Name="txtAmountLimit" class="form-control" id="txtAmountLimit">
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label>ມູນຄ່າ</label>
                                                    <input type="input" Name="txtAmount" class="form-control">
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
                                                <th>ທະບຽນລົດ</th>
                                                <th>ປະເພດ</th>
                                                <th>ມູນຄ່າ</th>
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
                                                        <td><?= $row['budget_year'] ?></td>
                                                        <td><?= $row['budget_month'] ?></td>
                                                        <td><?= $row['car_reg'] ?></td>
                                                        <td><?= $row['type'] ?></td>
                                                        <td><?= number_format($row['amount']) ?></td>

                                                        <td align="center">
                                                            <a href="?d=record/budget&del=<?= $row['id'] ?>" onclick="return confirm('ທ່ານຕ້ອງການລຶບແທ້ບໍ...?')"><i class="far fa-trash-alt"></i></a>
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
<script>
  function myFunction() {
    var x = document.getElementById("cb_carReg").value;
    var exploded = x.split(",");
    var valueAmountLimit = exploded[1];
    document.getElementById("txtAmountLimit").value = valueAmountLimit;

  }
</script>