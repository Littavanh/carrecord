<?php

session_start();
$bu_id = $_SESSION['bu_id'];


$mn_dashboard = "";
$mn_Mmain = "";
$mn_Mmain1 = "";

$mn_Record = "";
$mn_Record1 = "";

$mn_user = "";
$mn_user1 = "";

$mn_Report = "";
$mn_Report1 = "";

$mn_car = "";
$mn_movingCar = "";
$mn_cartype = "";
$mn_driver = "";
$mn_department = "";
$mn_carbrand = "";

$mn_chooseCar = "";
$mn_recordcar = "";
$mn_budget = "";
$mn_fee = "";
$mn_invoice = "";
$mn_gas = "";
$mn_repair = "";

$mn_repairDone1 = "";

$mn_rRecordCar = "";
$mn_rRecordCarReg = "";
$mn_rRecordCarAll = "";
$mn_rRecordCarAll1 = "";
$mn_rRepair = "";

if ($_GET['d'] == 'index') {
  $mn_dashboard = "active";
} else if ($_GET['d'] == 'master/car') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_car = "active";
} else if ($_GET['d'] == 'record/movingCar') {
  $mn_Record = "menu-open";
  $mn_Record1 = "active";
  $mn_movingCar = "active";
} else if ($_GET['d'] == 'master/cartype') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_cartype = "active";
} else if ($_GET['d'] == 'master/carbrand') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_carbrand = "active";
} else if ($_GET['d'] == 'master/driver') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_driver = "active";
} else if ($_GET['d'] == 'master/department') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_department = "active";
} else if ($_GET['d'] == 'record/chooseCar') {
  $mn_Record = "menu-open";
  $mn_Record1 = "active";
  $mn_chooseCar = "active";
} else if ($_GET['d'] == 'record/recordcar') {
  $mn_Record = "menu-open";
  $mn_Record1 = "active";
  $mn_recordcar = "active";
} else if ($_GET['d'] == 'record/budget') {
  $mn_Record = "menu-open";
  $mn_Record1 = "active";
  $mn_budget = "active";
} else if ($_GET['d'] == 'record/invoiceCard') {
  $mn_Record = "menu-open";
  $mn_Record1 = "active";
  $mn_invoice = "active";
} else if ($_GET['d'] == 'record/feeCard') {
  $mn_Record = "menu-open";
  $mn_Record1 = "active";
  $mn_fee = "active";
} else if ($_GET['d'] == 'record/gasPrice') {
  $mn_Record = "menu-open";
  $mn_Record1 = "active";
  $mn_gas = "active";
} else if ($_GET['d'] == 'record/repair') {
  $mn_Record = "menu-open";
  $mn_Record1 = "active";
  $mn_repair = "active";
} else if ($_GET['d'] == 'repairDone/repair') {
  $mn_repairDone = "menu-open";

  $mn_repairDone1 = "active";
} else if ($_GET['d'] == 'user/user') {
  $mn_user = "menu-open";
  $mn_user1 = "active";
} else if ($_GET['d'] == 'report/rRecordCar') {
  $mn_Report = "menu-open";
  $mn_Report1 = "active";
  $mn_rRecordCar = "active";
} else if ($_GET['d'] == 'report/rRecordCarReg') {
  $mn_Report = "menu-open";
  $mn_Report1 = "active";
  $mn_rRecordCarReg = "active";
} else if ($_GET['d'] == 'report/rRecordCarAll') {
  $mn_Report = "menu-open";
  $mn_Report1 = "active";
  $mn_rRecordCarAll = "active";
} else if ($_GET['d'] == 'report/rRecordCarAll1') {
  $mn_Report = "menu-open";
  $mn_Report1 = "active";
  $mn_rRecordCarAll1 = "active";
} else if ($_GET['d'] == 'report/rRepair') {
  $mn_Report = "menu-open";
  $mn_Report1 = "active";
  $mn_rRepair = "active";
}
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link ml-2">

    <span class="brand-text font-weight-light">Car Record System</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <?php
        $imagePath = "dist/img/users/userImage.png";
        if (!file_exists($imagePath)) {
          $imagePath = "dist/img/users/userImage.png";
        }
        ?>
        <img src="<?= $imagePath ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="index.php?d=index" class="d-block"><?= $_SESSION['firstName'] ?> <?= $_SESSION['lastName'] ?></a>
      </div>
      
    </div>
   
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?d=index" class="nav-link <?= $mn_dashboard ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              ໜ້າຫຼັກ
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview <?= $mn_Mmain ?>">
          <a href="#" class="nav-link <?= $mn_Mmain1 ?>">
            <i class="nav-icon fas fa-info-circle"></i>
            <p>
              ຈັດການຂໍ້ມູນພຶ້ນຖານ
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?d=master/car" class="nav-link <?= $mn_car ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ພາຫະນະ</p>
              </a>
            </li>


            <li class="nav-item">
              <a href="index.php?d=master/cartype" class="nav-link <?= $mn_cartype ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ປະເພດພາຫະນະ</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?d=master/carbrand" class="nav-link <?= $mn_carbrand ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ຍີ່ຫໍ້ພາຫະນະ</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?d=master/driver" class="nav-link <?= $mn_driver ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ພະນັກງານຂັບລົດ</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?d=master/department" class="nav-link <?= $mn_department ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ພະແນກ</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview <?= $mn_Record ?>">
          <a href="#" class="nav-link <?= $mn_Record1 ?>">
            <i class="nav-icon fas fa-plus-square"></i>
            <p>
              ບັນທຶກຂໍ້ມູນ
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?d=record/chooseCar" class="nav-link <?= $mn_chooseCar ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ບັນທຶກການນຳໃຊ້ລົດ</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?d=record/budget" class="nav-link <?= $mn_budget ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ຄ່ານໍ້າມັນລົດປະຈໍາເດືອນ</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="index.php?d=record/invoiceCard" class="nav-link <?= $mn_invoice ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ໃບຮຽກເກັບເງິນ</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="index.php?d=record/feeCard" class="nav-link <?= $mn_fee ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ຄ່າບຳລຸງຮັກສາບັດ</p>
              </a>
            </li>
            <?php
            if ($bu_id == 0) {
            ?>
              <li class="nav-item">
                <a href="index.php?d=record/movingCar" class="nav-link <?= $mn_movingCar ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ໂອນຍ້າຍລົດ</p>
                </a>
              </li>
            <?php
            }
            ?>
            <!-- <li class="nav-item">
              <a href="index.php?d=record/gasPrice" class="nav-link <?= $mn_gas ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ຈຳນວນນໍ້າມັນໃຊ້</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="index.php?d=record/repair" class="nav-link <?= $mn_repair ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ສ້ອມແປງ ແລະ ບຳລຸງຮັກສາ</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview <?= $mn_repairDone ?>">
          <a href="index.php?d=repairDone/repair" class="nav-link <?= $mn_repairDone1 ?>">
            <i class="nav-icon fas fa-check-circle"></i>
            <p>
              ສຳເລັດການສ້ອມແປງ

            </p>
          </a>

        </li>
        <?php
            if ($bu_id == 0) {
            ?>
        <li class="nav-item has-treeview <?= $mn_user ?>">
          <a href="index.php?d=user/user" class="nav-link <?= $mn_user1 ?>">
            <i class="nav-icon 	fas fa-users-cog"></i>
            <p>
              ຜູ້ໃຊ້ລະບົບ

            </p>
          </a>
        </li>
        <?php
            }
            ?>
        <li class="nav-item has-treeview <?= $mn_Report ?>">
          <a href="#" class="nav-link <?= $mn_Report1 ?>">
            <i class="nav-icon fas fa-book"></i>
            <p>
              ລາຍງານ
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!-- <li class="nav-item">
              <a href="index.php?d=report/rRecordCar" class="nav-link <?= $mn_rRecordCar ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ການນຳໃຊ້ລົດ (ພະແນກ)</p>
              </a>
            </li> -->

            <li class="nav-item">
              <a href="index.php?d=report/rRecordCarAll" class="nav-link <?= $mn_rRecordCarAll ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ສັງລວມການນຳໃຊ້ລົດ</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?d=report/rRecordCarReg" class="nav-link <?= $mn_rRecordCarReg ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ການນຳໃຊ້ລົດ (ທະບຽນລົດ)</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="index.php?d=report/rRecordCarAll1" class="nav-link <?= $mn_rRecordCarAll1 ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ສັງລວມການນຳໃຊ້ລົດ1</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="index.php?d=report/rRepair" class="nav-link <?= $mn_rRepair ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ສັງລວມການສ້ອມແປງລົດ</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>

    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>