<?php
session_start();
if (isset($_SESSION['id'])){
include_once "../../url.php";
include_once "../../Model/attendance.php";

$obj = new attendance();
$all = $obj->atndMstrByTcr($_SESSION['id']);
include_once "../../Model/addteacher.php";
$tcr=new addteacher();
$allTeacher=$tcr->getAllById($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="en">

    <?php include_once "../template_layout/head.php" ?>

<body class="fix-header fix-sidebar">
<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>
<!-- Main wrapper  -->
<div id="main-wrapper">
    <!-- header header  -->
    <?php include_once "template_lay/header.php" ?>
    <!-- End header header -->
    <!-- Left Sidebar  -->
    <?php include_once "template_lay/sidebar.php" ?>
    <!-- End Left Sidebar  -->
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">All Attendance Sheet</h3></div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">All Attendance Sheet</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-title">
                            <h4>All Batch </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive m-t-40">
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Date</th>
                                        <th>Subject</th>
                                        <th>Session</th>
                                        <th>Batch</th>
                                        <th>Department</th>
                                        <th>Total Present</th>
                                        <th>Total Absent</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $serial = 0;
                                    foreach ($all as $singl) {
                                        $serial++ ?>
                                        <tr>
                                            <th scope="row"><?php echo $serial ?></th>
                                            <td><?php echo $singl->date ?></td>
                                            <td><?php echo $singl->subject_name ?></td>
                                            <td><?php echo $singl->session_name ?></td>
                                            <td><?php echo $singl->batch_name ?></td>
                                            <td><?php echo $singl->dpt_name ?></td>
                                            <td><?php echo $singl->total_attendence ?></td>
                                            <td><?php echo $singl->total_absence ?></td>

                                            <td>
                                                <a href="attendDetails.php?mstrID=<?php echo $singl->id?>"
                                                        class="btn btn-outline-primary btn-rounded"><i
                                                            style="font-size: large" class="fa fa-list-alt"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->
    <!-- footer -->
    <?php include_once "../template_layout/footer.php" ?>
    <!-- End footer -->
</div>
<!-- End Page wrapper  -->
<!-- End Wrapper -->
<?php include_once 'template_lay/script.php' ?>


</body>

</html>

    <?php
}else{
    header('Location:../../index.php');
}
    ?>