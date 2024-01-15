<?php
session_start();
require_once("../config.php");
require_once("m_rRecordCarAll.php");






?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <title>ລາຍງານການນຳໃຊ້ລົດ (ລວມ) ຕາມ ປີ<?= $_GET['year'] ?> ເດືອນ<?= $_GET['month'] ?></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="../css/print.css" media="print" />
    <link type="text/css" rel="stylesheet" href="../css/formatpage.css" />
    <script src="../js/Action.js" type="text/javascript"></script>
    <script>
        function loadedCloseWindows() {
            window.setTimeout(CloseMe, 100);
        }

        function CloseMe() {
            window.close();
        }
    </script>

    <style>
        body {
            font-family: 'Noto Sans Lao', sans-serif;
            margin: 0;
            padding: 0;

        }

        @media print {


            .my-table {
                width: 100%;
                height: 100%;
                border: solid;
                table-layout: fixed;
                font-family: 'Noto Sans Lao', sans-serif;
            }

            @page {
                size: landscape
            }
        }
    </style>

</head>

<body onload="printWindow(); loadedCloseWindows();">
    <div>
        <div id="headbox">

            <div align="center">
                <h1 style="align-items: center;">ລາຍງານການນຳໃຊ້ລົດ (ລວມ) ຕາມ ປີ<?= $_GET['year'] ?> ເດືອນ<?= $_GET['month'] ?></h1>
            </div>

        </div>

        <div align="center">
            <table border="1" class="my-table">
                <?php
                if ($_GET['cb_bu'] != 0) {
                ?>
                    <tr>
                        <th class="text-center">ລ/ດ</th>
                        <th>ທະບຽນລົດ</th>
                        <!-- <th>ປະເພດ</th> -->
                        <th class="text-center">ປີ</th>
                        <th class="text-center">ເດືອນ</th>
                        <?php

                        if ($resultd = $mysqli->query($depart)) {
                            while ($rowd = $resultd->fetch_assoc()) {
                        ?>
                                <th class="text-center"><?= $rowd['name'] ?></th>

                        <?php
                            }
                            $resultd->close();
                        }
                        ?>
                        <!-- <th class="text-center">ມູນຄ່າລວມ</th>
                                                                    <th class="text-center">ກມ ລວມ</th> -->

                    </tr>
                    <?php
                    $total = 0;

                    $totalAll = 0;
                    $totalKm = 0;

                    $totalBu1All = 0;

                    $i = 1;
                    if ($result = $mysqli->query($report)) {
                        while ($row = $result->fetch_assoc()) {


                            $totalBu1 = $row['kmUsage1'] / $row['totalKm'] * $row['amount'];



                            if ($row['kmUsage1'] != 0) {

                    ?>



                                <tr>
                                    <td align="center"><?= $i ?> </td>
                                    <td><?= $row['car_reg'] ?></td>
                                    <!-- <td><?= $row['type'] ?></td> -->
                                    <td align="center"><?= $row['yearRecord'] ?></td>
                                    <td align="center"><?= $row['monthRecord'] ?></td>
                                    <td align="center"><?= number_format($totalBu1) ?></td>

                                    <!-- <td align="center"><?= number_format($row['amount']) ?></td>
                                                                            <td align="center"> <?= number_format($row['totalKm']) ?></td> -->

                                </tr>

                        <?php

                                $i++;

                                $totalBu1All =  $totalBu1All + $totalBu1;

                                $totalAll = $totalAll + $row['amount'];
                                $totalKm = $totalKm + $row['totalKm'];
                            }
                        }
                        ?>

                    <?php
                        $result->close();
                    }
                    ?>



                    <?php
                    $totalNumMunOnly = 0;
                    if ($resultNumMunOnly = $mysqli->query($numMunOnly)) {
                        while ($rownumMunOnly = $resultNumMunOnly->fetch_assoc()) {
                            if ($rownumMunOnly['sumMeter'] == null) {


                    ?>
                                <tr>
                                    <td align="center"><?= $i ?> </td>
                                    <td><?= $rownumMunOnly['car_reg'] ?></td>
                                    <td align="center"><?= $rownumMunOnly['budget_year'] ?></td>

                                    <td align="center"><?= $rownumMunOnly['budget_month'] ?></td>


                                    <td align="center"><?= number_format($rownumMunOnly['amount']) ?></td>

                                </tr>

                    <?php
                                $i++;
                                $totalNumMunOnly = $totalNumMunOnly + $rownumMunOnly['amount'];
                            }
                        }
                    }
                    ?>

                    <tr class="table-success">
                        <td align="right" colspan="4"><b>ລວມ:</b></td>
                        <td align="center"><b><?= number_format($totalBu1All + $totalNumMunOnly) ?> ກີບ</b></td>

                        <!-- <td align="center"><b><?= number_format($totalAll) ?> ກີບ</b></td>
                                                                <td align="center"><b><?= number_format($totalKm) ?> ກມ</b></td> -->

                    </tr>


                    <tr class="table-info">
                        <td align="right" colspan="4"><b>ຄ່າບຳລຸງຮັກສາບັດ:</b></td>
                        <?php

                        if ($resultf = $mysqli->query($feeCard)) {
                            while ($rowf = $resultf->fetch_assoc()) {

                        ?>
                                <td align="center"><b><?= number_format($rowf['amount']) ?></b></td>

                        <?php
                                $feeCardTotalAmount =  $feeCardTotalAmount + $rowf['amount'];
                            }
                        }
                        ?>
                        <!-- <td align="center"><b><?= number_format($feeCardTotalAmount) ?></b></td>
                                                                <td></td> -->

                    </tr>

                    <tr class="table-info">
                        <td align="right" colspan="4"><b>ພາສີມູນຄ່າເພີ່ມຂອງບັດ:</b></td>
                        <?php

                        if ($resultf = $mysqli->query($feeCard)) {
                            while ($rowf = $resultf->fetch_assoc()) {

                        ?>
                                <td align="center"><b><?= number_format($rowf['tax']) ?></b></td>

                        <?php
                                $feeCardTotalTax =  $feeCardTotalTax + $rowf['tax'];
                            }
                        }
                        ?>
                        <!-- <td align="center"><b><?= number_format($feeCardTotalTax) ?></b></td>
                                                                <td></td> -->

                    </tr>
                    <tr class="table-info">
                        <td align="right" colspan="4"><b>ຄ່າປັບໃໝ:</b></td>
                        <?php

                        if ($resultf = $mysqli->query($feeCard)) {
                            while ($rowf = $resultf->fetch_assoc()) {

                        ?>
                                <td align="center"><b><?= number_format($rowf['adjust']) ?></b></td>

                        <?php
                                $feeCardTotalAdjust =  $feeCardTotalAdjust + $rowf['adjust'];
                            }
                        }
                        ?>
                        <!-- <td align="center"><b><?= number_format($feeCardTotalAdjust) ?></b></td>
                                                                <td></td> -->

                    </tr>
                    <?php


                    if ($resultf = $mysqli->query($feeCard)) {
                        while ($rowf = $resultf->fetch_assoc()) {
                            if ($rowf['name'] == 'ຫ້ອງການໃຫຍ່') {
                                $value1 = $rowf['total'];
                            }
                            if ($rowf['name'] == 'ສວນນ້ຳ') {
                                $value2 = $rowf['total'];
                            }
                            if ($rowf['name'] == 'ໄອເຕັກມໍລ') {
                                $value3 = $rowf['total'];
                            }
                            if ($rowf['name'] == 'ວາງສະແດງ') {
                                $value4 = $rowf['total'];
                            }
                            if ($rowf['name'] == 'ທົ່ງຂັນຄຳ') {
                                $value5 = $rowf['total'];
                            }
                            if ($rowf['name'] == 'ໄອເຕັກສະຫວັນ') {
                                $value6 = $rowf['total'];
                            }
                            if ($rowf['name'] == 'ເລກໄອເຕັກ') {
                                $value7 = $rowf['total'];
                            }
                            if ($rowf['name'] == 'ເຢສພລີດ') {
                                $value8 = $rowf['total'];
                            }
                            if ($rowf['name'] == 'TK Namsuang') {
                                $value9 = $rowf['total'];
                            }
                            if ($rowf['name'] == 'TPD') {
                                $value10 = $rowf['total'];
                            }
                        }
                    }


                    $allBu1 = $totalBu1All + $value1;

                    $totalAllAll = $allBu1 + $totalNumMunOnly;
                    ?>
                    <tr class="table-danger">
                        <td align="right" colspan="4"><b>ລວມທັງໝົດ:</b></td>
                        <td align="center"><b><?= number_format($totalAllAll)  ?> ກີບ</b></td>

                        <!-- <td align="center"><b><?= number_format($totalAllAll) ?> ກີບ</b></td>
                                                                <td align="center"><b><?= number_format($totalKm) ?> ກມ</b></td> -->

                    </tr>
                <?php
                } else {


                ?>
                    <tr>
                        <th class="text-center">ລ/ດ</th>
                        <th>ທະບຽນລົດ</th>
                        <!-- <th>ປະເພດ</th>
                        <th class="text-center">ປີ</th>
                        <th class="text-center">ເດືອນ</th> -->
                        <?php

                        if ($resultd = $mysqli->query($depart)) {
                            while ($rowd = $resultd->fetch_assoc()) {
                        ?>
                                <th class="text-center"><?= $rowd['name'] ?></th>

                        <?php
                            }
                            $resultd->close();
                        }
                        ?>
                        <th class="text-center">ມູນຄ່າລວມ</th>
                        <th class="text-center">ກມ ລວມ</th>

                    </tr>

                    <?php
                    $total = 0;

                    $totalAll = 0;
                    $totalKm = 0;
                    $totalLit = 0;
                    $totalKmPerLit = 0;

                    $totalBu1All = 0;
                    $totalBu2All = 0;
                    $totalBu3All = 0;
                    $totalBu4All = 0;
                    $totalBu5All = 0;
                    $totalBu6All = 0;
                    $totalBu7All = 0;
                    $totalBu8All = 0;
                    $totalBu9All = 0;
                    $i = 1;
                    if ($result = $mysqli->query($report)) {
                        while ($row = $result->fetch_assoc()) {
                            $total = $row['kmUsage1'] + $row['kmUsage2'] +
                                $row['kmUsage3'] + $row['kmUsage4'] +
                                $row['kmUsage5'] + $row['kmUsage6'] +
                                $row['kmUsage7'] + $row['kmUsage8'] +
                                $row['kmUsage9'] +  $row['kmUsage10'];

                            $totalBu1 = $row['kmUsage1'] / $total * $row['amount'];
                            $totalBu2 = $row['kmUsage2'] / $total * $row['amount'];
                            $totalBu3 = $row['kmUsage3'] / $total * $row['amount'];
                            $totalBu4 = $row['kmUsage4'] / $total * $row['amount'];
                            $totalBu5 = $row['kmUsage5'] / $total * $row['amount'];
                            $totalBu6 = $row['kmUsage6'] / $total * $row['amount'];
                            $totalBu7 = $row['kmUsage7'] / $total * $row['amount'];
                            $totalBu8 = $row['kmUsage8'] / $total * $row['amount'];
                            $totalBu9 = $row['kmUsage9'] / $total * $row['amount'];
                            $totalBu10 = $row['kmUsage10'] / $total * $row['amount'];
                            $totalAllBu = $totalBu1 + $totalBu2 + $totalBu3 + $totalBu4 +
                                $totalBu5 + $totalBu6 + $totalBu7 + $totalBu8 + $totalBu9 + $totalBu10;

                            if ($totalAllBu != 0) {



                    ?>



                                <tr>
                                    <td align="center"><?= $i ?> </td>
                                    <td><?= $row['car_reg'] ?></td>
                                    <!-- <td><?= $row['type'] ?></td>
                                    <td align="center"><?= $row['year'] ?></td>
                                    <td align="center"><?= $row['month'] ?></td> -->
                                    <td align="center"><?= number_format($totalBu1) ?></td>
                                    <td align="center"><?= number_format($totalBu2) ?></td>
                                    <td align="center"><?= number_format($totalBu3) ?></td>
                                    <td align="center"><?= number_format($totalBu4) ?></td>
                                    <td align="center"><?= number_format($totalBu5) ?></td>
                                    <!-- <td align="center"><?= number_format($totalBu6) ?></td> -->
                                    <td align="center"><?= number_format($totalBu7) ?></td>
                                    <td align="center"><?= number_format($totalBu8) ?></td>
                                    <td align="center"><?= number_format($totalBu9) ?></td>
                                    <td align="center"><?= number_format($totalBu10) ?></td>

                                    <td align="center"><?= number_format($totalAllBu) ?></td>
                                    <td align="center"> <?= number_format($total) ?></td>

                                </tr>

                        <?php

                                $i++;

                                $totalBu1All =  $totalBu1All + $totalBu1;
                                $totalBu2All =  $totalBu2All + $totalBu2;
                                $totalBu3All =  $totalBu3All + $totalBu3;
                                $totalBu4All =  $totalBu4All + $totalBu4;
                                $totalBu5All =  $totalBu5All + $totalBu5;
                                $totalBu6All =  $totalBu6All + $totalBu6;
                                $totalBu7All =  $totalBu7All + $totalBu7;
                                $totalBu8All =  $totalBu8All + $totalBu8;
                                $totalBu9All =  $totalBu9All + $totalBu9;
                                $totalBu10All =  $totalBu10All + $totalBu10;
                                $totalAll = $totalAll + $row['amount'];
                                $totalKm = $totalKm + $total;
                                $totalLit = $totalLit + $row['gas'];
                                $totalKmPerLit = $totalKmPerLit + $total / $row['gas'];
                            }
                        }
                        ?>

                    <?php
                        $result->close();
                    }
                    ?>





                    <?php
                    $totalNumMunOnly = 0;
                    if ($resultNumMunOnly = $mysqli->query($numMunOnly)) {
                        while ($rownumMunOnly = $resultNumMunOnly->fetch_assoc()) {
                            if ($rownumMunOnly['sumMeter'] == null) {


                    ?>
                                <tr>
                                    <td align="center"><?= $i ?> </td>
                                    <td><?= $rownumMunOnly['car_reg'] ?></td>
                                    <td><?= $rownumMunOnly['type'] ?></td>
                                    <td align="center"><?= $rownumMunOnly['budget_year'] ?></td>
                                    <td align="center"><?= $rownumMunOnly['budget_month'] ?></td>

                                    <td align="center" colspan="6"></td>
                                    <td align="center"><?= number_format($rownumMunOnly['amount']) ?></td>
                                    <td align="center"></td>
                                </tr>

                    <?php
                                $i++;
                                $totalNumMunOnly = $totalNumMunOnly + $rownumMunOnly['amount'];
                            }
                        }
                    }
                    ?>


                    <tr class="table-success">
                        <td align="right" colspan="2"><b>ລວມ:</b></td>
                        <td align="center"><b><?= number_format($totalBu1All) ?> </b></td>
                        <td align="center"><b><?= number_format($totalBu2All) ?> </b></td>
                        <td align="center"><b><?= number_format($totalBu3All) ?> </b></td>
                        <td align="center"><b><?= number_format($totalBu4All) ?> </b></td>
                        <td align="center"><b><?= number_format($totalBu5All) ?></b></td>
                        <!-- <td align="center"><b><?= number_format($totalBu6All) ?></b></td> -->
                        <td align="center"><b><?= number_format($totalBu7All) ?></b></td>
                        <td align="center"><b><?= number_format($totalBu8All) ?></b></td>
                        <td align="center"><b><?= number_format($totalBu9All) ?></b></td>
                        <td align="center"><b><?= number_format($totalBu10All) ?></b></td>
                        <td align="center"><b><?= number_format($totalAll + $totalNumMunOnly) ?> ກີບ</b></td>
                        <td align="center"><b><?= number_format($totalKm) ?> ກມ</b></td>

                    </tr>


                    <tr class="table-info">
                        <td align="right" colspan="2"><b>ຄ່າບຳລຸງຮັກສາບັດ:</b></td>
                        <?php

                        if ($resultf = $mysqli->query($feeCard)) {
                            while ($rowf = $resultf->fetch_assoc()) {

                        ?>
                                <td align="center"><b><?= number_format($rowf['amount']) ?></b></td>

                        <?php
                                $feeCardTotalAmount =  $feeCardTotalAmount + $rowf['amount'];
                            }
                        }
                        ?>
                        <td align="center"><b><?= number_format($feeCardTotalAmount) ?></b></td>
                        <td></td>

                    </tr>

                    <tr class="table-info">
                        <td align="right" colspan="2"><b>ພາສີມູນຄ່າເພີ່ມຂອງບັດ:</b></td>
                        <?php

                        if ($resultf = $mysqli->query($feeCard)) {
                            while ($rowf = $resultf->fetch_assoc()) {

                        ?>
                                <td align="center"><b><?= number_format($rowf['tax']) ?></b></td>

                        <?php
                                $feeCardTotalTax =  $feeCardTotalTax + $rowf['tax'];
                            }
                        }
                        ?>
                        <td align="center"><b><?= number_format($feeCardTotalTax) ?></b></td>
                        <td></td>

                    </tr>
                    <tr class="table-info">
                        <td align="right" colspan="2"><b>ຄ່າປັບໃໝ:</b></td>
                        <?php

                        if ($resultf = $mysqli->query($feeCard)) {
                            while ($rowf = $resultf->fetch_assoc()) {

                        ?>
                                <td align="center"><b><?= number_format($rowf['adjust']) ?></b></td>

                        <?php
                                $feeCardTotalAdjust =  $feeCardTotalAdjust + $rowf['adjust'];
                            }
                        }
                        ?>
                        <td align="center"><b><?= number_format($feeCardTotalAdjust) ?></b></td>
                        <td></td>

                    </tr>
                    <?php


                    if ($resultf = $mysqli->query($feeCard)) {
                        while ($rowf = $resultf->fetch_assoc()) {
                            if ($rowf['name'] == 'ຫ້ອງການໃຫຍ່') {
                                $value1 = $rowf['total'];
                            }
                            if ($rowf['name'] == 'ສວນນ້ຳ') {
                                $value2 = $rowf['total'];
                            }
                            if ($rowf['name'] == 'ໄອເຕັກມໍລ') {
                                $value3 = $rowf['total'];
                            }
                            if ($rowf['name'] == 'ວາງສະແດງ') {
                                $value4 = $rowf['total'];
                            }
                            if ($rowf['name'] == 'ທົ່ງຂັນຄຳ') {
                                $value5 = $rowf['total'];
                            }
                            if ($rowf['name'] == 'ໄອເຕັກສະຫວັນ') {
                                $value6 = $rowf['total'];
                            }
                            if ($rowf['name'] == 'ເລກໄອເຕັກ') {
                                $value7 = $rowf['total'];
                            }
                            if ($rowf['name'] == 'ເຢສພລີດ') {
                                $value8 = $rowf['total'];
                            }
                            if ($rowf['name'] == 'TK Namsuang') {
                                $value9 = $rowf['total'];
                            }
                            if ($rowf['name'] == 'TPD') {
                                $value10 = $rowf['total'];
                            }
                        }
                    }


                    $allBu1 = $totalBu1All + $value1;
                    $allBu2 = $totalBu2All + $value2;
                    $allBu3 = $totalBu3All + $value3;
                    $allBu4 = $totalBu4All + $value4;
                    $allBu5 = $totalBu5All + $value5;
                    $allBu6 = $totalBu6All + $value6;
                    $allBu7 = $totalBu7All + $value7;
                    $allBu8 = $totalBu8All + $value8;
                    $allBu9 = $totalBu9All + $value9;
                    $allBu10 = $totalBu10All + $value10;
                    $totalAllAll = $allBu1 + $allBu2  + $allBu3 + $allBu4 + $allBu5 + $allBu6 + $allBu7 + $allBu8 + $allBu9 + $allBu10 + $totalNumMunOnly;
                    ?>
                    <tr class="table-danger">
                        <td align="right" colspan="2"><b>ລວມທັງໝົດ:</b></td>
                        <td align="center"><b><?= number_format($allBu1)  ?> </b></td>
                        <td align="center"><b><?= number_format($allBu2) ?> </b></td>
                        <td align="center"><b><?= number_format($allBu3) ?> </b></td>
                        <td align="center"><b><?= number_format($allBu4) ?> </b></td>
                        <td align="center"><b><?= number_format($allBu5) ?></b></td>
                        <!-- <td align="center"><b><?= number_format($allBu6) ?></b></td> -->
                        <td align="center"><b><?= number_format($allBu7) ?></b></td>
                        <td align="center"><b><?= number_format($allBu8) ?></b></td>
                        <td align="center"><b><?= number_format($allBu9) ?></b></td>
                        <td align="center"><b><?= number_format($allBu10) ?></b></td>
                        <td align="center"><b><?= number_format($totalAllAll) ?> ກີບ</b></td>
                        <td align="center"><b><?= number_format($totalKm) ?> ກມ</b></td>

                    </tr>

                <?php } ?>
            </table>
        </div>


    </div>
</body>
<!-- <footer>
    <div class="row">
        <div class="col-sm-3">
            <label for="">ຜູ້ຈັດການ ພະແນກ ບໍລິຫານ</label>
        </div>
        <div class="col-sm-3">
            <label for="">ຜູ້ກວດກາ</label>
        </div>
        <div class="col-sm-3">
            <label for="">ຜູ້ສັງລວມ</label>
        </div>
  
    </div>
</footer> -->
<div> </div>
<footer class="main-footer">


    <label>&nbsp;&nbsp;ຜູ້ຈັດການ ພະແນກ ບໍລິຫານ</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label>ຜູ້ກວດກາ</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label>ຜູ້ສັງລວມ</label>


</footer>

</html>