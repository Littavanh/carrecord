<?php
htmltage("Car Record System");
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ຂໍ້ມູນ ຜູ້ໃຊ້ລະບົບ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">ໜ້າຫຼັກ</a></li>

                        <li class="breadcrumb-item active">ຂໍ້ມູນ ຜູ້ໃຊ້ລະບົບ</li>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg-New">
                            ເພີ່ມ ຜູ້ໃຊ້ລະບົບ</button>
                    </div>

                    <!-- /.card-header -->

                    <div class="modal fade" id="modal-lg-New">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">ເພີ່ມຜູ້ໃຊ້ລະບົບ</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="?d=user/user" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>ຊື່ຜູ້ໃຊ້</label>
                                                    <input type="text" Name="txtUsername" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>ຊື່</label>
                                                    <input type="text" Name="txtFirstname" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>ນາມສະກຸນ</label>
                                                    <input type="text" Name="txtLastname" class="form-control" required="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>ພາກສ່ວນ</label>
                                                    <select class="form-control" name="cb_bu">
                                                        <option value="0">---ເລືອກ---</option>
                                                        <?php
                                                        $bu = "SELECT * FROM tb_business";
                                                        if ($result = $mysqli->query($bu)) {
                                                            while ($row = $result->fetch_row()) {
                                                        ?>
                                                                <option value="<?= $row[0] ?>"><?= $row[1] ?></option>
                                                        <?php }
                                                        } ?>
                                                    </select>
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
                                    <table id="example5" class="table table-bordered beautified_report">

                                        <thead class="table-info">
                                            <tr>
                                                <th>ລ/ດ</th>
                                                <th>ຊື່ຜູ້ໃຊ້</th>
                                                <th>ຊື່ ແລະ ນາມສະກຸນ</th>
                                                <th>ພາກສ່ວນ</th>
                                                <th class="text-center">ເຄື່ອງມື</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $i = 1;
                                            if ($result = $mysqli->query($user)) {
                                                while ($row = $result->fetch_assoc()) {
                                                    if ($row['name'] != null) {


                                            ?>
                                                        <div class="modal fade" id="modal-lg-Edit<?= $i ?>">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">ແກ້ໄຂຂໍ້ມູນຜູ້ໃຊ້ລະບົບ</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form method="post" action="?d=user/user" enctype="multipart/form-data">
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label>ຊື່ຜູ້ໃຊ້</label>
                                                                                        <input type="text" Name="txtUsername" class="form-control" required="" value="<?=$row['username']?>">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label>ຊື່</label>
                                                                                        <input type="text" Name="txtFirstname" class="form-control" required="" value="<?=$row['firstName']?>">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label>ນາມສະກຸນ</label>
                                                                                        <input type="text" Name="txtLastname" class="form-control" required="" value="<?=$row['lastName']?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label>ພາກສ່ວນ</label>
                                                                                        <select class="form-control" name="cb_bu">
                                                                                            <option value="0">---ເລືອກ---</option>
                                                                                            <?php
                                                                                            $bu = "SELECT * FROM tb_business";
                                                                                            if ($resultbu = $mysqli->query($bu)) {
                                                                                                while ($rowbu = $resultbu->fetch_row()) {
                                                                                                    $selected = $rowbu[0] == $row['bu_id'] ? "selected" : "";
                                                                                            ?>
                                                                                                    <option value="<?= $rowbu[0] ?>" <?= $selected ?>><?= $rowbu[1] ?></option>
                                                                                            <?php }
                                                                                            } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                            </div>


                                                                        </div>
                                                                        <div class="modal-footer justify-content-between">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">ປິດ</button>
                                                                            <button type="submit" name="btSaveEdit" class="btn btn-primary">ບັນທືກ</button>
                                                                        </div>

                                                                    </form>
                                                                </div>

                                                            </div>

                                                        </div>



                                                        <tr>
                                                            <td>
                                                                <?= $i ?>
                                                            </td>
                                                            <td>
                                                                <?= $row['username'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $row['firstName'] ?> <?= $row['lastName'] ?>
                                                            </td>

                                                            <td>
                                                                <?= $row['name'] ?>
                                                            </td>

                                                            <td align="center">
                                                                <a href="?d=user/user&reset=<?= $row['user_id'] ?>&username=<?= $row['username'] ?>" onclick="return confirm('ທ່ານຕ້ອງການ Reset Password ແທ້ບໍ...?')"><i class="fas fa-edit">Reset Password</i></a>
                                                                <a href="?d=user/user&user_id=<?= $row['user_id'] ?>&empId=<?= $row['empId'] ?>" onclick="return confirm('ທ່ານຕ້ອງການລຶບແທ້ບໍ...?')"><i class="far fa-trash-alt"></i></a>
                                                            </td>



                                                        </tr>
                                            <?php
                                                        $i++;
                                                    }
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
        var x = document.getElementById("cb_car").value;
        var exploded = x.split(",");
        var valueBU = exploded[2];
        document.getElementById("showBu").value = valueBU;

    }
</script>