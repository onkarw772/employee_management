<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Binary admin</a>
    </div>
    <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
</nav>
<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="assets/img/find_user.png" class="user-image img-responsive" />
            </li>


            <li>
                <?php
                $currentUrl = $_SERVER['REQUEST_URI'];
                $path = parse_url($currentUrl, PHP_URL_PATH);

                // Get the last part of the path, which represents the page or resource name
                $parts = explode('/', $path);
                $last_part = end($parts);

                ?>
                <a class="<?= $last_part == 'index.php' ? "active-menu" : "" ?>" href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashbord </a>
            </li>
            <li>
                <a class="<?= $last_part == 'register.php' ? "active-menu" : "" ?>" href="register.php"><i class="fa fa-desktop fa-3x"></i> Register Here</a>
            </li>
            <li>
                <a class="<?= $last_part == 'empdetails.php' ? "active-menu" : "" ?>" href="empdetails.php"><i class="fa fa-qrcode fa-3x"></i> Employee Details</a>
            </li>
            <li>
                <a class="<?= $last_part == 'record.php' ? "active-menu" : "" ?>" href="record.php"><i class="fa fa-bar-chart-o fa-3x"></i> Record</a>
            </li>
            <li>
                <a href="table.php"><i class="fa fa-table fa-3x"></i> Table Examples</a>
            </li>
            <li>
                <a href="form.php"><i class="fa fa-edit fa-3x"></i> Forms </a>
            </li>


            <li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>

                        </ul>

                    </li>
                </ul>
            </li>
            <li>
                <a href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
            </li>
        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->


<body>
</body>

</html>