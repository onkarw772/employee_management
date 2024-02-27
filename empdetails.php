<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
    <?php
    include('./pages/headerlinks.php');
    ?>
    <script>
        function add() {





            // alert("payment.length");

            var salary = document.getElementsByClassName("salary");
            var days = document.getElementsByClassName("attendees");
            var payment = document.getElementsByClassName("msalary");
            // var id = document.getElementsByClassName("id");
            var id_array = [];
            for (var i = 0; i < (salary.length); i++) {
                payment[i].value = ((salary[i].value / 30) * days[i].value);
                // id_array[i] = id[i].value
            }

        }
    </script>
</head>

<body>
    <div id="wrapper">
        <?php
        include('./pages/menu-bar.php');
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <table border="2px">

                <tr class="b" style="text-align: center;">
                    <td>Sr. No.</td>
                    <td>Employee name</td>
                    <td>city </td>
                    <td>email</td>
                    <td>password</td>
                    <td>salary</td>
                    <td>attendnce</td>
                    <td>monthly slary</td>
                    <td>action</td>

                </tr>

                <?php
                include('./pages/db.php');
                $show = mysqli_query($con, "SELECT * FROM registere_emp");
                $count = 1;
                $row = mysqli_num_rows($show);
                while ($row = mysqli_fetch_array($show)) {


                ?>
                    <form action="record.php" method="post">
                        <tr class="b" style="text-align: center;">
                            <td><?php echo $count ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['city'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['password'] ?></td>
                            <td><input type="text" name="salary" Value="<?php echo $row['salary'] ?>" class="salary"></td>
                            <td><input type="text" name="attendees" class="attendees" onkeyup="add()"></td>
                            <td><input type="text" name="msalary" class="msalary"></td>
                            <td>
                                <button type="submit" name="id" value="<?php echo $row['id']  ?>">ADD</button><br>
                                <button><a href="./pages/update.php ?eid=<?php echo $row['id'] ?>">edit</a></button><br>
                                <button><a href="./pages/delete.php?ddid=<?php echo $row['id']; ?>">delete</a></button>
                            </td>

                        </tr>
                    </form>
                <?php
                    $count = $count + 1;
                }

                ?>

            </table>

        </div>

    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <?php
    include('./pages/footerlinks.php');
    ?>

</body>

</html>