<?php include 'layouts/header.php'; ?>
<?php include 'layouts/headerStyle.php'; ?>


style{

}


</header>


<body class="fixed-left">


    <!-- Begin page -->
    <div id="wrapper">

        <!-- left Nav Bar link -->
        <?php include 'layouts/navbar.php'; ?>

        <!-- Start right Content here -->
        <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <!-- Top Bar link -->
                <?php include 'layouts/topbar.php'; ?>

                <!-- ==================
                         PAGE CONTENT START
                         ================== -->

                <div class="page-content-wrapper">

                    <div class="container-fluid">

                        <div class="row">















                        </div>

                    </div><!-- container -->

                </div> <!-- Page content Wrapper -->

            </div> <!-- content -->

            <?php include 'layouts/footer.php'; ?>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->


    <?php include 'layouts/footerScript.php'; ?>

    <!-- Peity chart JS -->
    <script src="public/plugins/peity-chart/jquery.peity.min.js"></script>

    <!--C3 Chart-->
    <script src="public/plugins/d3/d3.min.js"></script>
    <script src="public/plugins/c3/c3.min.js"></script>

    <!-- KNOB JS -->
    <script src="public/plugins/jquery-knob/excanvas.js"></script>
    <script src="public/plugins/jquery-knob/jquery.knob.js"></script>

    <!-- Page specific js -->
    <script src="public/assets/pages/dashboard.js"></script>

    <!-- App js -->
    <script src="public/assets/js/app.js"></script>


    </body>

</html>