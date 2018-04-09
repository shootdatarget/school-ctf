<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/ctf/application/views/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://localhost/ctf/application/views/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

   <div id="wrapper">
<!-- <div id="wrapper.toggled">-->
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Welcome <?php echo $this->session->userdata('user_name'); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('quest/load_quest/1'); ?>"   target="_blank">Q 1</a>
                </li>
                <li>
                    <a href="<?php echo base_url('quest/load_quest/2'); ?>">Q 2</a>
                </li>
                <li>
                    <a href="#">Q 3</a>
                </li>
                <li>
                    <a href="#">Q 4</a>
                </li>
                <li>
                    <a href="#">Q 5</a>
                </li>
                <li>
                    <a href="#">Q 6</a>
                </li>
                <li>
                    <a href="#">Q 7</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Simple Sidebar</h1>
                <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="http://localhost/ctf/application/views/jquery/jquery.min.js"></script>
    <script src="http://localhost/ctf/application/views/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
