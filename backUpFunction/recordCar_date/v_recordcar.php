<?php
htmltage("Car Record System");
?>
<link type="text/css" rel="stylesheet" href="css/element.css" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/Action.js"></script>
<script type="text/javascript" src="js/calculate.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ບັນທຶກການນຳໃຊ້ລົດປະຈຳວັນ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item active">ບັນທຶກຂໍ້ມູນ</li>
                        <li class="breadcrumb-item active">ບັນທຶກການນຳໃຊ້ລົດປະຈຳວັນ</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <form method="post">
        <section class="content">

            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <label for="">ທະບຽນລົດ</label>
                                        <input type="hidden" name="txtses_id" class="form-control" readonly value="<?= $_SESSION['getCarId'] ?>">
                                        <input type="text" Name="text" class="form-control" readonly value="<?= $_SESSION['getCarReg'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">ລາຍລະອຽດ</label>
                                        <input type="text" Name="text" class="form-control" readonly value="<?= $_SESSION['getType'] ?> <?= $_SESSION['getBrand'] ?> <?= $_SESSION['getModel'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">ວັນທີນຳໃຊ້</label>
                                       
                                        <input type="date" id="dateUsed" name="dateUsed" class="form-control" value="" required>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">

            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card">
                        <!-- <div class="card-header">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg-New">
                            ເພີ່ມ
                    </div> -->
                        <!-- /.card-header -->
                        <!-- <div class="modal fade" id="modal-lg-New">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">ບັນທຶກການນຳໃຊ້ລົດປະຈຳວັນ</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="?d=record/recordcar" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>ທະບຽນລົດ</label>
                                                    <select class="form-control" name="cb_car_reg">
                                                        <option value="0">---ເລືອກ---</option>
                                                        <?php
                                                        $car_reg = "SELECT * FROM v_car";
                                                        if ($resultc = $mysqli->query($car_reg)) {
                                                            while ($rowc = $resultc->fetch_assoc()) {

                                                        ?>
                                                                <option value="<?= $rowc['id'] ?>"><?= $rowc['type'] ?> | <?= $rowc['car_reg'] ?></option>
                                                        <?php }
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>ໜ່ວຍງານ</label>
                                                    <select class="form-control" name="cb_unit">
                                                        <option value="0">---ເລືອກ---</option>
                                                        <?php
                                                        $unit = "SELECT * FROM v_unit";
                                                        if ($resultc = $mysqli->query($unit)) {
                                                            while ($rowc = $resultc->fetch_assoc()) {

                                                        ?>
                                                                <option value="<?= $rowc['id'] ?>"><?= $rowc['name'] ?> | <?= $rowc['unit'] ?></option>
                                                        <?php }
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>ພະນັກງານຂັບລົດ</label>
                                                    <select class="form-control" name="cb_driver">
                                                        <option value="0">---ເລືອກ---</option>
                                                        <?php
                                                        $driver = "SELECT * FROM tb_driver";
                                                        if ($resultc = $mysqli->query($driver)) {
                                                            while ($rowc = $resultc->fetch_assoc()) {

                                                        ?>
                                                                <option value="<?= $rowc['id'] ?>"> <?= $rowc['name'] ?> <?= $rowc['surname'] ?></option>
                                                        <?php }
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>ວັນທີນຳໃຊ້</label>
                                                    <input type="date" Name="txtDate" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>ເວລາເລີ່ມ</label>

                                                    <input type="time" Name="txtTimeStr" class="form-control" value="<?php echo date("H:i", strtotime('+7 hours')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>ເວລາສິ້ນສຸດ</label>
                                                    <input type="time" Name="txtTimeEnd" class="form-control" value="<?php echo date("H:i", strtotime('+7 hours')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>ກ.ມ ເລີ່ມ</label>
                                                    <input type="text" Name="txtMeterStr" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>ກ.ມ ສຸດທ້າຍ</label>
                                                    <input type="text" Name="txtMeterEnd" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>ໝາຍເຫດ</label>
                                                        <textarea name="txtRemark" rows="4" cols="50" maxlength="200"></textarea>
                                                    </div>
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

                    </div> -->
                        <!-- /.modal -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <div class="table-responsive">

                                        <table id="example1" class="table table-bordered table-hover beautified editable">
                                            <thead>
                                                <tr>
                                                    <!-- <th>no</th> -->
                                                    <th class="text-center">ທະບຽນລົດ</th>
                                                    <th>ວັນທີນຳໃຊ້</th>
                                                    <th>ເວລາເລີ່ມ</th>
                                                    <th>ເວລາສິ້ນສຸດ</th>

                                                    <th>ພະນັກງານຂັບລົດ</th>
                                                    <th>ໜ່ວຍງານ</th>
                                                    <th>ກ.ມ ເລີ່ມ</th>
                                                    <th>ກ.ມ ສິ້ນສຸດ</th>
                                                    <th>ໝາຍເຫດ</th>
                                                    <th>ລົບ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                if ($result = $mysqli->query($fetch)) {
                                                    while ($row = $result->fetch_assoc()) { ?>
                                                        <tr>
                                                            <!-- <td><?= $i ?></td> -->
                                                            <td class="eqcodecols">
                                                                <input type="hidden" name="type[]" class="type" value="unchanged" />
                                                                <input type="hidden" name="id[]" value="<?= $row['id'] ?>" />
                                                                <input class="text-center" type="text" readonly value="<?= $_SESSION['getCarReg'] ?>">
                                                                <!-- <select class="form-control" name="txtCar_reg[]">

                                                                    <?php
                                                                    $car_reg = "SELECT * FROM v_car";
                                                                    if ($resultc = $mysqli->query($car_reg)) {
                                                                        while ($rowc = $resultc->fetch_assoc()) {
                                                                            $selected = $rowc['id'] == $row['car_reg_id'] ? "selected" : "";
                                                                            // echo '<script>alert("'.$rowc['id'].'")</script>';
                                                                    ?>
                                                                            <option value="<?= $rowc['id'] ?>" <?= $selected ?>><?= $rowc['car_reg'] ?></option>
                                                                    <?php }
                                                                    } ?>
                                                                </select> -->


                                                            </td>
                                                            <td class="eqcodecols">


                                                                <input type="date" readonly name="txtDate[]" size="" value="<?= $row['date'] ?>" required />

                                                            </td>
                                                            <td class="eqcodecols">
                                                                <input type="time" readonly name="txtTime_start[]" size="" value="<?= $row['time_start'] ?>" required />
                                                            </td>
                                                            <td class="eqcodecols">
                                                                <input type="time" readonly name="txtTime_end[]" size="" value="<?= $row['time_end'] ?>" required />
                                                            </td>

                                                            <td class="eqcodecols">
                                                                <input type="text" readonly name="txtDriver[]" value="<?= $row['name'] ?> <?= $row['surname'] ?>">
                                                                <!-- <select class="form-control" name="txtDriver[]">

                                                                    <?php
                                                                    $driver = "SELECT * FROM v_driver";
                                                                    if ($resultc = $mysqli->query($driver)) {
                                                                        while ($rowc = $resultc->fetch_assoc()) {
                                                                            $selected = $rowc['id'] == $row['driver_id'] ? "selected" : "";
                                                                    ?>
                                                                            <option value="<?= $rowc['id'] ?>" <?= $selected ?>> <?= $rowc['name'] ?> <?= $rowc['surname'] ?></option>
                                                                    <?php }
                                                                    } ?>
                                                                </select> -->
                                                            </td>
                                                            <td class="eqcodecols">
                                                                <input type="text" readonly name="txtUnit[]" value="<?= $row['ub_name'] ?> ">
                                                                <!-- <select class="form-control" name="txtUnit[]">

                                                                    <?php
                                                                    $unit = "SELECT * FROM v_unit";
                                                                    if ($resultc = $mysqli->query($unit)) {
                                                                        while ($rowc = $resultc->fetch_assoc()) {
                                                                            $selected = $rowc['id'] == $row['unit_id'] ? "selected" : "";
                                                                    ?>
                                                                            <option value="<?= $rowc['id'] ?>" <?= $selected ?>><?= $rowc['name'] ?> | <?= $rowc['unit'] ?></option>
                                                                    <?php }
                                                                    } ?>
                                                                </select> -->
                                                            </td>
                                                            <td class="eqcodecols">
                                                                <input type="text" readonly name="txtMeter_start[]" size="" value="<?= $row['meter_start'] ?>" required />
                                                            </td>
                                                            <td class="eqcodecols">
                                                                <input type="text" readonly name="txtMeter_end[]" size="" value="<?= $row['meter_end'] ?>" required />
                                                            </td>
                                                            <td class="eqcodecols">
                                                                <input type="text" readonly name="txtRemark[]" size="" value="<?= $row['remark'] ?>" />
                                                            </td>
                                                            <td class="centered">
                                                                <a href="index.php?d=record/recordCar&getCarId=<?= $_SESSION['getCarId'] ?>&getCarReg=<?= $_SESSION['getCarReg'] ?>&getType=<?= $_SESSION['getType'] ?>&getBrand=<?= $_SESSION['getBrand'] ?>&getModel=<?= $_SESSION['getModel'] ?>&del=<?= $row['id'] ?>" onclick="return confirm('ທ່ານຕ້ອງການລຶບແທ້ບໍ...?')"><i class="far fa-trash-alt"></i></a>
                                                                <!-- <a href="?d=record/recordcar&del=<?= $row['id'] ?>" onclick="return confirm('ທ່ານຕ້ອງການລຶບແທ້ບໍ...?')"><i class="far fa-trash-alt"></i></a> -->
                                                            </td>

                                                        </tr>
                                                <?php $i++;
                                                    }
                                                } ?>
                                            </tbody>
                                        </table>

                                        <div class="box-footer mt-3 mb-3">
                                            <input type="button" id="adduser" class="btn btn-primary" value="  &#3776;&#3742;&#3765;&#3784;&#3745;  " />
                                            <input type="button" id="reset" class="btn btn-default" value="  &#3725;&#3771;&#3713;&#3776;&#3749;&#3765;&#3713;  " />
                                            <input type="submit" class="btn btn-success right" name="btnSaveNew" value="  &#3738;&#3761;&#3737;&#3735;&#3766;&#3713;  " id="right" onclick="return confirm('ທ່ານຕ້ອງການບັນທຶກແທ້ບໍ...?')" />
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- /.row -->

        </section>

    </form>
    <table class="template hidden" id="tab">
        <tr>

            <td colspan="2" class="eqcodecols">
                <input type="hidden" name="type[]" class="type" value="added" />
                <input class="text-center" type="text" readonly value="<?= $_SESSION['getCarReg'] ?>">
                <!-- <select class="form-control" name="txtCar_reg[]">

                    <?php
                    $car_reg = "SELECT * FROM v_car";
                    if ($resultc = $mysqli->query($car_reg)) {
                        while ($rowc = $resultc->fetch_assoc()) {
                            // echo '<script>alert("'.$rowc['id'].'")</script>';
                    ?>
                            <option value="<?= $rowc['id'] ?>"><?= $rowc['car_reg'] ?></option>
                    <?php }
                    } ?>
                </select> -->
            </td>
            <!-- <td class="eqcodecols">

                <input type="date" name="txtDate[]" id="dateUsedAdd" size="" value="" required />
            </td> -->
            <td class="eqcodecols">
                <input type="time" name="txtTime_start[]" size="" value="00:00" required />
            </td>
            <td class="eqcodecols">
                <input type="time" name="txtTime_end[]" size="" value="00:00" />
            </td>

            <td class="eqcodecols">
                <select class="form-control" name="txtDriver[]">

                    <?php
                    $driver = "SELECT * FROM v_driver $where";
                    if ($resultd = $mysqli->query($driver)) {
                        while ($rowd = $resultd->fetch_assoc()) {

                    ?>
                            <option value="<?= $rowd['id'] ?>"> <?= $rowd['name'] ?> <?= $rowd['surname'] ?></option>
                    <?php }
                    } ?>
                </select>
            </td>
            <td class="eqcodecols">
                <select class="form-control" name="txtUnit[]">

                    <?php
                    $unit = "SELECT * FROM v_unit $wherebu";
                    if ($resultc = $mysqli->query($unit)) {
                        while ($rowc = $resultc->fetch_assoc()) {

                    ?>
                            <option value="<?= $rowc['id'] ?>"><?= $rowc['name'] ?> | <?= $rowc['unit'] ?></option>
                    <?php }
                    } ?>
                </select>
            </td>
            <td class="eqcodecols"><input type="text" name="txtMeter_start[]" size="" value="" /></td>
            <td class="eqcodecols"><input type="text" name="txtMeter_end[]" size="" value="" /></td>
            <td class="eqcodecols"><input type="text" name="txtRemark[]" size="" value="" /></td>
            <td class="centered"><i class="fas fa-trash"></td>
        </tr>
    </table>
</div>
<!-- /.content -->