<?php
session_start();
require_once("../config.php");
require_once("m_rRepair.php");

$date = date('d-m-Y');
$output_filename = "CarRepair" . $date . ".xls";
// Redirect the output to the stream
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename={$output_filename}");



echo "<h4>ລາຍງານການສ້ອມແປງລົດ  ຕາມ " . $_GET['strDate'] . " ຫາ " . $_GET['endDate'] . " ຕາມສະຖານະ " . $_GET['cb_status'] . " </h4> ";
echo "<table border='1'> \n";
?>
<tr>

    <th class="text-center">ເລກທີໃບສະເໜີ</th>
    <th class="text-center">ວັນທີເດືອນປີສະເໜີ</th>
    <th class="text-center">ລາຍການສ້ອມແປງ</th>
    <th class="text-center">ທະບຽນລົດ</th>
    <th class="text-center">ທະບຽນອອກຊື່</th>
    <th class="text-center">ຈຳນວນ</th>
    <th class="text-center">ຫົວໜ່ວຍ</th>

    <th class="text-center">ຈຳນວນເງິນລວມ</th>
    <th class="text-center">ຊື່ຮ້ານ</th>
    <th class="text-center">ທີ່ຢູ່</th>
    <th class="text-center">ເບີໂທ</th>
    <th class="text-center">ໂຊເຟີ້ລົດ</th>
    <th class="text-center">ການຮັບປະກັນ</th>
    <th class="text-center">ໝາຍເຫດ</th>
    <th class="text-center">ສະຖານະ</th>




</tr>
<?php
if ($result = $mysqli->query($sql)) {
    while ($row = $result->fetch_assoc()) {

?>
        <tr>
            <td><?= $row['rp_id'] ?></td>
            <td><?= $row['date'] ?></td>
            <td><?= $row['list_repair'] ?></td>
            <td><?= $row['car_reg'] ?></td>
            <td><?= $row['company'] ?></td>
            <td><?= $row['qty'] ?></td>
            <td><?= $row['unit'] ?></td>
            <td><?= $row['total'] ?></td>
            <td><?= $row['store'] ?></td>
            <td><?= $row['address'] ?></td>
            <td><?= $row['tel'] ?></td>
            <td><?= $row['driver'] ?></td>
            <td><?= $row['guarantee'] ?></td>
            <td><?= $row['remark'] ?></td>
            <td align="center" style="color: #FF6F61;"><?= $row['status'] ?></td>
        </tr>
<?php
    }
}
?>
</table>