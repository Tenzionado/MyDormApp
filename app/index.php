<!DOCTYPE html>
<html>

<?php include("../components/head.php"); ?>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <?php include('../components/header.php'); ?>
        <!-- Full Width Column -->
        <div class="content-wrapper">
            <div class="container">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Home
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="box box-default">
                        <div class="box-body">
                            <div>
                                <p id="verse_qoutes"><strong>John 15:12-15 </strong> My command is this: Love each other as I have loved you. Greater love has no one than this: to lay down one's life for one's friends. You are my friends if you do what I command. I no longer call you servants, because a servant does not know his master's business. Instead, I have called you friends, for everything that I learned from my Father I have made known to you.</p>
                                <br>
                                <a href="#myModal" data-toggle="modal" class="btn btn-sm btn-info">Worship
                                    attendance</a>
                                <a href="./room_checking.php" class="btn btn-sm btn-info">Room Checking</a>
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

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Create Attendance</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Create Worship Attendance</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="w_attendance.php" class="btn btn-success" >Create</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
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

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        });
    });
    </script>
</body>

</html>