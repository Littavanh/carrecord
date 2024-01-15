<?php
session_start();
require_once("../config.php");
require_once("m_rRecordCarReg.php");

$date = date('d-m-Y');
$output_filename = "RecordCarReg" . $date . ".xls";
// Redirect the output to the stream
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename={$output_filename}");



echo "<h4>ລາຍງານການນຳໃຊ້ລົດ (ທະບຽນລົດ) ຕາມ " . $_GET['car_reg'] . " </h4> ";
echo "<table border='1'> \n";
?>
<?php
$total = 0;
if ($resultc = $mysqli->query($byMonth)) {
    while ($rowc = $resultc->fetch_assoc()) {

        $total = $rowc['total'];
    }
}
?>
<tr>
    <th>ລ/ດ</th>
    <th>ທະບຽນລົດ</th>

    <th>ຈຳນວນ ກມ</th>
    <th>%</th>
    <th>ຈຳນວນເງິນ </th>

</tr>
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

            <td><?= number_format($row['km_use']) ?> km</td>
            <td><?= number_format($row['km_use'] /  $total, 4) ?> </td>
            <td><?= number_format(($row['km_use'] /  $total) * $row['amonth']) ?> </td>



        </tr>
<?php $i++;
        $percent = $percent + $row['km_use'] /  $total;
        $amount = $amount + ($row['km_use'] /  $total) * $row['amonth'];
    }
    $result->close();
}
?>
<tr>
    <td align="right" colspan="2"> ລວມ:</td>
    <td> <?= $total ?> km</td>
    <td> <?= $percent ?></td>
    <td> <?= number_format($amount) ?> ກີບ</td>

</tr>

</table>