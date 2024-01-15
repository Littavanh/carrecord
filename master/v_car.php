<?php
htmltage("Car Record System");
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>ຂໍ້ມູນ ພາຫະນະ</h1>
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
          <div class="card-header">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg-New">
              ເພີ່ມ </button>
          </div>

            <!-- /.card-header -->

            <div class="modal fade" id="modal-lg-New">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">ເພີ່ມພາຫະນະໃຫມ່</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form method="post" action="?d=master/car" enctype="multipart/form-data">
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>ທະບຽນລົດ</label>
                            <input type="text" Name="txtCarReg" class="form-control" required="">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>ປະເພດລົດ</label>
                            <select class="form-control" name="cb_typecar">
                              <option value="0">---ເລືອກ---</option>
                              <?php
                              $typecar = "SELECT * FROM tb_typecar";
                              if ($result = $mysqli->query($typecar)) {
                                while ($row = $result->fetch_row()) {
                              ?>
                                  <option value="<?= $row[0] ?>"><?= $row[1] ?></option>
                              <?php }
                              } ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>ລຸ້ນ</label>
                            <select class="form-control" name="cb_brandcar">
                              <option value="0">---ເລືອກ---</option>
                              <?php
                              $brand = "SELECT * FROM tb_brandcar";
                              if ($result = $mysqli->query($brand)) {
                                while ($row = $result->fetch_row()) {
                              ?>
                                  <option value="<?= $row[0] ?>"><?= $row[1] ?></option>
                              <?php }
                              } ?>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>model</label>
                            <input type="text" Name="txtModel" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>ສີ</label>
                            <input type="text" Name="txtColor" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>ເລກຈັກ</label>
                            <input type="text" Name="txtMachineNo" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>ເລກຖັງ</label>
                            <input type="text" Name="txtMachineNo1" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>BU</label>
                            <select class="form-control" name="cb_bu">
                              <option value="0">---ເລືອກ---</option>
                              <?php
                              $bu = "SELECT * FROM tb_business $wherebu";
                              if ($result = $mysqli->query($bu)) {
                                while ($row = $result->fetch_row()) {
                              ?>
                                  <option value="<?= $row[0] ?>"><?= $row[1] ?></option>
                              <?php }
                              } ?>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>ວົງເງິນຈຳກັດ</label>
                            <input type="number" Name="txtAmount_limit" class="form-control">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>ສະຖານະ</label>
                            <select class="form-control" name="cb_status">
                              <option value="0">---ເລືອກ---</option>
                              <?php
                              $status = "SELECT * FROM tb_status";
                              if ($result = $mysqli->query($status)) {
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
                          <th>ລະຫັດ</th>
                          <th>ທະບຽນລົດ</th>
                          <th>ປະເພດ</th>
                          <th>ຍີ່ຫໍ້</th>
                          <th>ລຸ້ນ</th>
                          <th>ວົງເງິນຈຳກັດ</th>
                          <th>ພາກສ່ວນ</th>
                          <th>ສີ</th>
                          <th>ເລກຈັກ</th>
                          <th>ເລກຖັງ</th>
                          <th>ໝາຍເຫດ</th>
                          <th>ເຄື່ອງມື</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php

                        $i = 1;
                        if ($result = $mysqli->query($fetch)) {
                          while ($row = $result->fetch_assoc()) {

                        ?>
                            <div class="modal fade" id="modal-lg-Edit<?= $i ?>">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title">ແກ້ໄຂຂໍ້ມູນພາຫະນະ</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <form method="post" action="?d=master/car" enctype="multipart/form-data">
                                    <div class="modal-body">
                                      <input type="text" hidden name="txtId" class="form-control" required="" value="<?= $row['id'] ?>">
                                      <div class="row">
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <label>ທະບຽນລົດ</label>
                                            <input type="text" name="txtCarReg" class="form-control" value="<?= $row['car_reg'] ?>">
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <label>ປະເພດລົດ</label>
                                            <select class="form-control" name="cb_typecar">
                                              <option value="0">---ເລືອກ---</option>
                                              <?php
                                              $typecar = "SELECT * FROM tb_typecar";
                                              if ($resultc = $mysqli->query($typecar)) {
                                                while ($rowc = $resultc->fetch_assoc()) {
                                                  $selected = $rowc['type'] == $row['type'] ? "selected" : "";
                                              ?>
                                                  <option value="<?= $rowc['id'] ?>" <?= $selected ?>><?= $rowc['type'] ?></option>
                                              <?php }
                                              } ?>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <label>ລຸ້ນ</label>
                                            <select class="form-control" name="cb_brandcar">
                                              <option value="0">---ເລືອກ---</option>
                                              <?php
                                              $brand = "SELECT * FROM tb_brandcar";
                                              if ($resulta = $mysqli->query($brand)) {
                                                while ($rowc = $resulta->fetch_assoc()) {
                                                  $selected = $rowc['brand'] == $row['brand'] ? "selected" : "";
                                              ?>
                                                  <option value="<?= $rowc['id'] ?>" <?= $selected ?>><?= $rowc['brand'] ?></option>
                                              <?php }
                                              } ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <label>ລຸ້ນ</label>
                                            <input type="text" name="txtModel" class="form-control" value="<?= $row['model'] ?>">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">

                                        <div class="col-sm-4">
                                          <div class="form-group">
                                            <label>ສີ</label>
                                            <input type="text" Name="txtColor" class="form-control" value="<?= $row['color'] ?>">
                                          </div>
                                        </div>
                                        <div class="col-sm-4">
                                          <div class="form-group">
                                            <label>ເລກຈັກ</label>
                                            <input type="text" Name="txtMachineNo" class="form-control" value="<?= $row['machine_no'] ?>">
                                          </div>
                                        </div>
                                        <div class="col-sm-4">
                                          <div class="form-group">
                                            <label>ເລກຖັງ</label>
                                            <input type="text" Name="txtMachineNo1" class="form-control" value="<?= $row['machine_no1'] ?>">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <label>BU</label>
                                            <select class="form-control" name="cb_bu">
                                              <option value="0">---ເລືອກ---</option>
                                              <?php
                                              $bus = "SELECT * FROM tb_business";
                                              if ($resultbu = $mysqli->query($bus)) {
                                                while ($rowac = $resultbu->fetch_assoc()) {
                                                  $selected = $rowac['name'] == $row['name'] ? "selected" : "";
                                              ?>
                                                  <option value="<?= $rowac['id'] ?>" <?= $selected ?>><?= $rowac['name'] ?></option>
                                              <?php }
                                              } ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <label>ວົງເງິນຈຳກັດ</label>
                                            <input type="number" Name="txtAmount_limit" class="form-control" value="<?= $row['amount_limit'] ?>">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <label>ສະຖານະ</label>
                                            <select class="form-control" name="cb_status">
                                              <option value="0">---ເລືອກ---</option>
                                              <?php
                                              $status = "SELECT * FROM tb_status";
                                              if ($resultz = $mysqli->query($status)) {
                                                while ($rowz = $resultz->fetch_assoc()) {
                                                  $selected = $rowz['status'] == $row['remark'] ? "selected" : "";
                                              ?>
                                                  <option value="<?= $rowz['id'] ?>" <?= $selected ?>><?= $rowz['status'] ?></option>
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
                                <?= $row['car_reg'] ?>
                              </td>
                              <td>
                                <?= $row['type'] ?>
                              </td>
                              <td>
                                <?= $row['brand'] ?>
                              </td>
                              <td>
                                <?= $row['model'] ?>
                              </td>
                              <td>
                                <?= $row['amount_limit'] ?>
                              </td>
                              <td>
                                <?= $row['name'] ?>
                              </td>
                              <td>
                                <?= $row['color'] ?>
                              </td>
                              <td>
                                <?= $row['machine_no'] ?>
                              </td>
                              <td>
                                <?= $row['machine_no1'] ?>
                              </td>

                              <td>
                                <?= $row['remark'] ?>
                              </td>
                              <td align="center">
                                <a href="#"><i class="fas fa-edit" data-toggle="modal" data-target="#modal-lg-Edit<?= $i ?>"></i></a>
                                <a href="?d=master/car&del=<?= $row['id'] ?>" onclick="return confirm('ທ່ານຕ້ອງການລຶບແທ້ບໍ...?')"><i class="far fa-trash-alt"></i></a>
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
    var x = document.getElementById("cb_car").value;
    var exploded = x.split(",");
    var valueBU = exploded[2];
    document.getElementById("showBu").value = valueBU;

  }
</script>