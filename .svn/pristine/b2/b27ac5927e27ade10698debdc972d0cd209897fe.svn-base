<?php
htmltage("Car Record System");
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>ໂອນຍ້າຍລົດ</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">ໜ້າຫຼັກ</a></li>
            <li class="breadcrumb-item active">ບັນທຶກ</li>
            <li class="breadcrumb-item active">ໂອນຍ້າຍລົດ</li>
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

            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-lg-Move">
              ໂອນຍ້າຍລົດ </button>
          </div>

          <!-- /.card-header -->
          <div class="modal fade" id="modal-lg-Move">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">ໂອນຍ້າຍລົດ</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="post" action="?d=record/movingCar" enctype="multipart/form-data">
                  <div class="modal-body">


                    <div class="row">
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>ເລືອກລົດ</label>
                          <select class="form-control" name="cb_car" id="cb_car" onchange="myFunction()">
                            <option value="0">---ເລືອກ---</option>
                            <?php
                            $car = "SELECT * FROM v_car $where";
                            if ($result = $mysqli->query($car)) {
                              while ($row = $result->fetch_assoc()) {
                            ?>

                                <option value="<?= $row['id'] ?>,<?= $row['bu_id'] ?>,<?= $row['name'] ?>"><?= $row['car_reg'] ?></option>


                            <?php }
                            } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>ຈາກພາກສ່ວນ</label>
                          <input type="text" readonly class="form-control" name="txtBu" id="showBu">
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>ໂອນຍ້າຍໄປພາກສ່ວນ</label>
                          <select class="form-control" name="cb_bu" required>
                            <option value="0">---ເລືອກ---</option>
                            <?php
                            $car = "SELECT * FROM tb_business ";
                            if ($result = $mysqli->query($car)) {
                              while ($row = $result->fetch_assoc()) {
                            ?>

                                <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>


                            <?php }
                            } ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>ແຕ່ວັນທີ</label>
                          <input type="date"  class="form-control" name="txtDateFrom" >
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>ເຖິງ</label>
                          <input type="date"  class="form-control" name="txtDateTo">
                        </div>
                      </div>
                     
                    </div>
                  </div>

                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ປິດ</button>
                    <button type="submit" name="btnMove" class="btn btn-primary">ບັນທືກ</button>
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

                        <th>ທະບຽນລົດ</th>
                        <th>ໂອນຍ້າຍຈາກ</th>
                        <th>ໄປຫາ</th>
                        <th>ແຕ່ວັນທີ</th>
                        <th>ເຖິງ</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php


                      if ($result = $mysqli->query($fetch)) {
                        while ($row = $result->fetch_assoc()) {

                      ?>
                          <tr>

                            <td>
                              <?= $row['car_reg'] ?>
                            </td>
                            <td>
                              <?= $row['fromBuName'] ?>
                            </td>
                            <td>
                              <?= $row['toBuName'] ?>
                            </td>
                            <td>
                              <?= $row['fromDate'] ?>
                            </td>
                            <td>
                              <?= $row['toDate'] ?>
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
<script>
  function myFunction() {
    var x = document.getElementById("cb_car").value;
    var exploded = x.split(",");
    var valueBU = exploded[2];
    document.getElementById("showBu").value = valueBU;

  }
</script>