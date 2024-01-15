<?php
session_start();
require_once("../config.php");
require_once("m_rRecordCar.php");

$date = date('d-m-Y');
$output_filename = "RecordCar" . $date . ".xls";
// Redirect the output to the stream
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename={$output_filename}");



echo "<h4>ລາຍງານການນຳໃຊ້ລົດ (ພະແນກ) ຕາມ ປີ" . $_GET['year'] . " ເດືອນ".$_GET['month']." </h4> ";
echo "<table border='1'> \n";
?>
<tr>
    <th>ລ/ດ</th>
    <th>ທະບຽນລົດ</th>
    <th>ໄລຍະທາງ</th>
    <th>ພາກສ່ວນ</th>

</tr>
<?php


$i = 1;
if ($result = $mysqli->query($report)) {
    while ($row = $result->fetch_assoc()) {
?>
        <tr>

            <td><?= $i ?> </td>
            <td><?= $row['car_reg'] ?></td>
            <td><?= $row['km_use'] ?> km</td>
            <td><?= $row['nameDep'] ?></td>

        </tr>
    <?php $i++;
    } ?>

<? $result->close();
} ?>

</table>