<?php
    session_start();
    include('../config/db_config.php');
    if(!$_SESSION['user_name']){
        header('location: ../login.php');
        exit();
    }

    $role = $_SESSION['user_role'];
    $department = $_SESSION['user_department'];

    if(isset($department)){
        $department_query = $conn->query("SELECT dormitory FROM dormitory where id=$department");

        $dorm = $department_query->fetch_assoc();

        $conn->close();
    }

?>
<!DOCTYPE html>
<html>

<?php include("../components/head.php"); ?>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
        <?php include('../components/header.php'); ?>
        <!-- Full Width Column -->
        <div class="content-wrapper">
            <div class="container">

                <!-- Main content -->
                <section class="content">

                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Worship Attendance</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    <div class="form-group">
                                        <h4 class="text-center">Enter Your ID number</h4>
                                        <input type="text" id="id_number" style="text-align:center;"
                                            class="form-control input-lg">
                                    </div>
                                    <!-- <a href="#" class="btn btn-info btn-block">Login</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                        </div>
                    </div>

                    <!-- data table -->
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Worship Attendees</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="responsive">
                                <table id="attendees_table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID Number</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Room No.</th>
                                            <th>Bed No.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- <tr>
                                            <td>2047584</td>
                                            <td>Rey Eduard </td>
                                            <td>Torres</td>
                                            <td> 10</td>
                                            <td>11</td>
                                        </tr> -->
                                    </tbody>
                                    <!-- <tfoot>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                </tfoot> -->
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </section>
                <!-- /.content -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="container">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.4.13
                </div>
                <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
                reserved.
            </div>
            <!-- /.container -->
        </footer>
    </div>
    <!-- ./wrapper -->
    <?php include("../components/script.php"); ?>


    <script>
    $(function() {
        $('#id_number').focus();

        $('#attendees_table').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
    </script>

</body>

</html>