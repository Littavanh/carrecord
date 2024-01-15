<?php
htmltage("Car Record System");
?>
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>ຂໍ້ມູນ ພະແນກ</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">ໜ້າຫຼັກ</a></li>
                    <li class="breadcrumb-item active">ຈັດການຂໍ້ມູນ</li>
                    <li class="breadcrumb-item active">ຂໍ້ມູນ ພະແນກ</li>
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
                <!-- <div class="card-header">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg-New">
                        ເພີ່ມ
                </div> -->
                <!-- /.card-header -->
                <!-- <div class="modal fade" id="modal-lg-New">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">ເພີ່ມພະແນກໃຫມ່</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="?d=master/driver" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>ຊື່</label>
                                                <input type="text" Name="txtName" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>ນາມສະກຸນ</label>
                                                <input type="text" Name="txtSurname" class="form-control" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>ຊື່ຫຼິ້ນ</label>
                                                <input type="text" Name="txtNickname" class="form-control" required="">
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
                                <table id="example3" class="table table-bordered beautified_report">

                                    <thead  class="table-info">
                                        <tr>
                                            <th>ລະຫັດ</th>
                                            <th>ໜ່ວຍງານ</th>
                                          
                                            <!-- <th>ແກ້ໄຂ</th>
                                            <th>ລົບ</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $i = 1;
                                        $fetch = "select * from v_unit";
                                        if ($result = $mysqli->query($fetch)) {
                                            while ($row = $result->fetch_assoc()) {

                                                ?>
                                                <!-- <div class="modal fade" id="modal-lg-Edit<?= $i ?>">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">ແກ້ໄຂຂໍ້ມູນພະແນກ</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form method="post" action="?d=master/driver"
                                                                enctype="multipart/form-data">
                                                                <div class="modal-body">
                                                                    <input type="text" hidden name="txtId" class="form-control"
                                                                        required="" value="<?= $row['id'] ?>">
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label>ຊື່</label>
                                                                                <input type="text" Name="txtName"
                                                                                    class="form-control" required=""
                                                                                    value="<?= $row['name'] ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label>ນາມສະກຸນ</label>
                                                                                <input type="text" Name="txtSurname"
                                                                                    class="form-control" required=""
                                                                                    value="<?= $row['surname'] ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label>ຊື່ຫຼິ້ນ</label>
                                                                                <input type="text" Name="txtNickname"
                                                                                    class="form-control" required=""
                                                                                    value="<?= $row['nickname'] ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">ປິດ</button>
                                                                    <button type="submit" name="btSaveEdit"
                                                                        class="btn btn-primary">ບັນທືກ</button>
                                                                </div>

                                                            </form>
                                                        </div>

                                                    </div>

                                                </div> -->



                                                <tr>
                                                    <td>
                                                        <?= $row['id'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $row['name'] . ' | ' . $row['unit'] ?>
                                                    </td>
                                           

                                                    <!-- <td align="center"><a href="#"><i class="fas fa-edit" data-toggle="modal"
                                                                data-target="#modal-lg-Edit<?= $i ?>"></i></a></td>
                                                    <td align="center">
                                                        <a href="?d=master/driver&del=<?= $row['id'] ?>"
                                                            onclick="return confirm('ທ່ານຕ້ອງການລຶບແທ້ບໍ...?')"><i
                                                                class="far fa-trash-alt"></i></a>
                                                    </td> -->
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