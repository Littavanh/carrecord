<?php
htmltage("Car Record System");
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ລາຍງານການນຳໃຊ້ລົດ (ທະບຽນລົດ)</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ລາຍງານ</li>
                        <li class="breadcrumb-item active">ລາຍງານການນຳໃຊ້ລົດ (ທະບຽນລົດ)</li>
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
                            <input type="hidden" name="d" value="report/rRecordCarReg" />
                            <div class="row">

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>ເລືອກທະບຽນລົດ</label>

                                        <select class="form-control select2" name="car_reg" required="required">

                                            <?php
                                            $com = "select * from v_car $where";
                                            if ($result_com = $mysqli->query($com)) {
                                                while ($rowCOM = $result_com->fetch_row()) {
                                                    //  $selected = $rowCOM[0] == $row[1] ? "selected" : "gfefs";                
                                            ?>
                                                    <option value="<?= $rowCOM[1] ?>"><?= $rowCOM[1] ?> | <?= $rowCOM[2] ?></option>
                                            <?php }
                                            } ?>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>ປີ</label>
                                        <input type="number" min="1900" max="2099" step="1" name="year" class="form-control" autocomplete="off" value="2023" required="required">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>ເດືອນ</label>
                                        <input type="number" name="month" min="1" max="12" step="1" class="form-control" autocomplete="off" value="1" required="required">
                                    </div>
                                </div>



                            </div>
                            <div class="box-footer">
                                <button type="reset" class="btn btn-default" onclick="document.location='?d=report/rRecordCarReg'">ຍົກເລີກ</button>
                                <button type="submit" class="btn btn-primary">ຄົ້ນຫາ</button>
                                  <?php
                                                        $total = 0;
                                                        if ($resultc = $mysqli->query($byMonth)) {
                                                          while ($rowc = $resultc->fetch_assoc()) {
                                                    
                                                      $total = $rowc['total'];
                                                          }}
                                                      ?>
                                <?php if ($_GET['car_reg'] != '') { ?>
                                    <!-- <a href="report/ex_rRecordCarReg.php?car_reg=<?= $_GET['car_reg'] ?>" target="_blank">
                                        <input type="button" class="btn btn-success" value="Export To Excel" />
                                    </a> -->

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="example1" class="table table-bordered beautified_report">
                                                        <thead class="table-info">
                                                            <tr>
                                                                <th>ລ/ດ</th>
                                                                <th>ທະບຽນລົດ</th>
                                                                <!-- <th>ພາກສ່ວນ</th> -->
                                                                <th>ຈຳນວນ ກມ</th>
                                                                <th>%</th>
                                                                <th>ຈຳນວນເງິນ </th>


                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php

                                                            $i = 1;
                                                   $percent = 0;
                                                   $amount = 0;
                                                            if ($result = $mysqli->query($report)) {
                                                                while ($row = $result->fetch_assoc()) {
                                                            ?>
                                                                    <tr>
                                                                        <td><?= $i ?> </td>
                                                                        <td><?= $row['car_reg'] ?></td>
                                                                        <!-- <td><?= $row['nameDep'] ?></td> -->
                                                                        <td><?= number_format($row['km_use']) ?> km</td>
                                                                        <td><?= number_format($row['km_use'] /  $total,4)?> </td>
                                                                        <td><?= number_format(($row['km_use'] /  $total) * $row['amonth'])?> </td>
                                                                        


                                                                    </tr>
                                                            <?php $i++;
                                                            $percent = $percent + $row['km_use'] /  $total;
                                                            $amount = $amount + ($row['km_use'] /  $total) * $row['amonth'];
                                                                }
                                                                $result->close();
                                                            }
                                                            ?>




                                                        </tbody>
                                                     
                                                      <tr>
                                                          <td align="right" colspan="2"> ລວມ:</td>
                                                          <td> <?= $total ?> km</td>
                                                          <td > <?= $percent ?></td>
                                                          <td > <?= number_format($amount) ?> ກີບ</td>
                                                       
                                                      </tr>

                                                    
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- <div class="card-footer">
                                        ປະຈຳປີ: <?= $year ?>
                                        ເດືອນ: <?= $month ?>
                                       
                                    </div> -->
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>



                    </div>



                </div>
            </div>
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>