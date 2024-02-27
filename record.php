<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
    <?php
    include('./pages/headerlinks.php');
    ?>
</head>

<body>
    <div id="wrapper">
        <?php
        include('./pages/menu-bar.php');
        ?>
        <div id="page-wrapper">
            <table border="2px">
                <form action="">
                    <tr>
                        <td>Sr. No.</td>
                        <td>Employee name</td>
                        <td>city </td>
                        <td>salary</td>
                        <td>email</td>
                        <td>password</td>
                        <td>salary</td>
                        <td>attendnce</td>
                        <td>monthly slary</td>
                    </tr>
                    <?php
                    include('./pages/db.php');
                    $data = mysqli_query($con, "SELECT * FROM `registere_emp` ");
                    $row = mysqli_num_rows($data);
                    $count = 1;
                    while ($row = mysqli_fetch_array($data)) {

                    ?>
                        <tr>
                            <td><?php echo $count  ?></td>
                            <td><?php echo $row['name']  ?></td>
                            <td><?php echo $row['city']  ?></td>
                            <td><?php echo $row['salary']  ?></td>
                            <td><?php echo $row['email']  ?></td>
                            <td><?php echo $row['city']  ?></td>
                            <td><?php echo $row['password']  ?></td>
                            <td><?php echo $row['attendees']  ?></td>
                            <td><?php echo $row['msalary']  ?></td>
                            <td>
                                <a href="./pages/delete.php?did=<?php echo $row['id'] ?>">Delete</a>
                            </td>
                        </tr>

                    <?php
                        $count = $count + 1;
                    }

                    if (isset($_POST['id'])) {

                        $aid = $_POST['id'];
                        $attendance = $_POST['attendees'];
                        $msalary = $_POST['msalary'];
                        $query = mysqli_query($con, "UPDATE `registere_emp` SET `attendees`='$attendance ',`msalary`=' $msalary' WHERE `id`='$aid'");
                    }
                    ?>
            </table>
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <?php
    include('./pages/footerlinks.php');
    ?>
</body>

</html>