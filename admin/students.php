<?php include('header.php'); ?>
<?php include('session.php'); ?>

<body>
    <?php include('navbar.php'); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php include('student_sidebar.php'); ?>
            <div class="span3" id="adduser">
                <?php include('add_students.php'); ?>
            </div>
            <div class="span6" id="">
                <div class="row-fluid">
                    <!-- block -->
                    <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Student List</div>
                            <div>
                                <!-- EXPORT TO EXCEL-->
                                <form class="form-horizontal" action="export.php" method="post" name="upload_excel" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <div class="col-md-4 col-md-offset-4">
                                            <input type="submit" name="export" class="btn btn-success" value="export to excel" />
                                        </div>
                                    </div>
                                </form>
                                <!--  END OF EXPORT TO EXCEL-->
                            </div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12" id="studentTableDiv">
                                <?php include('student_table.php'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- /block -->
                </div>


            </div>
        </div>
        <?php include('footer.php'); ?>
    </div>
    <?php include('script.php'); ?>
</body>

</html>